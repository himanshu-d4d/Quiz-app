@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
<section class="content">

<!-- Default box -->
<div class="card">
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
                <th style="width: 4%">
                    Id
                </th>
                <th style="width: 5%">
                    Snippets No.
                </th>
                <th style="width: 15%">
                    Snippets Text
                </th>
                <th style="width: 5%">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @if(!empty($snippet) && $snippet->count())
        @foreach($snippet as $snippets)
            <tr>
            
                <td>
               {{$snippets->id}}
                </td>
                <td>
                {{$snippets->snippets_no}}
                </td>
                <td>
                {{$snippets->snippets_text}}
                </td>
                <td>
                 <a href="{{url('/admin/edit-snippets/'.$snippets->id)}}" class="btn btn-success btn-sm" >Edit</a>
                 <a href="{{url('/admin/delete-snippets/'.$snippets->id)}}" class="btn btn-danger btn-sm" >Delete</a>
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
{{$snippet->links("pagination::bootstrap-4")}}
</div>  

@endsection