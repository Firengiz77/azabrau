<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('/front/img/favicon.png') }}" type="image/x-icon">
    <title>@yield('title')</title>

 


    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/responsive.css') }}">
    {{-- alertify css --}}
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    
    



    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    

</head>

<body >
    <!--Header Start-->
    <header>
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('/front/img/logo-azabrau.svg') }}" alt="">
                    </a>
                </div>
                <div class="mobile-right">
                    <div class="social">
                        <a href="{{ $contact->fb_link }}">
                            <img src="{{ asset('/front/img/face.svg') }}" alt="">
                        </a>
                        <a href="{{ $contact->insta_link }}">
                            <img src="{{ asset('/front/img/inst.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="mobile-nav" bis_skin_checked="1">
                        <a href="javascript:void(0)">
                            <span class="active"></span>
                            <span class="active"></span>
                            <span class="active"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <img class="close-nav" src="{{ asset('/front/img/x-icon.png') }}" alt="">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('/front/img/logo-azabrau.svg') }}" alt="">
                    </a>
                </div>
                <nav>
                    <ul class="navbar">
                        @foreach ($pagess as $pages)
                        @if($pages['parent_id']==0)
                           <li class="nav-item @if($pages['route']==$current_route || $pages['page_id']==$page_id ) active  @elseif($current_route === 'single3' && $pages['route']==='products') active @elseif($pages['page_id']==='5' && $page_id==='7') active @endif">
                               <a   
                               @if($pages['route'] === 'index')

                               @if(app()->getLocale() === 'az')
                               href="{{ "/"}}"
                               @else
                               href="{{ "/ru"}}"
                               @endif >

                               @else


                               @if(app()->getLocale() === 'az')
                               href="{{ "/".$pages['slug']}}"
                               @else
                               href="{{ "/".App::getLocale()."/".$pages['slug']}}"
                               @endif >
                               @endif
                               {{ $pages['page'] }} 
                            </a>
                           </li>
                       @endif
                       @endforeach
                   
                    </ul>
                </nav>
        
                  
                <form class="search" action="{{url('/search')}}" method="get">
                @csrf
                    <a href="javascript:void(0)">
                        <img class="open-search" src="{{ asset('/front/img/search.svg') }}" alt="">
                    </a>
                    <input class="search-input"  name="search_field"  type="text">
                    <img class="close-search" src="{{ asset('/front/img/x-icon.png') }}" alt="">
                </form>
                <div class="social">
                    <a href="{{ $contact->fb_link }}">
                        <img src="{{ asset('/front/img/face.svg') }}" alt="">
                    </a>
                    <a href="{{ $contact->insta_link }}">
                        <img src="{{ asset('/front/img/inst.svg') }}" alt="">
                    </a>
                    <div class="lang-div"> 
                        <img src="{{ asset('/front/img/lang.svg') }}" alt="">
                        <ul class="lang">

                        @if($page->route !=='search')
                                @if(Route::is('index'))
                                <li>  <a href="/" @if(App::getLocale() === 'az')  class="active" @endif  >Az</a></li>
                                <!-- <li>  <a href="/en" @if(App::getLocale() === 'en')  class="active" @endif  >En</a>  </li> -->
                                <li>  <a href="/ru" @if(App::getLocale() === 'ru')  class="active" @endif  >Ru</a>  </li>
                                @else
                                @php
                                if (app()->getLocale() === 'az') {
                                $variable2 = request()->segment(2);
                                $variable3 = request()->segment(3);
                                } else {
                                $variable3 = request()->segment(3);
                                $variable4 = request()->segment(4);
                                }
                                $blogs_single = App\Models\Blog::where('slug_'.App::getLocale(),request()->segment(2))->orWhere('slug_'.App::getLocale(),request()->segment(3))->get();
                                $product_single = App\Models\Product::where('slug_'.App::getLocale(),request()->segment(3))->orWhere('slug_'.App::getLocale(),request()->segment(4))->with('category')->get();
                                 @endphp

                                <li>  <a @if(App::getLocale() === 'az')   class="active" @endif href="/{{ $page->slug_az }}@if($page->page_id == 7)@foreach($blogs_single as $blog)@if($blog->slug_az){{ '/'.$blog->slug_az }}@endif @endforeach @elseif($page->page_id == 9)@foreach($product_single as $product_s)@if($product_s->slug_az){{ '/'.$product_s['category']['slug_az'] }}@endif{{ '/'.$product_s->slug_az }}@endforeach @endif" >Az</a></li>
                                <!-- <li>  <a  @if(App::getLocale() === 'en')   class="active" @endif   href="/en/{{ $page->slug_en }}@if($page->page_id == 7)@foreach($blogs_single as $blog)@if($blog->slug_en){{ '/'.$blog->slug_en }}@endif @endforeach @elseif($page->page_id == 9)@foreach($product_single as $product_s)@if($product_s->slug_en){{ '/'.$product_s['category']['slug_en'] }}@endif{{ '/'.$product_s->slug_en }}@endforeach @endif">En</a>  </li> -->
                                <li>  <a  @if(App::getLocale() === 'ru')   class="active" @endif   href="/ru/{{ $page->slug_ru }}@if($page->page_id == 7)@foreach($blogs_single as $blog)@if($blog->slug_ru){{ '/'.$blog->slug_ru }}@endif @endforeach @elseif($page->page_id == 9)@foreach($product_single as $product_s)@if($product_s->slug_ru){{ '/'.$product_s['category']['slug_ru'] }}@endif{{ '/'.$product_s->slug_ru }}@endforeach  @endif" >Ru</a>  </li>
                            

                                @endif
                                @endif
                        

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header End-->
      