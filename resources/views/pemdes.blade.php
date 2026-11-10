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
                <a href="#pkk">PKK</a>
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
                                </div><b>WAHYUDIN</b><small>Ketua RT 01</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/KABERI.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>KABERI</b><small>Ketua RT 02</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/ABDUL_HAMIT.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>ABDUL HAMIT</b><small>Ketua RT 03</small>
                            </div>
                        </div>
                     <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/ABDUL_GAPAR.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>ABDUL GAPAR</b><small>Ketua RT 04</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/KABERI.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>KABERI</b><small>Ketua RT 05</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="node">
                                <div class="ph">
                                    <img src="{{ asset('img/Struktur/HUMAIDI.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                                </div><b>HUMAIDI</b><small>Ketua RT 06</small>
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
<section id="pkk" class="pkk">
    <div class="wrap">
        <div class="head"><span class="eyebrow">04 · Tim Penggerak dan Kesejahteraan keluarga</span>
            <span class="eyebrow">TIM PENGGERAK PKK</span>
            <h2>Struktur TP PKK Desa Alat</h2>
            <p>Kecamatan Hantakan, Kabupaten Hulu Sungai Tengah</p>
        </div>

        <div class="pkk-tree">
            
            <!-- LEVEL 1: PIMPINAN & DEWAN PEMBINA -->
            <div class="lvl">PIMPINAN & DEWAN PEMBINA</div>
            <div class="pkk-top-tier">
                <div class="side-box">
                    <b>DEWAN PENYANTUN</b>
                </div>

                <div class="dash-connector"></div>

                <div class="leader-group">
                    <div class="node">
                        <div class="ph">
                        <img src="{{ asset('img/PKK/kamariah.jpeg') }}" alt="Foto LMB" style="width:100%;height:auto">
                        </div>
                        <b>KAMARIYAH</b>
                        <small>KETUA</small>
                    </div>
                    <div class="link"></div>
                    <div class="node">
                        <div class="ph">
                        <img src="{{ asset('img/PKK/misdawati.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                        </div>
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

            <!-- LEVEL 2: BENDAHARA & SEKRETARIS (Ukuran Kartu Sama dengan Ketua) -->
            <div class="lvl">BENDAHARA & SEKRETARIS</div>
            <div class="pkk-mid-tier">
                <!-- Kolom Bendahara -->
                <div class="stack-col">
                    <div class="node">
                        <div class="ph">
                        <img src="{{ asset('img/PKK/muslina.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                        </div>
                        <b>MUSLINA</b>
                        <small>BENDAHARA I</small>
                    </div>
                    <div class="node">
                        <div class="ph">
                        <img src="{{ asset('img/PKK/kosong.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                        </div>
                        <b>Belum Terisi</b>
                        <small>BENDAHARA II</small>
                    </div>
                </div>

                <!-- Kolom Sekretaris -->
                <div class="stack-col">
                    <div class="node">
                        <div class="ph">
                        <img src="{{ asset('img/PKK/helai.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                        </div>
                        <b>HELWI MUTAZAH</b>
                        <small>SEKRETARIS UMUM</small>
                    </div>
                    <div class="node">
                        <div class="ph">
                        <img src="{{ asset('img/PKK/salamiah.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                        </div>
                        <b>SALAMIAH</b>
                        <small>SEKRETARIS T.U.</small>
                    </div>
                </div>
            </div>

            <div class="link stem"></div>

            <!-- LEVEL 3: KELOMPOK KERJA (POKJA) -->
            <div class="lvl">KELOMPOK KERJA (POKJA)</div>
            <div class="pokja-grid">
                
                <!-- POKJA I -->
                <div class="pokja-card">
                    <div class="pokja-header">POKJA I</div>
                    <div class="pokja-body">
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/sitihadijah.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>SITI HADIJAH</b>
                            <small>KETUA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/misri.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>MISRIYANTI</b>
                            <small>WAKIL KETUA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/saudah.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>SAUDAH</b>
                            <small>SEKRETARIS</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/-.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            x</div>
                            <b>ARMIYATI</b>
                            <small>ANGGOTA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/ruhani.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>ROHANI</b>
                            <small>ANGGOTA</small>
                        </div>
                    </div>
                </div>

                <!-- POKJA II -->
                <div class="pokja-card">
                    <div class="pokja-header">POKJA II</div>
                    <div class="pokja-body">
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/maimunah.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>MAIMUNAH</b>
                            <small>KETUA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/rokayah.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>RUKAYAH</b>
                            <small>WAKIL KETUA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/jamilah.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>JAMILAH</b>
                            <small>SEKRETARIS</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/malik.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>ABDUL MALIK</b>
                            <small>ANGGOTA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/sumiati.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>SUMIATI</b>
                            <small>ANGGOTA</small>
                        </div>
                    </div>
                </div>

                <!-- POKJA III -->
                <div class="pokja-card">
                    <div class="pokja-header">POKJA III</div>
                    <div class="pokja-body">
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/asnawati.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>ASNAWATI</b>
                            <small>KETUA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/rabiatul.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>RABIATUL ADAWIYAH</b>
                            <small>WAKIL KETUA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/widia.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>WIDIA WATI</b>
                            <small>SEKRETARIS</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/jumiati.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>JUMIATI</b>
                            <small>ANGGOTA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/rusmayati.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>RUSMAYATI</b>
                            <small>ANGGOTA</small>
                        </div>
                    </div>
                </div>

                <!-- POKJA IV -->
                <div class="pokja-card">
                    <div class="pokja-header">POKJA IV</div>
                    <div class="pokja-body">
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/norhayati.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>NORHAYATI</b>
                            <small>KETUA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/kamariati.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>KAMARIATI</b>
                            <small>WAKIL KETUA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/mahriati.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>MAHRIATI</b>
                            <small>SEKRETARIS</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/wahdiah.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>WAHDIAH</b>
                            <small>ANGGOTA</small>
                        </div>
                        <div class="node pokja-node">
                            <div class="ph">
                            <img src="{{ asset('img/PKK/novita.jpg') }}" alt="Foto LMB" style="width:100%;height:auto">
                            </div>
                            <b>NOVITA H</b>
                            <small>ANGGOTA</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
    </main>

    @endsection
