@php
     $page_product = App\Models\Pages::where('id',9)->first();
@endphp

@foreach ($products as $product )
        

    <div class="product">
        <a  
         @if(App::getLocale() === 'en')
       href="{{ URL('/en/'.$page_product->{'slug_'.App::getLocale()}.'/'.$product->category->{'slug_'.App::getLocale()}.'/'.$product->{'slug_'.App::getLocale()} )}}" 
       @elseif(App::getLocale() === 'ru')
       href="{{ URL('/ru/'.$page_product->{'slug_'.App::getLocale()}.'/'.$product->category->{'slug_'.App::getLocale()}.'/'.$product->{'slug_'.App::getLocale()} )}}" 
      @else
      href="{{ URL('/'.$page_product->{'slug_'.App::getLocale()}.'/'.$product->category->{'slug_'.App::getLocale()}.'/'.$product->{'slug_'.App::getLocale()} )}}" 
      @endif >
            <img src="{{  (!empty($product->thumbnail)? url('upload/product_images/'.$product->thumbnail):asset('/admin/assets/img/avatars/1.png')  )}}" alt="">
            <h3 class="products-head">
                {{ $product->translate('name', app()->getLocale()) }}
            </h3>
            <p class="products-body">
                Çeşid: {{ $product->translate('cesid', app()->getLocale()) }}
                Spirt: {{ $product->spirt }}
            </p>
      <a
      @if(App::getLocale() === 'en')
       href="{{ URL('/en/'.$page_product->{'slug_'.App::getLocale()}.'/'.$product->category->{'slug_'.App::getLocale()}.'/'.$product->{'slug_'.App::getLocale()} )}}" 
       @elseif(App::getLocale() === 'ru')
       href="{{ URL('/ru/'.$page_product->{'slug_'.App::getLocale()}.'/'.$product->category->{'slug_'.App::getLocale()}.'/'.$product->{'slug_'.App::getLocale()} )}}" 
      @else
      href="{{ URL('/'.$page_product->{'slug_'.App::getLocale()}.'/'.$product->category->{'slug_'.App::getLocale()}.'/'.$product->{'slug_'.App::getLocale()} )}}" 
      @endif
       >      <button class="btn">
                Ətraflı
            </button> </a>
            <p class="products-right-border"></p>
        </a>
    </div>
    @endforeach

