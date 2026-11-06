@extends('master.master')

@section('section')



    <main>
        <section class="hero" style="padding-block:90px 70px">
            <div class="wrap">
                <nav class="crumb" aria-label="Breadcrumb">
                    <a href="{{ route('beranda') }}">Beranda</a> / <span>Pemdes</span></nav>
                <span class="eyebrow">Pemerintahan Desa</span>
                <h1>Pemerintahan Desa Alat</h1>
                <p>Arah pembangunan, susunan aparat, dan lembaga permusyawaratan yang menjalankan tata kelola desa
                    secara transparan dan akuntabel.</p>
                <a class="btn fill" href="#visi-misi">Mulai dari Visi &amp; Misi</a>
            </div>
        </section>

        <nav class="snav" aria-label="Bagian halaman">
            <div class="wrap">
                <a href="#visi-misi">Visi &amp; Misi</a>
                <a href="#pemerintah-desa">Pemerintah Desa</a>
                <a href="#bpd">BPD</a>
                <a href="#pkk-section">PKK</a>
            </div>
        </nav>

        <section id="visi-misi" class="vm">
            <div class="wrap">
                <span class="eyebrow">01 · Visi &amp; Misi</span>
                <span class="period">Periode [2022 – 2028]</span>
                <blockquote class="vision" style="margin-inline:0">“MEMBANGUN TATA KELOLA PEMERINTAHAN YANG AMANAH, JUJUR DAN BERTANGGUNG JAWAB, DEMI TERWUJUDNYA MASYARAKAT SEJAHTERA”</blockquote>
                <h2>Misi</h2>
                <ol class="mis">
                    <li style="text-align: justify;"><b>01</b><span> Mengoptimalkan kinerja Perangkat Desa Sesuai Tugas Pokok dan Fungsinya </span></li>
                    <li style="text-align: justify;"><b>02</b><span> Melaksanakan Pembangunan di segala dengan baik, jujur, transparan serta dapat di pertanggung jawabkan </span></li>
                    <li style="text-align: justify;"><b>03</b><span> Menjalin hubungan baik dengan tokoh masyarakat, Pemuda dan Tokoh Agama </span></li>

                </ol>
                <p class="note">Sumber: [RPJMDes / Perdes No. …, tahun …]. Isi dengan teks resmi, tanpa parafrase.</p>
            </div>
        </section>

        <section id="pemerintah-desa">
            <div class="wrap">
                <div class="head"><span class="eyebrow">02 · Pemerintah Desa</span>
                    <h2>Struktur Aparat Desa</h2>
                    <p>Bagan di bawah mengikuti struktur resmi desa. Tambah atau hapus kartu sesuai jabatan yang ada.
                    </p>
                </div>
                <div class="chart">
                    <div class="tier">
                        <div class="node">
                            <div class="ph">
                                <img src="{{ asset('img/Struktur/FAQIH.png') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div><b>FAQIH ZARJANI</b><small>Kepala Desa</small>
                        </div>
                    </div>
                    <div class="link"></div>
                    <div class="tier">
                        <div class="node">
                            <div class="ph">
                                <img src="{{ asset('img/Struktur/HIJRIANUR.jpeg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>HIJRIANUR.S.PD</b><small>Sekretaris Desa</small>
                        </div>
                    </div>

                    <p class="lvl">Unsur Staf (Kaur)</p>
                    <div class="branch" style="--inset:100px">
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                 <img src="{{ asset('img/Struktur/MISDAWATI.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>BDN.MISDAWATI.STR.KEB</b><small>Kaur Tata Usaha &amp; Umum</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                <img src="{{ asset('img/Struktur/SUPRAYADI.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>SUPRAYADI</b><small>Kaur Keuangan</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                <img src="{{ asset('img/Struktur/HELWI.png') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>HELWI MUTAZAH</b><small>Kaur Keuangan</small>
                            </div>
                        </div>
                    </div>

                    <p class="lvl">Unsur Pelaksana Teknis (Kasi)</p>
                    <div class="branch" style="--inset:100px">
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/SYAIFUL.png') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>SYAIFUL RAHMAN</b><small>Kasi Pemerintahan</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/YAMIN.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>MUHAMMAD YAMIN</b><small>Kasi Pelayanan</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/SYAMSUDINNOR.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>SYAMSUDINNOR</b><small>Kasi Pelayanan</small>
                            </div>
                        </div>
                    </div>

                    <p class="lvl">Unsur Kewilayahan</p>
                    <div class="branch" style="--inset:100px">
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/WAHYUDIN.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>WAHYUDIN</b><small>Kepala Dusun I</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/KABERI.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>KABERI</b><small>Kepala Dusun II</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/ABDUL_HAMIT.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>ABDUL HAMIT</b><small>Kepala Dusun III</small>
                            </div>
                        </div>
                     <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/ABDUL_GAPAR.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>ABDUL GAPAR</b><small>Kepala Dusun IV</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/KABERI.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>KABERI</b><small>Kepala Dusun V</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/HUMAIDI.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>HUMAIDI</b><small>Kepala Dusun VI</small>
                            </div>
                        </div>
                    </div>
                </div>
            </d>
        </section>

        <section id="bpd" class="bpd">
            <div class="wrap">
                <div class="head"><span class="eyebrow">03 · Badan Permusyawaratan Desa</span>
                    <h2>Struktur BPD</h2>
                    <p>Lembaga perwakilan masyarakat yang membahas dan menyepakati Rancangan Peraturan Desa bersama
                        Kepala Desa serta mengawasi kinerja pemerintah desa.</p>
                </div>
                <div class="chart">
                    <div class="tier">
                        <div class="node">
                            <div class="ph">
                                <img src="{{ asset('img/Struktur/HAIRULLAH.png') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div><b>M. HAIRULLAH, S.sos</b><small>Ketua BPD</small>
                        </div>
                    </div>
                    <div class="link"></div>
                    <div class="tier">
                        <div class="node">
                            <div class="ph">
                                <img src="{{ asset('img/Struktur/FATIMAH.png') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div><b>SITI FATIMAH, S.Pd</b><small>Wakil Ketua</small>
                        </div>
                    </div>
                    <div class="link"></div>
                    <div class="tier">
                        <div class="node">
                            <div class="ph">
                                <img src="{{ asset('img/Struktur/ENDANG.png') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>ENDANG LESTARI, S.Pd</b><small>Sekretaris</small>
                        </div>
                    </div>
                    <p class="lvl">Anggota</p>
                    <div class="branch" style="--inset:100px">
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/RUSIAN.png') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>RUSIAN</b><small>Anggota</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/KHAIRIL.png') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>KHAIRIL ANWAR</b><small>Anggota</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/ABDUL.jpeg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>M. ABDUL RASYID</b><small>Anggota</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/YULIATI.png') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>YULIATI</b><small>Anggota</small>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="note" style="text-align:center">Wakil Ketua dan pembagian bidang bersifat opsional; hapus bila
                    tidak ada pada struktur resmi.</p>
            </div>
        </section>

<!-- STRUKTUR TIM PENGGERAK PKK -->
<section id="pkk-section">
    <div class="wrap">
            <span class="eyebrow">04. TIM PENGGERAK PKK</span>
            <h2>Struktur TP PKK Desa Alat</h2>
            <p>Kecamatan Hantakan, Kabupaten Hulu Sungai Tengah</p>
        </div>

        <div class="pkk-tree">
            <!-- LEVEL 1: Dewan Penyantun - Ketua & Wakil - Fasilitator -->
            <div class="lvl">PIMPINAN & DEWAN PEMBINA</div>
            <div class="pkk-top-tier">
                <div class="side-box">
                    <b>DEWAN PENYANTUN</b>
                </div>

                <div class="dash-connector"></div>

                <div class="leader-group">
                    <div class="node">
                        <div class="ph">[FOTO]</div>
                        <b>KAMARIYAH</b>
                        <small>KETUA</small>
                    </div>
                    <div class="link"></div>
                    <div class="node">
                        <div class="ph">[FOTO]</div>
                        <b>MISDAWATI</b>
                        <small>WAKIL KETUA</small>
                    </div>
                </div>

                <div class="dash-connector"></div>

                <div class="side-box">
                    <b>FASILITATOR</b>
                </div>
            </div>

            <div class="link stem"></div>

            <!-- LEVEL 2: Bendahara & Sekretaris -->
            <div class="lvl">BENDAHARA & SEKRETARIS</div>
            <div class="pkk-mid-tier">
                <!-- Bendahara Stack -->
                <div class="stack-col">
                    <div class="node inline-node">
                        <div class="ph-sm">[FOTO]</div>
                        <div class="node-info">
                            <b>MUSLINA</b>
                            <small>BENDAHARA I</small>
                        </div>
                    </div>
                    <div class="node inline-node">
                        <div class="ph-sm">[FOTO]</div>
                        <div class="node-info">
                            <b>Belum Terisi</b>
                            <small>BENDAHARA II</small>
                        </div>
                    </div>
                </div>

                <!-- Sekretaris Stack -->
                <div class="stack-col">
                    <div class="node inline-node">
                        <div class="ph-sm">[FOTO]</div>
                        <div class="node-info">
                            <b>HELWI MUTAZAH</b>
                            <small>SEKRETARIS UMUM</small>
                        </div>
                    </div>
                    <div class="node inline-node">
                        <div class="ph-sm">[FOTO]</div>
                        <div class="node-info">
                            <b>SALAMIAH</b>
                            <small>SEKRETARIS T.U.</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="link stem"></div>

            <!-- LEVEL 3: Pokja I - IV -->
            <div class="lvl">KELOMPOK KERJA (POKJA)</div>
            <div class="pokja-grid">
                <!-- POKJA I -->
                <div class="pokja-card">
                    <div class="pokja-header">POKJA I</div>
                    <div class="pokja-body">
                        <div class="pokja-item">
                            <b>SITI HADIJAH</b>
                            <small>KETUA</small>
                        </div>
                        <div class="pokja-item">
                            <b>MISRIYANTI</b>
                            <small>WAKIL KETUA</small>
                        </div>
                        <div class="pokja-item">
                            <b>SAUDAH</b>
                            <small>SEKRETARIS</small>
                        </div>
                        <div class="pokja-item">
                            <b>ARMIYATI</b>
                            <small>ANGGOTA</small>
                        </div>
                        <div class="pokja-item">
                            <b>ROHANI</b>
                            <small>ANGGOTA</small>
                        </div>
                    </div>
                </div>

                <!-- POKJA II -->
                <div class="pokja-card">
                    <div class="pokja-header">POKJA II</div>
                    <div class="pokja-body">
                        <div class="pokja-item">
                            <b>MAIMUNAH</b>
                            <small>KETUA</small>
                        </div>
                        <div class="pokja-item">
                            <b>RUKAYAH</b>
                            <small>WAKIL KETUA</small>
                        </div>
                        <div class="pokja-item">
                            <b>JAMILAH</b>
                            <small>SEKRETARIS</small>
                        </div>
                        <div class="pokja-item">
                            <b>ABD. MALIK</b>
                            <small>ANGGOTA</small>
                        </div>
                        <div class="pokja-item">
                            <b>SUMIATI</b>
                            <small>ANGGOTA</small>
                        </div>
                    </div>
                </div>

                <!-- POKJA III -->
                <div class="pokja-card">
                    <div class="pokja-header">POKJA III</div>
                    <div class="pokja-body">
                        <div class="pokja-item">
                            <b>ASNAWATI</b>
                            <small>KETUA</small>
                        </div>
                        <div class="pokja-item">
                            <b>RABIATUL A</b>
                            <small>WAKIL KETUA</small>
                        </div>
                        <div class="pokja-item">
                            <b>WIDIA WATI</b>
                            <small>SEKRETARIS</small>
                        </div>
                        <div class="pokja-item">
                            <b>JUMIATI</b>
                            <small>ANGGOTA</small>
                        </div>
                        <div class="pokja-item">
                            <b>RUSMAYATI</b>
                            <small>ANGGOTA</small>
                        </div>
                    </div>
                </div>

                <!-- POKJA IV -->
                <div class="pokja-card">
                    <div class="pokja-header">POKJA IV</div>
                    <div class="pokja-body">
                        <div class="pokja-item">
                            <b>NORHAYATI</b>
                            <small>KETUA</small>
                        </div>
                        <div class="pokja-item">
                            <b>KAMARIATI</b>
                            <small>WAKIL KETUA</small>
                        </div>
                        <div class="pokja-item">
                            <b>MAHRIATI</b>
                            <small>SEKRETARIS</small>
                        </div>
                        <div class="pokja-item">
                            <b>WAHDIAH</b>
                            <small>ANGGOTA</small>
                        </div>
                        <div class="pokja-item">
                            <b>NOVITA H</b>
                            <small>ANGGOTA</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <section class="cta">
            <div class="wrap">
                <span class="eyebrow">Lanjutkan Menjelajah</span>
                <h2>Kenali desa lebih dekat.</h2>
                <div class="btns"><a class="btn fill" href="{{ route('beranda') }}">Profil Desa</a><a class="btn"
                        href="{{ route('informasiDesa') }}">Informasi Desa</a><a class="btn" href="{{ route('beranda') }}">← Kembali ke
                        Beranda</a></div>
            </div>
        </section>
    </main>

    @endsection
