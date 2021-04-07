@extends('layouts.client.appWithoutCategory')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
    .stock-green {
        color: green;
    }
</style>
@section('content')
<div id="page-content">
    <br>
    <div class="page-title text-center"><h2 class="font-weight-bold">Compare Product</h2></div>
    <br>
    <div class="container">
    <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
    <div class="compare-page compare-page2">
    <div class="table-wrapper table-responsive">
    <table class="table">
    <thead style="background-color: #fff;">
    <tr class="th-compare">
        <td class="item-row" valign="middle">
            <div class="grid-link__title font-weight-bold">TIN TUNA FILLET (CATS) 156g
                <button type="button" class="remove-compare"><i class="fas fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="item-row"><img src="assets/img/product/catfood1.jpg" alt="" class="featured-image"></div>
        </td>
        <td class="item-row">
            <div class="grid-link__title font-weight-bold">TUNA WHOLE MEAT WITH SALMON IN JELLY 85g
                <button type="button" class="remove-compare"><i class="fas fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="item-row"><img src="assets/img/product/catfood2.jpg" alt="" class="featured-image"></div>
        </td>
    </tr>
    </thead>
    <tbody id="table-compare">
        <tr>
            <th>Price</th>
            <th>Price</th>
        </tr>
        <tr>
            <td class="item-row" valign="middle">
                <div class="product-price product_price"><span>70,000VND</span></div>
            </td>
            <td class="item-row">
                <div class="product-price product_price"><span>20,000VND</span></div>
            </td>
        </tr>
        <tr>
            <th>Product Description</th>
            <th>Product Description</th>
        </tr>
        <tr>
            <td class="item-row" valign="middle">
                <p class="description-compare">Each tin contains limited ingredients, using only the highest quality, human-grade tuna fillet with completely natural ingredients. Tuna is caught fresh from the sea using dolphin-friendly methods.</p>
            </td>
            <td class="item-row">
                <p class="description-compare">Tuna whole meat with salmon in jelly recipe. It contains taurine to support heart and eye health.</p>
            </td>
        </tr>
        <tr>
            <th>Availability</th>
            <th>Availability</th>
        </tr>
        <tr>
        <td class="available-stock" valign="middle">
            <p class="stock-green">In stock</p>
        </td>
        <td class="available-stock">
            <p class="stock-green">In stock</p>
        </td>
        </tr>
        <tr>
        <td valign="middle" align="center">
            <form class="variants clearfix">
            <input type="hidden">
            <button title="Add to Cart" class="add-to-cart btn btn-solid">Add to Cart</button>
            </form>
        </td>
        <td valign="middle" align="center">
            <form class="variants clearfix">
            <input type="hidden">
            <button title="Add to Cart" class="add-to-cart btn btn-solid">Add to Cart</button>
            </form>
        </td>
        </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection