<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Username Search</title>

	<link rel="stylesheet" href="../common/bootstrap-3.3.4-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" href="../common/css/base.css">
	<style type="text/css">
		#errorMessage, #searchTable, #searchForm{
			display:none;
			margin: 20px 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<div id="loadingScreen">
			<h1>Loading...</h1>
		</div>
		
		<div id="searchForm">
			<h1>Username Search</h1>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" placeholder="Username">
			</div>
			<button type="button" class="btn btn-default" id="searchBtn">Search</button>
		</div>
		
		<div id="searchTable" style="display:none;">
			<h3>Results</h3>
			<table class="table table-bordered">
				<thead> 
					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>City</th>
						<th>Country</th>
						<th>Favorite Color</th>
						<th>Blog</th>
						<th>Title</th>
					</tr>
				</thead> 
				<tbody>
					<tr id="resultRow">
						<td id="resultID"></td>
						<td id="resultFirstName"></td>
						<td id="resultLastName"></td>
						<td id="resultUsername"></td>
						<td id="resultEmail"></td>
						<td id="resultCity"></td>
						<td id="resultCountry"></td>
						<td id="resultFavoriteColor"></td>
						<td id="resultBlog"></td>
						<td id="resultTitle"></td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<div id="errorMessage">
			
		</div>
		
		<?php include("../common/page_includes/footer.inc"); ?>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="../common/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
	<script src="quiz1.js"></script>
</body>
</html>