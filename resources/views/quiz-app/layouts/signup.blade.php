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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	</head>
	<body>
    <section class="projection-section-main signup-new" style="background-color: #f3f5ff;">
		    <div class="project-setion-inner same-para-class">
			    <div class="container">
				    <div class="row">
					    <div class="col-sm-6">
						    <h1><span>Who are</span> you?</h1>
							<p>Please complete your details here <br> so that we can send you a <br> personalised report. We won’t be <br> using the information for any <br> other purpose unless you allow <br> us to do so.</p>
				        </div>
						<div class="col-sm-6">
						
						    <form action ="{{url('user/signup-store')}}" method="POST" id="form">
							   @csrf
								  <div class="form-group">
									<label for="name">First Name</label>
									<input type="text" class="form-control" id="name" name="name"/>
									@if ($errors->has('name')) <p class="alert-danger">{{ $errors->first('name') }}</p> @endif
								  </div>
								  <div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" id="email" name="email"/>
									@if ($errors->has('email')) <p class="alert-danger">{{ $errors->first('email') }}</p> @endif
								  </div>
								  <div class="form-group">
									<label for="Password">Password</label>
									<input type="text" class="form-control" id="password" name="password"/>
									@if ($errors->has('password')) <p class="alert-danger">{{ $errors->first('password') }}</p> @endif
								  </div>
								  
								  <div class="form-group">
									<label for="Confirm Password">Confirm Password</label>
									<input type="text" class="form-control" id="c_password" name="c_password"/>
									@if ($errors->has('c_password')) <p class="alert-danger">{{ $errors->first('c_password') }}</p> @endif
								  </div>
								  <button type="submit" class="btn btn-primary">Start the <br> chooser now</button>
                            </form>
				        </div>
				    </div>
				</div>
			</div>
		</section>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   
   <script>
    $(document).ready(function () {
    $('#form').validate({ // initialize the plugin
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
			password: {
                required: true,
            },
			c_password: {
            required: true,
            equalTo: '[name="password"]'
        }
        }
    });
});
</script>
	</body>
</html>

