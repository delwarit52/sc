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
						<h3>Category</h3>
					</div>
					<nav class="left_menu">
						<ul>
                            @foreach($categories as $category)
							<li><a href="#">{{ $category->name }} <i class="fa fa-angle-down"></i></a>
								<ul class="sub_menu">
                                    @foreach($category->subcategory as $subcategory)
									<li><a href="#">{{ $subcategory->name }}</a></li>
                                    @endforeach
								</ul>
							</li>
                            @endforeach
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
    <section class="middle_content_area single_store_middle_ctn">
		<div class="container">
			<div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
					<div class="banner_area">
						<div class="banner_img owl-carousel">
                            
                            <?php foreach(json_decode($shop->slider_image) as $image){?>
                                <div class="banner_item_ctn item">
                                <img src="{{ asset('file/'.$image) }}" alt="Slider Image {{ $image }}">
                                </div>
                            <?php }?>
                            
                        </div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 px-3 px-md-1">
                    <div class="single_store_details">
                        <div class="store_titel">
                            <h3>{{ $shop->name }}</h3>
                            
                            <span class="badge">men's wear</span>
                        </div>
                        <div class="location">
                            <div class="shopping_cener_name">
                                <h6>kakoli shopping center</h6>
                                <span>{{ $shop->floor }} floor</span>
                                <br>
                                <span>store no.: {{ $shop->shop_no }}</span>
                                <p><span>contact</span> : <a href="#">{{ $shop->phone }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="single_store_side_banner">
                        <a href="#">
                            <img src="{{ asset('storage/'.$shop->offer_image) }}" alt="banner">
                        </a>
                    </div>
                </div>
			</div>
		</div>
	</section>
    <!-- MIDDLE CONTENT AREA END -->
        <!-- SINGLE STORE AREA START -->
        <section class="single_shop_area pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-12">
                        <div class="filter_area">
                            <div class="filter_titel">
                                <h4>filter by</h4>
                            </div>
                            <div class="row">
                            <div class="col-sm-12 col-6 col-xl-12 col-lg-12 col-md-12">
                                <div class="store_filter_box">
                                    <div class="titel">
                                        <h5>related category</h5>
                                    </div>
                                    <div class="box_ctn">
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>women's fashion
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>panjabi
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>saree
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>kurti
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>pant
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-6 col-xl-12 col-lg-12 col-md-12">
                                <div class="store_filter_box">
                                    <div class="titel">
                                        <h5>brand</h5>
                                    </div>
                                    <div class="box_ctn">
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>torey
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>maha
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>arong
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>remond
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>le reve
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-6 col-xl-12 col-lg-12 col-md-12">
                                <div class="store_filter_box">
                                    <div class="titel">
                                        <h5>price</h5>
                                    </div>
                                    <div class="box_ctn">
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>1000/--1500/-
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>1500/--3500/-
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>3500/--5000/-
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>5000/--
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-6 col-xl-12 col-lg-12 col-md-12">
                                <div class="store_filter_box">
                                    <div class="titel">
                                        <h5>size</h5>
                                    </div>
                                    <div class="box_ctn">
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>s
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>m
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>l
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>xl
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="brand_item">
                                            <div class="form-group">
                                                <label>xll
                                                    <input type="checkbox">
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-7 col-12 px-0 px-lg-3 px-xl-0">
                        <div class="store_mall_area">	
                            <div class="section_titel text-center wow fadeInUp">
                                <h4><span>top</span> category</h4>
                            </div>
                            <ul>
                                <li class="store_top_ctn">
                                    <a href="single_product.html">
                                        <div class="card wow fadeInRight">
                                            <div class="shopping_mall_box">
                                                <div class="shop_mall_img">
                                                    <img class="card-img-top" src="{{ asset('../front/assets/image/single_store/shirt_1.jpg') }}" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="product_ctn">
                                                        <p>Denim Long Sleeve Casual Shirt for Men(6)</p>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="store_mall_area" style="margin-top: 10px;">	
                            <div class="section_titel text-center wow fadeInUp">
                                <h4><span>all</span> products</h4>
                            </div>
                            <ul>
                                @foreach($shop->product as $product)
                                <li class="store_ctn">
                                    <a href="single_product.html">
                                        <div class="card wow fadeInRight">
                                            <div class="shopping_mall_box">
                                                <div class="shop_mall_img">
                                                    <img class="card-img-top" src="{{ asset('storage/'.$product->image) }}" alt="Card image cap">
                                                    <div class="hover_ctn">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('single.product',$product->id) }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="442.04px" height="442.04px" viewBox="0 0 442.04 442.04" style="enable-background:new 0 0 442.04 442.04;" xml:space="preserve">
                                                                        <g>
                                                                            <g>
                                                                                <path d="M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203    c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219    c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367    c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021    c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212    c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071    c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z"/>
                                                                            </g>
                                                                            <g>
                                                                                <path d="M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188    c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993    c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5    s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z"/>
                                                                            </g>
                                                                            <g>
                                                                                <path d="M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z"/>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="446.853px" height="446.853px" viewBox="0 0 446.853 446.853" style="enable-background:new 0 0 446.853 446.853;" xml:space="preserve">
                                                                        <g>
                                                                            <path d="M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708   c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179   c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591   l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916   c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012   s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675   c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432   c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221   c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814   c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z    M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117   S337.916,409.814,327.373,409.814z"/>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 485 485" style="enable-background:new 0 0 485 485;" xml:space="preserve">
                                                                        <g>
                                                                            <path d="M343.611,22.543c-22.613,0-44.227,5.184-64.238,15.409c-13.622,6.959-26.136,16.205-36.873,27.175   c-10.738-10.97-23.251-20.216-36.873-27.175c-20.012-10.225-41.625-15.409-64.239-15.409C63.427,22.543,0,85.97,0,163.932   c0,55.219,29.163,113.866,86.678,174.314c48.022,50.471,106.816,92.543,147.681,118.95l8.141,5.261l8.141-5.261   c40.865-26.406,99.659-68.479,147.682-118.95C455.838,277.798,485,219.151,485,163.932C485,85.97,421.573,22.543,343.611,22.543z    M376.589,317.566c-42.918,45.106-95.196,83.452-134.089,109.116c-38.893-25.665-91.171-64.01-134.088-109.116   C56.381,262.884,30,211.194,30,163.932c0-61.42,49.969-111.389,111.389-111.389c35.361,0,67.844,16.243,89.118,44.563   l11.993,15.965l11.993-15.965c21.274-28.32,53.757-44.563,89.118-44.563c61.42,0,111.389,49.969,111.389,111.389   C455,211.194,428.618,262.884,376.589,317.566z"/>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                        <g>
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="product_ctn">
                                                        <p>{{ $product->name }}</p>
                                                        <p class="pro_price"><span>৳</span>{{ $product->product_price }}</p>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="load_more_btn text-center">
                                <a href="#" class="btn">load more <i class="fas fa-redo-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SINGLE STORE AREA END -->
	<!-- OFFER AREA START -->
	{{-- <section class="offer_area section_padding_4">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 firstbanner">
					<div class="offer_box wow fadeInUp">
						<a href="#"><img src="assets/image/shopping_center/offer_1.png" alt="offer"></a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 middlebanner">
					<div class="offer_box middle_offer_box wow fadeInUp">
						<a href="#"><img src="assets/image/shopping_center/offer_2.png" alt="offer"></a>
					</div>
					<div class="offer_box wow fadeInUp">
						<a href="#"><img src="assets/image/shopping_center/offer_3.png" alt="offer"></a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 secondbanner">
					<div class="offer_box wow fadeInUp">
						<a href="#"><img src="assets/image/shopping_center/offer_4.png" alt="offer"></a>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- OFFER AREA END -->
@endsection
