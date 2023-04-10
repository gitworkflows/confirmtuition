@extends('layouts.app')

@section('content')
<!-- BANNER START -->
<div class="tu-banner">
    <div class="container">
        <div class="row align-items-center g-0 gy-5">
            <div class="col-lg-6">
                <div class="tu-banner_title">
                    <h1>A good <span>#tutor</span> is always a indeed for right education & career path.</h1>
                    <!-- <span class="tu-bannerinfo type"></span> -->
                    <!-- <p>Consectur adipiscing elitsedo eiusmod tempor incididuntem utaborate dolore magna aliqua ad
                        minim veniamque.</p> -->
                    <ul class="tu-banner_list">
                        <li>
                            <div class="tu-starthere">
                                <span>Start from here</span>
                                <img src="{{asset('public/frontend/asset/images/knob_line.svg')}}" alt="img">
                            </div>
                            <a href="{{route('register')}}" class="tu-primbtn tu-primbtn-gradient"><span>Become a tutor</span><i class="icon icon-chevron-right"></i></a>
                        </li>
                        <li><a href="signup.html" class="tu-secbtn"><span>Hire a tutor</span></a></li>
                    </ul>
                    <!-- <div class="tu-banner_explore">
                        <i class="icon icon-shield"></i>
                        <p>You can also join as parent to explore <a href="signup.html">Join today</a></p>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div class="tu-bannerv1_img">
                    <img src="{{asset('public/frontend/asset/images/banner2.png')}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->
