@extends('admin.layouts.app')
@section('title','district')
@section('content')



<!-- BREADCRUMB-->
    

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">district</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">SmartCity</a></li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">district</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card-box w-100">
            <h4 class="m-t-0 header-title"><b>district Table</b></h4>
                <!-- Large modal -->
                <button type="button" class="btn waves-effect waves-light float-right btn-primary" data-toggle="modal" data-target=".addDistrict">Add district</button>
                <!-- Small modal -->

            <table id="datatable-buttons" class="table table-striped table-bordered add-edit-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>district Name</th>
                    <th>division Name</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>


                <tbody>
                    @foreach($districts as $district)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $district->name }}</td>
                    <td>{{ $district->division->name }}</td>
                    <td><img src="{{ asset('storage/'.$district->image) }}" alt="" width="50px" height="50px"></td>
                    <td>{{ $district->code }}</td>
                    <td>{{ $district->created_at }}</td>
                    <td>
                        <!-- Large modal -->
                        <button type="button" class="btn btn-xs waves-effect waves-light btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-pencil"></i></button>
                        <button href="{{ route('delete.district',$district->id) }}" class="btn btn-xs waves-effect waves-light btn-danger" id="delete"><i class="fa fa-trash-o"></i></button>
                        <!-- Small modal -->
                    </td>

                    
                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                </div>
                                <div class="modal-body">
                                        
                                    <form action="{{ route('update.district',$district->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>All Element</strong> For Create district
                                                    <em>(deprecated)</em>
                                                </div>
                                                <div class="card-body card-block">
                                                    <div class="has-success form-group">
                                                        <label for="inputSuccess2i" class=" form-control-label">District Name</label>
                                                        <input type="text" id="inputSuccess2i" name="name" value="{{ $district->name }}" class="form-control-success form-control @error('name') is-invalid  @enderror" required>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>
                                                    <div class="has-success form-group">
                                                        <label for="inputSuccess2i" class=" form-control-label">District Code</label>
                                                        <input type="text" id="inputSuccess2i" name="code" value="{{ $district->code }}" class="form-control-success form-control @error('code') is-invalid  @enderror" required>
                                                        @error('code')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>
                                                    
                                                    <div class="has-success form-group">
                                                        <label for="inputSuccess2i" class=" form-control-label">Division</label>
                                                        <select type="text" id="inputSuccess2i" name="division_id" class="form-control-success form-control @error('division_id') is-invalid  @enderror" required>
                                                            @foreach($divisions as $division)
                                                            <option value="{{ $division->id }}" @if ($division->id == $district->division_id) selected @endif>{{ $division->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('division_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>
                                                    <div class="has-warning form-group">
                                                        <label for="inputWarning2i" class=" form-control-label">District Image</label>
                                                        <input type="file" id="file-input" name="image" class="form-control-file  @error('image') is-invalid @enderror " onchange="photoChangEdit(this)"> 
                                                        <input type="hidden" name="old_image" value="{{ $district->image }}">
                                                        @error('image')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                                                    
                                                        <img class="img-thumbnail" src="{{ asset('../storage/'.$district->image) }}" alt="{{ $district->name }}" id="photoEdit" style="height: 100%; width: 100%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
<!-- end row -->


<!-- modal medium -->
<div class="modal fade mt-5 addDistrict"  id="createModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Add district</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('create.district') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <strong>All Element</strong> For Create district
                            <em>(deprecated)</em>
                        </div>
                        <div class="card-body card-block">
                            <div class="has-success form-group">
                                <label for="inputSuccess2i" class=" form-control-label">district Name</label>
                                <input type="text" id="inputSuccess2i" name="name" class="form-control-success form-control @error('name') is-invalid  @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                            <div class="has-success form-group">
                                <label for="inputSuccess2i" class=" form-control-label">District Code</label>
                                <input type="text" id="inputSuccess2i" name="code" class="form-control-success form-control @error('code') is-invalid  @enderror" required>
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                            
                            <div class="has-success form-group">
                                <label for="inputSuccess2i" class=" form-control-label">division</label>
                                <select type="text" id="inputSuccess2i" name="division_id" class="form-control-success form-control @error('division_id') is-invalid  @enderror" required>
                                    @foreach($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                    @endforeach
                                </select>
                                @error('division_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                            <div class="has-warning form-group">
                                <label for="inputWarning2i" class=" form-control-label  @error('image') is-invalid @enderror ">district Image</label>
                                <input type="file" id="file-input" name="image" class="form-control-file" onchange="photoChange(this)" required> 

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <img class="ml-5" src="" alt="" id="photo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal medium -->


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