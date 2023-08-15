  @extends('dashboard')
  @section('title', 'Layanan')
  @section('menuLayanan', 'active')

  @section('content')
      <div id="portfolio" class="our-portfolio section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5">
                      <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                          <h4>Layanan Kami</h4>
                          <div class="line-dec"></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="loop owl-carousel">
                          @forelse ($services as $service)
                              <div class="item">
                                  <a href="https://{{ $service->url }}">
                                      <div class="portfolio-item">
                                          <div class="thumb">
                                              <img src="{{ asset('storage/upload/layanan/' . $service->thumbnail) }}"
                                                  alt="">
                                          </div>
                                          <div class="down-content">
                                              <h4>{{ $service->name }}</h4>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                          @empty
                              <h4>Maaf, belum ada data</h4>
                          @endforelse
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div id="services" class="services section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="naccs">
                          <div class="grid">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="menu">
                                          <div class="first-thumb active">
                                              <div class="thumb">
                                                  <span class="icon"><img
                                                          src="{{ asset('template/dashboard') }}/images/service-icon-01.png"
                                                          alt=""></span>
                                                  Web Development
                                              </div>
                                          </div>
                                          <div>
                                              <div class="thumb">
                                                  <span class="icon"><img
                                                          src="{{ asset('template/dashboard') }}/images/service-icon-02.png"
                                                          alt=""></span>
                                                  Network & CCTV
                                              </div>
                                          </div>
                                          <div>
                                              <div class="thumb">
                                                  <span class="icon"><img
                                                          src="{{ asset('template/dashboard') }}/images/service-icon-03.png"
                                                          alt=""></span>
                                                  Informasi Publik
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <ul class="nacc">
                                          <li class="active">
                                              <div>
                                                  <div class="thumb">
                                                      <div class="row">
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="left-text">
                                                                  <h4>Web Development</h4>
                                                                  <p>Web development adalah proses membuat dan memelihara
                                                                      situs web. Hal ini melibatkan penggunaan bahasa
                                                                      pemrograman dan teknologi web untuk membuat halaman
                                                                      web yang dapat diakses melalui internet.</p>
                                                                  <div class="ticks-list"><span><i class="fa fa-check"></i>
                                                                          Perencanaan</span>
                                                                      <span><i class="fa fa-check"></i>
                                                                          Desain</span> <span><i class="fa fa-check"></i>
                                                                          Pengembangan</span>
                                                                      <span><i class="fa fa-check"></i> Uji Coba dan
                                                                          Debugging</span>
                                                                      <span><i class="fa fa-check"></i> Peluncuran</span>
                                                                      <span><i class="fa fa-check"></i> Pemeliharaan</span>
                                                                  </div>

                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                  <img src="{{ asset('template/dashboard') }}/images/services-image.jpg"
                                                                      alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div>
                                                  <div class="thumb">
                                                      <div class="row">
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="left-text">
                                                                  <h4>NETWORK & CCTV ENGINEER</h4>
                                                                  <p>CCTV (Closed Circuit Television) dan Networking
                                                                      Engineering adalah dua teknologi yang berkaitan erat
                                                                      dengan keamanan dan pemantauan, yang memiliki peran
                                                                      penting di era digital saat ini. CCTV digunakan untuk
                                                                      merekam gambar dan suara di suatu tempat atau lokasi
                                                                      tertentu, sedangkan Networking Engineering bertanggung
                                                                      jawab untuk mengelola jaringan komputer dan sistem
                                                                      informasi.</p>
                                                                  <div class="ticks-list"><span><i class="fa fa-check"></i>
                                                                          Pemasangan</span>
                                                                      <span><i class="fa fa-check"></i>
                                                                          Pemantauan</span> <span><i
                                                                              class="fa fa-check"></i> Pemeliharaan</span>
                                                                      <span><i class="fa fa-check"></i> Wifi Publik</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                  <img src="{{ asset('template/dashboard') }}/images/services-image-02.jpg"
                                                                      alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div>
                                                  <div class="thumb">
                                                      <div class="row">
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="left-text">
                                                                  <h4>Informasi Publik</h4>
                                                                  <p>Informasi publik adalah informasi yang dapat diakses
                                                                      dan digunakan oleh masyarakat secara umum. Informasi
                                                                      publik ini biasanya disediakan oleh pemerintah,
                                                                      lembaga publik, dan organisasi lainnya yang
                                                                      berhubungan dengan kepentingan umum. Dalam banyak
                                                                      negara, hak akses terhadap informasi publik dijamin
                                                                      oleh undang-undang, sehingga memungkinkan masyarakat
                                                                      untuk memperoleh informasi yang diperlukan</p>
                                                                  <div class="ticks-list"><span><i class="fa fa-check"></i>
                                                                          Berita Daerah</span>
                                                                      <span><i class="fa fa-check"></i> Berita
                                                                          Pemerintahan</span><span><i
                                                                              class="fa fa-check"></i>
                                                                          Data Statistik</span> <span><i
                                                                              class="fa fa-check"></i> Laporan
                                                                          Keuangan</span>
                                                                      <span><i class="fa fa-check"></i> Kebijakan
                                                                          Publik</span>

                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                  <img src="{{ asset('template/dashboard') }}/images/services-image-03.jpg"
                                                                      alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endsection
