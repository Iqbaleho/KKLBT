@extends('master.master')

@section('section')
    <section class="hero"
        style="
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;">

        <!-- Video Background -->
        <video autoplay muted loop playsinline
            style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;">
            <source src="{{ asset('mov/vid.mp4') }}" type="video/mp4">
            Browser Anda tidak mendukung pemutaran video.
        </video>

        <!-- Overlay Gelap -->
        <div
            style="
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        z-index: 1;">
        </div>

        <!-- Konten Hero -->
        <div style="
        position: relative;
        z-index: 2;
        text-align: center;
        padding: 30px;">

            <h1>Selamat Datang di Desa Alat</h1>
            <p>
                Website Resmi Pemerintah Desa Alat,
                Kecamatan Hantakan, Kabupaten Hulu Sungai Tengah.
            </p>

            <a href="#profil"
                style="
            display: inline-block; margin-top: 20px;
            padding: 12px 25px;
            background: #198754;
            color: white;
            text-decoration: none;
            border-radius: 5px;">
                Jelajahi Desa
            </a>
        </div>
    </section>

    <section id="profil">
        <div class="wrap split reveal">
            <div><span class="eyebrow">Introduction</span>
                <h2>Mengenal Desa Alat</h2>
                <p style="text-align: justify; color: #fff;">
                    Desa Alat merupakan salah satu desa yang berada di Kecamatan Hantakan, Kabupaten Hulu Sungai Tengah,
                    Provinsi Kalimantan Selatan. Desa ini memiliki karakteristik wilayah dan kehidupan masyarakat yang
                    menjadi bagian dari kekayaan sosial, budaya, serta potensi daerah di Kecamatan Hantakan.

                    Website resmi Desa Alat ini dikembangkan sebagai sarana informasi dan komunikasi antara pemerintah desa
                    dengan masyarakat. Melalui website ini, masyarakat dapat memperoleh berbagai informasi mengenai profil
                    desa, pemerintahan, potensi wilayah, kegiatan masyarakat, serta informasi pelayanan publik. Kehadiran
                    website ini diharapkan dapat mendukung keterbukaan informasi, meningkatkan kualitas pelayanan, dan
                    memperkenalkan Desa Alat kepada masyarakat luas.</p>
            </div>
            <div class="card">
                <div class="ph">
                    <img src="{{ asset('img/Galeri/Kades.webp') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrap stats reveal">
            <div><b>[5,55 km²]</b><span>Luas wilayah</span></div>
            <div><b>[-jiwa/km²]</b><span>Kepadatan Penduduk</span></div>
            <div><b>[654]</b><span>Kepala keluarga</span></div>
            <div><b>[6]</b><span>RT</span></div>
            <div><b>[Manggasang & Dana]</b><span>Destinasi wisata</span></div>
        </div>
    </section>
    <section>
        <div class="wrap split reveal">
            <div class="card">
                <div class="ph" style="aspect-ratio:655/468">
                    <img src="{{ asset('img/Galeri/FAQIH ZARJANI.jpeg') }}" alt="">

                </div>
            </div>
            <div><span class="eyebrow">Sambutan Kepala Desa</span>
                <h2>FAQIH ZARJANI</h2>
                <p style="text-align: justify; color: #fff;">
                    Assalamu’alaikum warahmatullahi wabarakatuh.
                    Salam sejahtera bagi kita semua.

                    Saya, FAQIH ZARJANI, mengucapkan salam hangat kepada seluruh warga Desa Alat. Semoga desa ini semakin
                    maju, masyarakatnya sejahtera, dan selalu menjaga kerukunan serta semangat gotong royong.

                    Mari kita bersama-sama membangun desa yang lebih baik demi masa depan generasi mendatang.

                    Terima kasih. Salam hangat untuk seluruh warga Desa Alat!

                    Wassalamu’alaikum warahmatullahi wabarakatuh.
                </p>
                <br>
                <a class="btn" style="color:var(--gold)" href="#">Profil Desa</a>
            </div>
        </div>
    </section>

    <section class="potensi-section">
        <div class="wrap reveal">
            <span class="eyebrow">Potensi Desa</span>
            <h2>Potensi &amp; Keunggulan</h2>
            <div class="grid potensi-grid">

                <article class="card reveal potensi-card">
                    <div class="potensi-img-wrapper">
                        <img src="{{ asset('img/Background/S4.png') }}" alt="Potensi Alam">
                    </div>
                    <div class="in">
                        <span class="tag">Potensi</span>
                        <h3>Potensi Alam</h3>
                        <p>[Deskripsi]</p>
                    </div>
                </article>

                <article class="card reveal potensi-card">
                    <div class="potensi-img-wrapper">
                        <img src="{{ asset('img/Background/S1.jpg') }}" alt="Pertanian">
                    </div>
                    <div class="in">
                        <span class="tag">Potensi</span>
                        <h3>Pertanian</h3>
                        <p>[Deskripsi]</p>
                    </div>
                </article>

                <article class="card reveal potensi-card">
                    <div class="potensi-img-wrapper">
                        <img src="{{ asset('img/Background/S5.jpg') }}" alt="Perkebunan">
                    </div>
                    <div class="in">
                        <span class="tag">Potensi</span>
                        <h3>Perkebunan</h3>
                        <p>[Deskripsi]</p>
                    </div>
                </article>

                <article class="card reveal potensi-card">
                    <div class="potensi-img-wrapper">
                        <img src="{{ asset('img/Background/S3.jpg') }}" alt="UMKM">
                    </div>
                    <div class="in">
                        <span class="tag">Potensi</span>
                        <h3>UMKM</h3>
                        <p>[Deskripsi]</p>
                    </div>
                </article>

                <article class="card reveal potensi-card">
                    <div class="potensi-img-wrapper">
                        <img src="{{ asset('img/Background/S4.png') }}" alt="Budaya">
                    </div>
                    <div class="in">
                        <span class="tag">Potensi</span>
                        <h3>Budaya</h3>
                        <p>[Deskripsi]</p>
                    </div>
                </article>

                <article class="card reveal potensi-card">
                    <div class="potensi-img-wrapper">
                        <img src="{{ asset('img/Background/S5.jpg') }}" alt="Ekonomi Lokal">
                    </div>
                    <div class="in">
                        <span class="tag">Potensi</span>
                        <h3>Ekonomi Lokal</h3>
                        <p>[Deskripsi]</p>
                    </div>
                </article>

                <article class="card reveal potensi-card">
                    <div class="potensi-img-wrapper">
                        <img src="{{ asset('img/Background/S1.jpg') }}" alt="Wisata">
                    </div>
                    <div class="in">
                        <span class="tag">Potensi</span>
                        <h3>Wisata</h3>
                        <p>[Deskripsi]</p>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <section>
        <div class="wrap reveal">
            <span class="eyebrow">Featured Gallery</span>
            <h2>Galeri Unggulan</h2>
            <h3 style="margin:1.5rem 0 .6rem">Foto Unggulan</h3>
            <div class="gal">
                <figure>
                    <div class="gal-img-wrapper">
                        <img src="{{ asset('img/Background/S1.jpg') }}" alt="Foto Unggulan 1">
                    </div>
                    <figcaption>[Judul foto 1 — caption]</figcaption>
                </figure>
                <figure>
                    <div class="gal-img-wrapper">
                        <img src="{{ asset('img/Background/S1.jpg') }}" alt="Foto Unggulan 2">
                    </div>
                    <figcaption>[Judul foto 2 — caption]</figcaption>
                </figure>
                <figure>
                    <div class="gal-img-wrapper">
                        <img src="{{ asset('img/Background/S1.jpg') }}" alt="Foto Unggulan 3">
                    </div>
                    <figcaption>[Judul foto 3 — caption]</figcaption>
                </figure>
                <figure>
                    <div class="gal-img-wrapper">
                        <img src="{{ asset('img/Background/S1.jpg') }}" alt="Foto Unggulan 4">
                    </div>
                    <figcaption>[Judul foto 4 — caption]</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section>
        <div class="wrap reveal"><span class="eyebrow">Destinasi Wisata</span>
            <h2>Wisata Desa</h2>
            <div class="grid">
                <article class="card reveal">
                    <div class="wisata-img-container">
                        <img src="{{ asset('img/Background/S3.jpg') }}" alt="Nama Wisata" class="wisata-img">
                    </div>
                    <div class="in"><span class="tag">[Kategori Wisata]</span>
                        <h3 style="color: #C6A76A">[Nama Wisata]</h3>
                        <p>[Deskripsi]</p><a href="{{ route('informasiDesa') }}#wisata">Detail →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section>
        <div class="wrap reveal"><span class="eyebrow">WebGIS Preview</span>
            <h2>Peta Interaktif Desa</h2>

            <section class="map-preview">
                <iframe
                    src="{{ route('webGIS') }}"
                    width="100%"
                    height="350"
                    style="border: 0;"
                    loading="lazy"
                    allowfullscreen>
                </iframe>
            </section>
        </div>
    </section>

    <section>
        <div class="wrap reveal"><span class="eyebrow">KKL Geografi</span>
            <h2>Tiga Peminatan</h2>
            <div class="grid">
                <article class="card reveal">
                    <div class="ph">
                        <img src="{{ asset('img/Background/S3.jpg') }}" alt="Lingkungan & Mitigasi Bencana">
                    </div>
                    <div class="in"><span class="tag">Lingkungan &amp; Mitigasi Bencana</span>
                        <h3>LMB</h3>
                        <p>[Ringkasan]</p><a href="{{ route('mitradesa') }}#lmb">Selengkapnya →</a>
                    </div>
                </article>
                <article class="card reveal">
                    <div class="ph">
                        <img src="{{ asset('img/Background/S3.jpg') }}" alt="Perencanaan Pengembangan Wilayah">
                    </div>
                    <div class="in"><span class="tag">Perencanaan Pengembangan Wilayah</span>
                        <h3>PPW</h3>
                        <p>[Ringkasan]</p><a href="{{ route('mitradesa') }}#ppw">Selengkapnya →</a>
                    </div>
                </article>
                <article class="card reveal">
                    <div class="ph">
                        <img src="{{ asset('img/Background/S3.jpg') }}" alt="Sistem Informasi Geografi">
                    </div>
                    <div class="in"><span class="tag">Sistem Informasi Geografi</span>
                        <h3>SIG</h3>
                        <p>[Ringkasan]</p><a href="{{ route('mitradesa') }}#sig">Selengkapnya →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="wrap reveal"><span class="eyebrow">Informasi Terbaru</span>
            <h2>Berita &amp; Pengumuman</h2>
            <p class="note">[Isi dengan data resmi desa. Tidak ada data fiktif yang dimasukkan.]</p>
        </div>
    </section> --}}
@endsection
