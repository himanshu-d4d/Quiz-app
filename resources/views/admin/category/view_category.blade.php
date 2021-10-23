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
    <h3 class="card-title">Category List</h3>
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
                    Category Name
                </th>
                <th style="width: 20%">
                    Category Description
                </th>
                <th style="width: 10%">
                    Background Image
                </th>
                <th style="width: 8%">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @if(!empty($categories) && $categories->count())
        @foreach($categories as $category)
            <tr>
            
                <td>
               {{$category->cat_sequence_no}}
                </td>
                <td>
                {{$category->cat_first_word}} <spam>{{$category->cat_remaining_word}}</spam>
                </td>
                <td>
                {{$category->cat_description}}
                </td>
                <td>
                @if (!$category->bg_image)
                 <img src="{{url('/images/'.'default.png')}}" class="img-circle" alt="No photo" style= "width:80px;height:80px;">
                 @else
                <img src="{{url('upload/images/'.$category->bg_image)}}" class="img-circle" alt="user Image" style= "width:80px;height:80px;">
                @endif
                </td>
                <td>
                 <a href="{{url('/admin/edit-category/'.$category->id)}}" class="btn btn-success btn-sm" >Edit</a>
                 <a href="{{url('/admin/delete-category/'.$category->id)}}" class="btn btn-danger btn-sm" >Delete</a>
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
{{$categories->links("pagination::bootstrap-4")}}
</div>  

@endsection