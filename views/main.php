<?php
$Render = new Render;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forum</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="static/style.css">
</head>
<body>
<?php
$Render::AdminBar($_SESSION['user']['permission']);
?>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="site-title"><span>Forum Name</span></div>

			<ol class="breadcrumb" style="width: auto; display: inline-block; margin-bottom: 0">
			  	<li class="active">Home</li>
			</ol>

			<div class="dropdown pull-right">
			  <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><?= Render("username") ?>
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
			    <li class="danger"><a href="#">Logout</a></li>
			  </ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Categories
				</div>
				<div class="panel-body">
					<?php $Render::CategoryList(); ?>
				</div>
			</div>	
		</div>
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					Latest Post
				</div>
				<div class="panel-body">
					<?php $Render::LatestPost(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script type="text/javascript" src="static/app.js"></script>
</html>
