@extends('front.layout.master')

@section('title'){{ $page->{'title_'.App::getLocale() } }}@endsection
@section('description'){{substr($page->{'description_'.App::getLocale() }, 0, 155)}}@endsection
@section('keywords'){{substr($page->{'keywords_'.App::getLocale() }, 0, 55)}} @endsection



@section('container')
   <!--Home Start-->
   <section id="page-home">
    <img src="{{ asset('/front/img/products-img.png') }}" alt="">
    <div class="page-bg"></div>
    <div class="container">
        <div class="row">
            <h1 class="page-head-text">
                {{ __('elaqe') }}
            </h1>
            <p class="page-text">
                {{ __('elaqe_text') }}
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
                   {{__('home_page')}}
                </a>
            </li>
            <span>/</span>
            <li class="breadcrumb-item">
             {{__('elaqe')}}
            </li>
        </ul>
    </div>
</div>
<!--Breadcrumb-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="contact">
                <div class="col-4">
                    <h3 class="contact-head">
                        {{__('address')}}
                    </h3>
                    <p class="contact-text">
                {!! json_decode($contact['address'])->{app()->getLocale()} !!}
                    </p>
                </div>
                <div class="col-4">
                    <h3 class="contact-head">
                        {{__('phone')}}
                    </h3>
                    <p class="contact-text">
                        <a href="tel:+{{ str_replace(' ','',$contact->phone )}}">
                            {{ $contact->phone}}
                        </a>
                    </p>
                    <p class="contact-text">
                        <a href="tel:+{{ str_replace(' ','',$contact->phone_2) }}">
                            {{ $contact->phone_2}}
                        </a>
                    </p>
                </div>
                <div class="col-4">
                    <h3 class="contact-head">
                        {{__('email')}}
                    </h3>
                    <p class="contact-text">
                        <a href="mailTo:{{ $contact->email }}">
                          {{ $contact->email }}
                        </a>
                    </p>
                </div>
            </div>

            @if(session()->has('message'))
            <div class="alert alert-success" style="text-align:center;">
                {{ session()->get('message') }}
            </div>
        @endif 
            <form action="{{ route('sendmail2') }}" method="post">
                @csrf
                <input class="contact-input text-input" type="text" name="name" placeholder="Adınız">
                <input class="contact-input text-input" type="text" name="surname" placeholder="Soyadınız">
                <input class="contact-input contact-mail" type="text" name="email" placeholder="E-mail adresi">
                <input class="contact-input contact-number" type="text" name="phone" placeholder="Telefon nömrəsi">
                <textarea id="" cols="30" rows="10" name="msj" placeholder="Əlavə qeyd"></textarea>
                <button class="btn" type="submit">
                    {{__('send')}}
                </button>
            </form>
        </div>
    </div>
</section>
    
@endsection