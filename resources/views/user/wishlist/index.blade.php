@extends('layouts.client.app')

@section('content')
<main class="page-content">
       
    <div class="wishlist-main-content section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" class="cart-table">
                        <div class=" table-content table-responsive">
                            <table class="table table-hover">
                                <thead>
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
                                    <tr>
                                        <td class="plantmore-product-thumbnail"><a href="#"><img src="assets/images/other/cart-03.jpg" alt=""></a></td>
                                        <td class="plantmore-product-name"><a href="#">Nullam maximus</a></td>
                                        <td class="plantmore-product-price"><span class="amount">$23.39</span></td>
                                        <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                        <td class="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                                        <td class="plantmore-product-remove"><a href="#"><i class="zmdi zmdi-close"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="plantmore-product-thumbnail"><a href="#"><img src="assets/images/other/cart-02.jpg" alt=""></a></td>
                                        <td class="plantmore-product-name"><a href="#">Natus erro</a></td>
                                        <td class="plantmore-product-price"><span class="amount">$30.50</span></td>
                                        <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                        <td class="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                                        <td class="plantmore-product-remove"><a href="#"><i class="zmdi zmdi-close"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="plantmore-product-thumbnail"><a href="#"><img src="assets/images/other/cart-01.jpg" alt=""></a></td>
                                        <td class="plantmore-product-name"><a href="#">Sit voluptatem</a></td>
                                        <td class="plantmore-product-price"><span class="amount">$40.19</span></td>
                                        <td class="plantmore-product-stock-status"><span class="out-stock">out stock</span></td>
                                        <td class="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                                        <td class="plantmore-product-remove"><a href="#"><i class="zmdi zmdi-close"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
