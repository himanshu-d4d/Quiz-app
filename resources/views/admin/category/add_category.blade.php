@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style = "margin-left:100px">New Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Category</li>
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
              <h3 class="card-title">Create New</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action = "{{url('admin/store-category')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Category First Word</label>
                <input type="text" name ="cat_first_word" class="form-control" value="">
                @if ($errors->has('ename')) <p class="alert-danger">{{ $errors->first('ename') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Category Remaining Word</label>
                <input type="text" name ="cat_remaining_word" class="form-control" value="">
                @if ($errors->has('ename')) <p class="alert-danger">{{ $errors->first('ename') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Category Sequence No</label>
                <input type="text" name="cat_sequence_no" class="form-control" value="">
                @if ($errors->has('eaddress')) <p class="alert-danger">{{ $errors->first('eaddress') }}</p> @endif  
              </div>
              <div class="form-group">
                <label for="inputName">Category Description</label><br />
                <textarea id="w3review" name="cat_description" class="form-control" rows="4" cols="50">
                 </textarea>
                @if ($errors->has('description')) <p class="alert-danger">{{ $errors->first('description') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Background Image</label><br/>
                <input type="file" class="form-control" name ="image" />
              </div>
              <div class="row">
                <div class="col-7">
                <a href="#" class="btn btn-secondary" >Cancel</a>
                <input type="submit" value="Save Changes" class="btn btn-success">                

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