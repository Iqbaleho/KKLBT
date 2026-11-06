/* ================================================================
   KONFIGURASI
   ================================================================ */
const MAPBOX_TOKEN = MAPBOX_ACCESS_TOKEN;
mapboxgl.accessToken = MAPBOX_TOKEN;
const KALSEL_BOUNDS = [[114.3, -4.3], [116.6, -1.3]];
const TOKEN_KEY = "MAPBOX_TOKEN";

const BASEMAPS = [
  { id: "streets",   label: "Jalan",   style: "mapbox://styles/mapbox/streets-v12",           dark: false, sw: "linear-gradient(135deg,#ece7d8,#9fc9e6)" },
  { id: "satellite", label: "Satelit", style: "mapbox://styles/mapbox/satellite-streets-v12", dark: true,  sw: "linear-gradient(135deg,#34502d,#1b3b52)" },
  { id: "outdoors",  label: "Alam",    style: "mapbox://styles/mapbox/outdoors-v12",          dark: false, sw: "linear-gradient(135deg,#d3e6b9,#9cc085)" },
  { id: "light",     label: "Terang",  style: "mapbox://styles/mapbox/light-v11",             dark: false, sw: "linear-gradient(135deg,#f6f6f6,#d6d6d6)" },
  { id: "dark",      label: "Gelap",   style: "mapbox://styles/mapbox/dark-v11",              dark: true,  sw: "linear-gradient(135deg,#2d3237,#111417)" }
];

const state = { basemap: "streets", points: true, lines: true, polygons: true, labels: true, terrain: false, exag: 1.5 };
const $ = (id) => document.getElementById(id);
const isMobile = () => window.innerWidth <= 768;
const hasHover = window.matchMedia("(hover: hover)").matches;

let map = null;
let popup = null;
window.GIS_DATA = { points: null, lines: null, polygons: null };

/* ---------------- Token ---------------- */
function readToken() {
  if (MAPBOX_TOKEN) return MAPBOX_TOKEN;
  try { return sessionStorage.getItem(TOKEN_KEY) || ""; } catch (e) { return ""; }
}
function saveToken(t) {
  try { sessionStorage.setItem(TOKEN_KEY, t); } catch (e) { /* abaikan */ }
}
function showGate(msg) {
  $("gate").classList.add("show");
  $("gateErr").textContent = msg || "";
  $("tokenInput").focus();
}
$("tokenBtn").addEventListener("click", submitToken);
$("tokenInput").addEventListener("keydown", (e) => { if (e.key === "Enter") submitToken(); });
function submitToken() {
  const t = $("tokenInput").value.trim();
  if (!t.startsWith("pk.")) {
    $("gateErr").textContent = "Token harus diawali \"pk.\" (token publik Mapbox).";
    return;
  }
  saveToken(t);
  $("gate").classList.remove("show");
  initMap(t);
}

/* ---------------- Peta ---------------- */
function fitPadding() {
  if (isMobile()) return { top: 90, bottom: 40, left: 20, right: 20 };
  return { top: 40, bottom: 40, left: Math.min(380, Math.round(window.innerWidth * 0.45)), right: 60 };
}

