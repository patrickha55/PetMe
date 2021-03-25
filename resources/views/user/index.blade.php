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
						<a href="view-cart.html" class="btn btn-small">View Cart</a>
					</li>
					<li>
						<a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a>
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
      <form class="align-item-center">
        <div class="col-md-11">
          <input class="form-control me-2" type="search" placeholder="Search product..." aria-label="Search">
        </div>
        <div>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
      </form>
    </div>
    <section class="products section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget product-category">
                        <h4 class="widget-title">Categories</h4>
                        <div class="panel-group commonAccordion" id="accordion" role="tablist"
                            aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Dog
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul>
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="dog-food"
                                                rel="dog-food">
                                            <label class="form-check-label" for="dog-food">Food</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="dog-toy"
                                                rel="dog-toy">
                                            <label class="form-check-label" for="dog-toy">Toys</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row" style="display: flex; flex-wrap: wrap;">
                        <!--Product-->
                        <div class="col-md-4 cat dog-toy">
                            <div class="product-item">
                              <div class="product-thumb">
                                {{-- <span class="bage">Sale</span> --}}
                                <img
                                  class="img-responsive"
                                  src="https://product.hstatic.net/200000268761/product/ho_lo_ngau_nhien_d0e6da52753b41839271256a6cea394f_master.jpg"
                                  alt="product-img"
                                />
                                <div class="preview-meta">
                                  <ul>
                                    <li>
                                      <span data-toggle="modal" data-target="#modal-fball-1">
                                        <i class="tf-ion-ios-search-strong"></i>
                                      </span>
                                    </li>
                                    <li>
                                      <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                      <a href="#" class="add-to-cart" data-name="Bóng hồ lô" data-price="120000"
                                      data-img="https://product.hstatic.net/200000268761/product/ho_lo_ngau_nhien_d0e6da52753b41839271256a6cea394f_master.jpg"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="product-content">
                                <h4><a href="product-single.html">Bóng hồ lô</a></h4>
                                <p class="price">120 000đ</p>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-4 cat dog-toy">
                            <div class="product-item">
                              <div class="product-thumb">
                                <img
                                  class="img-responsive"
                                  src="https://www.petmart.vn/wp-content/uploads/2016/01/do-choi-cho-cho-meo-paw-hinh-con-ga.jpg"
                                  alt="product-img"
                                />
                                <div class="preview-meta">
                                  <ul>
                                    <li>
                                      <span data-toggle="modal" data-target="#modal-fball-2">
                                        <i class="tf-ion-ios-search-strong"></i>
                                      </span>
                                    </li>
                                    <li>
                                      <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                      <a href="#" class="add-to-cart" data-name="Paw hình con gà" data-price="70000"
                                      data-img="https://www.petmart.vn/wp-content/uploads/2016/01/do-choi-cho-cho-meo-paw-hinh-con-ga.jpg"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="product-content">
                                <h4><a href="product-single.html">Paw hình con gà</a></h4>
                                <p class="price">70 000đ</p>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-4 cat dog-food">
                            <div class="product-item">
                              <div class="product-thumb">
                                <img
                                  class="img-responsive"
                                  src="https://www.petmart.vn/wp-content/uploads/2012/08/pate-cho-cho-con-vi-ga-pedigree-puppy-pouch-chicken.jpg"
                                  alt="product-img"
                                />
                                <div class="preview-meta">
                                  <ul>
                                    <li>
                                      <span data-toggle="modal" data-target="#modal-fball-3">
                                        <i class="tf-ion-ios-search-strong"></i>
                                      </span>
                                    </li>
                                    <li>
                                      <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                      <a href="#" class="add-to-cart" data-name="Pate vị gà" data-price="110000"
                                      data-img="https://www.petmart.vn/wp-content/uploads/2012/08/pate-cho-cho-con-vi-ga-pedigree-puppy-pouch-chicken.jpg"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="product-content">
                                <h4><a href="product-single.html">Pate vị gà</a></h4>
                                <p class="price">110 000đ</p>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-4 cat dog-food">
                            <div class="product-item">
                              <div class="product-thumb">
                                <img
                                  class="img-responsive"
                                  src="https://www.petmart.vn/wp-content/uploads/2018/11/thuc-an-cho-cho-truong-thanh-royal-canin-maxi-adult.jpg"
                                  alt="product-img"
                                />
                                <div class="preview-meta">
                                  <ul>
                                    <li>
                                      <span data-toggle="modal" data-target="#modal-fball-4">
                                        <i class="tf-ion-ios-search-strong"></i>
                                      </span>
                                    </li>
                                    <li>
                                      <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                      <a href="#" class="add-to-cart" data-name="Hạt dinh dưỡng" data-price="200000"
                                      data-img="https://www.petmart.vn/wp-content/uploads/2018/11/thuc-an-cho-cho-truong-thanh-royal-canin-maxi-adult.jpg"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="product-content">
                                <h4><a href="product-single.html">Hạt dinh dưỡng</a></h4>
                                <p class="price">200 000đ</p>
                              </div>
                            </div>
                          </div>
                            
                        <!-- /Product-->
                        <!-- Modal -->
                        <div class="modal product-modal fade" id="modal-fball-1">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tf-ion-close"></i>
                            </button>
                            <div class="modal-dialog animate__animated animate__backInDown " role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-6 col-xs-12">
                                                <div class="modal-image">
                                                    <img class="img-responsive"
                                                         src="https://product.hstatic.net/200000268761/product/ho_lo_ngau_nhien_d0e6da52753b41839271256a6cea394f_master.jpg"
                                                         alt="product-img"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="product-short-details">
                                                    <h2 class="product-title">Bóng hồ lô</h2>
                                                    <p class="product-price">120 000đ</p>
                                                    <p class="product-short-description">
                                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim recusandae dignissimos eligendi eius deleniti, ad neque similique! Quo, molestias! Tempora saepe omnis quis rerum officiis nam nulla esse molestiae necessitatibus?
                                                    </p>
                                                    <a href="primary-girl.html" class="btn btn-main add-to-cart"
                                                       data-dismiss="modal" data-name="Bóng hồ lô" data-price="120000"
                                                       data-img="https://product.hstatic.net/200000268761/product/ho_lo_ngau_nhien_d0e6da52753b41839271256a6cea394f_master.jpg">Add To
                                                        Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal product-modal fade" id="modal-fball-2">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tf-ion-close"></i>
                            </button>
                            <div class="modal-dialog animate__animated animate__backInDown " role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-6 col-xs-12">
                                                <div class="modal-image">
                                                    <img class="img-responsive"
                                                         src="https://www.petmart.vn/wp-content/uploads/2016/01/do-choi-cho-cho-meo-paw-hinh-con-ga.jpg"
                                                         alt="product-img"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="product-short-details">
                                                    <h2 class="product-title">Paw hình con gà</h2>
                                                    <p class="product-price">70 000đ</p>
                                                    <p class="product-short-description">
                                                       Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis ipsam debitis consectetur eos soluta dolores similique nostrum dolorum aspernatur quibusdam culpa fuga explicabo, cum, ab libero dolorem suscipit sed. Nam.
                                                    </p>
                                                    <a href="primary-girl.html" class="btn btn-main add-to-cart"
                                                       data-dismiss="modal" data-name="Paw hình con gà" data-price="70000"
                                                       data-img="https://www.petmart.vn/wp-content/uploads/2016/01/do-choi-cho-cho-meo-paw-hinh-con-ga.jpg">Add To
                                                        Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal product-modal fade" id="modal-fball-3">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tf-ion-close"></i>
                            </button>
                            <div class="modal-dialog animate__animated animate__backInDown " role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-6 col-xs-12">
                                                <div class="modal-image">
                                                    <img class="img-responsive"
                                                         src="https://www.petmart.vn/wp-content/uploads/2012/08/pate-cho-cho-con-vi-ga-pedigree-puppy-pouch-chicken.jpg"
                                                         alt="product-img"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="product-short-details">
                                                    <h2 class="product-title">Pate vị gà</h2>
                                                    <p class="product-price">110 000đ</p>
                                                    <p class="product-short-description">
                                                        We updated our trusted, customer-loved crew socks with a seamless
                                                        toe for smooth comfort and striped patterns for more variety. An
                                                        elasticized cuff resists sagging and extra reinforcement in the heel
                                                        and toe enhances durability.
                                                    </p>
                                                    <a href="primary-girl.html" class="btn btn-main add-to-cart"
                                                       data-dismiss="modal" data-name="Pate vị gà" data-price="110000"
                                                       data-img="https://www.petmart.vn/wp-content/uploads/2012/08/pate-cho-cho-con-vi-ga-pedigree-puppy-pouch-chicken.jpg">Add To
                                                        Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal product-modal fade" id="modal-fball-4">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tf-ion-close"></i>
                            </button>
                            <div class="modal-dialog animate__animated animate__backInDown " role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-6 col-xs-12">
                                                <div class="modal-image">
                                                    <img class="img-responsive"
                                                         src="https://www.petmart.vn/wp-content/uploads/2018/11/thuc-an-cho-cho-truong-thanh-royal-canin-maxi-adult.jpg"
                                                         alt="product-img"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="product-short-details">
                                                    <h2 class="product-title">Hạt dinh dưỡng</h2>
                                                    <p class="product-price">200 000đ</p>
                                                    <p class="product-short-description">
                                                        We updated our trusted, customer-loved crew socks with a seamless
                                                        toe for smooth comfort and striped patterns for more variety. An
                                                        elasticized cuff resists sagging and extra reinforcement in the heel
                                                        and toe enhances durability.
                                                    </p>
                                                    <a href="primary-girl.html" class="btn btn-main add-to-cart"
                                                       data-dismiss="modal" data-name="Hạt dinh dưỡng" data-price="200000"
                                                       data-img="https://www.petmart.vn/wp-content/uploads/2018/11/thuc-an-cho-cho-truong-thanh-royal-canin-maxi-adult.jpg">Add To
                                                        Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                                                                                                                     
                      <!-- /.modal -->
                    </div>
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

