@extends('admin.layouts.app')
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
                                    <li class="list-inline-item">Shop List</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->


    <div class="row">
        <div class="col-12">
            <div class="card-box w-100">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="m-t-0 header-title"><b>Category Table</b></h4>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select A Shop
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            @foreach($shoplists as $shop)
                            <a class="dropdown-item" href="{{ route('shopadmin.shop.products',$shop->id) }}">{{ $shop->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered add-edit-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
        
        
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->code }}</td>
                                    <td><img src="{{ asset('storage/'.$product->image) }}" alt="" width="50px" height="50px"></td>
                                    <td>{{ $product->product_price }}</td>
                                    <td>{{ $product->product_price_discount }}</td>
                                    <td>
                                        @if ($product->status == 1)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>
                                    <td>
                                        
                
                                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-xs waves-effect waves-light btn-warning"><i class="fa fa-pencil"></i></a>
                                        <button type="button" class="btn btn-xs waves-effect waves-light btn-secondary" data-toggle="modal" data-target=".bs-example-modal-lg1{{ $product->id }}"><i class="fa fa-info-circle"></i></button>
                                        <button type="button" class="btn btn-xs waves-effect waves-light btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i></button>
                                        <button href="{{ route('delete.product',$product->id) }}" class="btn btn-xs waves-effect waves-light btn-danger" id="delete"><i class="fa fa-trash-o"></i></button>
                                        <!-- Small modal -->
                                    </td>
                                    
                    
                    <!--  Product Details list in modal -->
                    <div class="modal fade bs-example-modal-lg1{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                            SL no.
                                        </div>
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                            Size
                                        </div>
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                            Color
                                        </div>
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                            Quantity
                                        </div>
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                            Unit
                                        </div>
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                            Action
                                        </div>
                                    </div>
                                    @foreach($product->productdetail as $productdetail)
                                    <div class="row">
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                            {{ $count++ }}
                                        </div>
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                            {{ $productdetail->size }}
                                        </div>
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                            {{ $productdetail->color }}
                                        </div>
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                            {{ $productdetail->quantity }}
                                        </div>
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                            {{ $productdetail->unit }}
                                        </div>
                                        <div class="col-md-2" style="border:1px solid lightgray">
                                
                                    <a href="{{ route('product.detail.edit',$productdetail->id) }}" class="btn btn-xs waves-effect waves-light btn-info"><i class="fa fa-pencil"></i></a>
                                    
                                    {{-- delete product details --}}
                                    <button href="{{ route('product.detail.delete',$productdetail->id) }}" class="btn btn-xs waves-effect waves-light btn-danger" id="delete"><i class="fa fa-trash-o"></i></button>

                                        </div>
                                        
                    <!--  Product Detail Update Modal -->
                    <div class="modal fade product-detail-update-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" action="{{ route('product.detail.update',$productdetail->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" value="{{ $productdetail->product_id }}" name="product_id">
                                            <div class="row">
                                                <div class="col col-sm-12 col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Select Size</label>
                                                        <div class="col-10">
                                                            <select name="size" class="form-control select-size @error('size') is-invalid  @enderror">
                                                                <option value="{{ $productdetail->size }}">{{ $productdetail->size }}</option>
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
                                                                <option value="{{ $productdetail->color }}">{{ $productdetail->color }}</option>
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
                                                            <input type="text" value="{{ $productdetail->quantity }}" class="form-control @error('quantity') is-invalid  @enderror" name="quantity" placeholder="Enter Quantity">
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
                                                            <option value="{{ $productdetail->unit }}">{{ $productdetail->unit }}</option>
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
                                                    <a href="{{ route('product.add') }}" class="btn btn-warning">Reset</a>
                                                    <button type="submit" class="btn btn-primary">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                    
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                                    </div>
                                    @endforeach
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    
                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" action="{{ route('product.detail.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" value="{{ $product->id }}" name="product_id">
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
                                                            <input type="text" class="form-control @error('quantity') is-invalid  @enderror" name="quantity" placeholder="Enter Quantity">
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
                                                    <a href="{{ route('product.add') }}" class="btn btn-warning">Reset</a>
                                                    <button type="submit" class="btn btn-primary">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                    
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    
                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" action="{{ route('product.detail.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" value="{{ $product->id }}" name="product_id">
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
                                                            <input type="text" class="form-control @error('quantity') is-invalid  @enderror" name="quantity" placeholder="Enter Quantity">
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
                                                    <a href="{{ route('product.add') }}" class="btn btn-warning">Reset</a>
                                                    <button type="submit" class="btn btn-primary">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                    
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->


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




