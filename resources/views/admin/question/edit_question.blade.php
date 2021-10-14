@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style = "margin-left:100px">Edit Question</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Question</li>
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
              <h3 class="card-title">Edit Question</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action = "{{url('admin/update-question')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <input type="hidden" name="id" value="{{$questionData->id}}">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Category</label>
                <select name="category" class="form-control">
                 <option value="">Select</option>
                   @foreach($categories as $category)
                      <option value="{{$category->id}}"<?php echo $category->id == $questionData->category_id ?'selected':'' ?> >{{$category->cat_first_word}} <span>{{$category->cat_remaining_word}}</span></option>
                    @endforeach  
                </select>
                @if ($errors->has('ename')) <p class="alert-danger">{{ $errors->first('ename') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Next Action</label>
                <select name="category_sequence" id="cars" class="form-control">
                 <option value="">Select</option>
                 <option value="null" <?php echo 'null' == $questionData->next_action ?'selected':'' ?>>Add one</option>
                 <option value="finish" <?php echo 'finish' == $questionData->next_action ?'selected':'' ?>>Finish</option>
                   @foreach($categories as $category)
                      <option value="{{$category->cat_sequence_no}}" <?php echo $category->cat_sequence_no == $questionData->next_action ?'selected':'' ?>>{{$category->cat_first_word}} <span>{{$category->cat_remaining_word}}</span></option>
                    @endforeach  
                </select>
                @if ($errors->has('ename')) <p class="alert-danger">{{ $errors->first('ename') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Answers type</label>
                <select name="answer_type" id="cars" class="form-control">
                 <option value="">Select</option>
                 <option value="redio" <?php echo 'redio' == $questionData->answer_type ?'selected':'' ?> >Redio</option>
                 <option value="composition" <?php echo 'composition' == $questionData->answer_type ?'selected':'' ?>>Composition</option>
                </select>
                @if ($errors->has('ename')) <p class="alert-danger">{{ $errors->first('ename') }}</p> @endif
              </div>
              <div class="form-group">
                <label for="inputName">Question Sequence No</label>
                <input type="text" name="question_sequence" class="form-control" value="{{$questionData->queston_no}}">
                @if ($errors->has('eaddress')) <p class="alert-danger">{{ $errors->first('eaddress') }}</p> @endif  
              </div>
              <div class="form-group">
                <label for="inputName">Question</label><br />
                <textarea id="w3review" name="question" class="form-control" rows="4" cols="50">
                {{$questionData->question}}
                 </textarea>
                @if ($errors->has('description')) <p class="alert-danger">{{ $errors->first('description') }}</p> @endif
              </div>
              <div class="form-group">
                <div class="form-group">
                    <label>Background Color</label>
                        <input class="form-control" type="text" name="color" id="color" value="{{$questionData->background_color}}"/>
                </div>
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
  <script>
    $('#color').colorpicker({});
  </script>
  @endsection