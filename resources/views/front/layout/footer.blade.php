    <!--Footer Start-->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <ul class="foot-nav">
                            <li class="foot-item">
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
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="foot-contact">
                            <li class="contact-group">
                                <p class="contact-item">
                                    Telefon
                                </p>
                                <span class="contact-text">
                                    <a href="tel:+994501234567">
                                        +994 50 123 45 67
                                    </a>
                                </span>
                            </li>
                            <li class="contact-group">
                                <p class="contact-item">
                                    E-mail
                                </p>
                                <span class="contact-text">
                                    info@azabrau.az
                                </span>
                            </li>
                            <li class="contact-group">
                                <p class="contact-item">
                                    Ünvan
                                </p>
                                <span class="contact-text">
                                    Port Baku,Neftchilar Avenue 153,
                                    Baku Azerbaijan
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
                        2022 Az Abrau
                    </p>
                    <a class="bottom-logo" href="#">
                        <img src="{{ asset('/front/img/footer-logo.svg') }}" alt="">
                    </a>
                    <p class="bottom-end">
                        <a href="#">
                            Məxfilik Siyasəti
                        </a>
                        <span>
                            |
                        </span>
                        <a href="#">
                            Şərtlər və qaydalar
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

</html>