@extends('layouts/main')

@section('isi-konten')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Aplikasi  <span>Pelaporan Bencana</span></h2>
          <p>Meningkatkan kesadaran masyarakat dalam ketangguhan bencana penting untuk memperkuat persiapan, 
            edukasi, dan kolaborasi dalam menghadapi risiko bencana yang dapat meningkatkan kesiapsiagaan dan respons masyarakat.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Tentang Kami</a>
            <a href="https://youtu.be/S1SEHkpshZM" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img class="gambar" src="assets/img/ilustrasi.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Laporkan</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Informasikan</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lokasi</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Terbaru</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Profil</h2>
          <p>Sebuah Lembaga Pemerintah Nonkementerian yang mempunyai tugas membantu Presiden Republik Indonesia dalam melakukan 
            penanggulangan bencana sesuai dengan amanat Undang-Undang Nomor 24 Tahun 2007 tentang Penanggulangan Bencana.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Tugas dan Fungsi BNPB</h3>
            <img src="assets/img/banjir.jpeg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Dalam menjalankan fungsinya, BNPB memiliki fungsi sebagai berikut :</p>
            <p>Melakukan perumusan dan penetapan kebijakan penanggulangan bencana dan penanganan pengungsi dengan bertindak cepat dan tepat serta efektif dan efisien serta
              pengoordinasian pelaksanaan kegiatan penanggulangan bencana secara terencana, terpadu, dan menyeluruh.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Berdasarkan Peraturan Presiden Nomor 1 Tahun 2019 tugas dan fungsi BNPB adalah sebagai berikut
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> menyampaikan informasi kegiatan penanggulangan bencana kepada masyarakat.</li>
                <li><i class="bi bi-check-circle-fill"></i> menggunakan dan mempertanggungjawabkan sumbangan/bantuan nasional dan internasional.</li>
                <li><i class="bi bi-check-circle-fill"></i> melaksanakan kewajiban lain sesuai dengan peraturan perundang-undangan</li>
              </ul>

              <div class="position-relative mt-4">
                <img src="assets/img/ilustrasi2.png" class="img-fluid rounded-4" alt="">
                <a href="https://youtu.be/IJFVib4YiXA" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="assets/img/ilustrasi3.png" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Banjir</strong> Terjadi di Indonesia</p>
            </div>

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Gempa Bumi</strong> Terjadi di Indonesia</p>
            </div>

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Gunung Meletus</strong> Terjadi di Indonesia</p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://youtu.be/heG07vcbf0U" class="glightbox play-btn"></a>
        <h3>Call To Action</h3>
        <p> "Bergabunglah menjadi volunteer siaga bencana! Bersama kita dapat membantu dalam penanggulangan dan pemulihan setelah bencana. 
          Jadilah bagian dari perubahan dan berikan kontribusi positif untuk masyarakat."</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Laporkan Bencana</h2>
          <p>Laporkan bencana yang ada disekitarmu pada kami! 
            Cepat, responsif, dan aman. Laporkan bencana dengan mudah, 
            terima pemantauan real-time, dan dapatkan bantuan yang 
            dibutuhkan. Bersama, kita hadapi bencana!
            </p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>Jawa Timur</h3>
              <p>Laporkan bencana di sekitarmu, bersama kita dapat memberikan pertolongan yang tepat dan menyelamatkan nyawa. Ayo beraksi sekarang!</p>
              <a href="/laporan" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>Jawa Tengah</h3>
              <p>Dorong kesadaran, laporkan bencana. Bersama kita dapat menyebarkan informasi penting, membantu korban, dan membangun keberdayaan komunitas. Ayo berpartisipasi!</p>
              <a href="/laporan" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <h3>Jawa Barat</h3>
              <p>Mari bersatu, laporkan bencana. Dengan melaporkan, kita dapat menyelamatkan nyawa, memberikan bantuan, dan memulihkan daerah terdampak. Bergabunglah dalam aksi kemanusiaan ini!</p>
              <a href="/laporan" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <h3>Wilayah Kalimantan</h3>
              <p>Teruskan kepedulianmu, melaporkan bencana penting. Setiap laporan menjadi langkah awal dalam memberikan bantuan dan memulihkan daerah terdampak. Jadilah suara yang berarti!</p>
              <a href="/laporan" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <h3>Wilayah Sumatera</h3>
              <p>Teruslah melaporkan bencana, menjaga keselamatan, dan membantu mereka yang membutuhkan. Bersama-sama, kita bisa membangun keberdayaan dan mengurangi dampak bencana. Jangan pernah berhenti peduli!</p>
              <a href="/laporan" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <h3>Wilayah Sulawesi</h3>
              <p>Jangan berhenti melaporkan bencana, menjadi mata dan suara untuk mereka yang terkena dampak. Dengan saling peduli dan berbagi informasi, kita bisa menyelamatkan lebih banyak nyawa. Bersama, kita bisa mengubah nasib!</p>
              <a href="/laporan" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Laporan Mereka</h2>
          <p>Bagikan pandangan dan komentar Anda tentang penanganan bencana alam. Suara Anda penting dalam membangun solusi yang lebih baik. 
            Mari bersama-sama meningkatkan keberdayaan masyarakat dalam menghadapi tantangan alam. Silakan berikan pendapat Anda!</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-1.png" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Kurniawati</h3>
                      <h4>Jakarta | 24 Juni 2021 19:30</h4>
                      <hr>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Wilayah terdampak banjir parah, ribuan warga terisolasi, kebutuhan mendesak akan evakuasi, perlindungan, dan pasokan bantuan untuk bertahan hidup.


                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-2.png" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Indah laurena</h3>
                      <h4>Kediri | 13 Januari 2022 09:49  </h4>
                      <hr>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Lokasi terpapar kebakaran besar, evakuasi darurat diperlukan, perlindungan dan pasokan mendesak diperlukan untuk penduduk terdampak.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-3.png" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Sumanto</h3>
                      <h4>Padang | 19 Februari 2022</h4>
                      <hr>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Membutuhkan bantuan mendesak: makanan, air bersih, perlindungan, dan perawatan medis. Mari bersatu membantu mereka yang terkena dampak.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-4.png" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Mat Jack</h3>
                      <h4>Bogor | 20 Februari 2022</h4>
                      <hr>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Longsor dahsyat korban terjebak, bantuan evakuasi, dan tim penyelamat diperlukan dengan segera. Mari bersatu untuk membantu mereka yang terdampak.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-5.png" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Amanda raw</h3>
                      <h4>Malang | 25 Maret 2022</h4>
                      <hr>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Pohon tumbang mengancam keamanan dan merusak infrastruktur sekitar. Diperlukan upaya evakuasi, pemotongan, dan pemulihan segera.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pembaruan Bencana Terkini</h2>
          <p>Selamat datang di layanan berita kami! Dapatkan informasi terkini, faktual, dan beragam tentang berita terkini, hiburan, olahraga, dan banyak lagi. Jangan lewatkan berita terkini, bergabunglah dengan kami sekarang!</p>
        </div>

        <div class="        n portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-gempa">Gempa</li>
              <li data-filter=".filter-banjir">Banjir</li>
              <li data-filter=".filter-gm">Gunung Meletus</li>
              <li data-filter=".filter-lain">Lainnya</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-gempa">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/gempa-aceh" title="More Details">Gempa Aceh Terdahsyat</a></h4>
                  <p>Gempa bumi dahsyat melanda, korban dan kerusakan meluas, bantuan darurat diperlukan dengan segera...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-banjir">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/banjir-bencana-tahunan" title="More Details">Banjir, Bencana Tahunan</a></h4>
                  <p>Banjir parah melanda, ribuan warga terisolasi, upaya evakuasi dan bantuan mendesak diperlukan...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-gm">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/gunung-meletus" title="More Details">Gunung Meletus</a></h4>
                  <p>Gunung meletus dengan hebat, mengancam keamanan, warga dievakuasi, keprihatinan meningkat...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-banjir">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/banjir-masyarakat-terjebak" title="More Details">Banjir, Masyarakat Terjebak</a></h4>
                  <p>Banjir melanda wilayah dengan kekuatan dahsyat, ribuan warga terisolasi....</p>
                  <p>‎</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-banjir">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-2.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-2.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/banjir-surabaya-kok-bisa" title="More Details">Banjir, Surabaya Kok Bisa?</a></h4>
                  <p>Banjir parah melanda, ribuan warga terisolasi, upaya evakuasi dan bantuan mendesak diperlukan...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-lain">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-2.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-2.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/kebakaran-hutan" title="More Details">Kebakaran Hutan</a></h4>
                  <p>Kebakaran hutan meluas, ancaman bagi ekosistem, upaya pemadaman dan...</p>
                  <p>‎</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-gempa">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-2.png" data-gallery="portfolio-gallery-gempa" class="glightbox"><img src="assets/img/portfolio/branding-2.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/gempa-terjadi-lagi" title="More Details">Gempa terjadi lagi??</a></h4>
                  <p>Gempa dahsyat mengguncang, rumah hancur, evakuasi dan dukungan...</p>
                  <p>‎</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-lain">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-2.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/angin-puting-beliung" title="More Details">Angin Puting Beliung</a></h4>
                  <p>Angin puting beliung menerjang, merusak dengan hebat, dukungan dan upaya pemulihan...</p>
                  <p>‎</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-bajir">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-3.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-3.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/banjir-lagi" title="More Details">Banjir Lagi???</a></h4>
                  <p>Banjir melanda daerah dengan kekuatan yang dahsyat, ribuan warga terdampak...</p>
                  <p>‎</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-gempa">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-3.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-3.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/gempa-melanda" title="More Details">Gempa Melanda</a></h4>
                  <p>Gempa bumi mengguncang wilayah, memicu kerusakan serius yang menyebabkan...</p>
                  <p>‎</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-gm">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-3.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-3.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/darurat-gunung-meletus" title="More Details">Darurat Gunung Meletus</a></h4>
                  <p>Gunung meletus mengakibatkan situasi darurat, ribuan penduduk dievakuasi dan dibawa ke tempat....</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-lain">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-3.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-3.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/tanah-longsor-terparah" title="More Details">Tanah Longsor Terparah</a></h4>
                  <p>Tanah longsor merusak wilayah, mengancam keselamatan, upaya evakuasi...</p>
                  <p>‎</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Panduan Edukasi <strong>Penyelamatan</strong></h3>
              <p>
                Dalam panduan ini, kami memberikan informasi penting tentang penyelamatan dan kesiapan dalam menghadapi bencana.
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Mengetahui Jalur Evakuasi
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Ketahui rute yang aman untuk meninggalkan daerah terdampak
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Persediaan Darurat
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Siapkan perbekalan penting seperti makanan, air, dan obat-obatan
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Komunikasi Darurat
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Miliki alat komunikasi darurat seperti radio atau ponsel dengan baterai cadangan.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Peta dan Informasi Bencana
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Pahami risiko bencana di daerah Anda dan cari informasi terkini.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Latihan dan Simulasi
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Terlibat dalam latihan penyelamatan untuk meningkatkan kesiapan.
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

@endsection
