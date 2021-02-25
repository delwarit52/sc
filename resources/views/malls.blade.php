@extends('layouts.app')

@section('content')
<!--===  Inner Banner Area Start ===-->
<section class="inner_banner_area section_padding" data-background="{{ asset('../front/assets/image/smart_city_object/innerbanner.jpg') }}">
    <div class="container">
        <div class="banner_content text-center">
            <h2 class="inner_titel">Prepare For Success In A smart World</h2>
            <div class="search_box">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search shopping center near you">
                    
                    <a href="#" class="loc_btn"><i class="fas fa-map-marker-alt"></i> location</a>
                    <a href="#" class="search_btn">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===  Inner Banner Area End ===-->
<!-- SHOPPING CENTER AREA START -->
<section class="shopping_center_area section_padding">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 px-1">
				<div class="shopping_mall_area">
					<div class="section_titel text-center wow fadeInUp">
						<h4><span>shopping</span> center</h4>
						<div class="titel_img" style="margin-top: 10px;">
                            <img src="{{ asset('../front/assets/image/smart_city_object/titel_border.jpg') }}" alt="border">
						</div>
					</div>
					<div class="all_shopping_mall">
						<ul>
							<li>
								<a href="single_shopping_center.html">
									<div class="card wow fadeInRight">
										<div class="shopping_mall_box">
											<div class="shop_mall_img">
												<img class="card-img-top" src="{{ asset('../front/assets/image/shopping_center/alhamra.jpg') }}" alt="Card image cap">
												<div class="overlay">
													<span class="border border-hor after"></span>
													<span class="border border-hor before"></span>
													<span class="border border-ver after"></span>
													<span class="border border-ver before"></span>
												</div>
											</div>
											<div class="card-body p-0">
												<p class="shopping_mall_name">
													Al-Hamra Shopping City
												</p>
											</div>
										</div> 
									</div> 
								</a>
							</li>
						</ul>
						<div class="load_more_btn text-center">
							<a href="#" class="btn">load more <i class="fas fa-redo-alt"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SHOPPING CENTER AREA END -->
<!-- SHOPPING CENTER AREA START -->
<section class="shopping_center_area section_padding">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 px-1">
				<div class="shopping_mall_area">
					<div class="section_titel text-center wow fadeInUp">
						<h4><span>Women</span> entrepreneurs</h4>
						<div class="titel_img" style="margin-top: 10px;">
							<img src="{{ asset('../front/assets/image/smart_city_object/titel_border.jpg') }}" alt="border">
						</div>
					</div>
					<div class="all_shopping_mall">
						<ul>
                            @foreach($shops as $shop)
							<li>
								<a href="{{ route('single.shop',$shop->id) }}">
									<div class="card wow fadeInRight">
										<div class="shopping_mall_box">
											<div class="shop_mall_img">
												<img class="card-img-top" src="{{ asset('storage/'.$shop->cover_image) }}" alt="Card image cap">
												<div class="overlay">
													<span class="border border-hor after"></span>
													<span class="border border-hor before"></span>
													<span class="border border-ver after"></span>
													<span class="border border-ver before"></span>
												</div>
											</div>
											<div class="card-body p-0">
												<p class="shopping_mall_name">
													{{ $shop->name }}
												</p>
											</div>
										</div> 
									</div> 
								</a>
							</li>
                            @endforeach
						</ul>
						<div class="load_more_btn text-center">
							<a href="{{ route('women.enterpreneurs') }}" class="btn">load more <i class="fas fa-redo-alt"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SHOPPING CENTER AREA END -->
<!-- SERVICE AREA START -->
<section class="service_area">
	<div class="container">
		<div class="service_inner_ctn">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 p-1">
					<div class="service_ctn">
						<div class="service_icon">
							<a href="#"><img src="{{ asset('../front/assets/image/shipped.png') }}" alt="delivary"></a>
						</div>
						<div class="service_description">
							<a href="#"><h4>free shipping</h4></a>
							<p>Lorem Ipsum is not simply random text.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 p-1">
					<div class="service_ctn">
						<div class="service_icon">
							<a href="#"><img src="{{ asset('../front/assets/image/24-hours.png') }}" alt="hours"></a>
						</div>
						<div class="service_description">
							<a href="#"><h4>24/7 coustomer service</h4></a>
							<p>Lorem Ipsum is not simply random text.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 p-1">
					<div class="service_ctn">
						<div class="service_icon">
							<a href="#"><img src="{{ asset('../front/assets/image/promotion.png') }}" alt="offer"></a>
						</div>
						<div class="service_description">
							<a href="#"><h4>festival offer</h4></a>
							<p>Lorem Ipsum is not simply random text.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 p-1">
					<div class="service_ctn last_ctn">
						<div class="service_icon">
							<a href="#"><img src="{{ asset('../front/assets/image/verification.png') }}" alt="payment"></a>
						</div>
						<div class="service_description">
							<a href="#"><h4>scure payment</h4></a>
							<p>Lorem Ipsum is not simply random text.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SERVICE AREA END -->
<!-- OFFER AREA START -->
{{-- <section class="offer_area section_padding_4">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 firstbanner">
				<div class="offer_box wow fadeInUp">
					<a href="#"><img src="assets/image/shopping_center/offer_1.png" alt="offer"></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 middlebanner">
				<div class="offer_box middle_offer_box wow fadeInUp">
					<a href="#"><img src="assets/image/shopping_center/offer_2.png" alt="offer"></a>
				</div>
				<div class="offer_box wow fadeInUp">
					<a href="#"><img src="assets/image/shopping_center/offer_3.png" alt="offer"></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 secondbanner">
				<div class="offer_box wow fadeInUp">
					<a href="#"><img src="assets/image/shopping_center/offer_4.png" alt="offer"></a>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!-- OFFER AREA END -->
<!-- NEWSLETTER AREA START -->
<!-- <section class="newsletter_area section_padding wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="newsletter_ctn wow fadeInUp">
						<h4>Search what's on your mind</h4>
						<input type="text" placeholder="search" class="form-control">
						<a href="#" class="btn"><i class="fa fa-search"></i></a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="newsletter_ctn wow fadeInUp">
						<h4>Subscribe to our newsletter</h4>
						<input type="email" placeholder="enter your mail address" class="form-control">
						<a href="#" class="btn"><i class="far fa-envelope"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
<!-- NEWSLETTER AREA START -->
<!-- SPONSOR AREA START -->
{{-- <section class="sponsor_area section_padding">
	<div class="container">
		<div class="sponsor_slider">
			<div class="brand_item">
			<img src="assets/image/sponsor/client-1.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-2.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-3.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-4.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-5.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-6.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-7.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-8.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-1.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-2.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-3.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-4.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-5.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-6.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-7.png" alt="logo">
			</div>
			<div class="brand_item">
				<img src="assets/image/sponsor/client-8.png" alt="logo">
			</div>
		</div>
	</div>
</section> --}}
<!-- SPONSOR AREA END -->
@endsection
