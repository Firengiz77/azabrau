@php
     $page_product = App\Models\Pages::where('id',9)->first();
@endphp

@foreach ($products as $product )
        

    <div class="product">
        <a href="{{ URL('/'.$page_product->{'slug_'.App::getLocale()}.$product->category->{'slug_'.App::getLocale()}.$product->{'slug_'.App::getLocale()} )}}" >
            <img src="{{  (!empty($product->thumbnail)? url('upload/product_images/'.$product->thumbnail):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
            <h3 class="products-head">
                {{ $product->translate('name', app()->getLocale()) }}
            </h3>
            <p class="products-body">
                Çeşid: {{ $product->translate('cesid', app()->getLocale()) }}
                Spirt: {{ $product->spirt }}
            </p>
      <a href="{{ URL('/'.$page_product->{'slug_'.App::getLocale()}.$product->category->{'slug_'.App::getLocale()}.$product->{'slug_'.App::getLocale()} )}}" >      <button class="btn">
                Ətraflı
            </button> </a>
            <p class="products-right-border"></p>
        </a>
    </div>
    @endforeach

