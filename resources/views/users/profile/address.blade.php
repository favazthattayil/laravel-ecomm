@extends('users.layout.umaster')
@section('content')
    <style>
        body {
            background: #f6f9fc;
        }

        /* booking */

        .bg-light-blue {
            background-color: #e9f7fe !important;
            color: #3184ae;
            padding: 7px 18px;
            border-radius: 4px;
        }

        .bg-light-green {
            background-color: rgba(40, 167, 69, 0.2) !important;
            padding: 7px 18px;
            border-radius: 4px;
            color: #28a745 !important;
        }

        .buttons-to-right {
            position: absolute;
            right: 0;
            top: 40%;
        }

        .btn-gray {
            color: #666;
            background-color: #eee;
            padding: 7px 18px;
            border-radius: 4px;
        }

        .booking:hover .buttons-to-right .btn-gray {
            opacity: 1;
            transition: .3s;
        }

        .buttons-to-right .btn-gray {
            opacity: 0;
            transition: .3s;
        }

        .btn-gray:hover {
            background-color: #36a3f5;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #f53636;
            color: #fff;
        }


        .booking {
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 30px;
        }

        .booking:last-child {
            margin-bottom: 0px;
            border-bottom: none;
            padding-bottom: 0px;
        }

        @media screen and (max-width: 575px) {
            .buttons-to-right {
                top: 10%;
            }

            .buttons-to-right a {
                display: block;
                margin-bottom: 20px;
            }

            .buttons-to-right a:last-child {
                margin-bottom: 0px;
            }

            .bg-light-blue,
            .bg-light-green,
            .btn-gray {
                padding: 7px;
            }
        }

        .card {
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
            border-radius: 4px;
            box-shadow: none;
            border: none;
            padding: 25px;
        }

        .mb-5,
        .my-5 {
            margin-bottom: 3rem !important;
        }

        .msg-img {
            margin-right: 20px;
        }

        .msg-img img {
            width: 60px;
            border-radius: 50%;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <div class="card h-100" style="margin: 30px;">

        <div class="dropdown p-2">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Add New Address
            </button>
            @if (session('message'))
            <div class="alert alert-danger" id="sessionMessage" style="display: none; padding-top: 10px;">
                {{ session('message') }}
            </div>

            @endif
            <form action="{{ route('address.store') }}" method="POST">

                @csrf

                <div class="dropdown-menu">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                {{-- <h6 class="mb-2 text-primary">Personal Details</h6> --}}
                            </div>


                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" name="fullname" id="fullName"
                                        placeholder="Enter full name"
                                        value="{{ Auth::user()->fname . ' ' . Auth::user()->lname }}">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" class="form-control" name="email" id="eMail"
                                        placeholder="Enter email ID" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" id="phone"
                                        placeholder="Enter phone number" value="{{ Auth::user()->phone }}">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                {{-- <div class="form-group">
                            <label for="website">Website URL</label>
                            <input type="url" class="form-control" id="website" placeholder="Website url">
                        </div> --}}
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mt-3 mb-2 text-primary">Shipping Address</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="Street">Street</label>
                                    <input type="name" class="form-control" id="Street" name="street"
                                        placeholder="Enter Street">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="ciTy">City</label>
                                    <input type="name" class="form-control" id="ciTy" name="city"
                                        placeholder="Enter City">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="sTate">State</label>
                                    <input type="text" class="form-control" name="state" id="state"
                                        placeholder="Enter State">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="pin">pin code</label>
                                    <input type="number" maxlength="6" pattern="[0-9]{6}" class="form-control"
                                        name="pincode" id="pin" placeholder="pin code">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                    {{-- <button type="button" id="submit" name="submit"
                                        class="btn btn-secondary">Cancel</button> --}}
                                    <button class="btn btn-primary" type="submit">save</button>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>
        </div>

    </div>

    </form>


    {{-- address list --}}




    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-white mb-5">
                    <div class="card-heading clearfix border-bottom mb-4">
                        <h4 class="card-title"> Shipping Addresses : </h4>
                    </div>


                    <div class="card-body">
                        <ul class="list-unstyled">

                            @if (count($addresses) === 0)
                            <div>
                                <h2 class="d-flex justify-content-center " style="margin:20px;">"Add your shipping address , and keep shopping."
                                     </h2>
                            </div>
                        @else
                            @foreach ($addresses as $adress)
                                {{-- @if (session('message'))
                                    <div class="alert alert-danger" id="sessionMessage">
                                        {{ session('message') }}
                                    </div>
                                @endif --}}

                                <li class="position-relative booking">

                                    <form method="POST" action="{{ route('update.address') }}">
                                        @csrf <!-- CSRF token -->
                                        <div class="media" style="padding: 30px;">
                                            <div class="msg-img">
                                                {{-- <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""> --}}
                                            </div>
                                            <div class="media-body">
                                                <h5 style="font-weight: bold;" class="mb-4">
                                                    {{ $adress->fullname }}
                                                </h5>
                                                <div class="mb-3">
                                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0"
                                                        style="font-weight: bold;">Name:</span>
                                                    <span id="street"
                                                        class="bg-light-blue">{{ $adress->fullname }}</span>
                                                    <input id="fullnameInput" name="fullname" type="text"
                                                        class="edit-mode"
                                                        style="display: none; border: 1px solid transparent;"
                                                        value="{{ $adress->fullname }}">
                                                </div>


                                                <div class="mb-3">
                                                    <input id="addressID" name="addressID" type="hidden"
                                                        value="{{ $adress->id }}">
                                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0"
                                                        style="font-weight: bold;">City:</span>
                                                    <span id="city" class="bg-light-blue">{{ $adress->city }}</span>
                                                    <input id="cityInput" name="city" type="text"
                                                        class="edit-mode" style="display: none; border: none;"
                                                        value="{{ $adress->city }}">
                                                </div>
                                                <div class="mb-3">
                                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0"
                                                        style="font-weight: bold;">State:</span>
                                                    <span id="state"
                                                        class="bg-light-blue">{{ $adress->state }}</span>
                                                    <input id="stateInput" name="state" type="text"
                                                        class="edit-mode"
                                                        style="display: none; border: 1px solid transparent;"
                                                        value="{{ $adress->state }}">
                                                </div>
                                                <div class="mb-3">
                                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0"
                                                        style="font-weight: bold;">Street:</span>
                                                    <span id="street"
                                                        class="bg-light-blue">{{ $adress->street }}</span>
                                                    <input id="streetInput" name="street" type="text"
                                                        class="edit-mode"
                                                        style="display: none; border: 1px solid transparent;"
                                                        value="{{ $adress->street }}">
                                                </div>
                                                <div class="mb-3">
                                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0"
                                                        style="font-weight: bold;">Pincode:</span>
                                                    <span id="pincode"
                                                        class="bg-light-blue">{{ $adress->pincode }}</span>
                                                    <input id="pincodeInput" name="pincode"
                                                       type="text" class="edit-mode"
                                                        style="display: none; border: 1px solid transparent;"
                                                        value="{{ $adress->pincode }}">
                                                </div>
                                                <div class="mb-3">
                                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0"
                                                        style="font-weight: bold;">Phone:</span>
                                                    <span id="phone"
                                                        class="bg-light-blue">{{ $adress->phone }}</span>
                                                    <input id="phoneInput" name="phone" type="tel"
                                                        class="edit-mode"
                                                        style="display: none; border: 1px solid transparent;"
                                                        value="{{ $adress->phone }}">
                                                </div>
                                                <div class="mb-5">
                                                    <span class="mr-2 d-block d-sm-inline-block mb-1 mb-sm-0"
                                                        style="font-weight: bold;">Contact:</span>
                                                    <span class="border-right pr-2 mr-3">{{ $adress->fullname }} </span>
                                                    <span class="border-right pr-2 mr-3">{{ $adress->email }} </span>
                                                    <span>{{ $adress->phone }} </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons-to-right">
                                            <button type="submit" class="btn-gray mr-2 updateButton" style="display: none; border: none;">
                                                <i class="far fa-check-circle mr-2"></i> Update
                                            </button>
                                            <button type="button" class="btn-gray mr-2 editButton" style="border: none;">
                                                <i class="fas fa-edit mr-2"></i> Edit address
                                            </button>

                                            <a href="{{ route('delete.address', ['encryptedAddressID' => encrypt($adress->id)]) }}" class="btn-gray mr-2 bg-danger" style="border: none;">
                                                <i class="fas fa-trash mr-2"></i>Delete
                                            </a>


                                        </div>

                                    </form>
                                    <hr style="height: 1px; background-color: gray;">
                                </li>
                            @endforeach
                            @endif

                        </ul>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const editButtons = document.querySelectorAll(".editButton");
            const updateButtons = document.querySelectorAll(".updateButton");

            // Function to toggle edit mode for a specific li
            function toggleEditMode(liIndex) {
                const li = document.querySelector(`li.booking:nth-child(${liIndex + 1})`);
                const spans = li.querySelectorAll(".edit-mode");
                spans.forEach((span) => {
                    span.style.display = span.style.display === "none" ? "inline-block" : "none";
                });

                const editButton = li.querySelector(".editButton");
                const updateButton = li.querySelector(".updateButton");
                editButton.style.display = editButton.style.display === "none" ? "inline-block" : "none";
                updateButton.style.display = updateButton.style.display === "none" ? "inline-block" : "none";
            }

            // Add click event listeners to edit buttons
            editButtons.forEach((button, index) => {
                button.addEventListener("click", function() {
                    toggleEditMode(index);
                });
            });

            // Add click event listeners to update buttons
            updateButtons.forEach((button, index) => {
                button.addEventListener("click", function() {
                    // Add code to update the data on the server and toggle back to view mode for the specific li.
                    toggleEditMode(index);
                });
            });
        });
    </script>


@endsection
