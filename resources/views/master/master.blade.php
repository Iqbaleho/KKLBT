<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
        <title> {{ $title }} | Desa Alat</title>
        <meta name="description" content="Website Desa Alat | Kecamatan Hantakan">
        <link rel="icon" href="{{ asset('img/Logo/HST.png') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@400;500&display=swap"
            rel="stylesheet">

            @if(request()->routeIs('pemdes'))
                <link rel="stylesheet" href="{{ asset('css/stylepem.css') }}">
            @elseif(request()->routeIs('mitradesa'))
                <link rel="stylesheet" href="{{ asset('css/stylemitra.css') }}">
            @elseif(request()->routeIs('informasiDesa'))
                <link rel="stylesheet" href="{{ asset('css/styleinfo.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            @endif
    </head>
    <body>
        <header class="nav ">
            <div class="wrap">
                <a class="brand" href="#"><img src="{{ asset('img/Logo/HST.png') }}" alt=""><span><b>DESA ALAT</b><small>OFFICIAL VILLAGE PORTAL</small></span></a>
                <input type="checkbox" id="tg"><label class="burger" for="tg" aria-label="Menu">&#9776;</label>
                <ul class="menu">
                    <li><a href="{{ route('beranda') }}">Profil Desa</a></li>
                    <li>
                        <a href="{{ route('pemdes') }}">Pemerintah Desa</a>
                    </li>
                    <li>
                        <a href="{{ route('mitradesa') }}">Mitra Desa</a>


                    </li>
                    <li> <a href="{{ route('informasiDesa') }}">Informasi Desa</a></li>
                    <li><a href="{{ route('webGIS') }}">WebGIS</a></li>
                </ul>
            </div>
        </header>

        @yield('section')

        <footer>
            <div class="wrap grid">
                <div>
                    <h3>Alamat Desa</h3>
                    <a href="{{ route('beranda') }}">Desa Alat</a>
                    <br>
                    <a href="#">Kecamatan Hantakan</a>
                    <br>
                    <a target="_blank" href="https://hstkab.go.id/">Kabupaten Hulu Sungai Tengah</a>
                    <br>
                    <p>-</p>
                    <p>Alamat Kantor Desa Alat - Nomor Kontak</p>
                </div>
                <div>
                    <h3>Navigasi</h3>
                    <a href="{{ route('beranda') }}">Profil Desa</a>
                    <br>
                    <a href="{{ route('pemdes') }}">Pemerintah Desa</a>
                    <br>
                    <a href="{{ route('informasiDesa') }}">Informasi Desa</a>
                    <br>
                    <a href="{{ route('mitradesa') }}">Mitra Desa</a>
                    <br>
                    <a href="{{ route('informasiDesa') }}#wisata">Wisata</a>
                    <br>
                    <a href="{{ route('webGIS') }}">WebGIS</a>
                </div>
                <div>
                    <h3>KKL Terapan Geografi</h3>
                    <a href="https://geografi.ulm.ac.id/" target="_blank">Program Studi Geografi</a><br>
                    <a href="https://fisip.ulm.ac.id/id/" target="_blank">Fakultas Ilmu Sosial dan Ilmu Politik</a><br>
                    <a href="https://ulm.ac.id/id/" target="_blank">Universitas Lambung Mangkurat</a><br>
                    <p>-</p>
                    <a href="{{ route('mitradesa') }}#lmb">Lingkungan dan Mitigasi Bencana</a><br>
                    <a href="{{ route('mitradesa') }}#ppw">Perencanaan Pengembangan Wilayah</a><br>
                    <a href="{{ route('mitradesa') }}#sig">Sistem Informasi Geografi</a><br>
                </div>
            </div>
            <div class="wrap copy">&copy; 2026 Pemerintah Desa [Desa Alat] · Dokumentasi KKL Terapan Geografi</div>
        </footer>
        <script>// Interaksi minimum: navbar solid saat scroll + scroll-reveal. Konten tetap tampil tanpa JS.
            (function () {
                var n = document.querySelector('.nav');
                function s() { if (n) n.classList.toggle('scrolled', window.scrollY > 40) } s(); addEventListener('scroll', s, { passive: true });
                var r = document.querySelectorAll('.reveal');
                if ('IntersectionObserver' in window) { var o = new IntersectionObserver(function (e) { e.forEach(function (x) { if (x.isIntersecting) { x.target.classList.add('in'); o.unobserve(x.target) } }) }, { threshold: .1 }); r.forEach(function (el) { o.observe(el) }) } else r.forEach(function (el) { el.classList.add('in') })
            })();
        </script>
    </body>

</html>