function initMap(token) {
  if (map) { map.remove(); map = null; }
  mapboxgl.accessToken = token;

  map = new mapboxgl.Map({
    container: "map",
    style: BASEMAPS.find(b => b.id === state.basemap).style,
    bounds: KALSEL_BOUNDS,
    fitBoundsOptions: { padding: fitPadding() },
    attributionControl: true,
    hash: false,
    locale: { "NavigationControl.ResetBearing": "Utara di atas", "NavigationControl.ZoomIn": "Perbesar", "NavigationControl.ZoomOut": "Perkecil" }
  });

  const ctrlPos = isMobile() ? "bottom-right" : "top-right";
  map.addControl(new mapboxgl.NavigationControl({ visualizePitch: true }), ctrlPos);
  map.addControl(new mapboxgl.GeolocateControl({
    positionOptions: { enableHighAccuracy: true }, trackUserLocation: true, showUserHeading: true
  }), ctrlPos);
  map.addControl(new mapboxgl.FullscreenControl(), ctrlPos);
  map.addControl(new mapboxgl.ScaleControl({ unit: "metric" }), "bottom-left");

  // PENTING: Panggil loadGeoJsonData() di sini saat style peta selesai dimuat
  map.on("style.load", () => {
    loadGeoJsonData();
    applyTerrain();
  });

  map.on("error", (e) => {
    const status = e && e.error && e.error.status;
    if (status === 401 || status === 403) {
      sessionStorage.removeItem(TOKEN_KEY);
      showGate("Token ditolak (401/403). Periksa token dan pembatasan URL-nya.");
    }
  });

  // Event Klik untuk Popup dari semua layer kustom
  map.on("click", (e) => {
    const layersToCheck = ["layer-point-circle", "layer-line", "layer-polygon-fill"];
    const features = map.queryRenderedFeatures(e.point, { layers: layersToCheck });

    if (features.length > 0) {
      const f = features[0];
      let coordinates = e.lngLat;
      if (f.geometry.type === "Point") {
        coordinates = f.geometry.coordinates;
      }
      openPopup(f.properties, coordinates);
    }
  });

  map.on("mousemove", (e) => {
    const layersToCheck = ["layer-point-circle", "layer-line", "layer-polygon-fill"];
    const over = map.queryRenderedFeatures(e.point, { layers: layersToCheck }).length > 0;
    map.getCanvas().style.cursor = over ? "pointer" : "";
    if (hasHover) renderCoord("Kursor", e.lngLat);
  });

  map.on("move", () => {
    if (!hasHover) renderCoord("Pusat peta", map.getCenter());
    const p = Math.round(map.getPitch());
    if (+$("rgPitch").value !== p) { $("rgPitch").value = p; $("outPitch").textContent = p + "°"; }
  });
}

function renderCoord(label, ll) {
  $("coord").textContent = label + ": " + ll.lat.toFixed(5) + ", " + ll.lng.toFixed(5) + "  |  zoom " + map.getZoom().toFixed(1);
}

function isDarkStyle() {
  return BASEMAPS.find(b => b.id === state.basemap).dark;
}

/* ---------------- Load GeoJSON dari Public Laravel ---------------- */
async function loadGeoJsonData() {
  try {
    // Karena ini file .js murni, gunakan path relatif langsung ke folder public Laravel
    const [resPoints, resLines, resPolygons] = await Promise.all([
      fetch('/GeoJSON/titik/Topo.geojson'),
      fetch('/GeoJSON/line/Jalan.geojson'),
      fetch('/GeoJSON/shp/Admin.geojson')
    ]);

    if (!resPoints.ok || !resLines.ok || !resPolygons.ok) {
      throw new Error("Gagal mengambil salah satu file GeoJSON. Periksa kembali huruf besar/kecil pada folder/nama file.");
    }

    window.GIS_DATA.points = await resPoints.json();
    window.GIS_DATA.lines = await resLines.json();
    window.GIS_DATA.polygons = await resPolygons.json();

    // Pasang ke peta setelah data berhasil diambil
    addGeoJsonLayers();
    renderResults("");
  } catch (error) {
    console.error("Kesalahan memuat GeoJSON:", error);
  }
}

/* ---------------- Menambahkan Source & Layer ke Peta ---------------- */
function addGeoJsonLayers() {
  if (!map) return;

  // 1. Polygon (Admin)
  if (window.GIS_DATA.polygons && !map.getSource("source-polygon")) {
    map.addSource("source-polygon", { type: "geojson", data: window.GIS_DATA.polygons });

    map.addLayer({
      id: "layer-polygon-fill",
      type: "fill",
      source: "source-polygon",
      layout: { visibility: state.polygons ? "visible" : "none" },
      paint: { "fill-color": "#3b82f6", "fill-opacity": 0.3 }
    });

    map.addLayer({
      id: "layer-polygon-stroke",
      type: "line",
      source: "source-polygon",
      layout: { visibility: state.polygons ? "visible" : "none" },
      paint: { "line-color": "#1e40af", "line-width": 1.5 }
    });
  }

  // 2. Line (Jalan)
  if (window.GIS_DATA.lines && !map.getSource("source-line")) {
    map.addSource("source-line", { type: "geojson", data: window.GIS_DATA.lines });

    map.addLayer({
      id: "layer-line",
      type: "line",
      source: "source-line",
      layout: { visibility: state.lines ? "visible" : "none" },
      paint: { "line-color": "#10b981", "line-width": 3 }
    });
  }

  // 3. Point (Topo)
  if (window.GIS_DATA.points && !map.getSource("source-point")) {
    map.addSource("source-point", { type: "geojson", data: window.GIS_DATA.points });

    map.addLayer({
      id: "layer-point-circle",
      type: "circle",
      source: "source-point",
      layout: { visibility: state.points ? "visible" : "none" },
      paint: {
        "circle-radius": ["interpolate", ["linear"], ["zoom"], 6, 5, 12, 10],
        "circle-color": "#f59e0b",
        "circle-stroke-width": 2,
        "circle-stroke-color": "#ffffff"
      }
    });
  }
}

