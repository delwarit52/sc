
@extends('shopadmin.layouts.app')
@section('content')
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Add more</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->


            <!-- start card-box -->
            <div class="card-box">
                <div class="p-20">
                    <form form action="{{ route('product.detail.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" value="{{ $product_id }}" name="product_id">
                        {{-- <input type="hidden" value="1" name="product_id"> --}}
                        <div class="row">
                            <div class="col col-sm-12 col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Select Size</label>
                                    <div class="col-10">
                                        <select name="size" class="form-control select-size @error('size') is-invalid  @enderror">
                                            <option disabled>Write Size and press Enter</option>
                                            <option>Small</option>
                                            <option>Standard</option>
                                            <option>Large</option>
                                            <option>Other</option>
                                        </select>
                                        @error('size')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <script>
                                            $(".select-size").select2({
                                                tags:true
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-12 col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Select Color</label>
                                    <div class="col-10">
                                        <select class="form-control select-color @error('color') is-invalid  @enderror" name="color">
                                            <option disabled>Write a color name and press Enter</option>
                                            <option>Red</option>
                                            <option>Green</option>
                                            <option>Yellow</option>
                                            <option>Other</option>
                                        </select>
                                        @error('color')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <script>
                                            $(".select-color").select2({
                                                tags:true
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-12 col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Quantity</label>
                                    <div class="col-10">
                                        <input type="number" class="form-control" name="quantity" placeholder="Enter Quantity">
                                        @error('quantity')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-12 col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Select Unit</label>
                                    <div class="col-10">
                                        <select class="form-control select-unit @error('unit') is-invalid  @enderror" name="unit">
                                            <option disabled>Write unit and press Enter</option>
                                            <option>Pices</option>
                                            <option>Kg</option>
                                            <option>Metter</option>
                                        </select>
                                        @error('unit')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <script>
                                            $(".select-unit").select2({
                                                tags:true
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Multiple File Upload --}}
                        <div class="row">
                            <div class="col-6">
                                <label class="col-2 col-form-label" for="example-image_front">image_front</label>
                                <input type="file" id="example-image_front" name="image_front" class="form-control @error('image_front') is-invalid  @enderror" placeholder="Shop image_front file" onchange="Image_front(this)" required>
                                @error('image_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <img class="ml-5" src="" alt="" id="image_front">
                            </div>
                            <div class="col-6">
                                <label class="col-2 col-form-label" for="example-image_back">image_back</label>
                                <input type="file" id="example-image_back" name="image_back" class="form-control @error('image_back') is-invalid  @enderror" placeholder="Shop image_back file" onchange="Image_back(this)" required>
                                @error('image_back')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <img class="ml-5" src="" alt="" id="image_back">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                {{-- <a href="{{ route('product.add') }}" class="btn btn-warning">Reset</a> --}}
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- end row -->
            </div>
            <!-- end card-box -->
<script>
    function Image_front(input) {
      	if (input.files && input.files[0]) {
          	var reader = new FileReader();
          	reader.onload = function (e) {
              	$('#image_front')
              	.attr('src', e.target.result)
			  	.attr("class","img-thumbnail")
			  	.attr("height",'100%')
			  	.attr("width",'100%')
          	};
          	reader.readAsDataURL(input.files[0]);
     	}
    }
	function Image_back(input) {
      	if (input.files && input.files[0]) {
          	var reader = new FileReader();
          	reader.onload = function (e) {
              	$('#image_back')
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

