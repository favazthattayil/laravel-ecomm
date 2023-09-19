@extends('users.layout.umaster')
@section('content')
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart</h5>
                        </div>
                        <div class="card-body">

                            <!-- Initialize a variable to store the total price -->
                            @php
                                $totalPrice = 0;
                            @endphp
                            @if (count($cartItem) === 0)
                                <div>
                                    <h2 class="d-flex justify-content-center " style="margin:20px;">"Your cart is empty." </h2>
                                </div>
                            @else
                                <!-- Single item -->
                                @foreach ($cartItem as $cart)
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                            <!-- Image -->
                                            <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                                data-mdb-ripple-color="light">
                                                <img style="width: 100px; height:100px;"
                                                    src="{{ asset('storage/images/' . $cart->products->image) }}"
                                                    class="w-100" alt="Product Name" />

                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)">
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Image -->
                                        </div>

                                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                            <!-- Data -->
                                            <p><strong>{{ $cart->products->name }}</strong></p>
                                            <p>{{ $cart->quantity }}</p>
                                            <p>{{ $cart->products->price }}</p>



                                            <!-- Data -->
                                        </div>

                                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                            <!-- Quantity -->
                                            <div class="d-flex mb-3" style="max-width: 300px">
                                                <div class="form-outline" style="margin: 0; height: 100%">
                                                    {{-- <input id="quantity-{{ $cart->id }}" min="1" name="quantity"
                                            value="{{ $cart->quantity }}"
                                            type="number" class="form-control"
                                            style="height: 100%; width: 70px;"
                                            oninput="updateTotalAmount({{ $cart->id }}, this.value)" /> --}}



                                                </div>
                                            </div>
                                            @php
                                                $totalamountofeach = $cart->products->price * $cart->quantity;
                                            @endphp <!-- Quantity -->

                                            <a href="{{ route('delete.cart', encrypt($cart->id)) }}"
                                                class="btn btn-primary btn-sm me-1 mb-2 float-right">


                                                <i class="fas fa-trash fa-animate-shake"
                                                    style="color: white; padding-right: 8px;"></i>
                                            </a>



                                            <!-- Price -->
                                            <p class="text-start text-md-center">
                                                <strong id="total-amount-{{ $cart->id }}">Total :
                                                    {{ $totalamountofeach }}</strong>
                                                <!-- Calculate the total price for this item by multiplying the quantity and price -->
                                            </p>

                                        </div>
                                    </div>

                                    <!-- Update the total price with the price of the current product -->
                                    @php
                                        $totalPrice += $cart->products->price * $cart->quantity;
                                    @endphp
                                @endforeach
                                <!-- Single item -->
                            @endif
                            <hr class="my-4" />

                            <!-- Display the total price -->
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                {{-- Products
                            <span id="total-amount-for-all-items">$67</span> --}}
                                <!-- Format the total price as a currency -->
                            </li>

                            <!-- Single item -->
                        </div>
                    </div>

                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body">
                            <p><strong>We accept</strong></p>
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                alt="Visa" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                alt="American Express" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                alt="Mastercard" />
                            <img class="me-2" width="45px"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScoqOEhzEFoLe-QGzQtSqurZ1mkD3IEPy5_rncqTTQ&s"
                                alt="PayPal acceptance mark" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span id="total-amount-for-all-items">${{ number_format($totalPrice, 2) }}</span>
                                    <!-- Format the total price as a currency -->
                                </li>

                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span id="total-amount-for-all-items">${{ number_format($totalPrice, 2) }}</span>
                                    <!-- Format the total price as a currency -->
                                </li>
                            </ul>


                            <a class="btn btn-primary btn-lg btn-block" href="{{ route('selectaddress') }}"> Go to
                                checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <script>
        function updateTotalAmount(cartId, newQuantity) {
            // Calculate the updated total amount based on the new quantity
            const pricePerItem = parseFloat({{ $cart->products->price }});
            const totalAmount = pricePerItem * newQuantity;

            // Update the displayed total amount for this item
            const totalAmountElement = document.getElementById(`total-amount-${cartId}`);
            if (totalAmountElement) {
                totalAmountElement.textContent = `$${totalAmount.toFixed(2)}`;
            }

            // Calculate the total amount for all items by summing up their individual totals
            let totalAmountForAllItems = 0;
            @foreach ($cartItem as $cartItem)
                const quantity{{ $cartItem->id }} = parseFloat({{ $cartItem->quantity }});
                const price{{ $cartItem->id }} = parseFloat({{ $cartItem->products->price }});
                totalAmountForAllItems += (quantity{{ $cartItem->id }} * price{{ $cartItem->id }});
            @endforeach

            // Update the displayed total amount for all items
            const totalAmountForAllItemsElement = document.getElementById('total-amount-for-all-items');
            if (totalAmountForAllItemsElement) {
                totalAmountForAllItemsElement.textContent = `$${totalAmountForAllItems.toFixed(2)}`;
            }
        }
    </script> --}}
@endsection
