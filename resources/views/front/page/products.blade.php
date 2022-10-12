@extends('front.layout.master')
@section('title'){{ $page->{'title_'.App::getLocale() } }}@endsection
@section('description'){{substr($page->{'description_'.App::getLocale() }, 0, 155)}}@endsection
@section('keywords'){{substr($page->{'keywords_'.App::getLocale() }, 0, 55)}} @endsection




@section('container')
    @php
        $products = App\Models\Product::get();
        $categories0 = App\Models\Category::where('cat_id', 0)
            ->with('category')
            ->get();
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
                            @foreach ($categories0 as $key => $c0)
                                <ul class="filter-{{ ++$key }}">
                                    <li class="filter-{{ $key }}-first">
                                        {{ $c0->translate('name', app()->getLocale()) }}

                                    </li>
                                    <ul class="dropdown">
                                        <li class="form-group drop-item">
                                            <input type="checkbox" onclick="filter_all('{{ $c0->id }}')" class="all_{{ $c0->id }}" value="{{ $c0->id }}" id="{{ $c0->id }}">
                                            <label for="{{ $c0->id }}">Hamısı</label>
                                        </li>

                                        @php
                                            $categories = App\Models\Category::where('cat_id', $c0->id)->get();
                                        @endphp

                                        @foreach ($categories as $key => $c)
                                            <li class="form-group drop-item">
                                                <input type="checkbox" name="orderCheck[]" id="{{ $c->id }}"
                                                    class="filter_category_id" value="{{ $c->id }}"
                                                    onclick="filter('{{ $c->id }}')">
                                                <label
                                                    for="{{ $c->id }}">{{ $c->translate('name', app()->getLocale()) }}</label>
                                            </li>
                                        @endforeach

                                    </ul>
                                </ul>
                            @endforeach



                            {{-- <ul class="filter-1">
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
                            </ul> --}}


                        </ul>
                    </div>
                </div>
                <div class="col-8" id="products_12">
                    @include('front.widget.products')
                </div>
            </div>
        </div>
    </section>
    <!--Products End-->

    {{-- <script src="{{asset('/front/js/own.js')}}"></script> --}}


    <!-- Content wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <script>
        function filter(getid) {

            let ids = $('.filter_category_id:checked');
            let checkeds = [];
            ids.each(function(index,elem){
                checkeds.push(elem.value)
            })
            let lang = window.location.href.split('/')[3];
            if(lang === 'en'){
                $.get("/en/filter", {
                    id: checkeds,
                },
                function(data, status) {
                    $('#products_12').html(data.html);
                    console.log(data);
                });
            }
          else if(lang === 'ru'){
            $.get("/ru/filter", {
                    id: checkeds,
                },
                function(data, status) {
                    $('#products_12').html(data.html);
                    console.log(data);
                });
            }
                else{
                    $.get("/filter", {
                    id: checkeds,
                },
                function(data, status) {
                    $('#products_12').html(data.html);
                    console.log(data);
                });
                }
          
        };
        function filter_all(getid) {
            let all = $(`.all_${getid}`).val();
            let lang = window.location.href.split('/')[3];
         if(lang === 'en'){
            $.get("/en/filter_all", {
                    id: getid,
                },
                function(data, status) {
                    $('#products_12').html(data.html);
                    console.log(data);
                });
         } else if(lang === 'ru'){
            $.get("/ru/filter_all", {
                    id: getid,
                },
                function(data, status) {
                    $('#products_12').html(data.html);
                    console.log(data);
                });
         } else{
            $.get("/filter_all", {
                    id: getid,
                },
                function(data, status) {
                    $('#products_12').html(data.html);
                    console.log(data);
                });
         }

        }
    </script>
@endsection
