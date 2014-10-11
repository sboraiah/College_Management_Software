<?php
	session_start();
	if(!isset($_SESSION["sess_user"])){
		header("location:login.php");
	}
	else
	{
		require 'core.inc.php';
		$sender=$_SESSION['sess_user'];
		?>
			

		<!DOCTYPE html>
		<html lang="en">
		<head>
		  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		   
			<meta name="viewport" content="width=device-width, initial-scale=1">
		   
		   

			<title>College Management System</title>

			<link href="bootstrap.css" rel="stylesheet">

		  </head>

		  <body style="">

			<!-- Static navbar -->
			<div class="navbar navbar-inverse navbar-static-top" role="navigation">
			  <div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="main.php">College Management System</a>
				</div>
				<div class="navbar-collapse collapse">
				  <ul class="nav navbar-nav">
					<li ><a href="main.php">Announcements</a></li>
					<li class="active"><a href="attendance.php">Attendance</a></li>
					<li><a href="timetable.php">Timetable</a></li>
					<li ><a href="calendar.php">Calendar</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="#">About</a></li>
					
					<li><a href="logout.php">Log Out</a></li>
				  </ul>
				</div>
			  </div>
			</div>


			<div class="container">

			 
			  <div class="jumbotron">
				<h2 style="margin-left:40%;">Attendance</h2>
			  </div>
			  <div id="timehead" style="margin-left:30%;">
				<h2>Enter attendance for Date </h2>

			</div> 
			<hr>
			<div id="attend" style="margin-left:35%;">
			  <input type="checkbox" style="display:inline;float:left;"><h3 style="margin-left:4%;">Test</h3>
			</input>
			</div>
			<button class="btn btn-lg btn-success" style="margin-left:40%;">Submit</button>
			  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		  View Status
		</button>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Attendance Status</h4>
			  </div>
			  <div class="modal-body">
			   <div>
				<h3>Name</h3>
				<h4>23%</h4>
			   </div>
			   <div>
				<h3>Name</h3>
				<h4>23%</h4>
			   </div>
			   <div>
				<h3>Name</h3>
				<h4>23%</h4>
			   </div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
			  </div>
			</div>
		  </div>
		</div>


		   
			<script src="jquery.js"></script>
			<script src="bootstrap.js"></script>
		  

		</body></html>
		
	<?php
	}
?>