<!-- MAIN START -->
<main class="tu-main">
    <!-- COUNTER START -->
    <section>
        <div class="tu-statsholder">
            <div class="container">
                <ul id="tu-counter" class="tu-stats">
                    <li>
                        <img src="{{asset('public/frontend/asset/images/stats/img-01.png')}}" alt="img">
                        <div class="tu-stats_info">
                            <h4><span data-from="0" data-to="560" data-speed="8000"
                                    data-refresh-interval="50">560</span></h4>
                            <p>Comments</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('public/frontend/asset/images/stats/img-02.png')}}" alt="img">
                        <div class="tu-stats_info">
                            <h4><span data-from="0" data-to="3000" data-speed="8000"
                                    data-refresh-interval="50">3,000</span></h4>
                            <p>Tuition Jobs</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('public/frontend/asset/images/stats/img-03.png')}}" alt="img">
                        <div class="tu-stats_info">
                            <h4><span data-from="0" data-to="200" data-speed="8000" data-refresh-interval="50">200</span>+</h4>
                            <p>Guardians</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('public/frontend/asset/images/stats/img-04.png')}}" alt="img">
                        <div class="tu-stats_info">
                            <h4><span data-from="0" data-to="7000" data-speed="8000" data-refresh-interval="50">7,000</span>+</h4>
                            <p>Active Tutors</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- COUNTER END -->

    <!-- SUCCESS START -->
    <section id="tu-sucesstorsection">
        <div class="tu-success-stories">
            <div class="container">
                <div class="tu-sucesstor_pattren">
                    <img src="{{asset('public/frontend/asset/images/index/success_stories/pattren.svg')}}" alt="img">
                </div>
                <div class="row tu-sucesstorslider_title">
                    <div class="col-lg-8">
                        <div class="tu-maintitle">
                            <h2>See how our guardians & tutors made their <span>#Success Stories</span></h2>
                        </div>
                    </div>
                </div>
                <div id="tu-sucesstorslider" class="splide tu-sucesstorslider tu-splidearrow">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="tu-sucesstor">
                                    <div class="tu-sucesstor_img">
                                        <figure>
                                            <img src="{{asset('public/frontend/asset/images/banner.png')}}"
                                                alt="img">
                                            <figcaption><img
                                                    src="{{asset('public/frontend/asset/images/index/success_stories/comma.svg')}}"
                                                    alt="img">
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="tu-sucesstor_title">
                                        <h3>I highly recommend this platform, amazing experience with fast delivery
                                        </h3>
                                        <blockquote>“ Their teaching method is conceptual, motivating and friendly.
                                            I can clear my doubt any time. They have very deep knowledge of subject
                                            and exam pattern, with all the guidance of their tutos, I scored 98% in
                                            Mathematics and 96% in Physics. And yet qualified in IIT MAINS with 12th
                                            rank. ”</blockquote>
                                        <h4>
                                            Rokon Jalilur
                                            <span>Mohammadpur, Dhaka</span>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <!-- <li class="splide__slide">
                                <div class="tu-sucesstor">
                                    <div class="tu-sucesstor_img">
                                        <figure>
                                            <img src="{{asset('public/frontend/asset/images/index/success_stories/img-02.jpg')}}"
                                                alt="img">
                                            <figcaption><img
                                                    src="{{asset('public/frontend/asset/images/index/success_stories/comma.svg')}}"
                                                    alt="img">
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="tu-sucesstor_title">
                                        <h3>I highly recommend this platform, amazing experience with fast delivery
                                        </h3>
                                        <blockquote>“ Their teaching method is conceptual, motivating and friendly.
                                            I can clear my doubt any time. They have very deep knowledge of subject
                                            and exam pattern, with all the guidance of their tutos, I scored 98% in
                                            Mathematics and 96% in Physics. And yet qualified in IIT MAINS with 12th
                                            rank. ”</blockquote>
                                        <h4>
                                            Deanna Griffin
                                            <span>2nd Standard, Manchester UK</span>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="tu-sucesstor">
                                    <div class="tu-sucesstor_img">
                                        <figure>
                                            <img src="{{asset('public/frontend/asset/images/index/success_stories/img-03.jpg')}}"
                                                alt="img">
                                            <figcaption><img
                                                    src="{{asset('public/frontend/asset/images/index/success_stories/comma.svg')}}"
                                                    alt="img">
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="tu-sucesstor_title">
                                        <h3>I highly recommend this platform, amazing experience with fast delivery
                                        </h3>
                                        <blockquote>“ Their teaching method is conceptual, motivating and friendly.
                                            I can clear my doubt any time. They have very deep knowledge of subject
                                            and exam pattern, with all the guidance of their tutos, I scored 98% in
                                            Mathematics and 96% in Physics. And yet qualified in IIT MAINS with 12th
                                            rank. ”</blockquote>
                                        <h4>
                                            Bruce Mccarthy
                                            <span>2nd Standard, Manchester UK</span>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="tu-sucesstor">
                                    <div class="tu-sucesstor_img">
                                        <figure>
                                            <img src="{{asset('public/frontend/asset/images/index/success_stories/img-04.jpg')}}"
                                                alt="img">
                                            <figcaption><img
                                                    src="{{asset('public/frontend/asset/images/index/success_stories/comma.svg')}}"
                                                    alt="img">
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="tu-sucesstor_title">
                                        <h3>I highly recommend this platform, amazing experience with fast delivery
                                        </h3>
                                        <blockquote>“ Their teaching method is conceptual, motivating and friendly.
                                            I can clear my doubt any time. They have very deep knowledge of subject
                                            and exam pattern, with all the guidance of their tutos, I scored 98% in
                                            Mathematics and 96% in Physics. And yet qualified in IIT MAINS with 12th
                                            rank. ”</blockquote>
                                        <h4>
                                            Evelyn Mccoy
                                            <span>2nd Standard, Manchester UK</span>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="tu-sucesstor">
                                    <div class="tu-sucesstor_img">
                                        <figure>
                                            <img src="{{asset('public/frontend/asset/images/index/success_stories/img-05.jpg')}}"
                                                alt="img">
                                            <figcaption><img
                                                    src="{{asset('public/frontend/asset/images/index/success_stories/comma.svg')}}"
                                                    alt="img">
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="tu-sucesstor_title">
                                        <h3>I highly recommend this platform, amazing experience with fast delivery
                                        </h3>
                                        <blockquote>“ Their teaching method is conceptual, motivating and friendly.
                                            I can clear my doubt any time. They have very deep knowledge of subject
                                            and exam pattern, with all the guidance of their tutos, I scored 98% in
                                            Mathematics and 96% in Physics. And yet qualified in IIT MAINS with 12th
                                            rank. ”</blockquote>
                                        <h4>Frederick Hicks
                                            <span>2nd Standard, Manchester UK</span>
                                        </h4>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SUCCESS END -->
</main>
<!-- MAIN END -->
@endsection