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
    @foreach($shops as $shop)
    <div class="col-lg-3 col-md-6">
        <a href="{{ route('shopadmin.shop.products',$shop->id) }}">
        <div class="card-box widget-box-three">
            <div>
                <h5>{{ $shop->name }}</h5>
            </div>
            <div class="bg-icon pull-left">
                <img class="img-rounded" src="{{ asset('storage/'.$shop->logo) }}" title="clock.svg">
            </div>
            <div class="text-right">
                <p class="m-t-5 text-uppercase font-14 font-600">Total Product</p>
                <h2 class="m-b-10"><span data-plugin="counterup">{{ count($shop->product) }}</span></h2>
            </div>
                <!-- Large modal -->
                <a href="{{ route('shopadmin.edit.shop',$shop->id) }}" class="btn btn-block waves-effect waves-light btn-success"><i class="fa fa-pencil"></i></a>
                <a href="{{ route('shopadmin.delete.shop',$shop->id) }}" class="btn btn-block waves-effect waves-light btn-danger" id="delete"><i class="fa fa-trash-o"></i></a>
            </a>
                <!-- Small modal -->
        </div>
    </div>
    @endforeach

</div>


@endsection