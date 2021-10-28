
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

        <section class="projection-section-main  background-color-wt-menu background-wt-radio-questions" style="background-color: {{$question->background_color}};">
		    <header>
				<nav class="navbar navbar-expand-sm">
					  <ul class="navbar-nav">
						<li class="nav-item">
						  <a class="nav-link" href="#">Back to website</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="{{url('user/report')}}">Reports</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="{{url('logout')}}">Logout</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#"><img src="{{url('frontend/images/login.png')}}"/>{{loginUser()->name}}</a>
						</li>
					  </ul>
				</nav>
			</header>
		    <div class="project-setion-inner">
			    <div class="container">
				    <div class="row">
					    <div class="col-sm-12">
						    <h1><span>{{$question->cat_first_word}}</span> {{$question->cat_remaining_word}}</h1>
							
                            <form action ="{{url('submit-answer')}}" method="GET">
                            @csrf
							@if($question->answer_type == "redio")
                            <input type="hidden" name="snippets_no" id="snippets_no">
							<input type="hidden" name="answer_order" id="answer_no">
							<input type="hidden" name="question" value="{{$question->question}}">
							<input type="hidden" name="answer_type" value="{{$question->answer_type}}"> 
							<input type="hidden" name="category_name" value="{{$question->cat_first_word}} {{$question->cat_remaining_word}}">
                            <input type="hidden" name="category_order" value="{{$question->category_order}}">
                            <input type="hidden" name="question_no" value="{{$question->queston_no}}">
							<p><span>{{$question->queston_no}}.</span> {{$question->question}}</p>
							<div class="question-radio">
                              @foreach($answers as $answer)
							    <label class="main-radio">{{$answer->answers}}
									  <input type="radio"  name="answer" class="snippets" value ="{{$answer->answers}}" snippet-no="{{$answer->snippets_no}}" answer-no="{{$answer->answer_order}}" required>
									  <span class="checkmark"></span>
								</label>
                                @endforeach
							   <button type="submit" class="btn btn-primary">Next question</button>
							   @else
							   <div class="project-setion-inner same-category-image-new">
							   <input type="hidden" name="snippets_no" id="snippets_no">
							   <input type="hidden" name="answer_order" id="answer_no">
							<input type="hidden" name="question" value="{{$question->question}}"> 
							<input type="hidden" name="answer_type" value="{{$question->answer_type}}"> 
							<input type="hidden" name="category_name" value="{{$question->cat_first_word}} {{$question->cat_remaining_word}}">
                            <input type="hidden" name="category_order" value="{{$question->category_order}}">
                            <input type="hidden" name="question_no" value="{{$question->queston_no}}">

			    <div class="container">
				    <div class="row">
					    <div class="col-sm-12">
							<p><span>{{$question->queston_no}}.</span> {{$question->question}}</p>
							<table class="table">
								<thead>
								  <tr>
								    <th></th>
									<th>Not important</th>
									<th>Unsure</th>
									<th>Important</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
								  @foreach($answers as $answer)
									<td>{{$answer->answers}}</td>
									<td><label class="main-radio">
									  <input type="radio"   name="{{'answer['.$answer->id.']'}}" class="snippets" value ="{{$answer->answers}} = Not important" snippet-no="{{$answer->snippets_no}}" answer-no="{{$answer->answer_order}}" required>
									  <span class="checkmark"></span>
								</label></td>
									<td><label class="main-radio">
									  <input type="radio"   name="{{'answer['.$answer->id.']'}}" class="snippets" value ="{{$answer->answers}} = Unsure" snippet-no="{{$answer->snippets_no}}" answer-no="{{$answer->answer_order}}" required>
									  <span class="checkmark"></span>
								</label></td>
								<td><label class="main-radio">
									  <input type="radio"   name="{{'answer['.$answer->id.']'}}" class="snippets" value ="{{$answer->answers}} = Important" snippet-no="{{$answer->snippets_no}}" answer-no="{{$answer->answer_order}}" required>
									  <span class="checkmark"></span>
								</label></td>
								  </tr>
								 @endforeach
								</tbody>
                            </table>
							<div class="question-radio-new">
							 
							    <button type="submit" class="btn btn-primary">Next question</button>
							</div>
							 
				        </div>
					
				    </div>
				</div>
			</div>
           @endif                    </form>
							</div>
							 
				        </div>
					
				    </div>
				</div>
			</div>
		</section>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script>
        $(document).ready(function(){
            $('.snippets').click( function() {
             var data = $(this).attr("snippet-no");
             $("#snippets_no").val(data);
           });
             
           });
		   $('.snippets').click( function() {
             var data = $(this).attr("answer-no");
             $("#answer_no").val(data);
        });
        </script>
	</body>
</html>

