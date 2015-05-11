<style type = "text/css">
body {
font-family: tahoma, helvetica, arial, sans-serif;
}
table, tr, td, th {
text-align: center;
font-size: .9em;
border: 3px groove;
padding: 5px;
background-color: #dddddd;
}
</style>
</head>

<body>
<p style = "font-size: 2em;">Feedback List</p>

<table>
<thead>
<tr>
<th style = "width: 100px;">Name</th>
<th style = "width: 200px;">Feedback</th>
<th style = "width: 50px;">Score</th>
<th style = "width: 100px;">Company</th>
</tr>
</thead>

<tbody>


<?php

$name = $_POST['name'];
$feedback = $_POST['feedback'];
$score = $_POST['score'];
$company = $_POST['company'];
$user = $_POST['user'];
$pwd = $_POST['pwd'];

//echo $name.":".$feedback.":".$score.":".$product.":".$user.":".$pwd;

//connect to the database
$connectionstring = odbc_connect("118w_lab", $user, $pwd);

//delete
$DeleteQuery = "Delete FROM t2_193";
//execute query
$Deletequeryexe = odbc_do($connectionstring, $DeleteQuery);


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
$company = odbc_result($queryexe, 4);

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

</tbody>
</table>
</body>
