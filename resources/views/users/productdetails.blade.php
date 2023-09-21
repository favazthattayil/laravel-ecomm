<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Axelmart</title>
    <link rel="icon" type="image/x-icon" href="img/AdminLTELogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    .icon-hover:hover {
  border-color: #3b71ca !important;
  background-color: white !important;
  color: #3b71ca !important;
}

.icon-hover:hover i {
  color: #3b71ca !important;
}
</style>
</head>


<!-- Content -->
<section class="py-5">
    <div class="container">
        <div class="row gx-5">
            <aside class="col-lg-6">
                <div class="border rounded-4 mb-3 d-flex justify-content-center">
                    <a data-fslightbox="mygallery" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
                        <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="{{ asset('storage/images/' . $product->image) }}" />
                    </a>
                </div>

                <!-- thumbs-wrap.// -->
                <!-- gallery-wrap .end// -->
            </aside>
            <main class="col-lg-6" style="margin-top: 100px;">
                <div class="ps-lg-3">
                    <h4 class="title text-dark">
                       {{$product->name}}
                    </h4>
                    <div class="d-flex flex-row my-3">
                        <h6 class="product-price" style="color: {{ $product->is_favorite == 0 ? 'red' : 'green' }}">
                            {{ $product->is_favorite == 0 ? 'Not Available' : 'Available' }}
                        </h6>

                        <!-- ... (Content for product details) ... -->
                    </div>


                    <div class="mb-3">
                        <span class="h5">{{$product->price}}.00</span>
                        <span class="text-muted">/per box</span>
                    </div>

                    <p>
                        Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts for
                        men.
                    </p>

                    <hr />

                    {{-- <div class="col-md-4 col-6 mb-3">
                        <label class="mb-2 d-block">Quantity</label>
                        <div class="input-group mb-3" style="width: 170px;">
                            <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input type="text" class="form-control text-center border border-secondary"  aria-label="Example text with button addon" aria-describedby="button-addon1" />
                            <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div> --}}

                    {{-- <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
                    <a href="#" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a> --}}
                </div>
            </main>
        </div>
    </div>
</section>
<!-- Content -->


