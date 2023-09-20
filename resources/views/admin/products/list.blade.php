
@extends('admin.layout.master')
@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                <h1>Products </h1>

            </div>
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div> --}}
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">



          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.products.create')}}" class="btn btn-primary">Add Product</a>

                    @if (session()->has('message'))
                    <div class="flashMessage float-right" style="color: #e41818">
                        {{ session('message') }}
                    </div>
                @endif


                </div>

              <div class="card-body">

                @if(count($products) === 0)
                <div>
                    <h2 class="d-flex justify-content-center " style="margin:20px;">Sorry, products not available !...  &#128577;</h2>
                </div>
            @else
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px"></th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Available</th>

                      <th style="width: 16%">Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                      @foreach ($products as $product)



                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td><img src="{{asset("storage/images/".$product->image)}}" height="40" width="40" alt="no image "></td>
                      <td>{{ $product->name }}</td>
                      <td>{{$product->category->name ?? ''}}</td>
                      <td style="text-align: right;">₹  {{ number_format($product->price, 2) }}</td>

                      <td style="text-align: center; color: @if($product->is_favorite == 1)green @else red @endif;">
                        @if($product->is_favorite == 1)
                            Yes
                        @else
                            No
                        @endif
                    </td>

                      <td>
                        <a href="{{ route('admin.products.edit', encrypt($product->id)) }}" class="btn btn-primary btn-sm">
                            <i class="far fa-edit" style="color: #ffffff; padding-right: 3px;"></i>Edit
                        </a>
                          <a href="{{ route('admin.products.delete', encrypt($product->id)) }}" class="btn btn-danger btn-sm m-1">
                            <i class="fas fa-trash fa-animate-shake" style="color: white; padding-right: 8px;"></i>Delete
                        </a>
                      </td>

                    </tr>

                      @endforeach


                  </tbody>
                </table>
              @endif
              </div>
               <h4 style="margin-left: 15px">Total products ({{$products->total()}})</h4>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  {{$products->links()}}

              </div>
            </div>
            <!-- /.card -->


            <!-- /.card -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
      </div>

    </section>
    <!-- /.content -->
<!-- ./wrapper -->
@endsection
