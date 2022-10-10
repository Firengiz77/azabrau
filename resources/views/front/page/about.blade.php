@extends('front.layout.master')

@section('container')
    <!--Home Start-->
    <section id="page-home">
        <a data-fancybox href="https://youtu.be/TUHq3X4ynHg">
            <div class="about-video">
                <img src="{{ asset('/front/img/vid-bg.png') }}" alt="">
                <div class="vid-play">
                    <img src="{{ asset('/front/img/vid-play.svg') }}" alt="">
                </div>
            </div>
        </a>
    </section>
    <!--Home End-->
    <!--Breadcrumb-->
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}">
                        Ana Səhifə
                    </a>
                </li>
                <span>/</span>
                <li class="breadcrumb-item">
                    Haqqımızda
                </li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb-->
    <!--About Start-->
    <div class="container" id="line">
        <i id="i"></i>
    </div>
    <section id="about" class="about-page">
        <div class="container">
            <div class="row">
                <div class="about-page-block">
                    <h2 class="about-number">
                        01
                    </h2>
                    <h4 class="about-page-head">
                        Biz
                        Kimik?
                    </h4>
                    <div class="about-page-img">
                        <img src="{{ asset('/front/img/about-1.png') }}" alt="">
                    </div>
                    <div class="about-page-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit dignissim sed euismod ipsum
                        vivamus cursus tristique elit velit. Diam fringilla amet fames justo morbi risus velit odio.
                        Commodo id sagittis aliquam tempor. Dui volutpat risus, venenatis feugiat est. Mattis diam sed
                        urna sed sed augue. Lacus, risus sed donec placerat euismod ut ut. Tortor mus ipsum nibh
                        adipiscing vitae morbi nullam. Eget congue quam eu commodo. Nibh fames molestie sit imperdiet
                        quis venenatis diam, a. Scelerisque habitasse nibh adipiscing mi.
                        Adipiscing est et risus, magna lectus. Viverra amet augue tempus donec fringilla aliquam
                        fringilla eget. Facilisis suspendisse sociis ut viverra id nisi, feugiat. Parturient lectus
                        gravida eget sem donec gravida sed aliquam. Morbi sed aliquam egestas et, lectus. Nascetur
                        cursus enim nascetur amet t
                    </div>
                </div>
                <div class="about-page-block">
                    <i id="i2"></i>
                    <i id="i3"></i>
                    <h2 class="about-number">
                        01
                    </h2>
                    <h4 class="about-page-head">
                        Biz
                        Kimik?
                    </h4>
                    <div class="about-page-img">
                        <img src="{{ asset('/front/img/about-1.png') }}" alt="">
                    </div>
                    <div class="about-page-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit dignissim sed euismod ipsum
                        vivamus cursus tristique elit velit. Diam fringilla amet fames justo morbi risus velit odio.
                        Commodo id sagittis aliquam tempor. Dui volutpat risus, venenatis feugiat est. Mattis diam sed
                        urna sed sed augue. Lacus, risus sed donec placerat euismod ut ut. Tortor mus ipsum nibh
                        adipiscing vitae morbi nullam. Eget congue quam eu commodo. Nibh fames molestie sit imperdiet
                        quis venenatis diam, a. Scelerisque habitasse nibh adipiscing mi.
                        Adipiscing est et risus, magna lectus. Viverra amet augue tempus donec fringilla aliquam
                        fringilla eget. Facilisis suspendisse sociis ut viverra id nisi, feugiat. Parturient lectus
                        gravida eget sem donec gravida sed aliquam. Morbi sed aliquam egestas et, lectus. Nascetur
                        cursus enim nascetur amet t
                    </div>
                </div>
                <div class="about-page-block">
                    <i id="i4"></i>
                    <i id="i5"></i>
                    <h2 class="about-number">
                        01
                    </h2>
                    <h4 class="about-page-head">
                        Biz
                        Kimik?
                    </h4>
                    <div class="about-page-img">
                        <img src="{{ ('/front/img/about-1.png') }}" alt="">
                    </div>
                    <div class="about-page-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit dignissim sed euismod ipsum
                        vivamus cursus tristique elit velit. Diam fringilla amet fames justo morbi risus velit odio.
                        Commodo id sagittis aliquam tempor. Dui volutpat risus, venenatis feugiat est. Mattis diam sed
                        urna sed sed augue. Lacus, risus sed donec placerat euismod ut ut. Tortor mus ipsum nibh
                        adipiscing vitae morbi nullam. Eget congue quam eu commodo. Nibh fames molestie sit imperdiet
                        quis venenatis diam, a. Scelerisque habitasse nibh adipiscing mi.
                        Adipiscing est et risus, magna lectus. Viverra amet augue tempus donec fringilla aliquam
                        fringilla eget. Facilisis suspendisse sociis ut viverra id nisi, feugiat. Parturient lectus
                        gravida eget sem donec gravida sed aliquam. Morbi sed aliquam egestas et, lectus. Nascetur
                        cursus enim nascetur amet t
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About End-->
    
@endsection