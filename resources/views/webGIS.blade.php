<!DOCTYPE html>
<html lang="id">
<head></head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>WebGIS Kalimantan Selatan</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;700&family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<!-- Mapbox GL JS (versi dipatok). Jangan hapus logo & atribusi Mapbox (syarat layanan). -->
<link href="https://api.mapbox.com/mapbox-gl-js/v3.8.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v3.8.0/mapbox-gl.js"></script>
<link href="{{ asset('gis/style/StyleGis.css') }}" rel="stylesheet">

</head>
<body>

<div id="map" role="application" aria-label="Peta Kalimantan Selatan"></div>

<section class="panel" id="panel" aria-label="Panel kontrol peta">
  <header class="panel-head" id="panelHead">
    <div>
      <h1>WebGIS Kalimantan Selatan</h1>
      <p>Ibu kota kabupaten dan kota</p>
    </div>
  <button class="icon-btn" id="collapseBtn" aria-expanded="true" aria-controls="panelBody" aria-label="Ciutkan panel">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 10l5-5 5 5"/></svg>
  </button>
  </header>

  <div class="panel-body" id="panelBody">
    <div class="sec">
      <h2>Basemap</h2>
      <div class="basemaps" id="basemaps"></div>
    </div>

    <div class="sec">
      <h2>Layer</h2>
      <label>
          <input type="checkbox" id="tgPoints" checked>Titik (Point)
        </label>
        <label>
          <input type="checkbox" id="tgLines" checked>Garis (Line)
        </label>
        <label>
          <input type="checkbox" id="tgPolygons" checked>Area (Polygon)
        </label>
    </div>

    <div class="sec">
      <h2>Cari lokasi</h2>
      <input class="search" id="q" type="search" placeholder="Ketik nama kabupaten atau kota" autocomplete="off" aria-label="Cari lokasi">
      <ul class="results" id="results"></ul>
      <div class="row">
        <button class="btn primary" id="btnReset">Tampilkan seluruh Kalsel</button>
        <button class="btn" id="btnNorth">Utara di atas</button>
      </div>
    </div>

    <div class="sec">
      <h2>Tampilan 3D</h2>
      <label class="toggle"><span>Relief medan</span><input type="checkbox" id="tgTerrain"></label>
      <div class="range">
        <label for="rgExag">Penekanan relief</label><output id="outExag">1,5×</output>
        <input type="range" id="rgExag" min="1" max="3" step="0.1" value="1.5">
      </div>
      <div class="range">
        <label for="rgPitch">Kemiringan kamera</label><output id="outPitch">0°</output>
        <input type="range" id="rgPitch" min="0" max="75" step="1" value="0">
      </div>
    </div>

    <div class="coord" id="coord" aria-live="polite">Arahkan kursor ke peta</div>
  </div>
</section>

<div class="gate" id="gate" role="dialog" aria-modal="true" aria-labelledby="gateTitle">
  <div class="gate-box">
    <h2 id="gateTitle">Masukkan access token Mapbox</h2>
    <p>Peta ini butuh token publik Mapbox (diawali <code>pk.</code>). Buat di akun Mapbox, lalu batasi URL-nya ke domain yang kamu pakai. Token hanya disimpan di sesi browser ini.</p>
    <input class="search" id="tokenInput" type="text" placeholder="pk.eyJ1Ijoi..." autocomplete="off" spellcheck="false" aria-label="Access token Mapbox">
    <p class="gate-err" id="gateErr" role="alert"></p>
    <div class="row"><button class="btn primary" id="tokenBtn">Muat peta</button></div>
  </div>
</div>
<script>
  const MAPBOX_ACCESS_TOKEN = "{{ env('MAPBOX_ACCESS_TOKEN') }}";
</script>
<script src="{{ asset('gis/script/ScriptGis.js') }}"></script>

</body>
</html>
