@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
<section class="content">

<!-- Default box -->
<div class="card">
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
                <th style="width: 20%">
                Question
                </th>
                <th style="width: 5%">
                Snippets No.
                </th>
                <th style="width: 15%">
                    Answers
                </th>
                <th style="width: 8%">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @if(!empty($answers) && $answers->count())
        @foreach($answers as $answer)
            <tr>
                <td>
               {{$answer->id}}
                </td>
                <td>
                {{$answer->question}}
                </td>
                <td style="text-align:center">
                {{$answer->snippets_no}}
                </td>
                <td>
                {{$answer->answers}} 
                </td>
                <td>
                 <a href="{{url('/admin/edit-answers/'.$answer->id)}}" class="btn btn-success btn-sm" ><i class=" fa fa-edit"></i></a>
                 <a href="{{url('/admin/delete-answers/'.$answer->id)}}" class="btn btn-danger btn-sm" ><i class=" fa fa-trash"></i></a>
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
{{$answers->links("pagination::bootstrap-4")}}
</div>  

@endsection