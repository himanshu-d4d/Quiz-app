<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<style>
.navbar {
    width:500px;
    display:table;
    li{
        display:table-cell;
        text-align:center;
    }
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<div class="form-inline">
<h1>Traceability Chooser Report List</h1>
<td> <a href="{{url('main-section')}}" class="btn btn-success btn-sm" style='margin-left:40%;'>Back to website</a></td>

</div>


<table id="customers">
  <tr>
    <th style ="text-align:center;">Sr. no.</th>
    <th style ="text-align:center;">Date</th>
    <th style ="text-align:center;">Action</th>
  </tr>
  <?php $i=0 ?>
  @foreach($reports as $report)
  <?php $i++ ?>
  <tr>
    <td style ="text-align:center;"><?php echo $i ?></td>
    <td style ="text-align:center;">{{$report->date}}</td>
    <td style ="text-align:center;"> <a href="{{url('/user/download-pdf/'.$report->pdf)}}" class="btn btn-success btn-sm" >View Report</a></td>
  </tr>
@endforeach


</table>

</body>
</html>




