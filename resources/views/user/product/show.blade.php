@extends('layouts.client.app')
@section('content')

    <div id="body">
        <!-- Cart shopping -->
        <section class="shopping-cart">
            <div class="cart-hover">
                <span class="cart-count animate__animated animate__heartBeat"></span>
                <a href="view-cart.html" data-toggle="dropdown"><i class="tf-ion-ios-cart-outline"
                                                                   style="font-size: 50px;"></i></a>
                <div class="dropdown-cart animate__animated animate__fadeInRight animate__fast">
                    <div class="show-cart-list">
                        <div class="cart-list">
                            <div style="flex: 3;">
                                <a class="pull-left" href="#">
                                    <img class="media-object-cart" src="images/shop/cart/cart-2.jpg" alt="image" />
                                </a>
                            </div>
                            <div class="media-body-cart">
                                <h4 class="media-heading"><a href="">Ladies Bag</a></h4>
                                <div class="cart-price">
                                    <span>1 x</span>
                                    <span>1250.00</span>
                                </div>
                                <h5><strong>$1200</strong></h5>
                            </div>
                            <div style="flex: 1;">
                                <a href="#" class="remove"><i class="tf-ion-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="cart-summary-total">
                        <div style="flex: 2; text-align: left;">Total :</div>
                        <div class="total-price" style="flex: 4; text-align: left;">
                            $17555
                        </div>
                        <div class="clear-cart btn btn-danger outline">Clear All</div>
                    </div>
                    <ul class="text-center cart-buttons">
                        <li>
                            <a href="{{url('/viewcart')}}" class="btn btn-small">View Cart</a>
                        </li>
                        <li>
                            <a href="{{url('/checkout')}}" class="btn btn-small btn-solid-border">Checkout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--? modal for shopping-cart-mobile -->
        <div class="modal product-modal fade" id="shopping-cart-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tf-ion-close"></i>
            </button>
            <div class="modal-dialog animate__animated animate__backInDown" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row" style="display: flex; flex-direction: column;">
                            <br>
                            <div class="show-cart-list">
                                <div class="cart-list">
                                    <div style="flex: 3;">
                                        <a class="pull-left" href="#">
                                            <img class="media-object-cart" src="images/shop/cart/cart-2.jpg" alt="image" />
                                        </a>
                                    </div>
                                    <div class="media-body-cart">
                                        <h4 class="media-heading"><a href="">Ladies Bag</a></h4>
                                        <div class="cart-price">
                                            <span>1 x</span>
                                            <span>1250.00</span>
                                        </div>
                                        <h5><strong>1200</strong></h5>
                                    </div>
                                    <div style="flex: 1;">
                                        <a href="#" class="remove"><i class="tf-ion-close"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-summary-total">
                                <div style="flex: 2; text-align: left;">Total :</div>
                                <div class="total-price" style="flex: 4; text-align: left;">
                                    17555
                                </div>
                                <div class="clear-cart btn btn-danger outline">Clear All</div>
                            </div>
                            <ul class="text-center cart-buttons">
                                <li>
                                    <a href="view-cart.html" class="btn btn-small">View Cart</a>
                                </li>
                                <li>
                                    <a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? end -->
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content">
                            <h1 class="page-name">Product</h1>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            {{-- <form class="align-item-center">
              <div class="col-md-11">
                <input class="form-control me-2" type="search" placeholder="Search product..." aria-label="Search">
              </div>
              <div>
                <button class="btn btn-outline-success" type="submit">Search</button>
              </div>
            </form> --}}
        </div>
        <section class="products section">
            <div class="container">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <img src="/storage/Image/product/{{ $product->img }}" alt="hehe">
                <div class="bg-gray-200">
                    <h5>Reviews</h5>
                    <div>
                        <form action="{{ route('review.store') }}" method="POST">
                            <div class="container">
                                <div class="form-group row">
                                    <label for="title" class="col-sm-1-12 col-form-label"></label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="title" id="title"
                                               placeholder="Review Title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="rating" class="col-sm-1-12 col-form-label"></label>
                                    <div class="col-sm-1-12">
                                        <input type="number" class="form-control" name="rating" id="rating"
                                               placeholder="Review Title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="content" class="col-sm-1-12 col-form-label"></label>
                                    <div class="col-sm-1-12">
                                        <textarea type="text" class="form-control" name="content" id="content"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{ asset('/css/customer/js/script.js')}}" defer></script>
        <script src="{{ asset('/css/customer/js/script.js')}}"></script>
        <!-- Main jQuery -->
        <script src="{{asset('/css/customer/plugins/jquery/dist/jquery.min.js')}}"></script>
        <!-- navbar mobile js -->
        <script src="{{asset('/css/customer/plugins/multi-level-dropdown-vegas-nav/dist/js/vgnav.js')}}"></script>
        <!-- Bootstrap 3.1 -->
        <script src="{{asset('/css/customer/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Bootstrap Touchpin -->
        <script src="{{asset('/css/customer/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
        <!-- Video Lightbox Plugin -->
        <script src="{{asset('/css/customer/plugins/ekko-lightbox/dist/ekko-lightbox.min.js')}}"></script>
        <!-- Count Down Js -->
        <script src="{{asset('/css/customer/plugins/SyoTimer/build/jquery.syotimer.min.js')}}"></script>

        <!-- Main Js File -->
        <script>
            $(document).ready(function () {
                $('.panel-body>ul>li').find('input:checkbox').on('click', function () {
                    if ($('.panel-body>ul>li').find('input:checkbox:checked').length > 0) {
                        $('.cat').hide();
                        $('.panel-body>ul>li').find('input:checked').each(function () {
                            $('.cat.' + $(this).attr('rel')).not('.hidden').show('slow');
                        });
                    } else {
                        $('.cat').not('.hidden').show('slow');
                    }
                });
            });
        </script>
    </div>
@endsection

