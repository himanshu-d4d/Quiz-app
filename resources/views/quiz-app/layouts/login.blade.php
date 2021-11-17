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
        <section class="projection-section-main " style="background-color: #f3f5ff;">
		    <div class="project-setion-inner same-para-class">
			    <div class="container">
				    <div class="row">
					    <div class="col-sm-6">
						    <h1><span>Who are</span> you?</h1>
							<p>Please complete your details here <br> so that we can send you a <br> personalised report. We won’t be <br> using the information for any <br> other purpose unless you allow <br> us to do so.</p>
				        </div>
						<div class="col-sm-6">
						    <form action ="{{url('user/login-attempt')}}" method ="POST">
							   @csrf
							   @if(session('error'))
                        <div class="alert alert-sm alert-danger alert-block" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{ session('error') }}</strong>
                        </div>
                        @endif
						@if(session('success'))
                        <div class="alert alert-sm alert-success alert-block" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{ session('success') }}</strong>
                        </div>
                        @endif
								 
								  <div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name="email"/>
								  </div>
								  <div class="form-group">
									<label for="name">Password</label>
									<input type="text" class="form-control" id="password" name="password"/>
								  </div>
								  <button type="submit" class="btn btn-primary">Start the <br> chooser now</button>
								  <a href ="{{url('user/signup')}}" class="btn btn-info">Sign Up</a>
                            </form>
				        </div>
				    </div>
				</div>
			</div>
		</section>
	</body>
</html>

