@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
<section class="content">

<!-- Default box -->
<div class="card">
@if(session('error'))
                        <div class="alert alert-sm alert-danger alert-block" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{ session('error') }}</strong>
                        </div>
                        @endif
  <div class="card-header">
    <h3 class="card-title">Question List</h3>
    <div class="card-tools">
    <form method = "GET">
      <input type="text" name = "search" style = "margin-right:10px" value="{{isset($_GET['search'])?$_GET['search']:'' }}">
      <button type ="submit"><i class="fa fa-search"></i></button>
    </form>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 6%">
                    Id
                </th>
                <th style="width: 8%">
                   Category
                </th>
                <th style="width: 20%">
                    Question
                </th>
                <th style="width:1%">
                    Background Color
                </th>
                <th style="width: 10%">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @if(!empty($questionData) && $questionData->count())
        @foreach($questionData as $question)
            <tr>
            
                <td>
               {{$question->queston_no}}
                </td>
                <td>
                {{$question->cat_first_word}} <spam>{{$question->cat_remaining_word}}</spam>
                </td>
                <td>
                {{$question->question}}
                </td>
                <td>
                <div style="background-color: {{$question->background_color}} ; padding: 10px; border: 1px solid green;">
                </td>
                <td>
                <a href="{{url('/admin/add-answers/'.$question->id)}}" class="btn btn-primary btn-sm" title="Add Answer"><i class=" fa fa-plus"></i></a>
                <a href="{{url('/admin/view-answers/'.$question->id)}}" class="btn btn-info btn-sm" title="view Answer"><i class=" fa fa-eye"></i></a>
                 <a href="{{url('/admin/edit-question/'.$question->id)}}" class="btn btn-success btn-sm" ><i class=" fa fa-edit"></i></a>
                 <a href="{{url('/admin/delete-question/'.$question->id)}}" class="btn btn-danger btn-sm" ><i class=" fa fa-trash"></i></a>
              </td>
               
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10">There are no data.</td>
            </tr>
            @endif
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</section>
{{$questionData->links("pagination::bootstrap-4")}}
</div>  

@endsection