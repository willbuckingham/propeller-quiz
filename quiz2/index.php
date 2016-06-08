<!DOCTYPE html>
<html ng-app="quiz2App" lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Flickr API Test</title>

	<link rel="stylesheet" href="../common/bootstrap-3.3.4-dist/css/bootstrap.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

	<link rel="stylesheet" href="../common/css/base.css">
	<style type="text/css">
		.flickrPhotos{
			margin-bottom:30px;
			display:inline-block;
			float:none;
		}
		.flickrPhotos img{
			cursor:pointer;
		}
		.fillImg{
			width:100%;
			height:auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Flickr API Test</h1>
		<div ng-controller="FlickrController as flickr">
			<div class="row">
				<!--<li ng-repeat="todo in todoList.todos">-->
				<div class="col-md-2 col-sm-3 col-xs-4 flickrPhotos" ng-repeat="photo in flickr.photos">
					<a data-modal-url="{{photo}}" data-toggle="modal" data-target="#modal" target="_blank">
						<img class="img-responsive" src="{{photo}}" />
					</a>
				</div>
			<div>
			<button type="button" class="btn btn-default" ng-click="pagination.previousPage()">&lt;</button>
			<span>Page <!--<input type="number" min="1" max="{{ pagination.getTotalPages() }}" ng-model="pagination.pageNumber" ng-change="load()">-->{{ pagination.pageNumber }} of {{ pagination.getTotalPages() }}</s>
			<button type="button" class="btn btn-default" ng-click="pagination.nextPage()">&gt;</button>
		</div>
		
		<?php include("../common/page_includes/footer.inc"); ?>
	</div>
	
	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					
				</div>
			</div>
		</div>
	</div>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="../common/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
	<script src="quiz2.js"></script>
</body>
</html>