@extends('admin.layouts.app')
@section('title','Category')
@section('content')



<!-- BREADCRUMB-->
    

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Category</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">SmartCity</a></li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card-box w-100">
            <h4 class="m-t-0 header-title"><b>Category Table</b></h4>
                <!-- Large modal -->
                <button type="button" class="btn waves-effect waves-light float-right btn-primary" data-toggle="modal" data-target=".addCategory">Add Category</button>
                <!-- Small modal -->

            <table id="datatable-buttons" class="table table-striped table-bordered add-edit-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>


                <tbody>
                    <tr>
                        <td>Sl</td>
                        <td>Name</td>
                        <td>Image</td>
                        <td>Created at</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->


@endsection