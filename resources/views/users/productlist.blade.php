<div class="section-products" style="margin-top: 50px;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">

                    <h2 style="margin-top: 40px;">products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($data  as $product)
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-1" class="single-product">
                    <div class="part-1" style="background-image: url({{ asset('storage/images/' . $product->image) }}); border-radius:5px;">
                        <ul>
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                            <li><a href="#"><i class="fas fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">{{ $product->name }}</h3>
                        {{-- <h4 class="product-old-price">$79.99</h4> --}}
                        <h4 class="product-price">{{ $product->price }}</h4>
                    </div>
                </div>
            </div>

            @if ($loop->iteration >= 8)
                @break
            @endif
        @endforeach


        </div>
    </div>
</div>
