<div class="product-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
    <div class="product-item__header">
        <div class="product-item__thumbnail">
            <a href="{{ route('product.details',$data->id) }}">
                <img src="{{ asset('') }}uploads/products/{{ $data->image }}" alt="Product" width="258" height="298">
            </a>
        </div>
        {{-- <div class="product-item__badge">
            <span class="onsale">-34%</span>
        </div> --}}
        {{-- <div class="product-item__actions">
            <a class="product-item__action" data-bs-tooltip="tooltip" data-bs-placement="top" title="" href="#"
              data-bs-original-title="Add to cart" aria-label="Add to cart"><i class="fa fa-shopping-cart"></i></a>
            <a class="product-item__action" data-bs-tooltip="tooltip" data-bs-placement="top" title="" href="#"
              data-bs-original-title="Add to wishlist" aria-label="Add to wishlist"><i class="far fa-heart"></i></a>
            <a class="product-item__action" data-bs-tooltip="tooltip" data-bs-placement="top" title="" href="#"
              data-bs-original-title="Compare" aria-label="Compare"><i class="fas fa-signal"></i></a>
        </div> --}}
    </div>
    <div class="product-item__info text-center">
        <div class="product-item__price">
            <span class="sale-price discount">${{ $data->price }}.<small class="separator">00</small></span>
            {{-- <span class="regular-price">$89.<small class="separator">00</small></span> --}}
        </div>
        <h2 class="product-item__title"><a href="{{ route('product.details',$data->id) }}">{{ $data->name }}</a>
        </h2>
    </div>
</div>