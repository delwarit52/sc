@extends('admin.layouts.app')
@section('title','Shop')
@section('content')



<!-- BREADCRUMB-->
    

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Shop</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">SmartCity</a></li>
                <li class="breadcrumb-item"><a href="#">Shop admin</a></li>
                <li class="breadcrumb-item active">Shop</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->



<div class="row">
    <div class="col-12">
        <div class="card-box w-100">
            <h4 class="m-t-0 header-title"><b>Shop Table</b></h4>
                <!-- Large modal -->
                <a href="{{ route('shopadmin.shop.create') }}" class="btn waves-effect waves-light float-right btn-primary">Add Shop</a>
                <!-- Small modal -->

            <table id="datatable-buttons" class="table table-striped table-bordered add-edit-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>


                <tbody>
                    @foreach($shops as $shop)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $shop->name }}</td>
                    <td><img src="{{ asset('storage/'.$shop->logo) }}" alt="" width="50px" height="50px"></td>
                    <td>{{ 27 }}</td>
                    <td>2011/01/25</td>
                    <td>
                        <!-- Large modal -->
                        <a href="{{ route('shopadmin.edit.shop',$shop->id) }}" class="btn btn-xs waves-effect waves-light btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('shopadmin.delete.shop',$shop->id) }}" class="btn btn-xs waves-effect waves-light btn-danger" id="delete"><i class="fa fa-trash-o"></i></a>
                        <!-- Small modal -->
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->


@endsection