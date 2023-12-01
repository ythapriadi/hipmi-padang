@extends('frontend.layout.layout')
@section('title')
    BPC PADANG | HOME
@endsection


@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Sambutlah keberagaman dan inovasi di <span>Badang Pengurus Cabang Padang Himpunan Pengusaha Muda Indonesia Padang <br>(BPC HIPMI PADANG)</span></h2>
                    <p class="animate__animated animate__fadeInUp">Tempat Bersatu, Berkembang, dan Berkontribusi.</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">VISI</h2>
                    <p class="animate__animated animate__fadeInUp">Menjadikan HIPMI Padang sebagai organisasi pencetak
                        pengusaha muda dan pembentuk ekosistemwirausahaterbaik di Sumatera Barat melalui program kerja yang
                        tepat inovatif dengan semangat dan marwah organisasi Hipmi Padang.</p>
                    {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                        More</a> --}}
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">MISI</h2>
                    <p class="animate__animated animate__fadeInUp">Menjadikan HIPMI Padang sebagai organisasi pencetak
                        pengusaha muda dan pembentuk ekosistemwirausaha terbaik di Sumatera Barat melalui program kerja yang
                        tepat inovatif dengan semangat dan marwah organisasi HIPMI Padang</p>
                    {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                        More</a> --}}
                </div>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Icon Boxes Section ======= -->
        {{-- <section id="icon-boxes" class="icon-boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                            sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
        <!-- End Icon Boxes Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>TENTANG KAMI</h2>
                    <p>HIPMI memiliki 34 Badan Pengurus Daerah di seluruh Indonesia. HIPMI Padang yang ada di Sumatera Barat saat ini mempunyai Badan Pengurus Cabang (BPC) yang melingkupi 5 daerah di wilayah Sumatera Barat. Saat ini terdapat lebih dari 3000 anggota yang telah terdaftar di HIPMI Padang.</p>
                </div>
                <div class="row content">
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>VISI</h3>
                        <p>
                            Menjadikan HIPMI Padang sebagai organisasi pencetak pengusaha muda dan pembentuk ekosistem
                            wirausaha
                            terbaik di Sumatera Barat melalui program kerja yang tepat inovatif dengan semangat dan marwah
                            organisasi HIPMI Padang
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>MISI</h3>
                        <p>Menjadikan HIPMI Padang sebagai organisasi pencetak pengusaha muda dan pembentuk
                            ekosistemwirausaha terbaik di Sumatera Barat melalui program kerja yang tepat inovatif dengan
                            semangat dan marwah organisasi HIPMI Padang</p>
                        <ul>
                            <li><i class="ri-circle-fill"></i>Bangun koneksi dan kolaborasi dengan semangat inovasi dan
                                optimalisasi
                            </li>
                            <li><i class="ri-circle-fill"></i>Pengembangan ilmu dan kompetensi untuk anggota
                            </li>
                            <li><i class="ri-circle-fill"></i>Membantu solusi modal dan akses pasar untuk anggota
                            </li>
                            <li><i class="ri-circle-fill"></i>Menyebarkan semangat kewirausahaan di DKI Jakarta
                            </li>
                        </ul>
                    </div>
                    <div>
                        {{-- <a href="#" class="btn-learn-more">Selengkapnya...</a> --}}
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 align-items-stretch position-relative video-box"
                        style='background-image: url("assets/template/img/why-us.jpg");' data-aos="fade-right">
                        <a href="https://youtu.be/4h5IQNy40po?si=6oN2LQU_YDC1wKHy" class="glightbox play-btn mb-4"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch"
                        data-aos="fade-left">

                        <div class="content">
                            <h3><strong>BPC HIPMI Padang</strong></h3>
                        </div>
                        <div class="accordion-list">
                            <ul>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>01</span> Apa itu BPC HIPMI Padang? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Badan Pengurus Cabang Himpunan Pengusaha Muda Indonesia (BPC HIPMI) merupakan wadah bagi seluruh pengusaha muda yang ada di Kota Padang yang memiliki tujuan dan visi misi yang sama dalam mengembangkan perekonomian dan bersinergi dengan pemerintah Kota Padang
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200">
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> Apa Tujuan dari BPC HIPMI Padang ? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            merangkul pengusaha-pengusaha muda di Kota Padang khususnya menambah relasi, inovasi dalam menciptakan lapangan kerja.
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="300">
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> BPC HIPMI Padang Bergerak dibidang Apa ? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            HIPMI (Himpunan Pengusaha Muda Indonesia) adalah organisasi independen non partisan para pengusaha muda Indonesia yang bergerak di bidang perekonomian.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>STRUKTUR ORGANISASI</h2>
                    Badan Pengurus Cabang Padang
                </div>
                <div class="row">
                    <h2>Pengurus Inti</h2>
                    <hr>
                    @foreach ($tb_pengurusinti as $data)
                        <div class="col-lg-6 mt-4 aos-init aos-animate" data-aos="fade-up">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="{{ asset('assets/images/' . $data->gambar_pengurusinti) }}"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>{{ $data->nama_pengurusinti }}</h4>
                                    <span>{{ $data->tb_posisi->nama_posisi }}</span>
                                    {{-- <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p> --}}
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div>
                        <hr class="border border-5 border-dark">
                    </div>
                    @foreach ($tb_struktur as $data)
                        <div class="col-lg-6 mt-4 aos-init aos-animate" data-aos="fade-up">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="{{ asset('assets/images/' . $data->gambar_anggota) }}"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>{{ $data->nama_anggota }}</h4>
                                    <span>{{ $data->tb_posisi->nama_posisi }}</span>
                                    {{-- <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p> --}}
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    {{-- <div class="col-lg-9 text-center text-lg-start">
                        <h3>Call To Action</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit
                            anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div> --}}
                </div>

            </div>
        </section>
        <!-- End Cta Section -->

        <section id="portfolio" class="portfoio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>SEKTOR USAHA</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row portfolio-container">
                    @foreach ($tb_sektor as $data)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('assets/images/'. $data->gambar_sektor) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $data->nama_sektor }}</h4>
                            <p>.....</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Portfoio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>NILAI - NILAI HIPMI</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <h4><a href="#">Koneksi - Solusi</a></h4>
                            <p>HIPMI mempertemukan antar ribuan anggota lainnya, lintas generasi dan daerah. Perluas
                                jangkauan koneksi untuk menyelesaikan tantangan kewirausahaan Anda.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart"></i>
                            <h4><a href="#">Aktual - Kapital</a></h4>
                            <p>apatkan informasi terbaru dan kesempatan terlibat dalam berbagai program peningkatan
                                kapasitas khusus anggota, serta akses modal melalui banyak mitra HIPMI.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="600">
                        <div class="icon-box">
                            <i class="bi bi-briefcase"></i>
                            <h4><a href="#">Kolaborasi - Kompetisi</a></h4>
                            <p>Petakan pesaing dan mitra usaha Anda melalui HIPMI. Bangun kolaborasi untuk memajukan usaha
                                Anda dalam berkompetisi.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="600">
                        <div class="icon-box">
                            <i class="bi bi-rocket"></i>
                            <h4><a href="#">
                                    Berfokus Pada Membuat Perbedaan Besar & Terukur </a></h4>
                            <p>Memposisikan diri sebagai pelayanan dan faktor mempromosikan dalam pembangunan ekonomi dan
                                bisnis Indonesia di masa depan sesuai visi misi strategi HIPMI. </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Apa keuntungan bergabung dengan BPC HIPMI Padang? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Keanggotaan dalam HIPMI juga memberikan representasi dan advokasi, sehingga suara Anda didengar dalam perumusan kebijakan yang berhubungan dengan dunia usaha. Dengan menjadi anggota HIPMI, Anda dapat memperluas jangkauan pasar, meningkatkan eksposur bisnis, dan mengakses sumber daya dan informasi yang bernilai.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">bagaimana cara bergabung dengan BPC HIPMI Padang ?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Menjadi anggota Himpunan Pengusaha Muda Indonesia (Hipmi) diperlukan cara dan syarat-syarat yang diperlukan. cara dan syarat menjadi anggota Hipmi, antara lain: <br>
                                    1. Warga Negara Republik Indonesia <br>
                                    2. Pemilik/penanggun jawab usaha<br>
                                    3. Berusia 18 tahun hingga 40 tahun<br>
                                    4. Melampirkan lembar fotokopi identitas dan legalitas usaha.<br>
                                    5. Membayar iuran keanggotaan dan biaya administrasi.<br>
                                    6. Bersedia mematuhi tata tertib, anggaran dasar dan anggaran rumah tangga organisasi.
                                </p>
                            </div>
                        </li>

                        {{-- <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar
                                    elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                                    pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at
                                    elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam
                                sem et
                                tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                    ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                    adipiscing
                                    bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius
                                vel
                                pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                    integer
                                    malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem
                                    dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li> --}}

                    </ul>
                </div>

            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>

                <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
                    <div class="col-lg-5">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Padang, Sumatera Barat</p>
                            </div>
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>Hipmipadang@gmail.com</p>
                            </div>
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 813-7460-xxxx</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
@endsection
