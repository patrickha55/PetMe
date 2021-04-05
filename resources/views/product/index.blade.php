@extends('layouts.client.app') 
<style>

</style>
@section('content')
    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
        <div class="container-fluid">
            <div class="h4 section-title-4 border-bottom-1 pb-15 font-weight-light">
                <a href="">Products</a>
            </div>
            <div class="section-title-4 text-center mb-40">
                <h2>Products</h2>
            </div>
            <div class="row">
                <div class="dropdown col-sm-3">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <article class="card-group-item">
                            <header class="card-header">
                                <h6 class="title">Range input </h6>
                            </header>
                            <div class="filter-content">
                                <div class="card-body">
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label>Min</label>
                                  <input type="number" class="form-control" id="inputEmail4" placeholder="$0">
                                </div>
                                <div class="form-group col-md-6 text-right">
                                  <label>Max</label>
                                  <input type="number" class="form-control" placeholder="$1,0000">
                                </div>
                                </div>
                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- card-group-item.// -->
                        <article class="card-group-item">
                            <header class="card-header">
                                <h6 class="title">Selection </h6>
                            </header>
                            <div class="filter-content">
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox">
                                        <span class="float-right badge badge-light round">52</span>
                                          <input type="checkbox" class="custom-control-input" id="Check1">
                                          <label class="custom-control-label" for="Check1">Top Star</label>
                                    </div> <!-- form-check.// -->
                    
                                    <div class="custom-control custom-checkbox">
                                        <span class="float-right badge badge-light round">132</span>
                                          <input type="checkbox" class="custom-control-input" id="Check2">
                                         <label class="custom-control-label" for="Check2">Popular</label>
                                    </div> <!-- form-check.// -->
                    
                                    <div class="custom-control custom-checkbox">
                                        <span class="float-right badge badge-light round">17</span>
                                          <input type="checkbox" class="custom-control-input" id="Check3">
                                          <label class="custom-control-label" for="Check3">Dog Toys</label>
                                    </div> <!-- form-check.// -->
                    
                                    <div class="custom-control custom-checkbox">
                                        <span class="float-right badge badge-light round">7</span>
                                          <input type="checkbox" class="custom-control-input" id="Check4">
                                          <label class="custom-control-label" for="Check4">Cat Litter</label>
                                    </div> <!-- form-check.// -->
                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- card-group-item.// -->
                    </div> <!-- card.// -->
                </div>
                <div class="top-product-style col-sm-9">
                    <div>
                        <div id="electro1">
                            <div class="custom-row-2 shadow p-3 mb-5 bg-white rounded">
                                @foreach($products as $product)
                                    @include('product.product')
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


