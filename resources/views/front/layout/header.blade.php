<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/responsive.css') }}">
</head>

<body>
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
                           <li class="nav-item">
                               <a
                               @if(app()->getLocale() === 'az')
                               href="{{ "/".$pages['slug']}}"
                               @else
                               href="{{ "/".App::getLocale()."/".$pages['slug']}}"
                               @endif >
                               {{ $pages['page'] }} 
                            </a>
                           </li>
                       @endif
                       @endforeach
                   
                    </ul>
                </nav>
                <form class="search" action="">
                    <a href="javascript:void(0)">
                        <img class="open-search" src="{{ asset('/front/img/search.svg') }}" alt="">
                    </a>
                    <input class="search-input" type="text">
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

                            
                                @if(Route::is('index'))
                                @if(app()->getLocale() === 'az')
                                <li>  <a href="/" class="active">Az</a></li>
                                <li>  <a href="/en">En</a>  </li>
                                <li>  <a href="/ru">Ru</a>  </li>
                                @elseif(app()->getLocale() === 'en')
                                <li>  <a href="/en" class="active">En</a> </li>
                                <li>  <a href="/">Az</a> </li>
                               <li>  <a href="/ru">Ru</a> </li>
                                @else
                                <li> <a href="/ru" class="active">Ru</a>  </li>
                                <li> <a href="/en">En</a>  </li>
                               <li>  <a href="/">Az</a>  </li>
                                @endif
                                @else

                                @if(app()->getLocale() === 'az')
                                <li>  <a href="/{{$page->slug_az}}" class="active">Az</a></li>
                                <li>  <a href="/en/{{$page->slug_en}}">En</a>  </li>
                                <li>  <a href="/ru/{{$page->slug_ru}}">Ru</a>  </li>
                                @elseif(app()->getLocale() === 'en')
                                <li>  <a href="/en/{{$page->slug_en}}" class="active">En</a> </li>
                                <li>  <a href="/{{$page->slug_az}}">Az</a> </li>
                               <li>  <a href="/ru/{{$page->slug_ru}}">Ru</a> </li>
                                @else
                                <li> <a href="/ru/{{$page->slug_ru}}" class="active">Ru</a>  </li>
                                <li> <a href="/en/{{$page->slug_en}}">En</a>  </li>
                               <li>  <a href="/{{$page->slug_az}}">Az</a>  </li>
                                @endif



                                @endif
                        

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header End-->