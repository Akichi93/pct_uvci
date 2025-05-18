@extends('layouts.front.app')
@section('content')
    <!-- =====main section===== -->
    <main class="home-one">
        <!-- =====Banner Section===== -->

        @include('layouts.front.banner')
        <!-- =====banner card===== -->
        <div class="banner-card" data-aos="fade-up">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4 g-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="images/multiple-use/banner-card/church-animation.gif" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Ambassades
                                    </h4>
                                </a>
                                <p class="card-text">In moments of medical emergencies, swift action is imperative.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="images/multiple-use/banner-card/planning-animation.gif" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">LInstitutions
                                    </h4>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="images/multiple-use/banner-card/recycle-animation.gif" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Hopitaux
                                    </h4>
                                </a>
                                <p class="card-text">Tortor neque sed tellus est eget dui
                                    id ante tristique tristique dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="images/multiple-use/banner-card/travel-insurance-animation.gif"
                                class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <a href="service-detail.html">
                                    <h4 class="card-title">Banques
                                    </h4>
                                </a>
                                <p class="card-text">Tortor neque sed tellus est eget dui
                                    id ante tristique tristique dolor.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ======About Company section======= -->
        <section class="about-company">
            <div class="container">
                <div class="row align-items-center py-4">
                    <div class="col-12 col-md-12 col-lg-5 col-xl-5" data-aos="fade-up">
                        <div class="images">
                            <img class="img-fluid img-one" src="images/01_home/about-company/image-01.png" alt="">
                            <img class="img-fluid img-tow left-slider" src="images/01_home/about-company/image-02.png"
                                alt="">
                        </div>
                    </div>
                    <div class="remove-div one-first col-12 col-md-12 col-lg-7 col-xl-7" data-aos="fade-up">
                        <div class="company-details">
                            <div class="semi-title">
                                <div class="animated-circles">
                                    <div class="small-circle-start"></div>
                                    <span class="title">A propos de la mairie de Cocody</span>
                                </div>
                            </div>
                            <h2> <span class="cssanimation lePopUp sequence">Whitehall is an Liner</span> <br>
                                <span class="cssanimation lePopUp sequence">Metropolitan Municipality </span>
                            </h2>
                            <p>Payment solutions enable businesses to accept payments Payment scions enable basin
                                accept payments from city customers city securely. scions enable businesses
                                to accept payments from city customers city securely.</p>

                            <div class="company-list row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
                                <div class="col gap-3">
                                    <ul class="gap-3">
                                        <li> <span class="square"></span> <span>Making a quality health</span>
                                        </li>
                                        <li> <span class="square"></span> <span>Get Building Permission</span>
                                        </li>
                                        <li> <span class="square"></span> <span>Health & Education</span></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="gap-3">
                                        <li> <span class="square"></span> <span>Most premium education</span>
                                        </li>
                                        <li> <span class="square"></span> <span>Business & Economy</span></li>
                                        <li> <span class="square"></span> <span>Research & development</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="company-videos d-flex align-items-center cityWall-btn-two">
                                <a href="about.html">Visit Museum <i class="bi bi-arrow-right"></i></a>
                                <div class="video-and-text">
                                    <div class="home-pages-video-popup d-flex align-content-center gap-3 ">
                                        <button onclick="videoPlayBtnOneFirst()" id="video-play-btn-one-first"
                                            class="video-play-btn"><i class="bi bi-play"></i></button>
                                        <div class="video-modal-wrapper one-first">
                                            <div class="video-modal-content">
                                                <span onclick="videoCloseBtnOneFirst()"
                                                    class="video-close-btn one-first">&times;</span>
                                                <video class="web-video one-first" controls="">
                                                    <source src="videos/cityWall.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                        <p class="m-0 ">Video Intro <br>
                                            About Our Municipal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======Find Government Services Section====== -->




    </main> 
@endsection
