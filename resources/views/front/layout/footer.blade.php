    <!--Footer Start-->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <ul class="foot-nav">
                            @foreach ($pagess as $pages)
                            @if($pages['parent_id']==0)
                               <li class="foot-item">
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

                         


                            {{-- <li class="foot-item">
                                Haqqımızda
                            </li>
                            <li class="foot-item">
                                Şəki Şərabları
                            </li>
                            <li class="foot-item">
                                Abrau-Dürso
                            </li>
                            <li class="foot-item">
                                Satış məntəqələri
                            </li>
                            <li class="foot-item">
                                Xəbərlər
                            </li>
                            <li class="foot-item">
                                Əlaqə
                            </li> --}}
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="foot-contact">
                            <li class="contact-group">
                                <p class="contact-item">
                                    {{  __('phone') }}
                                </p>
                                <span class="contact-text">
                                    <a href="tel:{{ str_replace(' ','',$contact->phone) }}">
                                     {{   $contact->phone }}
                                    </a>
                                </span>
                            </li>
                            <li class="contact-group">
                                <p class="contact-item">
                                    {{  __('email') }}
                                </p>
                                <span class="contact-text">
                                    {{ $contact->email }}
                                </span>
                            </li>
                            <li class="contact-group">
                                <p class="contact-item">
                                    {{  __('address') }}
                                </p>
                                <span class="contact-text">
                                    {!! json_decode($contact['address'])->{app()->getLocale()} !!}
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <div class="foot-social">
                            <a href="{{ $contact->insta_link }}">
                                <img src="{{ asset('/front/img/insta.svg') }}" alt="">
                            </a>
                            <a href="{{ $contact->wp_link }}">
                                <img src="{{ asset('/front/img/wp-icon.svg') }}" alt="">
                            </a>
                            <a href="{{ $contact->fb_link }}">
                                <img src="{{ asset('/front/img/face-icon.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="bottom-first">
                       {{__('footer_1')}}
                    </p>
                    <a class="bottom-logo" href="#">
                        <img src="{{ asset('/front/img/footer-logo.svg') }}" alt="">
                    </a>
                    <p class="bottom-end">
                        <a href="#">
                            {{__('footer_2')}} 
                        </a>
                        <span>
                            |
                        </span>
                        <a href="#">
                            {{__('footer_2')}} 
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer End-->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
    integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/front/js/main.js') }}"></script>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


</html>