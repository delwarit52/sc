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
                            <a class="dropdown-item" href="{{ route('product.productlistsingleshop', ['id' => 1]) }}">Shop One</a>
                            <a class="dropdown-item" href="{{ route('product.productlistsingleshop', ['id' => 2]) }}">Shop Two</a>
                            <a class="dropdown-item" href="#">Something else here</a>
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
                                        <a href="{{ route('product.basicedit', ['id' => $product->id]) }}" class="btn btn-xs waves-effect waves-light btn-warning"><i class="fa fa-pencil"></i></a>
                                        <button type="button" class="btn btn-xs waves-effect waves-light btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-info-circle"></i></button>
                                        <button type="button" class="btn btn-xs waves-effect waves-light btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-trash"></i></button>
                                        {{-- <!-- Large modal -->
                                        <button type="button" class="btn btn-xs waves-effect waves-light btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-pencil"></i></button>
                                        <button href="{{ route('delete.product',$product->id) }}" class="btn btn-xs waves-effect waves-light btn-danger" id="delete"><i class="fa fa-trash-o"></i></button>
                                        <!-- Small modal --> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->



@endsection


