@extends('layouts.app')
@section('title','Single Shop')

@section('content')

<!-- HEADER AREA START-->
<header class="header_area store_header_area sm_section_padding">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
				<div class="header_left">
					<div class="header_left_titel">
						<div id="nav_icon">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<h3>category</h3>
					</div>
					<nav class="left_menu">
						<ul>
							<li><a href="#">electronics <i class="fa fa-angle-down"></i></a>
								<ul class="sub_menu">
									<li><a href="#">tv</a></li>
									<li><a href="#">mobile</a></li>
									<li><a href="#">security cameras</a></li>
								</ul>
							</li>
							<li><a href="#">automotive & motorbike <i class="fa fa-angle-down"></i></a>
								<ul class="sub_menu">
									<li><a href="#">interior accessories</a></li>
									<li><a href="#">interior vehicle care</a></li>
									<li><a href="#">motor parts & accessories</a></li>
								</ul>
							</li>
							<li><a href="#">women's fashion <i class="fa fa-angle-down"></i></a>
								<ul class="sub_menu">
									<li class="sub_item">
										<a href="#">panjabi</a>
									</li>
									<li class="sub_item">
										<a href="#">shirts</a>
									</li>
									<li class="sub_item">
										<a href="#">pant</a>
									</li>
								</ul>
							</li>
							<li><a href="#">babies & toys <i class="fa fa-angle-down"></i></a>
								<ul class="sub_menu">
									<li class="sub_item">
										<a href="#">mother & baby</a>
									</li>
									<li class="sub_item">
										<a href="#">feeding</a>
									</li>
									<li class="sub_item">
										<a href="#">toys & games</a>
									</li>
									<li class="sub_item">
										<a href="#">nursery</a>
									</li>
								</ul>
							</li>
							<li><a href="#">sports & outdoor <i class="fa fa-angle-down"></i></a>
								<ul class="sub_menu">
									<li class="sub_item">
										<a href="#">cycling</a>
									</li>
									<li class="sub_item">
										<a href="#">treadmils</a>
									</li>
								</ul>
							</li>
							<li><a href="#">home appliances <i class="fa fa-angle-down"></i></a>
								<ul class="sub_menu">
									<li class="sub_item">
										<a href="#">demo item</a>
									</li>
									<li class="sub_item">
										<a href="#">demo item</a>
									</li>
								</ul>
							</li>
							<li><a href="#">home & lifestyle <i class="fa fa-angle-down"></i></a>
								<ul class="sub_menu">
									<li class="sub_item">
										<a href="#">demo item</a>
									</li>
									<li class="sub_item">
										<a href="#">demo item</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-8 col-8">
				<div class="sh_search_box">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<a href="#">
							<i class="fa fa-search"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-2">
				<div class="header_rt_box">
					<div class="icons_box ">
						<div class="wish_list menu_item">
							<img src="{{ asset('../front/assets/image/header/heart.png') }}" alt="heart">
							<span class="item_count">0</span>
						</div>
						<div class="cart menu_item">
							<img src="{{ asset('../front/assets/image/header/shopping-cart.png') }}" alt="cart">
							<span class="item_count">0</span>
						</div>
						<div class="notifiy menu_item">
							<img src="{{ asset('../front/assets/image/header/notification.png') }}" alt="notification">
							<span class="item_count">0</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- HEADER AREA END-->
 <!-- MOBILE MENU AREA START -->
   <!--MOBILE TOP HEADER AREA START -->
   <section class="top_mb_bar re_mb_bar">
	<div class="container">
		 <div class="row">
            <div class="col-md-4 col-sm-4 col-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn" data-toggle="modal" data-target="#mobile_menu">
                    <i class="fas fa-ellipsis-v"></i>
                </button>	
                <!-- Modal -->
                <div class="modal fade" id="mobile_menu" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div> -->
                        <div class="modal-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="menu_tab" data-toggle="tab" href="#menu" role="tab" aria-controls="menu" aria-selected="true">menu</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="category_tab" data-toggle="tab" href="#category" role="tab" aria-controls="category" aria-selected="false">category</a>
                                </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active" id="menu" role="tabpanel" aria-labelledby="menu_tab">
                                    <div class="top_mid_menu">
                                        <ul>
                                            <li><a href="#">customer care</a></li>
                                            <li><a href="#">track my order</a></li>
                                            <li><a href="#">gift card</a></li>
                                            <li><a href="#">contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="category" role="tabpanel" aria-labelledby="category_tab">
                                    <nav class="left_menu">
                                        <ul>
                                            <li><a href="#">electronics <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li><a href="#">tv</a></li>
                                                    <li><a href="#">mobile</a></li>
                                                    <li><a href="#">security cameras</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">automotive & motorbike <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li><a href="#">interior accessories</a></li>
                                                    <li><a href="#">interior vehicle care</a></li>
                                                    <li><a href="#">motor parts & accessories</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">women's fashion <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li class="sub_item">
                                                        <a href="#">panjabi</a>
                                                    </li>
                                                    <li class="sub_item">
                                                        <a href="#">shirts</a>
                                                    </li>
                                                    <li class="sub_item">
                                                        <a href="#">pant</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">babies & toys <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li class="sub_item">
                                                        <a href="#">mother & baby</a>
                                                    </li>
                                                    <li class="sub_item">
                                                        <a href="#">feeding</a>
                                                    </li>
                                                    <li class="sub_item">
                                                        <a href="#">toys & games</a>
                                                    </li>
                                                    <li class="sub_item">
                                                        <a href="#">nursery</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">sports & outdoor <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li class="sub_item">
                                                        <a href="#">cycling</a>
                                                    </li>
                                                    <li class="sub_item">
                                                        <a href="#">treadmils</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">home appliances <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li class="sub_item">
                                                        <a href="#">demo item</a>
                                                    </li>
                                                    <li class="sub_item">
                                                        <a href="#">demo item</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">home & lifestyle <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li class="sub_item">
                                                        <a href="#">demo item</a>
                                                    </li>
                                                    <li class="sub_item">
                                                        <a href="#">demo item</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                              </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
			 <div class="col-md-8 col-sm-8 col-8">
				<div class="header_rt_box">
					<ul>
						<li>
							<div class="mb_search_icon" data-toggle="tooltip" data-placement="left" title="search">
								<span><i class="fa fa-search"></i></span>
								<div class="drop_search_box">
									<div class="search_box">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search for...">
											<button class="hide_se_btn"><i class="fas fa-arrow-right"></i></button>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="wishlist.html">
								<div class="wish_list menu_item" data-toggle="tooltip" data-placement="bottom" title="Wishlist">
									<img src="assets/image/header/heart.png" alt="heart">
									<span class="item_count">0</span>
								</div>
							</a>
						</li>
						<li>
							<a href="shopping_cart.html">
								<div class="cart menu_item" data-toggle="tooltip" data-placement="bottom" title="Cart">
									<img src="assets/image/header/shopping-cart.png" alt="cart">
									<span class="item_count">0</span>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="notifiy menu_item" data-toggle="tooltip" data-placement="bottom" title="Notification">
									<img src="assets/image/header/notification.png" alt="notification">
									<span class="item_count">0</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
			 </div>
		 </div>
	</div>
  </section>
   <!--MOBILE TOP HEADER AREA END -->
