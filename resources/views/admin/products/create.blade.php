@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.products.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="number" class="form-control" name="price" id="exampleInputPassword1"
                                        placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category</label>
                                    <select name="category_id" class="form-control">
                                        <option value="">Select a Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" style="color: black;">{{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>


                                <div class="form-group">

                                    <label for="image">Image </label>

                                    <div class="input-group">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input" name="image"
                                                id="exampleInputFile" accept="image/*" required
                                                onchange="validateFileType(this)">

                                            <label class="custom-file-label" for="exampleInputFile" id="fileLabel">Choose
                                                file</label>

                                        </div>

                                    </div>

                                    <div id="fileTypeError" class="text-danger" style="display: none;">Please select a JPEG,
                                        PNG, or GIF file.</div>

                                </div>
                                <div class="form-group">
                                    <label>Available</label>
                                    <input type="radio" value="1" name="is_favorite" /> Yes
                                    <input type="radio" value="0" name="is_favorite" /> No
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                    <!-- general form elements -->

                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <script>
        function validateFileType(input) {

            const allowedTypes = ["image/jpeg", "image/png", "image/gif"];

            const selectedFile = input.files[0];



            if (selectedFile && !allowedTypes.includes(selectedFile.type)) {

                document.getElementById("fileTypeError").style.display = "block";

                input.value = ""; // Clear the selected file

            } else {

                document.getElementById("fileTypeError").style.display = "none";

                document.getElementById("fileLabel").innerText = selectedFile ? selectedFile.name : "Choose file";

            }

        }
    </script>
@endsection
