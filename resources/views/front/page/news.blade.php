@extends('front.layout.master')

@section('title'){{ $page->{'title_'.App::getLocale() } }}@endsection
@section('description'){{substr($page->{'description_'.App::getLocale() }, 0, 155)}}@endsection
@section('keywords'){{substr($page->{'keywords_'.App::getLocale() }, 0, 55)}} @endsection




@php
    $news = App\Models\Blog::first();
    $news2= App\Models\Blog::get();
@endphp

@section('container')

    <!--Home Start-->
    <section id="page-home">
        <img src="{{ asset('/front/img/products-img.png') }}" alt="">
        <div class="page-bg"></div>
        <div class="container">
            <div class="row">
                <h1 class="page-head-text">
                    XƏBƏRLƏR
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
                    Xəbərlər
                </li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb-->
    <!--Page Start-->
    <section id="news-page">
        <div class="container">
            <div class="row">
                <div class="main-card">
                    <div class="col-6">
                        <img src="{{  (!empty($news->image)? url('upload/blog_images/'.$news->image):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
                    </div>
                    <div class="col-5">
                        <h3 class="main-head">
                            {!! json_decode($news['name'])->{app()->getLocale()} !!}
                        </h3>
                        <p class="date">
                            {{ date('d.m.Y', strtotime($news->created_at))  }}
                        </p>
                        <p class="text">
                            {!! json_decode($news['title'])->{app()->getLocale()} !!}
                        </p>
                       <a href="{{ route('single2',['slug'=>$page_single->{'slug_'.App::getLocale()},'project_slug'=>$news->{'slug_'.App::getLocale()}]) }}"> <button class="btn">
                            Ətraflı
                        </button>
                    </a>
                    </div>
                </div>

                @foreach ($news2 as $news)
                    
               
                <div class="news-card item">
                    <a href="{{ route('single2',['slug'=>$page_single->{'slug_'.App::getLocale()},'project_slug'=>$news->{'slug_'.App::getLocale()}]) }}">
                        
                        <img src="{{  (!empty($news->image)? url('upload/blog_images/'.$news->image):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
                        <div class="news-text">
                            <h3 class="news-head">
                                {!! json_decode($news['name'])->{app()->getLocale()} !!}
                            </h3>
                            <a href="{{ route('single2',['slug'=>$page_single->{'slug_'.App::getLocale()},'project_slug'=>$news->{'slug_'.App::getLocale()}]) }}" class="detail">
                                Ətraflı
                            </a>
                            <p class="news-date">
                               {{ date('d.m.Y', strtotime($news->created_at))  }}
                            </p>
                        </div>
                    </a>
                </div>
                
                @endforeach
            </div>
        </div>
    </section>
    <!--Page End-->


    
@endsection