function applyTerrain() {
  if (!map.getSource("mapbox-dem")) {
    map.addSource("mapbox-dem", {
      type: "raster-dem", url: "mapbox://mapbox.mapbox-terrain-dem-v1", tileSize: 512, maxzoom: 14
    });
  }
  map.setTerrain(state.terrain ? { source: "mapbox-dem", exaggeration: state.exag } : null);
}

/* ---------------- Popup ---------------- */
function popupContent(p, coords) {
  const [lng, lat] = coords;
  const el = document.createElement("div");
  el.className = "pop";

  const tag = document.createElement("span");
  tag.className = "tag kota";
  tag.textContent = "Informasi Objek";

  const h = document.createElement("h3");
  h.textContent = p.name || p.nama || "Detail Lokasi";

  const dl = document.createElement("dl");
  // Menampilkan seluruh properti yang ada di dalam GeoJSON secara dinamis
  for (const key in p) {
    if (Object.prototype.hasOwnProperty.call(p, key)) {
      const dt = document.createElement("dt"); dt.textContent = key;
      const dd = document.createElement("dd"); dd.textContent = p[key];
      dl.append(dt, dd);
    }
  }

  const dtLat = document.createElement("dt"); dtLat.textContent = "Lintang";
  const ddLat = document.createElement("dd"); ddLat.textContent = lat.toFixed(4);
  const dtLng = document.createElement("dt"); dtLng.textContent = "Bujur";
  const ddLng = document.createElement("dd"); ddLng.textContent = lng.toFixed(4);
  dl.append(dtLat, ddLat, dtLng, ddLng);

  const actions = document.createElement("div");
  actions.className = "pop-actions";
  const zoomBtn = document.createElement("button");
  zoomBtn.className = "btn primary"; zoomBtn.type = "button"; zoomBtn.textContent = "Zoom ke sini";
  zoomBtn.addEventListener("click", () => {
    map.flyTo({ center: coords, zoom: 13, pitch: state.terrain ? 60 : map.getPitch(), essential: true });
  });
  actions.append(zoomBtn);

  el.append(tag, h, dl, actions);
  return el;
}

function openPopup(props, coords) {
  if (popup) popup.remove();
  popup = new mapboxgl.Popup({ offset: 14, maxWidth: "280px", closeButton: true })
    .setLngLat(coords)
    .setDOMContent(popupContent(props, coords))
    .addTo(map);
}

/* ---------------- Panel Kontrol ---------------- */
const bmWrap = $("basemaps");
BASEMAPS.forEach(b => {
  const btn = document.createElement("button");
  btn.type = "button"; btn.className = "bm"; btn.dataset.id = b.id;
  btn.setAttribute("aria-pressed", b.id === state.basemap ? "true" : "false");
  btn.innerHTML = '<span class="sw" style="background:' + b.sw + '"></span><span>' + b.label + "</span>";
  btn.addEventListener("click", () => setBasemap(b.id));
  bmWrap.appendChild(btn);
});

function setBasemap(id) {
  if (id === state.basemap || !map) return;
  state.basemap = id;
  bmWrap.querySelectorAll(".bm").forEach(b => b.setAttribute("aria-pressed", b.dataset.id === id ? "true" : "false"));
  map.setStyle(BASEMAPS.find(b => b.id === id).style);
}

// Pengontrol Layer Visibility (Checkbox)
function toggleLayerVisibility(layerId, visible) {
  if (map && map.getLayer(layerId)) {
    map.setLayoutProperty(layerId, "visibility", visible ? "visible" : "none");
  }
}

if ($("tgPoints")) {
  $("tgPoints").addEventListener("change", (e) => {
    state.points = e.target.checked;
    toggleLayerVisibility("layer-point-circle", state.points);
    if (!state.points && popup) popup.remove();
  });
}

if ($("tgLines")) {
  $("tgLines").addEventListener("change", (e) => {
    state.lines = e.target.checked;
    toggleLayerVisibility("layer-line", state.lines);
  });
}

if ($("tgPolygons")) {
  $("tgPolygons").addEventListener("change", (e) => {
    state.polygons = e.target.checked;
    toggleLayerVisibility("layer-polygon-fill", state.polygons);
    toggleLayerVisibility("layer-polygon-stroke", state.polygons);
  });
}

