<!doctype html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="one page scrolling for websites">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Traceability</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="{{url('frontend/css/easy-responsive-tabs.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('frontend/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('frontend/css/responsive.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>

  <section class="projection-section-main category-one " style="background-color: #f3f5ff;">

		    <header >
				<nav class="navbar navbar-expand-sm" >
					  <ul class="navbar-nav" >
						<li class="nav-item">
						  <a class="nav-link" href="{{url('main-section')}}" style ="color: #c1c1c1;">Back to website</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="{{url('user/report')}}" style ="color: #c1c1c1;">Reports</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="{{url('logout')}}" style ="color: #c1c1c1;">Logout</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#" style ="color: #c1c1c1;"><img src="{{url('frontend/images/login.png')}}"/>{{loginUser()->name}}</a>
						</li>
					  </ul>
				</nav>
			</header>
      <div class="container">

      <h1>Traceability Chooser</h1>
      <table class="table table-striped">
  <thead>
    <tr>
    <th style ="text-align:center;">Sr. no.</th>
    <th style ="text-align:center;">Date</th>
    <th style ="text-align:center;width: 20%">Action</th>
	<th style ="text-align:center;width: 15%"></th>
	<th style ="text-align:center;width: 15%"></th>


    </tr>
  </thead>
  <tbody>
    <tr>
    <?php $i=0 ?>
  @foreach($reports as $report)
  <?php $i++ ?>
  <tr>
    <td style ="text-align:center;"><?php echo $i ?></td>
    <td style ="text-align:center;">{{$report->date}}</td>
    <td > <a href="{{url('/user/download-pdf/'.$report->pdf)}}"  >View Report</a></td>
	<td > <a href="{{url('/user/download-docx/'.$report->id)}}"  >Download to Doc</a></td>
	<td > <a href="{{url('/user/download-odt/'.$report->id)}}"  >Download to ODT</a></td>
	
  </tr>
@endforeach
    </tr>
  </tbody>
</table>
</div>

		</section>
	</body>
</html>





