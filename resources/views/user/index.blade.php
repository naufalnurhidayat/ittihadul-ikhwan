<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
      {{-- Link My Style CSS --}}
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Masjid Ittihadul Ikhwan</title>
    </head>
    <body>

        {{-- Navbar --}}
        <div class="navbar-fixed">
            <nav class="orange darken-4">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="/" class="brand-logo"><img src="{{ asset('img/utilities/logo.png') }}" alt="Masjid Ittihadul Ikhwan" width="50" class="d-inline-block align-text-top"></a>
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="/">Beranda</a></li>
                            <li><a href="#about">Tentang</a></li>
                            <li><a href="#kegiatan">Agenda</a></li>
                            <li><a href="#laporan">Laporan</a></li>
                            <li><a href="#lainnya">Lainnya</a></li>
                            <li><a href="/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <ul class="sidenav" id="mobile-nav">
            <li><a href="/">Beranda</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#agenda">Agenda</a></li>
            <li><a href="#laporan">Laporan</a></li>
            <li><a href="#lainnya">Lainnya</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
        {{-- End Navbar --}}


        <!-- slider -->
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="{{ asset('img/slider/slider1.jpg') }}">
                    <div class="caption left-align">
                        <h3>Masjid Ittihadul Ikhwan</h3>
                        <h5 class="light grey-text text-lighten-3">Jl. Abdul Wahab RT.002/ 05 Kelurahan Sawangan, Kecamatan Sawangan – Kota Depok</h5>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('img/slider/slider2.jpeg') }}">
                    <div class="caption right-align">
                        <h3>Masjid Ittihadul Ikhwan</h3>
                        <h5 class="light grey-text text-lighten-3">Dakwah Untuk Umat.</h5>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('img/utilities/banner.jpeg') }}">
                    <div class="caption center-align">
                        <h3>Masjid Ittihadul Ikhwan</h3>
                        <h5 class="light grey-text text-lighten-3">Membangun Umat.</h5>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Tentang -->
        <section id="about" class="about scrollspy">
            <div class="container">
                <div class="row">
                    <h3 class="center light grey-text text-darken-3">Tentang Masjid</h3>
                    <div class="col m6 light">
                        <h5>Pelindung</h5>
                        <ol type="1">
                            <li>Lurah Bedahan</li>
                            <li>Ketua Rukun Warga RW.05 Kelurahan Bedahan</li>
                            <li>Ketua Rukun Tetangga RT.001 RW.05</li>
                        </ol>
                    </div>
                    <div class="col m6 light">
                        <h5>Penasehat</h5>
                        <ol type="1">
                            <li>KH. Ahmad Yani, M.Ag</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col m6 light">
                        <h5>Pimpinan Harian</h5>
                        <ul>
                            <li>Ketua: Ustadz Slamet Rosadi</li>
                            <li>Wakil Ketua: Ustadz Mahfudz Mubarok</li>
                            <li>Sekretaris: Dimas Dwi Putra</li>
                            <li>Wakil Sekretaris: Yos Suharso</li>
                            <li>Bendahara: Transmiranto</li>
                            <li>Wakil Bendahara: E r w i n</li>
                        </ul>
                    </div>
                    <div class="col m6 light">
                        <h5>Bidang Pendidikan dan Dakwah</h5>
                        <ul>
                            <li>Koordinator: Ust. Anwar</li>
                            <ol type="1">
                                <span>Anggota:</span>
                                <li>Ust. Benny Yakoub</li>
                                <li>Ust. Abdul Syukur</li>
                            </ol>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col m6 light">
                        <h5>Bidang Pengembangan Sarana dan Prasarana</h5>
                        <ul>
                            <li>Koordinator: H. Bastian</li>
                            <ol type="1">
                                <span>Anggota:</span>
                                <li>Heru Hendra, Jalur 2 BNI</li>
                                <li>Wahyu Hidayat, Jalur 4 BNI</li>
                                <li>M. Nuh Sandy</li>
                            </ol>
                        </ul>
                    </div>
                    <div class="col m6 light">
                        <h5>Bidang Pengadaan dan Pemeliharaan Barang Inventaris</h5>
                        <ul>
                            <li>Koordinator: H. Dedy Sukardi</li>
                            <ol type="1">
                                <span>Anggota:</span>
                                <li>Subadri</li>
                                <li>Mukmin</li>
                                <li>Cahwana</li>
                            </ol>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col m6 light">
                        <h5>Bidang Sosial dan Pemberdayaan Umat</h5>
                        <ul>
                            <li>Koordinator: Andre ( Swadharma )</li>
                            <ol type="1">
                                <span>Anggota:</span>
                                <li>Musliman Khairi ( Swadharma )</li>
                                <li>Aldi Surya ( Mulia Residence )</li>
                            </ol>
                        </ul>
                    </div>
                    <div class="col m6 light">
                        <h5>Bidang Kemitraan, Informasi dan Komunikasi</h5>
                        <ul>
                            <li>Koordinator: M. Kasim</li>
                            <ol type="1">
                                <span>Anggota:</span>
                                <li>Rizki Maulana</li>
                                <li>Farid</li>
                            </ol>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col m6 light">
                        <h5>Bidang Keagamaan dan Ketertiban</h5>
                        <ul>
                            <li>Koordinator: Sony Haryadi</li>
                            <ol type="1">
                                <span>Anggota:</span>
                                <li>Yan Sukasno</li>
                                <li>Aan Sumantri</li>
                            </ol>
                        </ul>
                    </div>
                    <div class="col m6 light">
                        <h5>Bidang Kepemudaan dan PHBI</h5>
                        <ul>
                            <li>Koordinator: Fikri Nur Apriyanto</li>
                            <ol type="1">
                                <span>Anggota:</span>
                                <li>Zhaga Iman Ritasarbini</li>
                                <li>Ridho Ridwan Ibrahim</li>
                                <li>Muhammad Akbar Ramsha Oetama</li>
                                <li>Wahyudi Ramdhan</li>
                                <li>Muhammad Raihan Alfatih</li>
                                <li>Muhammad Rafli Ecrianto</li>
                                <li>Areshshena Valma Afifi</li>
                                <li>Fahri Husni</li>
                                <li>Muhammad Rayhan Pramono</li>
                                <li>Muhammad Fakhriyansyah</li>
                                <li>Herlangga Aditya Putra</li>
                                <li>Naufaldo Akhdan Rafif</li>
                                <li>Fathan Rezky Irianto</li>
                                <li>Pramuditha Taras Permadi</li>
                            </ol>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kegiatan -->
        <div id="kegiatan" class="parallax-container scrollspy">
            <div class="parallax"><img src="{{ asset('img/utilities/banner.jpeg') }}"></div>

            <div class="container kegiatan">
                <div class="row">
                    <h3 class="light center grey-text text-darken-3">Kegiatan</h3>
                    @foreach($kegiatan as $k)
                        <div class="col m4 s12">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ asset('storage/'. $k->foto) }}">
                                </div>
                                <div class="card-content">
                                    <h6 class="card-title">{{ $k->judul }}</h6>
                                    <p>{{ $k->keterangan }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Laporan -->
        <section class="laporan grey lighten-3 scrollspy" id="laporan">
            <div class="container">
                <h3 class="light center grey-text text-darken-3">Laporan</h3>
                @foreach($laporan as $l)
                    <table>
                        <thead>
                            <tr>
                                <th>Pemasukan</th>
                                <th>Pengeluaran</th>
                                <th>Tanggal</th>
                                <th>Jenis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $l->pemasukan }}</td>
                                <td>{{ $l->pengeluaran }}</td>
                                <td>{{ $l->tanggal }}</td>
                                <td>{{ $l->jenis }}</td>
                            </tr>
                        </tbody>
                    </table>
                @endforeach
            </div>
        </section>

        <!-- Lainnya -->
        <section class="lainnya scrollspy" id="lainnya">
            <div class="container">
                <div class="row">
                    <h3 class="light center grey-text text-darken-3">Lainnya</h3>
                    @foreach($lainnya as $l)
                        <div class="col m4 s12">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ asset('storage/'. $l->foto) }}">
                                </div>
                                <div class="card-content">
                                    <h6 class="card-title">{{ $l->judul }}</h6>
                                    <p>{{ $l->keterangan }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Kontak Kami -->
        <section class="contact grey lighten-2 scrollspy" id="contact">
            <div class="container">
                <h3 class="light center">Kontak</h3>
                <div class="row">
                    <div class="col m5 s12">
                        <div class="card-panel orange darken-4 white-text center">
                            <i class="material-icons">email</i>
                            <h5>Kontak</h5>
                            <span>Telepon: 08589406333</span>
                        </div>
                        <ul class="collection with-header">
                            <li class="collection-header"><h4>Masjid</h4></li>
                            <li class="collection-item">Ittihadul Ikhwan</li>
                            <li class="collection-item">Jl. Abdul Wahab RT.002/ 05 Kelurahan Sawangan, Kecamatan Sawangan – Kota Depok</li>
                            <li class="collection-item">Indonesia</li>
                        </ul>
                    </div>
                    <div class="col m7 s12">
                        <form action="">
                            <div class="card-panel">
                                <h5>Kritik dan Saran</h5>
                                <div class="input-field">
                                    <input type="text" name="nama" id="nama" class="validate" required>
                                    <label for="name">Nama</label>
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" id="email" class="validate" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field">
                                    <input type="number" name="nomor_telepon" required class="validate" id="nomor_telepon">
                                    <label for="nomor_telpon">Nomor Telepon</label>
                                </div>
                                <div class="input-filed">
                                    <label for="message">Pesan</label>
                                    <textarea name="message" id="message" class="materialize-textarea" required></textarea>
                                </div>
                                <button type="submit" class="btn orange darken-4">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="white-text center orange darken-4">
            <p class="flow-text">Masjid Ittihadul Ikhwan. Copyright {{ $tahun }}</p>
        </footer>

        <!-- Compiled and minified JavaScript -->
        <script src="{{ asset('js/materialize.min.js') }}"></script>

        <script>
            const sideNav = document.querySelectorAll('.sidenav');
            M.Sidenav.init(sideNav);

            const slider = document.querySelectorAll('.slider');
            M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 3000
            });

            const parallax = document.querySelectorAll('.parallax');
            M.Parallax.init(parallax);

            const materialbox = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(materialbox);

            const scroll = document.querySelectorAll('.scrollspy');
            M.ScrollSpy.init(scroll, {
            scrollOffset: 50
            });
        </script>
    </body>
  </html>