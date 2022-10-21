@extends('front.layout.master')

@section('container')


@php
    $product = App\Models\Product::where('slug_'.App::getLocale(),request()->segment(3))->orWhere('slug_'.App::getLocale(),request()->segment(4))->first();
    $category = App\Models\Category::where('slug_'.App::getLocale(),request()->segment(2))->orWhere('slug_'.App::getLocale(),request()->segment(3))->first();
    $product_all = App\Models\Product::where('cat_id',$category->id)->get();
    $page_products= App\Models\Pages::where('page_id',4)->first();
@endphp

@section('title'){!! substr(json_decode($product['name'])->{app()->getLocale()},0,60) !!}@endsection
@section('description'){{substr($product['title'], 0, 160)}}@endsection


   <!--Home Start-->
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
                    <a   @if(App::getLocale() === 'az')
                 href="/{{$page_products->slug_az}}"
                 @elseif(App::getLocale() === 'en')
                 href="/en/{{$page_products->slug_az}}"
                 @else
                 href="/ru/{{$page_products->slug_az}}"
                 @endif>
                 {{ __('products') }}
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
                                {{ __('menseyi') }}
                            </h3>
                            <p class="product-single-text">
                                {{ $product->translate('menseyi', app()->getLocale()) }}
                            </p>
                            <span class="product-border"></span>
                        </div>
                        <div class="about-block">
                            <h3 class="product-about-head">
                                {{ __('alkol') }}
                            </h3>
                            <p class="product-single-text">
                                {{ $product->spirt }}
                            </p>
                            <span class="product-border"></span>
                        </div>
                        <div class="about-block">
                            <h3 class="product-about-head">
                                {{ __('istehsal') }} 
                            </h3>
                            <p class="product-single-text">
                                {{ $product->translate('istehsal_il', app()->getLocale()) }}
                            </p>
                            <span class="product-border"></span>
                        </div>
                        <div class="about-block">
                            <h3 class="product-about-head">
                                {{ __('mehsul_haqqinda') }}  
                            </h3>
                            <p class="product-single-text">
                                {!! $product->translate('desc', app()->getLocale()) !!}
                            </p>
                            <a href="{{ $product->sifaris }}" target="_blank">
                                <button class="btn">
                                    {{ __('sifaris_ver') }}   
                                </button>
                            </a>
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
                            {{ __('terkibi') }} 
                        </h4>
                        <p class="product_about_text">
                            {{ $product->translate('terkibi', app()->getLocale()) }}
                        </p>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('/front/img/pro-2.svg') }}" alt="">
                        <h4 class="product_about_head">
                            {{ __('uygunluq') }}  
                        </h4>
                        <p class="product_about_text">
                            {{ $product->translate('uygunluq', app()->getLocale()) }}
                        </p>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('/front/img/pro-3.svg') }}" alt="">
                        <h4 class="product_about_head">
                            {{ __('temperatur') }}  
                        </h4>
                        <p class="product_about_text">
                            {{ $product->temp }}
                        </p>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('/front/img/pro-4.svg') }}" alt="">
                        <h4 class="product_about_head">
                            {{ __('saxlama_formasi') }} 
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
                    {{ __('diger_mehsullar') }}
                </h2>
            </div>
        </div>
        <div class="owl-carousel owl-theme product-slider">

          
               
   @foreach ($product_all as $p_all )
       
            <div class="item">
                <a href="{{ route('single3',['slug2'=>$page_product->{'slug_'.App::getLocale()},'project_slug1'=>$product->category->{'slug_'.App::getLocale()} ,'project_slug2'=>$product->{'slug_'.App::getLocale()} ]) }}">
                    <div class="bg"></div>
                    <img src="{{  (!empty($p_all->thumbnail)? url('upload/product_images/'.$p_all->thumbnail):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
                    <div class="product-text">
                        <h4 class="product-head">
                            {{ $p_all->translate('name', app()->getLocale()) }}
                        </h4>
                        <p class="product-body">
                            {{ __('cesid') }}: {{ $p_all->translate('cesid', app()->getLocale()) }}
                            {{ __('spirt') }}:  {{ $p_all->spirt }}
                        </p>
                    <a href="{{ route('single3',['slug2'=>$page_product->{'slug_'.App::getLocale()},'project_slug1'=>$product->category->{'slug_'.App::getLocale()} ,'project_slug2'=>$product->{'slug_'.App::getLocale()} ]) }}">    <button class="btn">
                        {{ __('etrafli') }}
                        </button>
                    </a>
                    </div>
                </a>
            </div>
            @endforeach
       
       
        </div>
        <div class="texture-6">
            <img src="{{ asset('/front/img/texture-6.png') }}" alt="">
        </div>
    </section>
    <!--Products End-->
    
@endsection