// Pencarian Berdasarkan Data GeoJSON Titik / Admin
const resultsEl = $("results");
function renderResults(q) {
  if (!resultsEl) return;
  resultsEl.innerHTML = "";

  // Gabungkan fitur dari point & polygon untuk pencarian sederhana jika ada
  let allFeatures = [];
  if (window.GIS_DATA.points && window.GIS_DATA.points.features) {
    allFeatures = allFeatures.concat(window.GIS_DATA.points.features);
  }
  if (window.GIS_DATA.polygons && window.GIS_DATA.polygons.features) {
    allFeatures = allFeatures.concat(window.GIS_DATA.polygons.features);
  }

  const term = (q || "").trim().toLowerCase();
  const hits = allFeatures.filter(f => {
    const p = f.properties || {};
    const nameVal = p.name || p.nama || "";
    return !term || nameVal.toLowerCase().includes(term);
  });

  if (!hits.length) {
    const li = document.createElement("li");
    li.className = "empty"; li.textContent = "Tidak ada lokasi ditemukan.";
    resultsEl.appendChild(li);
    return;
  }

  hits.slice(0, 20).forEach(f => {
    const li = document.createElement("li");
    const b = document.createElement("button");
    b.type = "button";
    const prop = f.properties || {};
    const titleName = prop.name || prop.nama || "Objek Tanpa Nama";

    const a = document.createElement("span"); a.textContent = titleName;
    b.append(a);
    b.addEventListener("click", () => {
      flyToFeature(f);
      if (isMobile()) setCollapsed(true);
    });
    li.appendChild(b);
    resultsEl.appendChild(li);
  });
}

function flyToFeature(f) {
  if (!map) return;
  let coords = [114.59, -3.31]; // Default Kalsel
  if (f.geometry.type === "Point") {
    coords = f.geometry.coordinates;
  } else if (f.geometry.type === "Polygon" && f.geometry.coordinates[0][0]) {
    coords = f.geometry.coordinates[0][0]; // Ambil titik pertama polygon
  }
  map.flyTo({ center: coords, zoom: 12, pitch: state.terrain ? 60 : map.getPitch(), essential: true });
  map.once("moveend", () => openPopup(f.properties, coords));
}

if ($("q")) {
  $("q").addEventListener("input", (e) => renderResults(e.target.value));
}

$("btnReset").addEventListener("click", () => {
  if (!map) return;
  if (popup) popup.remove();
  map.fitBounds(KALSEL_BOUNDS, { padding: fitPadding(), pitch: 0, bearing: 0, duration: 1200 });
});

$("btnNorth").addEventListener("click", () => { if (map) map.easeTo({ bearing: 0, duration: 600 }); });

// Pengaturan 3D Terrain
if ($("tgTerrain")) {
  $("tgTerrain").addEventListener("change", (e) => {
    state.terrain = e.target.checked;
    if (!map) return;
    applyTerrain();
    map.easeTo({ pitch: state.terrain ? 60 : 0, duration: 800 });
  });
}

if ($("rgExag")) {
  $("rgExag").addEventListener("input", (e) => {
    state.exag = +e.target.value;
    if ($("outExag")) $("outExag").textContent = state.exag.toFixed(1).replace(".", ",") + "×";
    if (map && state.terrain) map.setTerrain({ source: "mapbox-dem", exaggeration: state.exag });
  });
}

if ($("rgPitch")) {
  $("rgPitch").addEventListener("input", (e) => {
    const v = +e.target.value;
    if ($("outPitch")) $("outPitch").textContent = v + "°";
    if (map) map.setPitch(v);
  });
}

// Panel Kontrol Ciutkan
const panel = $("panel");
function setCollapsed(c) {
  if (!panel) return;
  panel.classList.toggle("collapsed", c);
  if ($("collapseBtn")) {
    $("collapseBtn").setAttribute("aria-expanded", String(!c));
    $("collapseBtn").setAttribute("aria-label", c ? "Buka panel" : "Ciutkan panel");
  }
}
if ($("panelHead")) {
  $("panelHead").addEventListener("click", () => setCollapsed(!panel.classList.contains("collapsed")));
}
if (isMobile() && panel) setCollapsed(true);

/* ---------------- Mulai Eksekusi ---------------- */
const startToken = readToken();
if (startToken) initMap(startToken);
else showGate();
