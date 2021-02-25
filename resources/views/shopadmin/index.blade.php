@extends('admin.layouts.app')
@section('title','Control panel | Shop admin')
@section('content')



<!-- BREADCRUMB-->
    

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Shop</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">SmartCity</a></li>
                <li class="breadcrumb-item"><a href="#">Shop admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->



<div class="row">
    <div class="col-lg-3 col-md-6">
        <a href=""></a>
        <div class="card-box widget-box-three">
            <div>
                <h5></h5>
            </div>
            <div class="bg-icon pull-left">
                <i class="fas fa-store"></i>
            </div>
            <div class="text-right">
                <p class="m-t-5 text-uppercase font-14 font-600">Shops</p>
                <h2 class="m-b-10"><span data-plugin="counterup">{{ count($shops) }}</span></h2>
            </div>
                <!-- Large modal -->
                {{-- <a href="" class="btn btn-block waves-effect waves-light btn-success"><i class="fa fa-pencil"></i></a>
                <a href="" class="btn btn-block waves-effect waves-light btn-danger" id="delete"><i class="fa fa-trash-o"></i></a> --}}
            </a>
        </div>
                <!-- Small modal -->
    </div>
    <div class="col-lg-3 col-md-6">
        <a href="">
        <div class="card-box widget-box-three">
            <div>
                <h5></h5>
            </div>
            <div class="bg-icon pull-left">
                <i class="fas fa-cart-plus"></i>
            </div>
            <div class="text-right">
                <p class="m-t-5 text-uppercase font-14 font-600">Product</p>
                <h2 class="m-b-10"><span data-plugin="counterup"></span></h2>
            </div>
            </a>
        </div>
                <!-- Small modal -->
    </div>
</div>

</div>


@endsection