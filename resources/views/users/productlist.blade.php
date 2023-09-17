 <div class="section-products" style="margin-top: 50px;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h2 style="margin-top: 40px;">Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Section 1: Display First 8 Products -->
             @foreach($data as $index => $product)
            <div class="col-md-6 col-lg-4 col-xl-3 product-card">
                <div id="product-{{ $product->id }}" class="single-product">
                    <div class="part-1" style="background-image: url('{{ asset('storage/images/' . $product->image) }}'); border-radius: 5px;">
                        <ul>
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li> 
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                           <!-- <li><a href="#"><i class="fas fa-plus"></i></a></li> -->
                            <li><a href="#"><i class="fas fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">{{ $product->name }}</h3>
                        <h4 class="product-price">{{ $product->price }}</h4>
                    </div>
                </div>
            </div>
            @if($index === 7)
            Display the "View More" button after the first 8 products -->
            <div class="col-12 text-center mt-3">
                <button id="view-more-button" class="btn btn-primary">View More</button>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div> 

<!-- Section 2: Display Products by Category (Initially Hidden) -->

 
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const viewMoreButton = document.getElementById("view-more-button");
        const categoryProducts = document.getElementById("category-products");

        viewMoreButton.addEventListener("click", function () {
            // Show the category products when the "View More" button is clicked
            categoryProducts.style.display = "block";
            // Hide the "View More" button
            viewMoreButton.style.display = "none";
        });
    });
</script>
