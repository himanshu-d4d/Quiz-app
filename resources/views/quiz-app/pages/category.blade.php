
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
        <section class="projection-section-main category-one same-category-image" style="background-image:url(<?php echo BASEURL, $category->bg_image  ?>);">
		    <header>
				<nav class="navbar navbar-expand-sm">
					  <ul class="navbar-nav">
						<li class="nav-item">
						  <a class="nav-link" href="#">Back to website</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="{{url('logout')}}">Logout</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#"><img src="{{url('frontend/images/login.png')}}"/>Helen Johnston</a>
						</li>
					  </ul>
				</nav>
			</header>
		    <div class="project-setion-inner same-para-class">
			    <div class="container">
				    <div class="row">
					    <div class="col-sm-12">
						    <h1><span>{{$category->cat_first_word}}</span> {{$category->cat_remaining_word}}</h1>
							<p>{{$category->cat_description}}</p>
							 <a href ="{{url('question/'.$category->cat_sequence_no)}}"><button type="submit" class="btn btn-primary">Take me to question 1</button></a>
				        </div>
					
				    </div>
				</div>
			</div>
		</section>
	</body>
</html>

