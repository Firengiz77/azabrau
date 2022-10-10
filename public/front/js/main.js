$('.product-slider').owlCarousel({
    loop:true,
    center: true,
    margin:10,
    nav:true,
    navText: ["<img src='../img/left.svg'>","<img src='../img/right.svg'>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
$('.news-slider').owlCarousel({
    loop:true,
    center: true,
    margin:50,
    nav:true,
    navText: ["<img src='/front/img/news-left.svg'> geri","irəli<img src='/front/img/news-right.svg'>"],
    responsive:{
        0:{
            items:1
        },
        992:{
            items: 2
        },
        1200:{
            items:3
        }
    }
})
$(".filter-1-first").click(function(){
    $(this).parent().toggleClass('active')
});
$(".filter-2-first").click(function(){
    $(this).parent().toggleClass('active')
});
$('.contact-number').mask('(000) 000 00 00');
$(".text-input").keypress(function (e) {
    var s = new RegExp("^[a-zA-Z_]+$"),
        a = String.fromCharCode(e.charCode ? e.charCode : e.which);
    return !!s.test(a) || (e.preventDefault(), !1);
})
$('.loc-btn').click(function(){
    let child = $(this).parent().data('id');
    $(".maps-iframes iframe").css("display","none");
    $(`.maps-iframes iframe:nth-child(${child})`).css("display","block")
});
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 0 && scroll < 1200 ) {
        var $i = $('#i');
        var $window = $(window);
        var offset = 50;
        var minHeight = 10;
        $window.on('scroll resize', grow);
        function grow() {
            var scrollPercentage = 100 * $window.scrollTop() / ($('html').height() - $window.height());
            var maxHeight = $(window).height() - (offset * 3) - minHeight;
            var newHeight = ((maxHeight / 30) * scrollPercentage) + minHeight;
            $i.css('height', newHeight);
        }
    }
    if (scroll >= 1200) {
        var $i2 = $('#i2');
        var $window = $(window);
        var offset = 50;
        var minHeight = 0;
        
    // console.log($('html').height()+"____html height")
    // console.log($window.height()+"____window height")
        $i2.css('width', "10%");
        $window.on('scroll resize', grow2);
        function grow2() {
            
            // var scrollPercentage = 0;
            // var scrollPercentage = 100 * $window.scrollTop() / ($('html').height() - $window.height());
            // var maxHeight = $(window).height() - (offset * 3) - minHeight;
            // var newHeight = ((maxHeight / 50) * scrollPercentage) + minHeight;
            
            var maxHeight = ($window.scrollTop() - $(window).height()) / 100
            var newHeight = maxHeight*20
            // console.log(scrollPercentage+"___scrollPercentage")
            // console.log(maxHeight+"___maxHeight")
            // console.log(newHeight+"____newHeight")
            $i2.css('width', newHeight+"%");
        }
    }
    if (scroll >= 1200) {
        var $i3 = $('#i3');
        var $window = $(window);
        var offset = 50;
        var minHeight = 0;
        
    // console.log($('html').height()+"____html height")
    // console.log($window.height()+"____window height")
        $i3.css('height', "10%");
        $window.on('scroll resize', grow3);
        function grow3() {
            var maxHeight = ($window.scrollTop() - $(window).height()) / 100
            var newHeight = maxHeight*10
            $i3.css('height', newHeight+"%");
        }
    }
    if (scroll >= 2000) {
        var $i4 = $('#i4');
        var $window = $(window);
        var offset = 50;
        var minHeight = 0;
        
    // console.log($('html').height()+"____html height")
    // console.log($window.height()+"____window height")
        $i4.css('width', "10%");
        $window.on('scroll resize', grow4);
        function grow4() {
            var maxHeight = ($window.scrollTop() - $(window).height()) / 100
            var newHeight = maxHeight*5
            $i4.css('width', newHeight+"%");
        }
    }
    if (scroll >= 2200) {
        var $i5 = $('#i5');
        var $window = $(window);
        var offset = 50;
        var minHeight = 0;
        
    // console.log($('html').height()+"____html height")
    // console.log($window.height()+"____window height")
        $i5.css('width', "10%");
        $window.on('scroll resize', grow5);
        function grow5() {
            var maxHeight = ($window.scrollTop() - $(window).height()) / 100
            var newHeight = maxHeight*5
            $i5.css('height', newHeight+"%");
        }
    }
});
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 600) {
        $(".about-page-block:first-child .about-page-text").addClass("active");
    }else{
        $(".about-page-block:first-child .about-page-text").removeClass("active");
    }
    if (scroll >= 1500) {
        $(".about-page-block:nth-child(2) .about-page-text").addClass("active");
    }else{
        $(".about-page-block:nth-child(2) .about-page-text").removeClass("active");
    }
    if (scroll >= 2200) {
        $(".about-page-block:nth-child(3) .about-page-text").addClass("active");
    }else{
        $(".about-page-block:nth-child(3) .about-page-text").removeClass("active");
    }
    if(scroll >= 50){
        $("header").addClass("active")
    }else{
        $("header").removeClass("active")
    }
});
$(".down-img").click(function(event) {
    $("html, body").animate({ scrollTop: "+=650px" }, 800);
});
$(".mobile-nav").click(function(){
    $("header .container:nth-child(2)").addClass("active")
})
$(".close-nav").click(function(){
    $("header .container:nth-child(2)").removeClass("active")
})
$(".open-search").click(function(){
    $(".search").addClass("active")
})
$(".close-search").click(function(){
    $(".search").removeClass("active")
})