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
    
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>
    <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>#FOTS</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active">
				<li>
					<!-- Presents the current date and time in navbar -->
					<a href = "#date">
						<script type="text/javascript">
							tday=new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
							tmonth=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

							function GetClock(){
							var d=new Date();
							var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear(),nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

								 if(nhour==0){ap=" AM";nhour=12;}
							else if(nhour<12){ap=" AM";}
							else if(nhour==12){ap=" PM";}
							else if(nhour>12){ap=" PM";nhour-=12;}

							if(nyear<1000) nyear+=1900;
							if(nmin<=9) nmin="0"+nmin;
							if(nsec<=9) nsec="0"+nsec;

							document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
							}

							window.onload=function(){
							GetClock();
							setInterval(GetClock,1000);
							}
						</script>
						<div id="clockbox"></div>
					</a>
					<!-- /.script -->
				</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

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
			<th style = "width: 100px;">Company</th>
			</tr>
			</thead>
			</div>
			
		<tbody>
			<?php

			$name = $_POST['name'];
			$feedback = $_POST['feedback'];
			$score = $_POST['score'];
			$company = $_POST['company'];
			$user = $_POST['user'];
			$pwd = $_POST['pwd'];
			$clear= $_POST['clear'];
			
			//echo $name.":".$feedback.":".$score.":".$company.":".$user.":".$pwd;

			//connect to the database
			$connectionstring = odbc_connect("118w_lab", $user, $pwd);

			//clear feedback form
			if (isset($clear)){
				$Delete = "delete from t2_193";			
				$deleteResults = odbc_do($connectionstring, $Delete);
			}

			$Insert = "INSERT INTO t2_193 VALUES ('$name', '$company', '$feedback', '$score')";

			$results = odbc_do($connectionstring, $Insert);

			//SQL query
			$Query = "SELECT name, feedback, score, company FROM t2_193";

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
			print ("<td>$company</td>");
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
