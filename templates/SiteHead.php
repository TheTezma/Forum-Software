<!DOCTYPE html>
<html>
<head>
	<title>Forum</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/Forum-Software/static/style.css">
</head>
<body>
<?php
$Render = new Render;
$Render::AdminBar($_SESSION['user']['permission'], "../");
?>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="site-title"><span>Forum Name</span></div>

			<ol class="breadcrumb" style="width: auto; display: inline-block; margin-bottom: 0">
			  	<li class="active">Home</li>
			  	<?= "<li></li>" ?>
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