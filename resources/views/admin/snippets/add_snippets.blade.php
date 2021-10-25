@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style = "margin-left:100px">New Snippets</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Snippets</li>
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
            <form action = "{{url('admin/store-snippets')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Snippets Number</label>
                <input type="text" name ="snippets_no" class="form-control" value="">
                @if ($errors->has('ename')) <p class="alert-danger">{{ $errors->first('ename') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Snippets Text</label><br />
                <textarea id="w3review" name="snippets_text" class="form-control" rows="4" cols="50">
                 </textarea>
                @if ($errors->has('description')) <p class="alert-danger">{{ $errors->first('description') }}</p> @endif
              </div>
              <div class="row">
                <div class="col-7">
                <a href="#" class="btn btn-secondary" >Cancel</a>
                <input type="submit" value="Save Changes" class="btn btn-success ">                

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