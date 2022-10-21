@extends('front.layout.master')

@section('title'){{ substr($page->{'title_'.App::getLocale() },0,60) }}@endsection
@section('description'){{substr($page->{'description_'.App::getLocale() }, 0, 160)}}@endsection
@section('keywords'){{substr($page->{'keywords_'.App::getLocale() }, 0, 60)}} @endsection



@section('container')
   <!--Home Start-->
   <section id="page-home">
    <img src="{{ asset('/front/img/products-img.png') }}" alt="">
    <div class="page-bg"></div>
    <div class="container">
        <div class="row">
            <h1 class="page-head-text">
               {{ __('satis_noqteleri') }}
            </h1>
            <p class="page-text">
                {{ __('satis_noqteleri_text') }} 
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
                    {{ __('home_page') }}
                </a>
            </li>
            <span>/</span>
            <li class="breadcrumb-item">
                {{ __('satis_noqteleri') }}
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
                {{ __('satis_text_1') }} 
            </h2>
            <div class="maps">
                <div class="col-4">
                    <div class="locations">
                        @foreach ($maps as $key => $map)
                            
                      
                        <div class="location-card" data-id="{{ ++$key }}">
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
                                {{ __('xerite') }} 
                            </a>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="col-8">
                    <div class="maps-iframes">
                    
                        @foreach ($maps as $map)
                     
                         <iframe style="display: block;"
                         src="https://maps.google.com/maps?q={{$map->txtLat}},{{$map->txtLng}}&hl=es&z=17&amp;output=embed"
                          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       

                        @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Maps End-->



    
@endsection