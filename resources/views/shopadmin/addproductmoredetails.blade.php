
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
                    <form class="form-horizontal" role="form" action="{{ route('product.createmoredetails') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" value = "{{ $lastinsertid }} " name="lastinsertid">
                        {{-- <input type="number" value = "5" name="lastinsertid"> --}}
                        <div class="row">
                            <div class="col col-sm-12 col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Select Size</label>
                                    <div class="col-10">
                                        <select class="form-control select-size @error('size') is-invalid  @enderror" name="size">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
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
                                            <option value="Red">Red</option>
                                            <option value="Green">Green</option>
                                            <option value="Yellow">Yellow</option>
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
                                        <input type="text" class="form-control" name="Quantity">
                                        @error('Quantity')
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
                                            <option value="Pices">Pices</option>
                                            <option value="Kg">Kg</option>
                                            <option value="Metter">Metter</option>
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
                            <div class="col-12">
                                <div class="card-box">
                                    @error('images')
                                        <span class="invalid-feedback text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="p-20 p-b-0">
                                        <div class="form-group clearfix">
                                            <div class="col-sm-12 padding-left-0 padding-right-0">
                                                <input type="file" name="images[]" id="filer_input1"
                                                       multiple="multiple">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <a href="{{ route('product.add') }}" class="btn btn-warning">Reset</a>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- end row -->
            </div>
            <!-- end card-box -->


@endsection

