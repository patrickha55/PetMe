
@extends('layouts.client.appWithoutCategory')
@section('head')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
        }

        .wrapper {
            padding: 30px 50px;
            border: 1px solid #ddd;
            border-radius: 15px;
            margin: 10px auto;
            max-width: 600px;
            background: url('https://wallpapercave.com/wp/wp2446975.jpg');
        }

        h4 {
            letter-spacing: -1px;
            font-weight: 400
        }

        .img {
            width: 70px;
            height: 70px;
            border-radius: 6px;
            object-fit: cover
        }

        #img-section p,
        #deactivate p {
            font-size: 12px;
            color: #777;
            margin-bottom: 10px;
            text-align: justify
        }

        #img-section b,
        #img-section button,
        #deactivate b {
            font-size: 14px
        }

        label {
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 500;
            color: #777;
            padding-left: 3px
        }

        .form-control {
            border-radius: 10px
        }

        input[placeholder] {
            font-weight: 500
        }

        .form-control:focus {
            box-shadow: none;
            border: 1.5px solid #0779e4
        }

        select {
            display: block;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 10px;
            height: 47px;
            padding: 5px 10px
        }

        select:focus {
            outline: none
        }

        .button {
            background-color: #fff;
            color: #0779e4
        }

        .button:hover {
            background-color: #0779e4;
            color: #fff
        }

        .btn-primary {
            background-color: #0779e4
        }

        .danger {
            background-color: #fff;
            color: #e20404;
            border: 1px solid #ddd
        }

        .danger:hover {
            background-color: #e20404;
            color: #fff
        }

        @media(max-width:576px) {
            .wrapper {
                padding: 25px 20px
            }

            #deactivate {
                line-height: 18px
            }
        }
    </style>
@endsection

@section('content')
    <main class="page-content">
        <h1 class="text-center m-5">{{ auth()->user()->userName }}'s Wishlist</h1>
        <div class="wishlist-main-content section-ptb">
            <div class="container">
                <h4 class="font-weight-bold text-success">
                    @if (session('status'))
                        {{ session('status') }}
                    @endif
                </h4>
                <div class="row">
                    <div class="col-12">
                        @if (count($user->favorites))
                            <div class=" table-content table-responsive">
                                <table class="table table-hover">
                                    <thead style="background-color: #D0D0D0; font-weight:600;">
                                    <tr>
                                        <th class="plantmore-product-thumbnail">Images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="plantmore-product-price">Unit Price</th>
                                        <th class="plantmore-product-stock-status">Stock Status</th>
                                        <th class="plantmore-product-add-cart">Add to cart</th>
                                        <th class="plantmore-product-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user->favorites as $favorite)
{{--                                        {{dd($favorite)}}--}}
                                        <tr>
                                            <td class="plantmore-product-thumbnail"><a href="#"><img src="/storage/Image/product/{{ $favorite->img }}" alt="{{ $favorite->name }}" width="100px"></a></td>
                                            <td class="plantmore-product-name"><a href="{{ route('home.show', \App\Product::find($favorite->id)) }}">{{ $favorite->name }}</a></td>
                                            <td class="plantmore-product-price">
                                                <span class="amount">
                                                    @currency($favorite->price) VNĐ
                                                </span>
                                            </td>
                                            <td class="plantmore-product-stock-status">
                                                <span class="in-stock">
                                                    @if($favorite->stock > 0)
                                                        In stock
                                                    @else
                                                        Out of stock
                                                    @endif
                                                </span></td>
                                            <td class="plantmore-product-add-cart"><a href="{{ route('cart.add', \App\Product::find($favorite->id)) }}">Add to Cart</a></td>
                                            <td class="plantmore-product-remove">
                                                <form action="{{ route('wishlist.destroy', $favorite) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border:none;"><i class="fas fa-window-close"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center pb-5">
                                <p class="text-center h3">You don't have any item in your wishlist.</p>
                                <a href="{{ route('products') }}" class="h3 ">Browse Products</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
        <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="/assets/js/popper.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/assets/js/isotope.pkgd.min.js"></script>
        <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="/assets/js/jquery.counterup.min.js"></script>
        <script src="/assets/js/waypoints.min.js"></script>
        <script src="/assets/js/ajax-mail.js"></script>
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/main.js"></script>
@endsection

