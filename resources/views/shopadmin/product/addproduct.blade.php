@extends('admin.layouts.app')

@section('title','Add product')
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
                                            <li class="list-inline-item">Dashboard</li>
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
                    <form class="form-horizontal" role="form" action="{{ route('product.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col col-sm-12 col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Select Shop</label>
                                    <div class="col-10">
                                        <select class="form-control select-shop_id @error('shop_id') is-invalid  @enderror" name="shop_id">
                                            @foreach($shops  as $shop)
                                                <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                                            @endforeach
                                        </select>

                                        <script>
                                            $(".select-shop_id").select2({
                                                tags:true
                                            });
                                        </script>
                                        @error('shop_id')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label" for="product-name">Product Name</label>
                                    <div class="col-10">
                                        <input type="text" id="product-name" name="name" class="form-control @error('name') is-invalid  @enderror" placeholder="Product Title" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-2 col-form-label" for="product-slug">Product slug</label>
                                    <div class="col-10">
                                        <input type="text" id="product-slug" name="slug" class="form-control @error('slug') is-invalid  @enderror" placeholder="Product Slug" value="{{ old('name') }}">
                                        @error('slug')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Brand</label>
                                    <div class="col-10">
                                        <select class="form-control select-brand_id @error('brand') is-invalid  @enderror" name="brand_id">
                                            @foreach($brands  as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>

                                        <script>
                                            $(".select-brand_id").select2({
                                                tags:true
                                            });
                                        </script>
                                        @error('brand')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label" for="product-name">Product Code</label>
                                    <div class="col-10">
                                        <input type="text" id="product-code" name="code" class="form-control @error('code') is-invalid  @enderror" placeholder="Product Code" value="{{ old('code') }}">
                                        @error('code')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-12 col-md-6">
                                <div class="form-group">
                                    <div class="col-9">
                                        
                                        <div class="fileupload fileupload-new text-center" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 100%; height: 200px; line-height: 20px;">
                                                <img src="{{ asset('back/images/smartcityslide_3.jpg') }}" alt="image"  style="width: 100%; height: 200px; line-height: 20px;" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="width: 100%; height: 200px; line-height: 20px;"></div>
                                            @error('image')
                                                <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-secondary btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Shop Cover Image</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input type="file" class="btn-secondary  @error('image') is-invalid  @enderror" name="image" accept=".jpg,.gif,.png" required/>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col col-sm-12 col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Category</label>
                                    <div class="col-10">
                                        <select class="form-control @error('product_category_id') is-invalid  @enderror" name="product_category_id">
                                            @foreach($categories  as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('product_category_id')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-12 col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Subcategory</label>
                                    <div class="col-10">
                                        <select class="form-control select-product_subcategory_id @error('product_subcategory_id') is-invalid  @enderror" name="product_subcategory_id">
                                            
                                            @foreach($subcategories  as $subcategory)
                                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                            @endforeach
                                        </select>
                                        <script>
                                            $(".select-product_subcategory_id").select2({
                                                tags:true
                                            });
                                        </script>
                                        @error('product_subcategory_id')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-sm-12 col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label" for="product_price">Price</label>
                                    <div class="col-10">
                                        <input type="number" id="product_price" name="product_price" value="{{ old('product_price') }}" class="form-control @error('product_price') is-invalid  @enderror" placeholder="Product Price">
                                        @error('product_price')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-12 col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label" for="product-price-discount">Discount(%)</label>
                                    <div class="col-10">
                                        <input type="number" id="product-price-discount" name="product_price_discount" value="{{ old('product_price_discount') }}" class="form-control @error('product_price_discount') is-invalid  @enderror" placeholder="Product Price Discount(%)">
                                        @error('product_price_discount')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>The product price discount may not be greater than 99%.
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-sm-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label" for="product-small-description">Small Description (100 character)</label>
                                    <div class="col-10">
                                        <textarea name="product_small_description" value="{{ old('product_small_description') }}" id="" cols="10" class="form-control @error('product_small_description') is-invalid  @enderror"></textarea>
                                        @error('product_small_description')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-b-30 m-t-0 header-title">Full Description</h4>
                                    <textarea id="elm1" name="product_full_description" value="{{ old('product_full_description') }}" class="@error('product_full_description') is-invalid  @enderror"></textarea>
                                    @error('product_full_description')
                                        <span class="invalid-feedback text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-b-30 m-t-0 header-title">Shipping And Return Process</h4>
                                    <textarea id="elm1" name="product_shipping_and_return" value="{{ old('product_shipping_and_return') }}" class="@error('product_shipping_and_return') is-invalid  @enderror"></textarea>
                                    @error('product_shipping_and_return')
                                        <span class="invalid-feedback text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <a href="" class="btn btn-warning">Reset</a>
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- end row -->
            </div>
            <!-- end card-box -->
    {{-- <script type="text/javascript">
        $(document).ready(function(){
            $('select[name="shop_id"]').on('change',function(){
                var shop_id = $(this).val();
                $.ajax({
                    method:'GET',
                    dataType:'json',
                    url:'{{ url("/fetch-product_category/") }}/'+shop_id,
                    success:function(data){
                        var d = $('select[name = "product_category_id"]').empty();
                        $('select[name = "product_category_id"]').append('<option>Select product_category</option>');
                    $.each(data, function(key, value){
                        $('select[name = "product_category_id"]').append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                        
                    },
                });
            })

            $('select[name="product_category_id"]').on('change',function(){
                var product_category_id = $(this).val();
                $.ajax({
                    method:'GET',
                    dataType:'json',
                    url:'{{ url("/fetch-product_subcategory/") }}/'+product_category_id,
                    success:function(data){
                        var d = $('select[name = "product_subcategory_id"]').empty();
                        $('select[name = "product_subcategory_id"]').append('<option>Select product_subcategory</option>');
                    $.each(data, function(key, value){
                        $('select[name = "product_subcategory_id"]').append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                        
                    },
                });
            })
        })
    </script> --}}

@endsection

{{-- <div class="col col-sm-12 col-md-6">
    <div class="p-20">
        <form class="form-horizontal" role="form">
            <div class="form-group row">
                <label class="col-2 col-form-label">Text</label>
                <div class="col-10">
                    <input type="text" class="form-control" value="Some text value...">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label" for="example-email">Email</label>
                <div class="col-10">
                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Password</label>
                <div class="col-10">
                    <input type="password" class="form-control" value="password">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Placeholder</label>
                <div class="col-10">
                    <input type="text" class="form-control" placeholder="placeholder">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Text area</label>
                <div class="col-10">
                    <textarea class="form-control" rows="5"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Readonly</label>
                <div class="col-10">
                    <input type="text" class="form-control" readonly="" value="Readonly value">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Disabled</label>
                <div class="col-10">
                    <input type="text" class="form-control" disabled="" value="Disabled value">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-2 col-form-label">Static control</label>
                <div class="col-10">
                    <p class="form-control-static">email@example.com</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Helping text</label>
                <div class="col-10">
                    <input type="text" class="form-control" placeholder="Helping text">
                    <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Input Select</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <h6>Multiple select</h6>
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Default file input</label>
                <div class="col-10">
                    <input type="file" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Date</label>
                <div class="col-10">
                    <input class="form-control" type="date" name="date">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Month</label>
                <div class="col-md-10">
                    <input class="form-control" type="month" name="month">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Time</label>
                <div class="col-md-10">
                    <input class="form-control" type="time" name="time">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Week</label>
                <div class="col-md-10">
                    <input class="form-control" type="week" name="week">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Number</label>
                <div class="col-md-10">
                    <input class="form-control" type="number" name="number">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">URL</label>
                <div class="col-md-10">
                    <input class="form-control" type="url" name="url">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Search</label>
                <div class="col-md-10">
                    <input class="form-control" type="search" name="search">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Tel</label>
                <div class="col-md-10">
                    <input class="form-control" type="tel" name="tel">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Color</label>
                <div class="col-md-10">
                    <input class="form-control" type="color" name="color">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Range</label>
                <div class="col-md-10">
                    <input class="form-control" type="range" name="range" min="0" max="10">
                </div>
            </div>

        </form>
    </div>
</div> --}}

