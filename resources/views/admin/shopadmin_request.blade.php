@extends('admin.layouts.app')
@section('title','Shopadmin Request list')
@section('content')



<!-- BREADCRUMB-->
    

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Shopadmin Request List</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">SmartCity</a></li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active"> Request list</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card-box w-100">
            <h4 class="m-t-0 header-title"><b>Shopadmin Table</b></h4>
                <!-- Large modal -->
                <button type="button" class="btn waves-effect waves-light float-right btn-primary" data-toggle="modal" data-target=".addShopadmin">Add Shopadmin</button>
                <!-- Small modal -->

            <table id="datatable-buttons" class="table table-striped table-bordered add-edit-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                </thead>


                <tbody>
                    @foreach($shopadmins as $shopadmin)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $shopadmin->fullname }}</td>
                    <td><img src="{{ asset('storage/'.$shopadmin->image) }}" alt="" width="50px" height="50px"></td>
                    <td>{{ $shopadmin->email }}</td>
                    <td>{{ $shopadmin->nid }}</td>
                    <td>2011/01/25</td>
                    <td>
                        <!-- Large modal -->
                        <a href="{{ route('shopadmin.request.accept',$shopadmin->user_id) }}" class="btn btn-xs waves-effect waves-light btn-success">Accept Request</a>
                        {{-- <button href="" class="btn btn-xs waves-effect waves-light btn-danger" id="delete"><i class="fa fa-trash-o"></i></button> --}}
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




<script>
	function photoChange(input) {
      	if (input.files && input.files[0]) {
          	var reader = new FileReader();
          	reader.onload = function (e) {
              	$('#photo')
              	.attr('src', e.target.result)
			  	.attr("class","img-thumbnail")
			  	.attr("height",'100%')
			  	.attr("width",'100%')
          	};
          	reader.readAsDataURL(input.files[0]);
     	}
    }
	function photoChangEdit(input) {
      	if (input.files && input.files[0]) {
          	var reader = new FileReader();
          	reader.onload = function (e) {
              	$('#photoEdit')
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