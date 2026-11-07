@extends('master.master')

@section('section')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <title>Mitra Desa — KKL Terapan Geografi · Desa Alat</title>
    <meta name="description" content="Kemitraan KKL Terapan Geografi di Desa Alat: LMB, PPW, dan SIG.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">

</head>

<body>

    <main>
        <nav class="tabs" aria-label="Halaman Mitra Desa">
            <div class="wrap">
                <a href="#mitra">Mitra Desa</a><a href="#sig">SIG</a><a href="#lmb">LMB</a><a href="#ppw">PPW</a>
            </div>
        </nav>

        <!-- ========== HUB: MITRA DESA ========== -->
        <div class="view" id="mitra">
            <section class="hero">
                <div class="wrap">
                    <nav class="crumb" aria-label="Breadcrumb">
                        <a href="{{ route('beranda') }}">Beranda</a> / <span>Mitra
                            Desa</span></nav>
                    <span class="eyebrow">Kuliah Kerja Lapangan · Terapan Geografi</span>
                    <h1>Mitra Desa Alat</h1>
                    <p style="text-align: justify;">Kolaborasi Desa Alat dan Universitas Lambung Mangkurat dalam kajian lapangan tiga peminatan geografi terapan.</p>
                    <a class="btn fill" href="#sig">Lihat Peminatan</a>
                </div>
            </section>

            <section>
                <div class="wrap split">
                    <div><span class="eyebrow">Latar Belakang</span>
                        <h2>Mengapa KKL dilakukan di desa ini.</h2>
                        <p style="text-align: justify;">Kuliah Kerja Lapangan (KKL) dilaksanakan di Desa Alat, Kecamatan Hantakan, Kabupaten Hulu Sungai Tengah, untuk mengenal kondisi geografis, sosial, ekonomi, dan potensi wilayah desa secara langsung. Kegiatan ini menjadi sarana bagi mahasiswa untuk menerapkan ilmu yang diperoleh selama perkuliahan, melakukan observasi lapangan, serta mengidentifikasi potensi dan permasalahan desa. Melalui kegiatan KKL, diharapkan mahasiswa dapat memberikan kontribusi berupa informasi dan rekomendasi yang bermanfaat bagi pengembangan wilayah serta mendukung pembangunan desa yang berkelanjutan.</p>
                        <p><strong>Tujuan:</strong> Tuliskan tujuan kegiatan sesuai laporan KKL.</p>
                    </div>
                    <div class="ph">
                        <img src="{{ asset('img/Background/S1.jpg') }}" alt="Foto Kegiatan KKL">
                    </div>
                </div>
            </section>

            <section class="alt">
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Tiga Peminatan</span>
                        <h2>Satu wilayah, tiga sudut pandang.</h2>
                    </div>
                    <div class="grid3">
                        <article class="card">
                            <div class="ph">
                                <img src="{{ asset('img/Background/S1.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <div class="in"><span class="num">01</span>
                                <h3>Sistem Informasi Geografis</h3>
                                <p>Data spasial, pemetaan tematik, dan analisis spasial.</p><a class="more"
                                    href="#sig">Buka halaman SIG →</a>
                            </div>
                        </article>
                        <article class="card">
                            <div class="ph">
                                <img src="{{ asset('img/Background/S3.jpg') }}" alt="Foto LMB">
                            </div>
                            <div class="in">
                                <span class="num">02</span>
                                <h3>Lingkungan &amp; Mitigasi Bencana</h3>
                                <p>Kajian lingkungan, potensi, dan risiko bencana.</p>
                                <a class="more" href="#lmb">Buka halaman LMB →</a>
                            </div>
                        </article>

                        <article class="card">
                            <div class="ph">
                                <img src="{{ asset('img/Background/S5.jpg') }}" alt="Foto LMB">
                            </div>
                            <div class="in">
                                <span class="num">03</span>
                                <h3>Perencanaan Pengembangan Wilayah</h3>
                                <p>Potensi wilayah, infrastruktur, dan aksesibilitas.</p>
                                <a class="more" href="#ppw">Buka halaman PPW →</a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="dark">
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Produk Kajian</span>
                        <h2>Luaran KKL untuk desa.</h2>
                        <p>Daftar luaran diisi sesuai hasil kegiatan.</p>
                    </div>
                    <ol class="steps">
                        <li><b>01</b><span>[Laporan kajian]</span></li>
                        <li><b>02</b><span>[Peta tematik]</span></li>
                        <li><b>03</b><span>[Basis data spasial]</span></li>
                        <li><b>04</b><span>[Rekomendasi untuk desa]</span></li>
                    </ol>
                </div>
            </section>

            <section>
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Dokumentasi Lapangan</span>
                        <h2>Galeri kegiatan.</h2>
                    </div>
                    <div class="snap" tabindex="0" aria-label="Galeri kegiatan KKL">
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S1.jpg') }}" alt="Kegiatan KKL">
                            </div>
                            <figcaption>[Caption kegiatan 1]</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S1.jpg') }}" alt="Kegiatan KKL">
                            </div>
                            <figcaption>[Caption kegiatan 2]</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S1.jpg') }}" alt="Kegiatan KKL">
                            </div>
                            <figcaption>[Caption kegiatan 3]</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S1.jpg') }}" alt="Kegiatan KKL">
                            </div>
                            <figcaption>[Caption kegiatan 4]</figcaption>
                        </figure>
                    </div>
                </div>
            </section>
        </div>

        <!-- ========== SIG (01) ========== -->
        <div class="view" id="sig">
            <section class="hero">
                <div class="wrap">
                    <nav class="crumb" aria-label="Breadcrumb">
                        <a href="{{ route('beranda') }}">Beranda</a> /
                        <a href="#mitra">Mitra Desa</a> / <span>SIG</span>
                    </nav>
                    <span class="eyebrow">Peminatan 01</span>
                    <h1>Sistem Informasi Geografi</h1>
                    <p>Pengumpulan data spasial, pemetaan tematik, dan analisis spasial Desa Alat.</p>
                    <a class="btn fill" href="{{ route('webGIS') }}">Lihat WebGIS</a>
                </div>
            </section>

            <section>
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Alur Kerja Spasial</span>
                        <h2>Dari data lapangan menjadi peta.</h2>
                    </div>
                    <div class="grid3" style="grid-template-columns:repeat(auto-fit,minmax(220px,1fr))">
                        <article class="card">
                            <div class="in"><span class="num">01</span>
                                <h3>Pengumpulan data</h3>
                                <p>Survei GPS, citra, data sekunder</p>
                            </div>
                        </article>

                        <article class="card">
                            <div class="in"><span class="num">02</span>
                                <h3>Pemetaan tematik</h3>
                                <p>Tema peta yang dibuat</p>
                            </div>
                        </article>
                        <article class="card">
                            <div class="in"><span class="num">03</span>
                                <h3>Analisis spasial</h3>
                                <p>Metode analisis</p>
                            </div>
                        </article>
                        <article class="card">
                            <div class="in"><span class="num">04</span>
                                <h3>Penginderaan jauh</h3>
                                <p>Isi bila digunakan</p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="dark">
                <div class="wrap split">
                    <div><span class="eyebrow">Peta Hasil Kajian</span>
                        <h2 style="color:#fff">Peta tematik desa.</h2>
                        <p style="color:#d4d9cf">Jelaskan peta yang dihasilkan, sumber data, sistem koordinat, dan
                            tahun.</p>
                    </div>
                    <div class="ph" style="aspect-ratio:4/3">
                        <img src="{{ asset('img/Background/S3.jpg') }}" alt="">
                    </div>
                </div>
            </section>


            <section>
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Dokumentasi</span>
                        <h2>Pengambilan data lapangan.</h2>
                    </div>
                    <div class="snap" tabindex="0" aria-label="Dokumentasi SIG">
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S4.png') }}" alt="Dokumentasi Kegiatan SIG">
                            </div>
                            <figcaption>[Caption]</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S4.png') }}" alt="Dokumentasi Kegiatan SIG">
                            </div>
                            <figcaption>[Caption]</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S4.png') }}" alt="Dokumentasi Kegiatan SIG">
                            </div>
                            <figcaption>[Caption]</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S4.png') }}" alt="Dokumentasi Kegiatan SIG">
                            </div>
                            <figcaption>[Caption]</figcaption>
                        </figure>
                    </div>
                </div>
            </section>

            <section class="alt">
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Pengembangan WebGIS</span>
                        <h2>Dari peta statis ke peta web.</h2>
                    </div>
                    <details open>
                        <summary>Status pengembangan</summary>
                        <p>Jelaskan tahap WebGIS saat ini. Versi tanpa JavaScript berupa peta statis dan legenda;
                            kontrol layer interaktif memerlukan JavaScript atau peta eksternal.</p>
                    </details>
                    <details>
                        <summary>Referensi</summary>
                        <ul>
                            <li>Penulis. Tahun. Judul. Penerbit.</li>
                        </ul>
                    </details>
                </div>
            </section>
            <section>
                <div class="wrap pager"><a href="#mitra"><small>← Kembali</small><b>Mitra Desa</b></a><a
                        href="#lmb"><small>Berikutnya →</small><b>LMB</b></a></div>
            </section>
        </div>
        <!-- ========== LMB (02) ========== -->
        <div class="view" id="lmb">
            <section class="hero">
                <div class="wrap">
                    <nav class="crumb" aria-label="Breadcrumb">
                        <a href="{{ route('beranda') }}">Beranda</a> /
                        <a href="#mitra">Mitra
                            Desa</a> / <span>LMB</span></nav>
                    <span class="eyebrow">Peminatan 02</span>
                    <h1>Lingkungan &amp; Mitigasi Bencana</h1>
                    <p>Kajian kondisi lingkungan serta potensi dan risiko bencana di Desa Alat.</p>
                </div>
            </section>

            <section>
                <div class="wrap split">
                    <div><span class="eyebrow">Ringkasan</span>
                        <h2>Kajian lingkungan.</h2>
                        <p>Ringkasan ruang lingkup kajian LMB: aspek lingkungan yang diamati dan jenis bencana yang
                            dikaji.</p>
                    </div>
                    <div class="ph" style="aspect-ratio:4/3">
                        <img src="{{ asset('img/Background/S3.jpg') }}" alt="">
                    </div>
                </div>
            </section>

            <section class="dark">
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Metodologi</span>
                        <h2>Tahapan kajian.</h2>
                    </div>
                    <ol class="steps">
                        <li><b>01</b><span>[Persiapan &amp; studi pustaka]</span></li>
                        <li><b>02</b><span>[Observasi lapangan]</span></li>
                        <li><b>03</b><span>[Pengolahan data]</span></li>
                        <li><b>04</b><span>[Analisis risiko]</span></li>
                    </ol>
                </div>
            </section>

            <section>
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Dokumentasi &amp; Peta Pendukung</span>
                        <h2>Bukti lapangan.</h2>
                    </div>
                    <div class="snap" tabindex="0" aria-label="Dokumentasi LMB">
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S1.jpg') }}" alt="Dokumentasi Kegiatan">
                            </div>
                            <figcaption>[Caption]</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S1.jpg') }}" alt="Dokumentasi Kegiatan">
                            </div>
                            <figcaption>[Caption]</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S1.jpg') }}" alt="Dokumentasi Kegiatan">
                            </div>
                            <figcaption>[Caption]</figcaption>
                        </figure>
                        figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S1.jpg') }}" alt="Dokumentasi Kegiatan">
                            </div>
                            <figcaption>[Caption]</figcaption>
                        </figure>
                    </div>
                    <div class="maps" style="margin-top:34px">
                        <figure>
                            <div class="ph">Peta potensi bencana
                                <img src="{{ asset('img/Background/S3.jpg') }}" alt="Peta">
                            </div>
                            <figcaption>Judul peta, sumber &amp; tahun data</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">Peta risiko
                                <img src="{{ asset('img/Background/S3.jpg') }}" alt="Peta">
                            </div>
                            <figcaption>Judul peta, sumber &amp; tahun data</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">Peta potensi bencana
                                <img src="{{ asset('img/Background/S3.jpg') }}" alt="Peta">
                            </div>
                            <figcaption>Judul peta, sumber &amp; tahun data</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">Peta risiko
                                <img src="{{ asset('img/Background/S3.jpg') }}" alt="Peta">
                            </div>
                            <figcaption>Judul peta, sumber &amp; tahun data</figcaption>
                        </figure>
                    </div>
                </div>
            </section>

            <section class="alt">
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Hasil &amp; Rekomendasi</span>
                        <h2>Temuan utama.</h2>
                    </div>
                    <details open>
                        <summary>Hasil kajian</summary>
                        <p>Ringkasan hasil kajian LMB — isi dengan data resmi laporan.</p>
                    </details>
                    <details>
                        <summary>Potensi &amp; risiko bencana</summary>
                        <p>Uraian potensi dan tingkat risiko berdasarkan hasil kajian.</p>
                    </details>
                    <details>
                        <summary>Rekomendasi</summary>
                        <ul>
                            <li>[Rekomendasi 1]</li>
                            <li>[Rekomendasi 2]</li>
                        </ul>
                    </details>
                    <details>
                        <summary>Referensi</summary>
                        <ul>
                            <li>[Penulis. Tahun. Judul. Penerbit.]</li>
                        </ul>
                    </details>
                </div>
            </section>
            <section>
                <div class="wrap pager"><a href="#sig"><small>← Sebelumnya</small><b>SIG</b></a><a
                        href="#ppw"><small>Berikutnya →</small><b>PPW</b></a></div>
            </section>
        </div>

        <!-- ========== PPW (03) ========== -->
        <div class="view" id="ppw">
            <section class="hero">
                <div class="wrap">
                    <nav class="crumb" aria-label="Breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / <a href="#mitra">Mitra
                            Desa</a> / <span>PPW</span></nav>
                    <span class="eyebrow">Peminatan 03</span>
                    <h1>Perencanaan Pengembangan Wilayah</h1>
                    <p>Kajian potensi, infrastruktur, dan aksesibilitas untuk arah pengembangan Desa [NAMA DESA].</p>
                </div>
            </section>
            <section class="alt">
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Fokus Kajian</span>
                        <h2>Empat aspek wilayah.</h2>
                    </div>
                    <div class="grid3" style="grid-template-columns:repeat(auto-fit,minmax(220px,1fr))">
                        <article class="card">
                            <div class="in"><span class="num">1</span>
                                <h3>Potensi wilayah</h3>
                                <p>[Uraian singkat]</p>
                            </div>
                        </article>
                        <article class="card">
                            <div class="in"><span class="num">2</span>
                                <h3>Infrastruktur</h3>
                                <p>[Uraian singkat]</p>
                            </div>
                        </article>
                        <article class="card">
                            <div class="in"><span class="num">3</span>
                                <h3>Aksesibilitas</h3>
                                <p>[Uraian singkat]</p>
                            </div>
                        </article>
                        <article class="card">
                            <div class="in"><span class="num">4</span>
                                <h3>Fasilitas umum</h3>
                                <p>[Uraian singkat]</p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section>
                <div class="wrap split">
                    <div class="ph" style="aspect-ratio:4/3">
                        <img src="{{ asset('img/Background/S2.jfif') }}" alt="Dokumentasi Kegiatan">
                    </div>
                    <div><span class="eyebrow">Metode Survei</span>
                        <h2>Cara data dikumpulkan.</h2>
                        <p>[Jelaskan metode: observasi, wawancara, kuesioner, jumlah responden, dan periode survei.]</p>
                    </div>
                </div>
            </section>
            <section class="dark">
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Dokumentasi &amp; Peta Tematik</span>
                        <h2>Visual hasil survei.</h2>
                    </div>
                    <div class="snap" tabindex="0" aria-label="Dokumentasi PPW">
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S2.jfif') }}" alt="Dokumentasi Kegiatan">
                            </div>
                            <figcaption>[Caption]</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S2.jfif') }}" alt="Dokumentasi Kegiatan">
                            </div>
                            <figcaption>[Caption]</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">
                                <img src="{{ asset('img/Background/S2.jfif') }}" alt="Dokumentasi Kegiatan">
                            </div>
                            <figcaption>[Caption]</figcaption>
                        </figure>
                    </div>
                    <div class="maps" style="margin-top:34px">
                        <figure>
                            <div class="ph">[Peta infrastruktur]
                                <img src="{{ asset('img/Background/S2.jfif') }}" alt="Peta">
                            </div>
                            <figcaption>[Sumber &amp; tahun data]</figcaption>
                        </figure>
                        <figure>
                            <div class="ph">[Peta aksesibilitas]
                                <img src="{{ asset('img/Background/S2.jfif') }}" alt="Peta">
                            </div>
                            <figcaption>[Sumber &amp; tahun data]</figcaption>
                        </figure>
                    </div>
                </div>
            </section>
            <section>
                <div class="wrap">
                    <div class="head"><span class="eyebrow">Hasil &amp; Rekomendasi</span>
                        <h2>Arah pengembangan.</h2>
                    </div>
                    <details open>
                        <summary>Hasil kajian</summary>
                        <p>[Ringkasan hasil kajian PPW.]</p>
                    </details>
                    <details>
                        <summary>Rekomendasi</summary>
                        <ul>
                            <li>[Rekomendasi 1]</li>
                            <li>[Rekomendasi 2]</li>
                        </ul>
                    </details>
                    <details>
                        <summary>Referensi</summary>
                        <ul>
                            <li>[Penulis. Tahun. Judul. Penerbit.]</li>
                        </ul>
                    </details>
                </div>
            </section>
            <section class="alt">
                <div class="wrap pager"><a href="#lmb"><small>← Sebelumnya</small><b>LMB</b></a><a
                        href="#mitra"><small>Kembali →</small><b>Mitra Desa</b></a></div>
            </section>
        </div>

    </main>

</body>

@endsection
