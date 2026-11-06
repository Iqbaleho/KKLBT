@extends('master.master')

@section('section')

   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <title>Informasi Desa — Demografi &amp; Wisata · Desa Alat</title>
    <meta name="description" content="Informasi Desa Alat: demografi penduduk dan destinasi wisata unggulan.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">

</head>

<body>

    <main>
        <nav class="tabs" aria-label="Halaman Informasi Desa">
            <div class="wrap">
                <a href="#informasi">Informasi Desa</a><a href="#demografi">Demografi</a><a href="#wisata">Wisata</a>
            </div>
        </nav>

        <!-- ===== HUB ===== -->
        <div class="view" id="informasi">
            <section class="hero">
                <div class="wrap">
                    <nav class="crumb" aria-label="Breadcrumb">
                        <a href="{{ route('beranda') }}">Beranda</a> / <span>Informasi
                            Desa</span></nav>
                    <span class="eyebrow">Informasi Desa</span>
                    <h1>Data &amp; Cerita Desa Alat</h1>
                    <p>Ringkasan demografi, destinasi wisata, dan kabar terbaru dari desa.</p>
                    <a class="btn fill" href="#wisata">Jelajahi Wisata</a>
                </div>
            </section>
            <section>
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Ringkasan</span>
                        <h2>Pilih informasi yang Anda cari.</h2>
                    </div>
                    <div class="grid3">
                        <article class="card">
                            <div class="in"><span class="num">01</span>
                                <h3>Demografi</h3>
                                <p>Jumlah penduduk, kelompok umur, dan Sebaran per RT.</p><a class="more"
                                    href="#demografi">Lihat demografi →</a>
                            </div>
                        </article>
                        <article class="card">
                            <div class="in"><span class="num">02</span>
                                <h3>Wisata Desa</h3>
                                <p>Destinasi unggulan dengan galeri slide.</p><a class="more" href="#wisata">Lihat
                                    wisata →</a>
                            </div>
                        </article>
                        <article class="card">
                            <div class="in"><span class="num">03</span>
                                <h3>Berita</h3>
                                <p>Kabar dan pengumuman resmi desa.</p><a class="more" href="berita-desa.html">Buka
                                    berita →</a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="alt">
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Berita &amp; Pengumuman</span>
                        <h2>Terbaru dari desa.</h2>
                    </div>
                    <div class="news">
                        <a href="berita-desa.html"><time>[08/11/2026]</time>
                            <h3>[Kedatangan Mahasiswa KKL Dari Universitas Lambung Mangkurat Prodi Geografi]</h3><span>→</span>
                        </a>
                        <a href="berita-desa.html"><time>[Tanggal]</time>
                            <h3>[Judul pengumuman]</h3><span>→</span>
                        </a>
                    </div>
                    <p class="note">Sumber data: [Profil Desa / BPS / Dukcapil, tahun …]. Isi dengan data resmi.</p>
                </div>
            </section>
        </div>

        <!-- ===== DEMOGRAFI ===== -->
        <div class="view" id="demografi">
            <section class="hero">
                <div class="wrap">
                    <nav class="crumb" aria-label="Breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / <a
                            href="#informasi">Informasi Desa</a> / <span>Demografi</span></nav>
                    <span class="eyebrow">Informasi Desa</span>
                    <h1>Demografi Penduduk</h1>
                    <p>Gambaran jumlah dan komposisi penduduk Desa Alat.</p>
                </div>
            </section>
            <section>
                <div class="wrap">
                    <div class="stats" role="list">
                        <div class="stat" role="listitem"><b>1.922</b><span>Total penduduk</span></div>
                        <div class="stat" role="listitem"><b>981</b><span>Laki-laki</span></div>
                        <div class="stat" role="listitem"><b>941</b><span>Perempuan</span></div>
                        <div class="stat" role="listitem"><b>654</b><span>Kepala keluarga</span></div>
                    </div>
                    <p class="note">Angka dikosongkan (—) sampai data resmi diisi. Tidak ada data fiktif.</p>
                </div>
            </section>
            <section class="alt">
                <div class="wrap two">
                    <div>
                        <span class="eyebrow">Jenis Kelamin</span>
                        <h2>Komposisi penduduk.</h2>
                        <div class="row"><span>Laki-laki</span>
                            <div class="bar"><i style="--v:0%"></i></div><em>[981]%</em>
                        </div>
                        <div class="row"><span>Perempuan</span>
                            <div class="bar"><i style="--v:0%"></i></div><em>[941]%</em>
                        </div>
                    </div>
                    <div>
                        <span class="eyebrow">Kelompok Umur</span>
                        <h2>Distribusi usia.</h2>
                        <div class="row"><span>0–14 th</span>
                            <div class="bar"><i style="--v:0%"></i></div><em>[425]%</em>
                        </div>
                        <div class="row"><span>15–64 th</span>
                            <div class="bar"><i style="--v:0%"></i></div><em>[1.399]%</em>
                        </div>
                        <div class="row"><span>65+ th</span>
                            <div class="bar"><i style="--v:0%"></i></div><em>[98]%</em>
                        </div>
                    </div>
                </div>
                <div class="wrap">
                    <p class="note">Cara mengisi bar: ubah <code>--v:0%</code> pada setiap bar menjadi persentase data
                        resmi, misalnya <code>--v:48%</code>.</p>
                </div>
            </section>
            <section>
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Sebaran Wilayah</span>
                        <h2>Penduduk per RT.</h2>
                    </div>
                    <div class="scroll">
                        <table>
                            <thead>
                                <tr>
                                    <th>RT</th>
                                    <th>Penduduk</th>
                                    <th>Kepala Keluarga</th>
                                    <th>Laki-laki</th>
                                    <th>Perempuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>[RT 01]</td>
                                    <td>[425]</td>
                                    <td>[149]</td>
                                    <td>[205]</td>
                                    <td>[220]</td>
                                </tr>
                                <tr>
                                    <td>[RT 02]</td>
                                    <td>[344]</td>
                                    <td>[113]</td>
                                    <td>[174]</td>
                                    <td>[170]</td>
                                </tr>
                                <tr>
                                    <td>[RT 03]</td>
                                    <td>[244]</td>
                                    <td>[84]</td>
                                    <td>[132]</td>
                                    <td>[112]</td>
                                </tr>
                                <tr>
                                    <td>[RT 04]</td>
                                    <td>[172]</td>
                                    <td>[60]</td>
                                    <td>[88]</td>
                                    <td>[84]</td>
                                </tr>
                                <tr>
                                    <td>[RT 05]</td>
                                    <td>[402]</td>
                                    <td>[127]</td>
                                    <td>[206]</td>
                                    <td>[196]</td>
                                </tr>
                                <tr>
                                    <td>[RT 06]</td>
                                    <td>[335]</td>
                                    <td>[121]</td>
                                    <td>[176]</td>
                                    <td>[159]</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section class="dark">
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Tren Penduduk</span>
                        <h2>Perkembangan per tahun.</h2>
                        <p>Opsional — hapus bila data tidak tersedia.</p>
                    </div>
                    <div class="scroll">
                        <table style="color:#f3efe3">
                            <thead>
                                <tr>
                                    <th>Tahun</th>
                                    <th>Penduduk</th>
                                    <th>Pertumbuhan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>[20XX]</td>
                                    <td>[–]</td>
                                    <td>[–]</td>
                                </tr>
                                <tr>
                                    <td>[20XX]</td>
                                    <td>[–]</td>
                                    <td>[–]</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="note">Sumber data: [Dukcapil / BPS / Profil Desa, tahun …].</p>
                </div>
            </section>
            <section>
                <div class="wrap pager"><a href="#informasi"><small>← Kembali</small><b>Informasi Desa</b></a><a
                        href="#wisata"><small>Berikutnya →</small><b>Wisata Desa</b></a></div>
            </section>
        </div>

        <!-- ===== WISATA ===== -->
        <div class="view" id="wisata">
            <section class="hero" style="padding-bottom:48px">
                <div class="wrap">
                    <nav class="crumb" aria-label="Breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / <a
                            href="#informasi">Informasi Desa</a> / <span>Wisata</span></nav>
                    <span class="eyebrow">Informasi Desa</span>
                    <h1>Wisata Desa Alat</h1>
                    <p>Destinasi unggulan yang dikelola dan dijaga bersama masyarakat.</p>
                </div>
            </section>

            <div class="slider" aria-label="Galeri destinasi wisata">
                <input type="radio" name="ws" id="w1" checked aria-label="Slide 1">
                <input type="radio" name="ws" id="w2" aria-label="Slide 2">
                <input type="radio" name="ws" id="w3" aria-label="Slide 3">
                <input type="radio" name="ws" id="w4" aria-label="Slide 4">
                <input type="radio" name="ws" id="w5" aria-label="Slide 5">
                <div class="stage">
                    <figure class="slide" style="--a:#4f8f6c;--b:#14402f">
                        <div class="bg"><span>[Foto 1 — assets/images/tourism/wisata-1.jpg]</span></div>
                        <div class="shade"></div>
                        <label class="arr p" for="w5" aria-hidden="true">←</label><label class="arr n" for="w2"
                            aria-hidden="true">→</label>
                        <figcaption class="cap"><span class="no">01</span><span class="tag">[Kategori]</span>
                            <h3>[Nama Destinasi 1]</h3>
                            <p>[Deskripsi singkat dan lokasi destinasi.]</p><a class="btn fill" href="webgis.html">Lihat
                                di Peta</a>
                        </figcaption>
                    </figure>
                    <figure class="slide" style="--a:#3d7f9a;--b:#0f3140">
                        <div class="bg"><span>[Foto 2 — assets/images/tourism/wisata-2.jpg]</span></div>
                        <div class="shade"></div>
                        <label class="arr p" for="w1" aria-hidden="true">←</label><label class="arr n" for="w3"
                            aria-hidden="true">→</label>
                        <figcaption class="cap"><span class="no">02</span><span class="tag">[Kategori]</span>
                            <h3>[Nama Destinasi 2]</h3>
                            <p>[Deskripsi singkat dan lokasi destinasi.]</p><a class="btn fill" href="webgis.html">Lihat
                                di Peta</a>
                        </figcaption>
                    </figure>
                    <figure class="slide" style="--a:#a8823f;--b:#3a2a10">
                        <div class="bg"><span>[Foto 3 — assets/images/tourism/wisata-3.jpg]</span></div>
                        <div class="shade"></div>
                        <label class="arr p" for="w2" aria-hidden="true">←</label><label class="arr n" for="w4"
                            aria-hidden="true">→</label>
                        <figcaption class="cap"><span class="no">03</span><span class="tag">[Kategori]</span>
                            <h3>[Nama Destinasi 3]</h3>
                            <p>[Deskripsi singkat dan lokasi destinasi.]</p><a class="btn fill" href="webgis.html">Lihat
                                di Peta</a>
                        </figcaption>
                    </figure>
                    <figure class="slide" style="--a:#7a6aa0;--b:#201a36">
                        <div class="bg"><span>[Foto 4 — assets/images/tourism/wisata-4.jpg]</span></div>
                        <div class="shade"></div>
                        <label class="arr p" for="w3" aria-hidden="true">←</label><label class="arr n" for="w5"
                            aria-hidden="true">→</label>
                        <figcaption class="cap"><span class="no">04</span><span class="tag">[Kategori]</span>
                            <h3>[Nama Destinasi 4]</h3>
                            <p>[Deskripsi singkat dan lokasi destinasi.]</p><a class="btn fill" href="webgis.html">Lihat
                                di Peta</a>
                        </figcaption>
                    </figure>
                    <figure class="slide" style="--a:#9a5a4a;--b:#34160f">
                        <div class="bg"><span>[Foto 5 — assets/images/tourism/wisata-5.jpg]</span></div>
                        <div class="shade"></div>
                        <label class="arr p" for="w4" aria-hidden="true">←</label><label class="arr n" for="w1"
                            aria-hidden="true">→</label>
                        <figcaption class="cap"><span class="no">05</span><span class="tag">[Kategori]</span>
                            <h3>[Nama Destinasi 5]</h3>
                            <p>[Deskripsi singkat dan lokasi destinasi.]</p><a class="btn fill" href="webgis.html">Lihat
                                di Peta</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="dots">
                    <label for="w1"><b>01</b>[Destinasi 1]</label><label for="w2"><b>02</b>[Destinasi 2]</label><label
                        for="w3"><b>03</b>[Destinasi 3]</label><label for="w4"><b>04</b>[Destinasi 4]</label><label
                        for="w5"><b>05</b>[Destinasi 5]</label>
                </div>
                <p class="hint">Pilih slide dengan panah atau tab di bawah, atau gunakan tombol ← → keyboard. Slide
                    tidak berpindah otomatis.</p>
            </div>

            <section>
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Detail Destinasi</span>
                        <h2>Informasi pengunjung.</h2>
                    </div>
                    <div class="grid3">
                        <article class="card">
                            <div class="in"><span class="tag">[Kategori]</span>
                                <h3>[Nama Destinasi 1]</h3>
                                <p>Lokasi: [–]<br>Fasilitas terverifikasi: [–]<br>Jam &amp; tiket: [–]</p><a
                                    class="more" href="detail-wisata.html">Detail →</a>
                            </div>
                        </article>
                        <article class="card">
                            <div class="in"><span class="tag">[Kategori]</span>
                                <h3>[Nama Destinasi 2]</h3>
                                <p>Lokasi: [–]<br>Fasilitas terverifikasi: [–]<br>Jam &amp; tiket: [–]</p><a
                                    class="more" href="detail-wisata.html">Detail →</a>
                            </div>
                        </article>
                        <article class="card">
                            <div class="in"><span class="tag">[Kategori]</span>
                                <h3>[Nama Destinasi 3]</h3>
                                <p>Lokasi: [–]<br>Fasilitas terverifikasi: [–]<br>Jam &amp; tiket: [–]</p><a
                                    class="more" href="detail-wisata.html">Detail →</a>
                            </div>
                        </article>
                    </div>
                    <p class="note">Isi fasilitas hanya yang sudah diverifikasi. Tambah kartu sesuai jumlah destinasi.
                    </p>
                </div>
            </section>
            <section class="alt">
                <div class="wrap pager"><a href="#demografi"><small>← Sebelumnya</small><b>Demografi</b></a><a
                        href="webgis.html"><small>Lihat lokasi →</small><b>WebGIS</b></a></div>
            </section>
        </div>
    </main>

</body>

@endsection
