@extends('front.layout.master')
@section('container')
@php
    $products = App\Models\Product::get();
    $categories = App\Models\Category::with('category')->get();
@endphp

    <!--Home Start-->
    <section id="page-home">
        <img src="{{ asset('/front/img/products-img.png') }}" alt="">
        <div class="page-bg"></div>
        <div class="container">
            <div class="row">
                <h1 class="page-head-text">
                    MƏHSULLAR
                </h1>
                <p class="page-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus egestas suspendisse porttitor elit
                    sed volutpat.
                </p>
                <a class="down-img" href="javascript:void(0)">
                    <img src="{{ asset('/front/img/down-arrow.svg') }}" alt="">
                </a>
            </div>
        </div>
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
                    Məhsullar
                </li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb-->
    <!--Products Start-->
    <section id="products">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="filter">
                        <div class="filter-head">
                            <h2>
                                Kateqoriya
                            </h2>
                            <a href="#">
                                təmizlə
                            </a>
                        </div>
                        <div class="border">
                            <p class="border-bottom"></p>
                        </div>
                        <ul class="filter-body">
                          
                            <ul class="filter-1">
                                <li class="filter-1-first">
                                    Şəki şərabı
                                </li>
                                <ul class="dropdown">
                                    <li class="form-group drop-item">
                                        <input type="checkbox" id="1">
                                        <label for="1">Hamısı</label>
                                    </li>
                                    <li class="form-group drop-item">
                                        <input type="checkbox" id="2">
                                        <label for="2">Yüngül şərablar</label>
                                    </li>
                                    <li class="form-group drop-item">
                                        <input type="checkbox" id="3">
                                        <label for="3">Portveyn</label>
                                    </li>
                                </ul>
                            </ul>
                      

                            <ul class="filter-2">
                                <li class="filter-2-first">
                                    AzAbrau
                                </li>
                                <ul class="dropdown">
                                    <li class="form-group drop-item">
                                        <input type="checkbox" id="4">
                                        <label for="4">Hamısı</label>
                                    </li>
                                    <li class="form-group drop-item">
                                        <input type="checkbox" id="5">
                                        <label for="5">Alkaqolsuz içkilər</label>
                                    </li>
                                    <li class="form-group drop-item">
                                        <input type="checkbox" id="6">
                                        <label for="6">Yüksək alkoqollu içkilər</label>
                                    </li>
                                    <li class="form-group drop-item">
                                        <input type="checkbox" id="7">
                                        <label for="7">Köpüklü şərablar</label>
                                    </li>
                                    <li class="form-group drop-item">
                                        <input type="checkbox" id="8">
                                        <label for="8">Yüngül şərablar</label>
                                    </li>
                                </ul>
                            </ul>


                        </ul>
                    </div>
                </div>
                <div class="col-8">
                    @foreach ($products as $product )
                        
               
                    <div class="product">
                        <a href="{{ route('single3',['slug2'=>$page_product->{'slug_'.App::getLocale()},'project_slug1'=>$product->category->{'slug_'.App::getLocale()} ,'project_slug2'=>$product->{'slug_'.App::getLocale()}  ]) }}">
                            <img src="{{  (!empty($product->thumbnail)? url('upload/product_images/'.$product->thumbnail):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
                            <h3 class="products-head">
                                {{ $product->translate('name', app()->getLocale()) }}
                            </h3>
                            <p class="products-body">
                                Çeşid: {{ $product->translate('cesid', app()->getLocale()) }}
                                Spirt: {{ $product->spirt }}
                            </p>
                      <a href="{{ route('single3',['slug2'=>$page_product->{'slug_'.App::getLocale()},'project_slug1'=>$product->category->{'slug_'.App::getLocale()} ,'project_slug2'=>$product->{'slug_'.App::getLocale()} ]) }}" >      <button class="btn">
                                Ətraflı
                            </button> </a>
                            <p class="products-right-border"></p>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--Products End-->

    
@endsection