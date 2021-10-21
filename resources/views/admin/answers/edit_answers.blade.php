
@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style = "margin-left:100px">New Question</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Question</li>
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
            <form action = "{{url('admin/update-answers')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <input type="hidden" name="id" value="{{$answersData->id}}">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Question</label>
                <select name="question" class="form-control">
                      <option value="{{$question->queston_no}}">{{$question->question}}</option>  
                </select>
                @if ($errors->has('ename')) <p class="alert-danger">{{ $errors->first('ename') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Snippets No.</label>
                <select name="snippets_no" class="form-control">
                 <option value="">Select</option>
                 @foreach($snippets as $snippet)
                      <option value="{{$snippet->snippets_no}}" <?php echo $snippet->snippets_no == $snippet->snippets_no ?'selected':'' ?>>{{$snippet->snippets_no}}</option> 
                  @endforeach     
                </select>
                @if ($errors->has('ename')) <p class="alert-danger">{{ $errors->first('ename') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Answer</label>
                <textarea name="answers" class="form-control" >{{$answersData->answers}}</textarea>
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