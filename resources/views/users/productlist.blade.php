<div class="section-products" style="margin-top: 50px;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h2 style="margin-top: 40px;">Products</h2>


                    @if (session('message'))
                        <div class="alert alert-success" id="session-message">
                            {{ session('message') }}
                        </div>

                        <script>
                            // Set a timeout to hide the message after 3 seconds (3000 milliseconds)

                            setTimeout(function() {

                                var sessionMessage = document.getElementById('session-message');

                                if (sessionMessage) {

                                    sessionMessage.style.display = 'none';

                                }

                            }, 4000); // 3000 milliseconds = 3 seconds
                        </script>
                    @endif

                </div>


            </div>
        </div>
        <div class="row">

            <!-- Loop through products -->
            @foreach ($items ?? '' as $product)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-{{ $product->id }}" class="single-product">
                        <div class="part-1"
                            style="background-image: url('{{ asset('storage/images/' . $product->image) }}'); border-radius: 5px; background-size:cover;">

                            <ul>
                                <li>


                                    <form action="{{ route('use_home.addcart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input name="quantity" title="quantity"
                                            style="width: 40px; height: 40px; text-align: center; font-weight: bold; border: none;"
                                            type="number" value="1" min="1">
                                            <input type="hidden" name="uuid" value="{{ substr(\Illuminate\Support\Str::uuid(), 0, 10) }}">


                                        <button type="submit" style="width: 40px; height: 40px;" title="add to cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </form>

                                </li>
                                <li title="details" style="float: right"><a href="#"><i
                                            class="fas fa-expand"></i></a></li>
                                <br>
                            </ul>

                        </div>
                        <div class="part-2">
                            <h3 class="product-title">{{ $product->name }}</h3>
                            <h4 class="product-price">{{ $product->price }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
