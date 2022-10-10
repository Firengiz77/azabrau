@extends('front.layout.master')

@section('container')
   <!--Home Start-->
   <section id="page-home">
    <img src="{{ asset('/front/img/products-img.png') }}" alt="">
    <div class="page-bg"></div>
    <div class="container">
        <div class="row">
            <h1 class="page-head-text">
                ƏLAQƏ
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
                Əlaqə
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
                        Ünvan
                    </h3>
                    <p class="contact-text">
                {!! json_decode($contact['address'])->{app()->getLocale()} !!}
                    </p>
                </div>
                <div class="col-4">
                    <h3 class="contact-head">
                        Telefon
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
                        e-mail
                    </h3>
                    <p class="contact-text">
                        <a href="mailTo:{{ $contact->email }}">
                          {{ $contact->email }}
                        </a>
                    </p>
                </div>
            </div>


            <form action="{{ route('sendmail2') }}" method="post">
                <input class="contact-input text-input" type="text" name="name" placeholder="Adınız">
                <input class="contact-input text-input" type="text" name="surname" placeholder="Soyadınız">
                <input class="contact-input contact-mail" type="text" name="email" placeholder="E-mail adresi">
                <input class="contact-input contact-number" type="text" name="phone" placeholder="Telefon nömrəsi">
                <textarea name="" id="" cols="30" rows="10" name="msj" placeholder="Əlavə qeyd"></textarea>
                <button class="btn" type="submit">
                    Göndər
                </button>
            </form>
        </div>
    </div>
</section>
    
@endsection