<!-- MOBILE MENU AREA END -->
	<!-- MIDDLE CONTENT AREA START -->
	<section class="middle_content_area section_padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12.col-12">
                    <div class="product_diplay">
                        <img id="zoom_03" class="main_img" src="{{ asset('../front/assets/image/single_store/small/image1.jpg') }}" alt="image" data-zoom-image="{{ asset('../front/assets/image/single_store/large/image1.jpg') }}"/>

                        <div id="gallery_demo">
                            <ul>
                                <li>
                                    <a href="#" data-image="{{ asset('../front/assets/image/single_store/small/image1.jpg') }}" data-zoom-image="{{ asset('../front/assets/image/single_store/large/image1.jpg') }}">
                                        <img id="img_01" src="{{ asset('../front/assets/image/single_store/small/image1.jpg') }}" alt="image"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="{{ asset('../front/assets/image/single_store/small/image2.jpg') }}" data-zoom-image="{{ asset('../front/assets/image/single_store/large/image2.jpg') }}">
                                        <img id="img_02" src="{{ asset('../front/assets/image/single_store/small/image2.jpg') }}" alt="image"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="{{ asset('../front/assets/image/single_store/small/image3.jpg') }}" data-zoom-image="{{ asset('../front/assets/image/single_store/large/image3.jpg') }}">
                                        <img id="img_03" src="{{ asset('../front/assets/image/single_store/small/image3.jpg') }}" alt="image"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="{{ asset('../front/assets/image/single_store/small/image4.jpg') }}" data-zoom-image="{{ asset('../front/assets/image/single_store/large/image4.jpg') }}">
                                        <img id="img_04" src="{{ asset('../front/assets/image/single_store/small/image4.jpg') }}" alt="image"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="{{ asset('../front/assets/image/single_store/small/image5.jpg') }}" data-zoom-image="{{ asset('../front/assets/image/single_store/large/image5.jpg') }}">
                                        <img id="img_05" src="{{ asset('../front/assets/image/single_store/small/image5.jpg') }}" alt="image"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="{{ asset('../front/assets/image/single_store/small/image5.jpg') }}" data-zoom-image="{{ asset('../front/assets/image/single_store/large/image5.jpg') }}">
                                        <img id="img_05" src="{{ asset('../front/assets/image/single_store/small/image5.jpg') }}" alt="image"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="{{ asset('../front/assets/image/single_store/small/image5.jpg') }}" data-zoom-image="{{ asset('../front/assets/image/single_store/large/image5.jpg') }}">
                                        <img id="img_05" src="{{ asset('../front/assets/image/single_store/small/image5.jpg') }}" alt="image"/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="product_diplay">
                        <img id="zoom_03" class="main_img" src="{{ asset('../front/assets/image/single_store/small/image1.jpg') }}" alt="image" data-zoom-image="{{ asset('../front/assets/image/single_store/large/image1.jpg') }}"/>

                        <div id="gallery_demo">
                            <ul>
                    @foreach($product->productdetail as $productdetail)
                                <li>
                                    <a href="#" data-image="{{ asset('storage/'.$productdetail->image_front) }}" data-zoom-image="{{ asset('storage/'.$productdetail->image_front) }}">
                                        <img id="img_01" src="{{ asset('storage/'.$productdetail->image_front) }}" alt="image"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="{{ asset('storage/'.$productdetail->image_back) }}" data-zoom-image="{{ asset('storage/'.$productdetail->image_back) }}">
                                        <img id="img_01" src="{{ asset('storage/'.$productdetail->image_back) }}" alt="image"/>
                                    </a>
                                </li>
                    @endforeach
                            </ul>
                        </div>
                    </div> --}}
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <!-- PRODUCT DETAILS AREA START -->
                    <div class="product_details_area">
                        <div class="product_details">
                            <div class="product_titel">
                                <h3>{{ $product->name }}</h3>
                            </div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <span><a href="#">(4 reviews)</a></span>
                            </div>
                            <div class="product_price">
                                <p>{{ $product->product_price }}</p>
                            </div>
                            <div class="product_ctn">
                                <p>{{ $product->product_small_description }}
                                </p>
                            </div>
                            <div class="product_size">
                                <label>size :</label>
                                <div class="form">
                                    <select class="form-control" name="select a size">
                                        @foreach($product->productdetail as $size)
                                        <option value="">Select a size</option>
                                        <option>{{ $size->size }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="product_quentyti">
                                <label>Qty :</label>
                                <div class="form-group">
                                    <a href="#" class="btn input_prepand"><i class="fas fa-minus"></i></a>
                                    <input type="text" value="1" class="form-conttrol text-center qty">
                                    <a href="#" class="btn input_apand"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="product_details_btn">
                                <ul>
                                    <li><a href="login_registration.html" class="btn active"><i class="fab fa-opencart"></i><span>Add to cart</span></a></li>
                                    <li><a href="#" class="btn"><i class="far fa-heart"></i><span>Add to wishlist</span></a></li>
                                    <li><a href="#" class="btn"><i class="fas fa-random"></i><span>Add to compare</span></a></li>
                                </ul>
                            </div>
                            <div class="product_details_footer">
                                <div class="product_cat">
                                    <span>catagory :</span>
                                    <span><a href="#">dress</a></span>
                                </div>
                                <div class="product_share">     
                                    <ul>
                                        <li><a href="#"><span>share:</span></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT DTAILES AREA END -->
				</div>
			</div>
		</div>
	</section>
    <!-- MIDDLE CONTENT AREA END -->
    <!-- SINGLE PRODUCT DESCRIPTION AREA START -->
    <div class="product_description section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
                    <div class="pro_description_ctn">
                        <ul class="nav nav-pills singel_product" id="pills-tab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Additional information</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Shipping & Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">Reviews (4)</a>
                              </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <div class="pro_des_tab_ctn">
                                    <h4>Information</h4>
                                    {!! $product->product_full_description !!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <div class="pro_des_tab_ctn">
                                    <h4>Information</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                                    <h4>Fabric & care</h4>
                                    <ul>
                                        <li>Faux suede fabric</li>
                                        <li>Gold tone metal hoop handles.</li>
                                        <li>RI branding</li>
                                        <li>Snake print trim interior </li>
                                        <li>Adjustable cross body strap</li>
                                        <li>Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                                    </ul>
                                    <h4>Size</h4>
                                    <p>one size</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                                <div class="pro_des_tab_ctn">
                                    <h4>Delivery & returns</h4>
                                    {!! $product->product_shipping_and_return !!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                                <div class="pro_des_tab_ctn">
                                    <h4>Reviews (2)</h4>
                                    <div class="review">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                                                <div class="customer_name">
                                                    <h5>tuhel ahmed</h5>
                                                </div>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                    <p>2 days ago</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                                                <div class="review_txt">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam debitis veniam itaque, maxime at laboriosam amet ea eius deleniti dolorem quas hic odit, reprehenderit, delectus quod. Ex ipsa harum laborum magnam illum, sit vel, omnis aliquid in, amet possimus. Recusandae!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                                                <div class="customer_name">
                                                    <h5>ratri hasan</h5>
                                                </div>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                    <p>2 days ago</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                                                <div class="review_txt">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam debitis veniam itaque, maxime at laboriosam amet ea eius deleniti dolorem quas hic odit, reprehenderit, delectus quod. Ex ipsa harum laborum magnam illum, sit vel, omnis aliquid in, amet possimus. Recusandae!</p>
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
    </div>
    <!-- SINGLE PRODUCT DESCRIPTION AREA END -->
        <!-- RELATED PRODUCT AREA START -->
        <div class="related_pro_area section_padding">
            <div class="container">
                <div class="related_pro_slider">
                    <div class="product_item">
                    <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$120</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$80</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$100</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="product_item">
                        <img src="assets/image/single_store/product_2.jpg" alt="logo">
                        <div class="item_ctn">
                            <h5>Designer Gown Dress</h5>
                            <div class="price"><span>$90</span></div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                                <p><a href="#">catagory</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- RELATED PRODUCT AREA END -->
  
@endsection
