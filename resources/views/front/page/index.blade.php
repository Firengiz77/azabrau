@extends('front.layout.master')

@section('container')


    <!--Home Start-->
    <section id="home">
        <div class="container home-1">
            <div class="row">
                <img src="{{ asset('/front/img/logo2-azabrau.png') }}" alt="">
                <p class="home-text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                </p>
            </div>
        </div>
        <div class="container home-2">
            <div class="row">
                <h1 class="head-text">
                    ŞƏKİ ŞƏRABI
                </h1>
                <p class="home-text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem
                    Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is
                    simply dummy text of the printing and typesetting industry.
                </p>
            </div>
        </div>
    </section>
    <!--Home End-->
    <!--About Start-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h2 class="about-head">
                        Haqqımızda
                    </h2>
                    <h4 class="about-head-2">
                        Lorem Ipsum is simply
                    </h4>
                    <p class="about-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem
                        Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum
                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text
                        of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the printing and
                        typesetting industry.
                    </p>
                    <button class="btn">
                        Ətraflı
                    </button>
                    <div class="texture-1">
                        <img src="{{ asset('/front/img/texture-1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{ asset('/front/img/about-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--About End-->
    <!--Products Start-->
    <section id="products">
        <div class="container">
            <div class="row">
                <h2 class="page-head">
                    Məhsullar
                </h2>
            </div>
        </div>
        <div class="owl-carousel owl-theme product-slider">
            <div class="item">
                <div class="bg"></div>
                <img src="{{ asset('/front/img/sharab.png') }}" alt="">
                <div class="product-text">
                    <h4 class="product-head">
                        Gücləndirilmiş şərab
                        “Ağdam Ağ Şərab”
                    </h4>
                    <p class="product-body">
                        Çeşid: 100% Qırmızı spirtli içkilər
                        Spirt: 19%
                    </p>
                    <button class="btn">
                        Ətraflı
                    </button>
                </div>
            </div>
        </div>
        <div class="texture-2">
            <img src="{{ asset('/front/img/texture-2.png') }}" alt="">
        </div>
    </section>
    <!--Products End-->
    <!--Home Gif Start-->
    <section id="home-gif">
        <div class="gif">
            <img src="{{ asset('/front/img/home-gif.gif') }}" alt="">
            <div class="container">
                <div class="row">
                    <div class="gif-text">
                        <h2 class="gif-head">
                            ŞƏRABÇILIQ
                            BİZİM İŞİMİZDİR!
                        </h2>
                        <p class="gif-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has. Lorem Ipsum is simply dummy.
                        </p>
                        <button class="btn white-btn">
                            Ətraflı
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Home Gif End-->
    <!--Brends Start-->
    <section id="brends">
        <div class="container">
            <div class="row">
                <h2 class="page-head">
                    Brendlər
                </h2>
                <div class="brends">
                    <img src="{{ asset('/front/img/brends.png') }}" alt="">
                    <div class="container">
                        <div class="az-brends">
                            <h3 class="az-head">
                                AZERBAYCAN
                                ŞƏRABI
                            </h3>
                            <form action="" method="get">
                                <button class="btn white-btn">
                                    Ətraflı
                                </button>
                            </form>
                        </div>
                        <div class="ru-brends">
                            <h3 class="ru-head">
                                RUSİYA
                                ŞƏRABI
                            </h3>
                            <form action="" method="get">
                                <button class="btn white-btn">
                                    Ətraflı
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brends End-->
    @php
         $news2= App\Models\Blog::get();
    @endphp
    <!--News Start-->
    <section id="news">
        <h2 class="page-head">
            Xəbərlər
        </h2> 
        <div class="owl-carousel owl-theme news-slider">

            @foreach ($news2 as $news)
            <div class="item">
                <a href="#">
                    <img src="{{  (!empty($news->image)? url('upload/blog_images/'.$news->image):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
                    <div class="news-text">
                        <h3 class="news-head">
                            {!! json_decode($news['name'])->{app()->getLocale()} !!}
                        </h3>
                        <p class="news-date">
                            {{ date('d.m.Y', strtotime($news->created_at))  }}
                        </p>
                    </div>
                    <div class="texture-3">
                        <img src="{{ asset('/front/img/texture-3.png') }}" alt="">
                    </div>
                    <div class="texture-4">
                        <img src="{{ asset('/front/img/texture-4.png') }}" alt="">
                    </div>
                </a>
            </div>

            @endforeach
        </div>
    </section>
    <!--News End-->

    
@endsection