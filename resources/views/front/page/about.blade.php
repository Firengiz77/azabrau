@extends('front.layout.master')

@section('title'){{ substr($page->{'title_'.App::getLocale() },0,60) }}@endsection
@section('description'){{substr($page->{'description_'.App::getLocale() }, 0, 160)}}@endsection
@section('keywords'){{substr($page->{'keywords_'.App::getLocale() }, 0, 60)}} @endsection



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
                        {{ __('home_page') }}   
                    </a>
                </li>
                <span>/</span>
                <li class="breadcrumb-item">
                        {{ __('about_1') }}   
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
                        {{ __('biz_kimik_1') }}   
                    </h4>
                    <div class="about-page-img">
                        <img src="{{ asset('/front/img/about-1.png') }}" alt="">
                    </div>
                    <div class="about-page-text">
                        {{ __('biz_kimik_2') }}      
                    </div>
                </div>
                <div class="about-page-block">
                    <i id="i2"></i>
                    <i id="i3"></i>
                    <h2 class="about-number">
                        02
                    </h2>
                    <h4 class="about-page-head">
                        {{ __('biz_kimik_3') }}  
                    </h4>
                    <div class="about-page-img">
                        <img src="{{ asset('/front/img/about-1.png') }}" alt="">
                    </div>
                    <div class="about-page-text">
                        {{ __('biz_kimik_4') }}  
                    </div>
                </div>
                <div class="about-page-block">
                    <i id="i4"></i>
                    <i id="i5"></i>
                    <h2 class="about-number">
                        03
                    </h2>
                    <h4 class="about-page-head">
                        {{ __('biz_kimik_5') }} 
                    </h4>
                    <div class="about-page-img">
                        <img src="{{ ('/front/img/about-1.png') }}" alt="">
                    </div>
                    <div class="about-page-text">
                        {{ __('biz_kimik_6') }} 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About End-->
    <!--Orders Start-->
    <section id="awards">
        <div class="container">
            <div class="row">
                <h2 class="page-head">
                     {{ __('mukafatlar') }} 
                </h2>
                <p class="awards-text">
                 {{ __('desc') }} 
                </p>
                <h3 class="awards-head">
                    {{ __('basliq_1') }}
                </h3>
                <div class="owl-carousel owl-theme awards2-slider">
                    <div class="item">
                        <a href="#">
                            <img src="{{ ('/front/img/award.png') }}" alt="">
                            <h1 class="award-text">
                            {{ __('mukafat_basligi_1') }}
                            </h1>
                        </a>
                    </div>
                </div>
                <h3 class="awards-head">
                    {{ __('basliq_2') }}
                </h3>
                <div class="owl-carousel owl-theme awards2-slider">
                    <div class="item">
                        <a href="#">
                            <img src="{{ ('/front/img/award.png') }}" alt="">
                            <h1 class="award-text">
                                {{__('mukafat_basligi_2')}}
                            </h1>
                        </a>
                    </div>
                </div>
                <h3 class="awards-head">
                 {{ __('basliq_3') }}
                </h3>
                <div class="owl-carousel owl-theme awards2-slider">
                    <div class="item">
                        <a href="#">
                            <img src="{{ ('/front/img/award.png') }}" alt="">
                            <h1 class="award-text">
                                {{__('mukafat_basligi_3')}}
                            </h1>
                        </a>
                    </div>
                </div>
                <h3 class="awards-head">
                  {{ __('basliq_4') }}
                </h3>
                <div class="owl-carousel owl-theme awards2-slider">
                    <div class="item">
                        <a href="#">
                            <img src="{{ ('/front/img/award.png') }}" alt="">
                            <h1 class="award-text">
                                {{__('mukafat_basligi_4')}}
                            </h1>
                        </a>
                    </div>
                </div>
                <h3 class="awards-head">
                {{ __('basliq_5') }}
                </h3>
                <div class="owl-carousel owl-theme awards2-slider">
                    <div class="item">
                        <a href="#">
                            <img src="{{ ('/front/img/award.png') }}" alt="">
                            <h1 class="award-text">
                                {{__('mukafat_basligi_5')}}
                            </h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Orders End-->
    
@endsection