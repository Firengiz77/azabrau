@extends('front.layout.master')

@section('container')



@php
 
    $news = App\Models\Blog::where('slug_'.App::getLocale(),request()->segment(2))->orWhere('slug_'.App::getLocale(),request()->segment(3))->first();

    
@endphp




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
                <a href="#">
                    Xəbərlər
                </a>
            </li>
            <span>/</span>
            <li class="breadcrumb-item">
                {!! json_decode($news['name'])->{app()->getLocale()} !!}
               
            </li>
        </ul>
    </div>
</div>
<!--Breadcrumb-->
<!--News Single Start-->
<section id="news-single">
    <div class="texture-5">
        <img src="{{ asset('/front/img/texture-5.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <h2 class="page-head">
                {!! json_decode($news['name'])->{app()->getLocale()} !!}
            </h2>
            <img src="{{  (!empty($news->image)? url('upload/blog_images/'.$news->image):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
            <p class="date">
                {{ date('d.m.Y', strtotime($news->created_at))  }}
            </p>
            <div class="news-single-text">
                {!! json_decode($news['desc'])->{app()->getLocale()} !!}
            </div>
         
         
        </div>
    </div>
</section>
<!--News Single End-->
    
@endsection