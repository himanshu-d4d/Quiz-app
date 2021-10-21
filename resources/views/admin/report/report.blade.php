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
                <th style="width: 10%">
                    Id
                </th>
                <th style="width: 12%">
                    User Name
                </th>
                <th style="width: 20%">
                    Date
                </th>
                <th style="width: 8%">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @if(!empty($reports) && $reports->count())
        @foreach($reports as $report)
            <tr>
            
                <td>
               {{$report->id}}
                </td>
                <td>
                {{$report->user_name}} 
                </td>
                <td>
                {{$report->date}}
                </td>
                <td>
                 <a href="{{url('/admin/download-pdf/'.$report->pdf)}}" class="btn btn-success btn-sm" >View Report</a>
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
{{$reports->links("pagination::bootstrap-4")}}
</div>  

@endsection