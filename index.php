<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Propeller Communications Quizzes</title>

	<link rel="stylesheet" href="common/bootstrap-3.3.4-dist/css/bootstrap.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" href="common/css/base.css">
	<style type="text/css">
		.quiz{
			border:1px solid #ccc;
			box-shadow:2px 2px 5px #ccc;
			padding:10%;
		}
		.quiz:hover{
			box-shadow:5px 5px 10px #69c;
		}
		a:hover{
			text-decoration:none;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<h1>Propeller Communications Quizzes</h1>
		<h4>Will Buckingham</h4>
		<p>I originally picked Quiz 1 as it seemed reasonable, and I would be able to take some existing design from an application I had recently made.  Also I thought from flickr's website that I would have to be approved to get an API key, and I was unsure how long that might take.</p>
		<p>After completeing the initial release version of Quiz 1, I had realized that a proper MVC framework would lead to better more organized code.  (I also felt, I may have taken too much advantage of jQueryUI's autocomplete feature).  For a while I have relized that jQuery is somewhat inadequet in a single page application world.  While it is an excellent crossbrowser code simplifing platform, it does lead to manual manipulation of the DOM, and too much intertwining of logic and display.  Therefore, I finally decided to take a real crack at AngularJS, something I had looked into in the past, but had not yet had a practical application to learn it, and hense my crack at Quiz 2.  Plus, I learned you can get a flickr api key right away.</p>
		<br/>
		<div class="row">
			<div class="col-sm-4 col-sm-push-2">
				<a href="quiz1/">
					<div class="quiz">
						<img class="img-responsive" src="images/Magnifying_glass_icon.svg.png" />
						<h3 class="text-center">Quiz 1<br/>Username Search<br/>jQuery/jQueryUI</h3>
					</div>
				</a>
			</div>
			<div class="col-sm-4 col-sm-push-2">
				<a href="quiz2/">
					<div class="quiz">
						<img class="img-responsive" src="images/Flickr_logo.png" style="padding:34.965034965034965034965034965035% 0;"/>
						<h3 class="text-center">Quiz 2<br/>Flickr API<br/>AngularJS</h3>
					</div>
				</a>
			</div>
		</div>
		<?php include("common/page_includes/footer.inc"); ?>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="common/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

</body>
</html>