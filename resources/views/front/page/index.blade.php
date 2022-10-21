@extends('front.layout.master')

@section('container')
@section('title'){{ substr($page->{'title_'.App::getLocale() },0,60) }}@endsection
@section('description'){{substr($page->{'description_'.App::getLocale() }, 0, 160)}}@endsection
@section('keywords'){{substr($page->{'keywords_'.App::getLocale() }, 0, 60)}} @endsection




    <!--Home Start-->
    <section id="home">
        <div class="container home-1">
            <div class="row">
                <img src="{{  (!empty($slider1->image)? url('upload/slider_images/'.$slider1->image):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
                <p class="home-text">
                    {!! json_decode($slider1['title'])->{app()->getLocale()} !!}
                </p>
            </div>
        </div>
        <div class="container home-2">
            <div class="row">
                <h1 class="head-text">
                    {!! json_decode($slider2['title'])->{app()->getLocale()} !!}
                </h1>
                <div class="home-text" >
                    {!! json_decode($slider2['desc'])->{app()->getLocale()} !!}
                </div>
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
                        {{ __('about_1') }}
                    </h2>
                    <h4 class="about-head-2">
                        {{ __('about_2') }}
                    </h4>
                    <p class="about-text">
                        {{ __('about_3') }}
                    </p>
                  <a @if(App::getLocale() === 'az')
                  href="{{ $page_about->slug_az }}"
                  @elseif(App::getLocale() === 'en')
                  href="/en/{{ $page_about->slug_en }}"                      
                  @else
                  href="/ru/{{ $page_about->slug_ru }}"
                  @endif


                 > <button class="btn">
                        {{ __('etrafli') }}
                    </button>  </a>
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
    @php
    $products = App\Models\Product::get();
@endphp


    <!--Products Start-->
    <section id="products">
        <div class="container">
            <div class="row">
                <h2 class="page-head">
                    {{ __('products') }}
                </h2>
            </div>
        </div>
        <div class="owl-carousel owl-theme product-slider">
            @foreach ($products as $product )
            <div class="item">
                <a href="{{ route('single3',['slug2'=>$page_product->{'slug_'.App::getLocale()},'project_slug1'=>$product->category->{'slug_'.App::getLocale()} ,'project_slug2'=>$product->{'slug_'.App::getLocale()}  ]) }}">
                    <div class="bg"></div>
                    <img src="{{  (!empty($product->thumbnail)? url('upload/product_images/'.$product->thumbnail):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
                    <div class="product-text">
                        <h4 class="product-head">
                            {{ $product->translate('name', app()->getLocale()) }}
                        </h4>
                        <p class="product-body">
                            {{ __('cesid') }}:  {{ $product->translate('cesid', app()->getLocale()) }}
                            {{ __('spirt') }}:  {{ $product->spirt }}
                        </p>
                    <a href="{{ route('single3',['slug2'=>$page_product->{'slug_'.App::getLocale()},'project_slug1'=>$product->category->{'slug_'.App::getLocale()} ,'project_slug2'=>$product->{'slug_'.App::getLocale()}  ]) }}" >
                        <button class="btn">
                            {{ __('etrafli') }}
                        </button>
                    </a>
                    </div>
                </a>
            </div>
            @endforeach
       
       
       
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
                          {{ __('gif_1') }} 
                        </h2>
                        <p class="gif-body">
                            {{ __('gif_2') }} 
                        </p>
                        <button class="btn white-btn">
                            {{ __('etrafli') }} 
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
                    {{ __('brands') }} 
                </h2>
                <div class="brends">
                <div class="news-effect-1 news-effect"></div>
                <div class="news-effect-2 news-effect"></div>
                    <img src="{{ asset('/front/img/brends.png') }}" alt="">
                    <div class="container">
                        <div class="az-brends">
                            <h3 class="az-head">
                                {{ __('az_serab') }} 
                            </h3>
                            <form action="javascript:void(0)" method="get">
                                <button class="btn btn-1 white-btn">
                                    {{ __('etrafli') }} 
                                </button>
                            </form>
                        </div>
                        <div class="ru-brends">
                            <h3 class="ru-head">
                                {{ __('rus_serab') }} 
                            </h3>
                            <form action="javascript:void(0)" method="get">
                                <button class="btn btn-2 white-btn">
                                    {{ __('etrafli') }} 
                                </button>
                            </form>
                        </div>
                        <div class="pop-up az">
                            <div class="pop-up-main">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <h2 class="pop-up-head">
                                                Azərbaycan şərabı
                                            </h2>
                                            <p class="pop-up-text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pop-up-img">
                                    <img src="{{ asset('/front/img/pop-up-1.png') }}">
                                </div>
                                <div class="close-pop">
                                    <img src="{{ asset('/front/img/pop-up-close.svg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="pop-up ru">
                            <div class="pop-up-main">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <h2 class="pop-up-head">
                                                Azərbaycan şərabı
                                            </h2>
                                            <p class="pop-up-text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pop-up-img">
                                    <img src="{{ asset('/front/img/pop-up-2.png') }}">
                                </div>
                                <div class="close-pop">
                                    <img src="{{ asset('/front/img/pop-up-close.svg') }}">
                                </div>
                            </div>
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
                <a href="{{ route('single2',['slug'=>$page_single->{'slug_'.App::getLocale()},'project_slug'=>$news->{'slug_'.App::getLocale()}]) }}">
                    <div class="news-effect"></div>
                    <img src="{{  (!empty($news->image)? url('upload/blog_images/'.$news->image):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
                    <div class="news-text">
                        <h3 class="news-head">
                            {!! json_decode($news['name'])->{app()->getLocale()} !!}
                        </h3>
                        <a href="{{ route('single2',['slug'=>$page_single->{'slug_'.App::getLocale()},'project_slug'=>$news->{'slug_'.App::getLocale()}]) }}" class="detail">
                            {{ __('etrafli') }}
                        </a>
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