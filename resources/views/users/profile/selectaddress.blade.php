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





    {{-- address list --}}




    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-white mb-5">
                    <div class="card-heading clearfix border-bottom mb-4">
                        <h4 class="card-title"> Shipping Addresses</h4>
                    </div>

                    <div class="card-body">
                        {{-- <form method="POST" action="{{ route('select.address') }}">
                            @csrf <!-- CSRF token --> --}}
                            <ul class="list-unstyled">
                                @foreach ($userAddresses as $address)
                                    <li class="position-relative booking">
                                        <div class="media" style="padding: 30px;">
                                            <div class="msg-img">
                                                <!-- Display user avatar or profile image if available -->
                                            </div>
                                            <div class="media-body">
                                                <h5 style="font-weight: bold;">{{ $address->fullname }}</h5>
                                                <p style="font-weight: 520">{{ $address->city }},
                                                    {{ $address->state }} ,
                                                </p>
                                                <h6 style="font-weight: 520">
                                                    {{ $address->street }} ,
                                                    {{ $address->pincode }} ,
                                                    {{ $address->phone }}
                                                </h6>
                                                <!-- Display address information -->
                                                <!-- ... (other address fields) ... -->
                                            </div>
                                            <div class="radio-button">
                                                <input type="radio" id="address{{ $address->id }}" name="selected_address" value="{{ $address->id }}" required>
                                                <label for="address{{ $address->id }}">Select Address</label>
                                            </div>
                                        </div>
                                        <hr style="height: 1px; background-color: gray;">
                                    </li>
                                @endforeach
                            </ul>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Select Address</button>
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
