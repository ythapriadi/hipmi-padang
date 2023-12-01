@extends('frontend.layout.layout')
@section('title')
    BPC PADANG | BLOG
@endsection

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('index') }}">Home</a></li>
                </ol>
                <h2>Berita</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <div class="card">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <section id="blog" class="blog">
                        <div class="container aos-init aos-animate" data-aos="fade-up">
                            <div class="row">
                                <div class="col-lg-8 entries">
                                    @foreach ($tb_berita as $data)
                                        <article class="entry">
                                            <div class="entry-img">
                                                <img src="{{ asset('assets/images/' . $data->gambar_berita) }}"
                                                    alt="" class="img-fluid">
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="/lihat-berita/{{ $data->slug }}">{{ $data->judul_berita }}</a>
                                            </h2>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                            href="blog-single.html">John Doe</a></li>
                                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                                        {{ $data->tanggal_berita }}</li>
                                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                            href="blog-single.html">12 Comments</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content">
                                                <p>
                                                    {{ $data->lead_berita }}
                                                </p>
                                                <div class="read-more">
                                                    <a href="/lihat-berita/{{ $data->slug }}">Read More</a>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                                <div class="col-lg-4">
                                    <div class="sidebar">
                                        <h3 class="sidebar-title">Search</h3>
                                        <div class="sidebar-item search-form">
                                            <form action="">
                                                <input type="text">
                                                <button type="submit"><i class="bi bi-search"></i></button>
                                            </form>
                                        </div><!-- End sidebar search formn-->

                                        <h3 class="sidebar-title">Kategori</h3>
                                        <div class="sidebar-item categories">
                                            <ul>
                                                @foreach ($tb_kategori as $data)
                                                <li><a href="">{{ $data->nama_kategori }} <span></span></a></li>
                                                @endforeach

                                            </ul>
                                        </div><!-- End sidebar categories-->

                                        <h3 class="sidebar-title">Recent Posts</h3>
                                        {{-- <div class="sidebar-item recent-posts">
                                            <div class="post-item clearfix">
                                                <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                                <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                                <time datetime="2020-01-01">Jan 1, 2020</time>
                                            </div>

                                            <div class="post-item clearfix">
                                                <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                                                <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                                                <time datetime="2020-01-01">Jan 1, 2020</time>
                                            </div>

                                            <div class="post-item clearfix">
                                                <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                                                <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati
                                                        ut</a></h4>
                                                <time datetime="2020-01-01">Jan 1, 2020</time>
                                            </div>

                                            <div class="post-item clearfix">
                                                <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                                                <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                                                <time datetime="2020-01-01">Jan 1, 2020</time>
                                            </div>

                                            <div class="post-item clearfix">
                                                <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                                                <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a>
                                                </h4>
                                                <time datetime="2020-01-01">Jan 1, 2020</time>
                                            </div>

                                        </div> --}}
                                        <!-- End sidebar recent posts-->
                                        <h3 class="sidebar-title">Tags</h3>
                                        <div class="sidebar-item tags">
                                            <ul>
                                                <li><a href="#">App</a></li>
                                                <li><a href="#">IT</a></li>
                                                <li><a href="#">Business</a></li>
                                                <li><a href="#">Mac</a></li>
                                                <li><a href="#">Design</a></li>
                                                <li><a href="#">Office</a></li>
                                                <li><a href="#">Creative</a></li>
                                                <li><a href="#">Studio</a></li>
                                                <li><a href="#">Smart</a></li>
                                                <li><a href="#">Tips</a></li>
                                                <li><a href="#">Marketing</a></li>
                                            </ul>
                                        </div><!-- End sidebar tags-->
                                    </div>
                                    <!-- End sidebar -->
                                </div>
                                <!-- End blog sidebar -->
                            </div>
                        </div>
                    </section>
                    <!-- End blog entries list -->
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
