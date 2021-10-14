@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style = "margin-left:100px">Category Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-8" style = "margin-left:100px">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Category Edit</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action = "{{url('admin/update-category')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Category First Word</label>
                <input type="hidden" name="id" value="{{$category->id}}">
                <input type="text" name ="cat_first_word" class="form-control" value="{{$category->cat_first_word}}">
                @if ($errors->has('ename')) <p class="alert-danger">{{ $errors->first('ename') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Category Remaining Word</label>
                <input type="text" name ="cat_remaining_word" class="form-control" value="{{$category->cat_remaining_word}}">
                @if ($errors->has('ename')) <p class="alert-danger">{{ $errors->first('ename') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Category Sequence No</label>
                <input type="text" name="cat_sequence_no" class="form-control" value="{{$category->cat_sequence_no}}">
                @if ($errors->has('eaddress')) <p class="alert-danger">{{ $errors->first('eaddress') }}</p> @endif  
              </div>
              <div class="form-group">
                <label for="inputName">Category Description</label><br />
                <textarea id="w3review" name="cat_description" class="form-control" rows="4" cols="50">
                {{$category->cat_description}}
                 </textarea>
                @if ($errors->has('description')) <p class="alert-danger">{{ $errors->first('description') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Background Image</label><br/>
                @if (!$category->bg_image)
                 <img src="{{url('/images/'.'default.png')}}" class="img-circle" alt="No photo" style= "width:80px;height:80px;">
                 @else
                <img src="{{url('upload/images/'.$category->bg_image)}}" class="img-circle" alt="user Image" style= "width:80px;height:80px;">
                @endif
                <input type="hidden" class="form-control" name ="old_image" value="{{$category->bg_image}}"/>
                <input type="file" class="form-control" name ="image" />
              </div>
              <div class="row">
                <div class="col-7">
                <a href="#" class="btn btn-secondary" style ="margin-left:45%">Cancel</a>
                <input type="submit" value="Save Changes" class="btn btn-success float-right">                

                </div>
            </div>
            </div>
         </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    <!-- /.content -->
  </div>
  
    </section>

    <!-- /.content -->
  </div>
  @endsection