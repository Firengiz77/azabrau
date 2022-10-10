@extends('front.layout.master')

@section('container')
   <!--Home Start-->
   <section id="page-home">
    <img src="{{ asset('/front/img/products-img.png') }}" alt="">
    <div class="page-bg"></div>
    <div class="container">
        <div class="row">
            <h1 class="page-head-text">
                SATIŞ NÖQTƏLƏRİ
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
                Satış Nöqtələri
            </li>
        </ul>
    </div>
</div>
<!--Breadcrumb-->
<!--Maps Start-->
<section id="maps">
    <div class="texture-7">
        <img src="{{ asset('/front/img/texture-7.png') }}" alt="">
    </div>
    <div class="texture-8">
        <img src="{{ asset('/front/img/texture-8.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <h2 class="page-head">
                Sizə ən yaxın mağazanı seçin
            </h2>
            <div class="maps">
                <div class="col-4">
                    <div class="locations">
                        @foreach ($maps as $key => $map)
                            
                      
                        <div class="location-card" data-id="{{ $key }}">
                            <h4 class="loc-head">
                                   {!! json_decode($map['name'])->{app()->getLocale()} !!}
                            </h4>
                            <p class="loc-text"> 
                                {!! json_decode($map['address'])->{app()->getLocale()} !!}
                            </p>
                            <a class="loc-text" href="tel:{{ str_replace(' ','',$contact->phone_1) }}">
                                {{  $map->phone_1 }}
                            </a>
                            <a class="loc-text" href="tel:{{ str_replace(' ','',$contact->phone_2) }}">
                                {{  $map->phone_2 }} 
                            </a>
                            <a class="loc-btn" href="javaScript:void(0)">
                                Xəritədə bax
                            </a>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="col-8">
                    <div class="maps-iframes">
                        @foreach ($maps as $map)
                        <iframe style="display: block;" src="{{ $map->link }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        @endforeach

                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Maps End-->



    
@endsection