@extends('front.layout.master')

@section('container')


@php
 
    $product = App\Models\Product::where('slug_'.App::getLocale(),request()->segment(3))->orWhere('slug_'.App::getLocale(),request()->segment(4))->first();
    $category = App\Models\Category::where('slug_'.App::getLocale(),request()->segment(2))->orWhere('slug_'.App::getLocale(),request()->segment(3))->first();
    $product_all = App\Models\Product::where('cat_id',$category->id)->get();

    
@endphp



   <!--Home Start-->
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
                    <a href="">
                        Məhsullar
                    </a>
                </li>
                <span>/</span>
                <li class="breadcrumb-item">
                    {{ $product->translate('name', app()->getLocale()) }}
                </li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb-->
    <!--Product Single Start-->
    <section id="product-single">
        <div class="container">
            <div class="row">
                <div class="product-single">
                    <div class="col-6">
                        <img src="{{  (!empty($product->thumbnail)? url('upload/product_images/'.$product->thumbnail):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
                    </div>
                    <div class="col-6">
                        <div class="about-block">
                            <h2 class="product-name">
                                {{ $product->translate('name', app()->getLocale()) }}
                            </h2>
                            <p class="product-single-text">
                                {{ $product->translate('title', app()->getLocale()) }}
                            </p>
                            <span class="product-border"></span>
                        </div>
                        <div class="about-block">
                            <h3 class="product-about-head">
                                Mənşəyi
                            </h3>
                            <p class="product-single-text">
                                {{ $product->translate('menseyi', app()->getLocale()) }}
                            </p>
                            <span class="product-border"></span>
                        </div>
                        <div class="about-block">
                            <h3 class="product-about-head">
                                Alkoqol dərəcəsi
                            </h3>
                            <p class="product-single-text">
                                {{ $product->spirt }}
                            </p>
                            <span class="product-border"></span>
                        </div>
                        <div class="about-block">
                            <h3 class="product-about-head">
                                İstehsal ili
                            </h3>
                            <p class="product-single-text">
                                {{ $product->translate('istehsal_il', app()->getLocale()) }}
                            </p>
                            <span class="product-border"></span>
                        </div>
                        <div class="about-block">
                            <h3 class="product-about-head">
                                Məhsul haqqında
                            </h3>
                            <p class="product-single-text">
                                {!! $product->translate('desc', app()->getLocale()) !!}
                            </p>
                            <form action="" method="get">
                                <button class="btn">
                                    Sifariş ver
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="texture-5">
                        <img src="{{ asset('/front/img/texture-5.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product Single End-->

    <!--Product About start-->
    <section id="product-about">
        <div class="container">
            <div class="row">
                <div class="product-about-block">
                    <div class="col-3">
                        <img src="{{ asset('/front/img/grape.svg') }}" alt="">
                        <h4 class="product_about_head">
                            Tərkibi
                        </h4>
                        <p class="product_about_text">
                            {{ $product->translate('terkibi', app()->getLocale()) }}
                        </p>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('/front/img/pro-2.svg') }}" alt="">
                        <h4 class="product_about_head">
                            Uygunluq
                        </h4>
                        <p class="product_about_text">
                            {{ $product->translate('uygunluq', app()->getLocale()) }}
                        </p>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('/front/img/pro-3.svg') }}" alt="">
                        <h4 class="product_about_head">
                            Temperatur
                        </h4>
                        <p class="product_about_text">
                            {{ $product->temp }}
                        </p>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('/front/img/pro-4.svg') }}" alt="">
                        <h4 class="product_about_head">
                            Saxlama forması
                        </h4>
                        <p class="product_about_text">
                            {{ $product->translate('saxlama_formasi', app()->getLocale()) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product About End-->

    <!--Products Start-->
    <section id="products">
        <div class="container">
            <div class="row">
                <h2 class="page-head">
                    Digər Məhsullar
                </h2>
            </div>
        </div>
        <div class="owl-carousel owl-theme product-slider">

          
               
   @foreach ($product_all as $p_all )
       
 
            <div class="item">
                <div class="bg"></div>
                <img src="{{  (!empty($p_all->thumbnail)? url('upload/product_images/'.$p_all->thumbnail):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
                <div class="product-text">
                    <h4 class="product-head">
                        {{ $p_all->translate('name', app()->getLocale()) }}
                    </h4>
                    <p class="product-body">
                        Çeşid: {{ $p_all->translate('cesid', app()->getLocale()) }}
                        Spirt:  {{ $p_all->spirt }}
                    </p>
                <a href="{{ route('single3',['slug2'=>$page_product->{'slug_'.App::getLocale()},'project_slug1'=>$product->category->{'slug_'.App::getLocale()} ,'project_slug2'=>$product->{'slug_'.App::getLocale()} ]) }}">    <button class="btn">
                        Ətraflı
                    </button>
                </a>
                </div>
            </div>
            @endforeach
       
       
        </div>
        <div class="texture-6">
            <img src="{{ asset('/front/img/texture-6.png') }}" alt="">
        </div>
    </section>
    <!--Products End-->
    
@endsection