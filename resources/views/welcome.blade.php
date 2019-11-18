<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Foodiz</title>
    <link rel="icon" href="{{asset('assets/images/foodiz.png')}}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    {{-- CDN for bootstrap-select   --}}
    <!-- Latest compiled and minified CSS -->
    {{-- <link rel="stylesheet" href="{{asset('bootstrap-select/dist/css/bootstrap-select.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">"> --}}



    <!-- Styles -->
    <style>
        html {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        body {
            background-color: #fff;
            color: goldenrod;
            font-family: '', cursive;
            font-weight: 200;
            /* height: 100vh; */
            margin: 0;
            /* background-image: url('https://backgrounddownload.com/wp-content/uploads/2018/09/background-for-food-website-3.jpg'); */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            /* background-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%),url('https://backgrounddownload.com/wp-content/uploads/2018/09/background-for-food-website-3.jpg'); */
            background-image:
                linear-gradient(90deg, rgba(148, 187, 233, 0.2), rgba(9, 9, 121, 0.7), rgba(0, 212, 255, 0.3)),
                url('https://backgrounddownload.com/wp-content/uploads/2018/09/background-for-food-website-3.jpg');
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: gold;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        #card_img_height {
            height: 25%;
        }
    </style>
</head>

<body>
    <div class=" position-ref">
        @if (Route::has('login'))
        {{-- <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div> --}}
        @endif

        <div class="content">
            <div class="container-fluid">
                <h1> Welcome to Sunshine Food Stall.<br> Touch & Order
                </h1>
                <h2>Foods</h2>
                {{-- <div class="row">
                    @foreach ($foods as $food)
                    <div class="col-md-4">
                        <div class="card " style="width: 18rem;">
                            <img src="https://911foodexpress.com/wp-content/uploads/2017/06/Steam-MOMO-1140x600.png"
                                class="card-img-top" alt="..." id="card_img_height">
                            <div class="card-body">
                                <h5 class="card-title">{{$food->name}}{{$loop->iteration}} </h5>
                <h6 class="card-subtitle mb-2 text-muted">Rs.{{$food->rate}}/ plate</h6>
                <div class="container">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Place Your Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                    <div class="card">
                        <img src="https://911foodexpress.com/wp-content/uploads/2017/06/Steam-MOMO-1140x600.png"
                            class="card-img-top" alt="..." id="card_img_height">
                        <div class="card-body">
                            <h5 class="card-title">{{$food->name}}{{$loop->iteration}} </h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rs.{{$food->rate}}/ plate</h6>
                            <input type="text" class="form-control" name="item_rate" id="item_rate{{$loop->iteration}}"
                                value="{{$food->rate}}" hidden>
                            <input type="text" name="item_id" id="item_id" hidden value="{{$loop->iteration}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button"
                                        class="quantity-left-minus btn btn-danger btn-number form-control"
                                        data-type="minus" data-field="">
                                        <span class="glyphicon glyphicon-minus">-</span>
                                    </button>
                                </span>
                                <input type="number" id="quantity{{$loop->iteration}}" name="quantity"
                                    class="form-control input-number" value="1" min="1" max="100">
                                <span class="input-group-btn">
                                    <button type="button"
                                        class="quantity-right-plus btn btn-success btn-number form-control"
                                        data-type="plus" data-field="">
                                        <span class="glyphicon glyphicon-plus">+</span>
                                    </button>
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-4">
                        <input type="text" name="item_price" id="item_price{{$loop->iteration}}" readonly
                            value="{{$food->rate}}" class="form-control">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Bag</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div> --}}

    <div class="row">
        <div class="col-md-9">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card " style="width: 18rem;">
                            <img src="{{asset('assets/images/steam_momo.png')}}"
                                class="card-img-top" alt="..." id="card_img_height">
                            <div class="card-body">
                                <h5 class="card-title" id="item_name1">Momo</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Rs.140/ plate</h6>
                                <div class="container">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button" id="quantity-left-minus1"
                                                        class="quantity-left-minus1 btn btn-danger btn-number form-control"
                                                        data-type="minus" data-field="">
                                                        <span class="glyphicon glyphicon-minus">-</span>
                                                    </button>
                                                </span>
                                                {{-- <input type="text" name="" id="test" value="333"> --}}
                                                <input type="number" id="momo_qty" name="momo_qty"
                                                    class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button" id="quantity-right-plus1"
                                                        class="quantity-right-plus1 btn btn-success btn-number form-control"
                                                        data-type="plus" data-field="">
                                                        <span class="glyphicon glyphicon-plus">+</span>
                                                    </button>
                                                </span>
                                                {{-- <a href="{{route('foods.edit',['food'=>$food->id ]) }}" class="btn
                                                btn-info">Add to cart</a> --}}
                                                {{-- <button type="button" class="btn btn-info btn-sm"> Add to Cart</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="add_to_bag1">Add to Bag</button>

                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                                                Add to cart
                                            </button> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        {{-- <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Place Your Order</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                        <div class="card">
                                            <img src="https://911foodexpress.com/wp-content/uploads/2017/06/Steam-MOMO-1140x600.png"
                                                class="card-img-top" alt="..." id="card_img_height">
                                            <div class="card-body">

                                                <h5 class="card-title" id="item_name">Momo</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Rs.140/ plate</h6>
                                                <input type="text" class="form-control" name="item_rate" id="item_rate"
                                                    value="" hidden>
                                                <input type="text" name="item_id" id="item_id" hidden value="1">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" id="quantity-left-minus1"
                                                            class="quantity-left-minus1 btn btn-danger btn-number form-control"
                                                            data-type="minus" data-field="">
                                                            <span class="glyphicon glyphicon-minus">-</span>
                                                        </button>
                                                    </span>
                                                    <input type="text" id=" " name="quantity"
                                                        class="form-control input-number" value="1" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button type="button" id="quantity-left-plus1"
                                                            class="quantity-right-plus1 btn btn-success btn-number form-control"
                                                            data-type="plus" data-field="">
                                                            <span class="glyphicon glyphicon-plus">+</span>
                                                        </button>
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-4">
                                        </div>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="add_to_bag">Add to
                                            Bag</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- modal finish --}}

                    <div class="col-md-4">
                        <div class="card " style="width: 18rem;">
                            <img src="{{asset('assets/images/choumin.jpg')}}" class="card-img-top" alt="..."
                                id="card_img_height">
                            <div class="card-body">
                                <h5 class="card-title" id="item_name2">Choumin</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Rs.120/ plate</h6>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-left-minus2 btn btn-danger btn-number form-control"
                                                        data-type="minus" data-field="">
                                                        <span class="glyphicon glyphicon-minus">-</span>
                                                    </button>
                                                </span>
                                                <input type="number" id="quantity2" name="quantity2"
                                                    class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-right-plus2 btn btn-success btn-number form-control"
                                                        data-type="plus" data-field="">
                                                        <span class="glyphicon glyphicon-plus">+</span>
                                                    </button>
                                                </span>
                                                {{-- <a href="{{route('foods.edit',['food'=>$food->id ]) }}" class="btn
                                                btn-info">Add to cart</a> --}}
                                                {{-- <button type="button" class="btn btn-info btn-sm"> Add to Cart</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="add_to_bag2">Add to Bag</button>

                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                                Add to cart
                                            </button> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        {{-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Place Your Order</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                        <div class="card">
                                            <img src="https://pbs.twimg.com/media/DM8W0U8WsAAFDDN.jpg"
                                                class="card-img-top" alt="..." id="card_img_height">
                                            <div class="card-body">
                                                <h5 class="card-title" id="item_name2">Choumin</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Rs.120/ plate</h6>
                                                <input type="text" class="form-control" name="item_rate" id="item_rate"
                                                    value="" hidden>
                                                <input type="text" name="item_id" id="item_id" hidden value="2">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus2 btn btn-danger btn-number form-control"
                                                            data-type="minus" data-field="">
                                                            <span class="glyphicon glyphicon-minus">-</span>
                                                        </button>
                                                    </span>
                                                    <input type="number" id="quantity2" name="quantity2"
                                                        class="form-control input-number" value="1" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus2 btn btn-success btn-number form-control"
                                                            data-type="plus" data-field="">
                                                            <span class="glyphicon glyphicon-plus">+</span>
                                                        </button>
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-4">
                                            <input type="text" name="item_price2" id="item_price2" readonly value="120"
                                                class="form-control">
                                        </div>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="add_to_bag2">Add to
                                            Bag</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- modal finish --}}
                    <div class="col-md-4">
                        <div class="card " style="width: 18rem;">
                            <img src="{{asset('assets/images/fries.jpg')}}"
                                class="card-img-top" alt="..." id="card_img_height">
                            <div class="card-body">
                                <h5 class="card-title" id="item_name3">Fries</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Rs.100/ plate</h6>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-left-minus3 btn btn-danger btn-number form-control"
                                                        data-type="minus" data-field="">
                                                        <span class="glyphicon glyphicon-minus">-</span>
                                                    </button>
                                                </span>
                                                <input type="number" id="quantity3" name="quantity3"
                                                    class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-right-plus3 btn btn-success btn-number form-control"
                                                        data-type="plus" data-field="">
                                                        <span class="glyphicon glyphicon-plus">+</span>
                                                    </button>
                                                </span>
                                                {{-- <a href="{{route('foods.edit',['food'=>$food->id ]) }}" class="btn
                                                btn-info">Add to cart</a> --}}
                                                {{-- <button type="button" class="btn btn-info btn-sm"> Add to Cart</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="add_to_bag3">Add to Bag</button>

                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                                    Add to cart
                                                </button> --}}
                                </div>
                            </div>
                        </div>

                        {{-- <!-- Modal -->
                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModal3Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal3Label">Place Your Order</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                        <div class="card">
                                            <img src="https://www.staysnatched.com/wp-content/uploads/2018/05/air-fryer-fries-header.jpg"
                                                class="card-img-top" alt="..." id="card_img_height">
                                            <div class="card-body">
                                                <h5 class="card-title" id="item_name3">Fries</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Rs.100/ plate</h6>
                                                <input type="text" class="form-control" name="item_rate" id="item_rate"
                                                    value="" hidden>
                                                <input type="text" name="item_id" id="item_id" hidden value="3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus3 btn btn-danger btn-number form-control"
                                                            data-type="minus" data-field="">
                                                            <span class="glyphicon glyphicon-minus">-</span>
                                                        </button>
                                                    </span>
                                                    <input type="number" id="quantity3" name="quantity3"
                                                        class="form-control input-number" value="1" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus3 btn btn-success btn-number form-control"
                                                            data-type="plus" data-field="">
                                                            <span class="glyphicon glyphicon-plus">+</span>
                                                        </button>
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-4">
                                            <input type="text" name="item_price3" id="item_price3" readonly value=""
                                                class="form-control">
                                        </div>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="add_to_bag3">Add to
                                            Bag</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <hr>
                <h2>Drinks</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card " style="width: 18rem;">
                            <img src="{{asset('assets/images/frooti.jpg')}}"
                                class="card-img-top" alt="..." id="card_img_height">
                            <div class="card-body">
                                <h5 class="card-title" id="item_name4">Frooti</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Rs.30 / piece</h6>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-left-minus4 btn btn-danger btn-number form-control"
                                                        data-type="minus" data-field="">
                                                        <span class="glyphicon glyphicon-minus">-</span>
                                                    </button>
                                                </span>
                                                <input type="number" id="quantity4" name="quantity4"
                                                    class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-right-plus4 btn btn-success btn-number form-control"
                                                        data-type="plus" data-field="">
                                                        <span class="glyphicon glyphicon-plus">+</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="add_to_bag4">Add to Bag</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card " style="width: 18rem;">
                            <img src="{{asset('assets/images/bottle.jpg')}}"
                                class="card-img-top" alt="..." id="card_img_height">
                            <div class="card-body">
                                <h5 class="card-title" id="item_name5">Water </h5>
                                <h6 class="card-subtitle mb-2 text-muted">Rs.50/ piece</h6>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-left-minus5 btn btn-danger btn-number form-control"
                                                        data-type="minus" data-field="">
                                                        <span class="glyphicon glyphicon-minus">-</span>
                                                    </button>
                                                </span>
                                                <input type="number" id="quantity5" name="quantity5"
                                                    class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-right-plus5 btn btn-success btn-number form-control"
                                                        data-type="plus" data-field="">
                                                        <span class="glyphicon glyphicon-plus">+</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="add_to_bag5">Add to Bag</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card " style="width: 18rem;">
                            <img src="{{asset('assets/images/coke.jpg')}}"
                                class="card-img-top" alt="..." id="card_img_height">
                            <div class="card-body">
                                <h5 class="card-title" id="item_name6">Coke</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Rs.45 / piece</h6>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-left-minus6 btn btn-danger btn-number form-control"
                                                        data-type="minus" data-field="">
                                                        <span class="glyphicon glyphicon-minus">-</span>
                                                    </button>
                                                </span>
                                                <input type="number" id="quantity6" name="quantity6"
                                                    class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-right-plus6 btn btn-success btn-number form-control"
                                                        data-type="plus" data-field="">
                                                        <span class="glyphicon glyphicon-plus">+</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="add_to_bag6">Add to Bag</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card " style="width: 18rem;">
                <h2>My Orders:</h2>
                <a onClick="window.location.reload()" class="btn btn-sm btn-primary">Place Your Order</a>
                <div class="card-body">
                    <table class="table table-hover" id="my_order_table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Qty</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Total </td>
                                <td id="total_price">0</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Are You Satisfied ?
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Did you like the System ? </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Let us know what was your view regarding the system...

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No not so Much
                                    </button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Yes! Enoyed a
                                        lot</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>

    </div>
    </div>

    <hr>
    {{-- <div class="row">
        <div class="col-md-3 offset-md-1">
            <button class="btn btn-info btn-lg" type="submit">Place Order</button>

        </div>
    </div> --}}

    </div>

    </div>
    </div>
    <hr>

</body>

@include('includes.footer')