@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Basic Inputs</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Adminox</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active">Basic Inputs</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>All Elements For New Shop Edit</b></h4>
            <p class="text-muted m-b-30 font-14">
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="p-20">
                        <form class="form-horizontal" action="{{ route('shopadmin.update.shop',$shop->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-2 col-form-label" for="example-email">Name</label>
                                <div class="col-10">
                                    <input type="text" id="example-name" name="name" class="form-control  @error('name') is-invalid  @enderror" placeholder="Shop Name" value="{{ $shop->name }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label" for="example-phone">Phone</label>
                                <div class="col-4">
                                    <input type="number" id="example-phone" name="phone" class="form-control @error('phone') is-invalid  @enderror" value="{{ $shop->phone }}" placeholder="Shop Phone Number">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label class="col-2 col-form-label" for="example-shop_no">Shop no.</label>
                                <div class="col-4">
                                    <input type="number" id="example-shop_no"  value="{{ $shop->shop_no }}" name="shop_no" class="form-control @error('shop_no') is-invalid  @enderror" placeholder="Shop Number">
                                    @error('shop_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-2 col-form-label" for="example-floor">Floor</label>
                                <div class="col-4">
                                    <input type="text" id="example-floor" name="floor" value="{{ $shop->floor }}" class="form-control @error('floor') is-invalid  @enderror" placeholder="Shop Number">
                                    @error('floor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="col-2 col-form-label" for="example-logo">logo</label>
                                    <input type="file" id="example-logo" name="logo" class="form-control @error('logo') is-invalid  @enderror" placeholder="Shop logo file" onchange="Logo(this)">
                                    <input type="hidden" name="old_logo" value="{{ $shop->logo }}" required>
                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                    <img class="" src="{{ asset('storage/'.$shop->logo) }}" alt="" id="logo">
                                </div>
                                <div class="col-4">
                                    <label class="col-form-label" for="example-cover_image">Cover Image</label>
                                    <input type="file" id="example-cover_image" name="cover_image" class="form-control @error('cover_image') is-invalid  @enderror" placeholder="Shop Cover Image" onchange="CoverImage(this)" required> 
                                    @error('cover_image')
                                        <span class="invalid-feedback" role="alert" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="hidden" name="old_cover_image" value="{{ $shop->old_cover_image }}">

                                    <img class="" src="{{ asset('storage/'.$shop->cover_image) }}" alt="" id="coverimage">
                                  
                                </div>
                                <div class="col-4">
                                    <label class="col-form-label" for="example-offer_image">Offer Image</label>
                                    <input type="file" id="example-offer_image" name="offer_image" class="form-control @error('offer_image') is-invalid  @enderror" placeholder="Shop Offer Image" onchange="OfferImage(this)" required>
                                    @error('offer_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="hidden" name="old_offer_image" value="{{ $shop->offer_image }}">

                                    <img class="" src="{{ asset('storage/'.$shop->offer_image) }}" alt="" id="offerimage">
                                </div>
                            </div>

                            

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Slider Section</h4>
                                    <p class="text-danger font-weight-bold font-14 m-b-10 ml-5">
                                        Only 6 Image File Allow For Shop Slider
                                    </p>

                                    <div class="p-20 p-b-0">
                                        <div class="form-group clearfix">
                                            <div class="col-sm-12 padding-left-0 padding-right-0">
                                               
                                    <?php foreach(array(json_decode($shop->slider_image)) as $image){?>
                                        <input type="file" name="slider_image[]" id="filer_input1"
                                                    multiple="multiple" required>
                                    <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                            <h4 class="header-title m-t-0">Old Slider Images</h4> 
                            </div>
                            @foreach(json_decode($shop->slider_image, true) as $image)
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                        <img src="{{ URL::to('file/'.$image)}}"
                                            class="img-responsive" alt="--" >
                                </div> 
                            @endforeach
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="text-right">
									<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                            

                        </form>
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<!-- end row -->

<script>
    function Logo(input) {
      	if (input.files && input.files[0]) {
          	var reader = new FileReader();
          	reader.onload = function (e) {
              	$('#logo')
              	.attr('src', e.target.result)
			  	.attr("class","img-thumbnail")
			  	.attr("height",'100%')
			  	.attr("width",'100%')
          	};
          	reader.readAsDataURL(input.files[0]);
     	}
    }
	function CoverImage(input) {
      	if (input.files && input.files[0]) {
          	var reader = new FileReader();
          	reader.onload = function (e) {
              	$('#coverimage')
              	.attr('src', e.target.result)
			  	.attr("class","img-thumbnail")
			  	.attr("height",'100%')
			  	.attr("width",'100%')
          	};
          	reader.readAsDataURL(input.files[0]);
     	}
    }
	function OfferImage(input) {
      	if (input.files && input.files[0]) {
          	var reader = new FileReader();
          	reader.onload = function (e) {
              	$('#offerimage')
              	.attr('src', e.target.result)
			  	.attr("class","img-thumbnail")
			  	.attr("height",'100%')
			  	.attr("width",'100%')
          	};
          	reader.readAsDataURL(input.files[0]);
     	}
    }
</script>
@endsection

