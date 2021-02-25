@extends('layouts.app')

@section('content')

<!--===  Inner Banner Area Start ===-->
<section class="inner_banner_area section_padding" data-background="{{ asset('../front/assets/image/smart_city_object/innerbanner.jpg') }}">
    <div class="container">
        <div class="banner_content text-center">
            <h2 class="inner_titel">Shop request</h2>
            <ul>
                <li><a href="{{ url('/home') }}"> home <i class="fas fa-chevron-right"></i></a></li>
                <li><a href=""><span>Send a request</span></a></li>
            </ul>
        </div>
    </div>
</section>
<!--===  Inner Banner Area End ===-->

<!-- ADD LISTING AREA START -->
<section class="add_listing_area sm_section_padding_3" style="padding: 0; background:#fff;">
    <div class="container">
    <form action="{{ route('shopadmin.detail.create') }}" method="post" enctype="multipart/form-data"> 
        @csrf
        <div class="listing_starting text-center">
            <p><strong>Returning User?</strong> Please <a href="seller_signin.html">Sign in</a> and if you are a <strong>New User, Continue</strong> Below and register along with this submission.</p>
        </div>
        <div class="submit_listing">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="submit_ctn">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('../front/assets/image/add_listing/submit-listing-1.jpg') }}" alt="Listing image">
                            <div class="card-body">
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Enter Shop Admin Name" class="form-control" value="{{ old('fullname') }}"  name="fullname">
                                    @error('fullname')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>National ID no.:</label>
                                    <input type="text" placeholder="9999xxxxxxxxx" value="{{ old('nid') }}" class="form-control" name="nid">
                                    @error('nid')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Profession</label>
                                    <input name="profession" type="text" value="{{ old('profession') }}" placeholder="Add your Profession" class="form-control">
                                    @error('profession')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Birth Date</label>
                                    <input name="birthdate" value="{{ old('date') }}" type="date" placeholder="Add Birth date" class="form-control">
                                    @error('birthdate')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" value="{{ old('gender') }}" type="text" class="form-control">
                                        <option disabled>Select a option</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                    @error('gender')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Marital Status</label>
                                    <select name="maritial_status" value="{{ old('maritial_status') }}" type="text" placeholder="+0123-2937-890" class="form-control">
                                        <option disabled>Select a option</option>
                                        <option>Married</option>
                                        <option>In a Relationship</option>
                                        <option>Single</option>
                                        <option>Other</option>
                                    </select>
                                    @error('maritial_status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group listing_description">
                                    <label>Add listing description</label>
                                    <textarea class="form-control" name="address">{{ old('address') }}</textarea>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="submit_ctn">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('../front/assets/image/add_listing/submit-listing-2.jpg') }}" alt="Listing image">
                            <div class="card-body">
                                
                                <div class="cover_image">
                                    <label>Cover image</label>
                                    <div class="image_box text-center">
                                        <p><i class="fas fa-upload"></i></p>
                                        <p>Drag & drops your file</p>
                                        <p>or</p>
                                        <input type="file"  name="image" class="form-control" onchange="ImageView(this)" required>
                                    <img class="ml-5" src="" alt="" id="image1">
                                    </div>
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group notification_email text-center">
            <label>Enter email to signup & recieve notification upon listing approval</label>
            <input type="email" value="{{ old('email') }}" placeholder="Enter your shop contact email" name="email" class="form-control">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="account_confirmation text-center">
            <input type="checkbox">
            <label>Already have an account</label>
        </div>
        <div class="submit_btn text-center">
            <button type="submit" name="submit" class="btn">Send your request</button>
        </div>
    </form>
    </div>

    </section>
    <!-- ADD LISTING AREA END -->
    <script>
    function ImageView(input) {
      	if (input.files && input.files[0]) {
          	var reader = new FileReader();
          	reader.onload = function (e) {
              	$('#image1')
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
