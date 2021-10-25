
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
            <form action = "{{url('admin/store-answers')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Question</label>
                <input type="hidden" value = "{{$question->id}}" name="question_id">
                <select name="question" class="form-control">
                      <option value="{{$question->queston_no}}">{{$question->question}}</option>  
                </select>
                @if ($errors->has('ename')) <p class="alert-danger">{{ $errors->first('ename') }}</p> @endif
              </div>
             
              <div class="form-group">
                <div class="field_wrapper ">
                <label>Answers</label>
                  <div class="form-inline"> 
                    <textarea type="text" name="answers[]" value="" style ="width:50%" ></textarea>
                       <select name="snippets_no[]" class="form-control" style="width:40%; margin-left:10px">
                        <option value="">Select</option>
                          @foreach($snippets as $snippet)
                            <option value="{{$snippet->snippets_no}}">{{$snippet->snippets_no}}</option>
                          @endforeach  
                </select>
                <a href="javascript:void(0);" class="add_button btn btn-primary btn-sm" title="Add field" style=";margin-left:5px">+</a>
                </div>                    
             </div>
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
  <script>
    $('#color').colorpicker({});
  </script>
  <script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><br /><div class="form-inline"><textarea type="text" name="answers[]" value="" style ="width:50%"> </textarea><select name="snippets_no[]" class="form-control" style="width:40%; margin-left:10px"><option value="">Select</option> @foreach($snippets as $snippet)<option value="{{$snippet->snippets_no}}">{{$snippet->snippets_no}}</option> @endforeach</select><a href="javascript:void(0);" class="remove_button btn btn-danger btn-sm" style=";margin-left:5px" >x</div></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
  @endsection