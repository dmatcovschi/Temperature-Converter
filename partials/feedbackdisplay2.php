<!DOCTYPE html>
<html lang="en">

<html xmlns = "http://www.w3.org/1999/xhtml">

	<head>
		<!--Code for the Theme-->    	
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">

    	<title>Feedback</title>

    	<!-- Bootstrap Core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    	<!-- Fonts -->
    	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="css/animate.css" rel="stylesheet" />
    	<!-- Squad theme CSS -->
    	<link href="css/style.css" rel="stylesheet">
		<link href="color/default.css" rel="stylesheet">

	<style type = "text/css">
	body {
	font-family: tahoma, helvetica, arial, sans-serif;
	}
	table, tr, td {
	text-align: center;
	font-size: 13pt;
	border: 3px Solid ;
	border-color: #800000;
	padding: 5px;
	background-color: #f5f5f5;
	}
	th {
	text-align: center;
	color: #f5f5f5;
	font-size: 13pt;
	border: 3px Solid ;
	border-color: #800000;
	padding: 5px;
	background-color: #800000;
	}
	</style>
	</head>
    

	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Feedback</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		
	<!--PHP Feedback Form-->
	<body>
		<center>
		<table width="100%">
			
			<div class="wow bounceInDown" data-wow-delay="1.0s">
			<thead>
			<tr>
			<th style = "width: 100px;">Name</th>
			<th style = "width: 200px;">Feedback</th>
			<th style = "width: 50px;">Score</th>
			<th style = "width: 100px;">Product</th>
			</tr>
			</thead>
			</div>
			
		<tbody>
			<?php

			$name = $_POST['name'];
			$feedback = $_POST['feedback'];
			$score = $_POST['score'];
			$company = $_POST['product'];
			$user = $_POST['user'];
			$pwd = $_POST['pwd'];
			$clear= $_POST['clear'];
			
			//echo $name.":".$feedback.":".$score.":".$product.":".$user.":".$pwd;

			//connect to the database
			$connectionstring = odbc_connect("118w_lab", $user, $pwd);

			//clear feedback form
			if (isset($clear)){
				$Delete = "delete from t2_193";			
				$deleteResults = odbc_do($connectionstring, $Delete);
			}

			$Insert = "INSERT INTO t2_193 VALUES ('$name', '$product', '$feedback', '$score')";

			$results = odbc_do($connectionstring, $Insert);

			//SQL query
			$Query = "SELECT name, feedback, score, product FROM t2_193";

			//execute query
			$queryexe = odbc_do($connectionstring, $Query);

			//query database
			while(odbc_fetch_row($queryexe))
			{

			//collect results
			$name = odbc_result($queryexe, 1);
			$feedback = odbc_result($queryexe, 2);
			$score = odbc_result($queryexe, 3);
			$product = odbc_result($queryexe, 4);

			//format and display results
			print ("<tr>");
			print ("<td>$name</td>");
			print ("<td>$feedback</td>");
			print ("<td>$score</td>");
			print ("<td>$product</td>");
			print ("</tr>");
			}

			//disconnect from database
			odbc_close($connectionstring);
			?>
			</div>
		</center>
		</tbody>
		</table>
		
		<form action="" method="POST">
			<br><button name="clear" value="clear" class="btn btn-skin pull-right" id="btnContactUs">
					Clear Feedback</button>
		</form>
		
		<!-- Core JavaScript Files -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.min.js"></script>	
		<script src="js/jquery.scrollTo.js"></script>
		<script src="js/wow.min.js"></script>
		<!-- Custom Theme JavaScript -->
		<script src="js/customphp.js"></script>
		
	</body>

</html>
