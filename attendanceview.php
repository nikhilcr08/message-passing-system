<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div class="container">
<nav class="navbar navbar-default navbar-fixed-top">
	
        <div class="container">
		
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
				
                <a class="navbar-brand" href="home.php">Message Passing System</a>
            </div>
			 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
                <ul class="nav navbar-nav navbar-right">
				<BR><br>
				<span class="label label-primary">ATTENDENCE</span>
			

				
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
								 			</nav>
 <div class="row">
                <div class="col-lg-12">
                    
                    <div class="intro-text">
                        
                        
        
                    </div>
                </div>
            </div> 

 <header>
      <div class="container">
            <div class="row1">
                <div class="col-lg-12">
                 <form method="post" class="login">

</form>
   
              </div>
            </div>
        </div>
  </header> 

			
 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
	 </div>
                </div>
            </div>
        </div>
    
</body>

</html>

<?php
include('session.php');
   $connection = mysql_connect("localhost", "root", "");
   $db = mysql_select_db("mps", $connection);
        //$query = mysql_query("select * from login where pass='$password' AND uid='$username'", $connection);
        //$rows = mysql_num_rows($query);


		
				
		$query = mysql_query("select * from attendence where st_id='$login_session' order by sem", $connection);
 $rows = mysql_num_rows($query);

	
if($rows<1)	
{
		echo"<h6 align='center'>THERE IS NO RECORDS FOUND </h6>";
}	
else
{
echo"<table width=1000 border=2 cellspacing=0 cellpadding=0 align='center'>
	<tr>
	<th>SEMESTER </th>
	<th> JANUARY </th>
	<th>FEBRUARI </th>
	<th> MARCH </th>
	<th>APRIL </th>
	<th> MAY </th>
	<th>JUNE </th>
	<th> JULY </th>
	<th>AUGUST </th>
	<th>SEPTEMBER </th>
	<th>OCTOBER </th>
	<th>NOVEMBER</th>
	<th>DECCEMBER </th>
	<th>TOTAL </th>
	</tr><tr></tr>";
	
while($array = mysql_fetch_array($query))
{
	
	echo"<tr>";
	echo"<td>".$array['sem']."</td>";
	echo"<td>".$array['jan']."</td>";
	echo"<td>".$array['feb']."</td>";
	echo"<td>".$array['mar']."</td>";
	echo"<td>".$array['apr']."</td>";
	echo"<td>".$array['may']."</td>";
	echo"<td>".$array['jun']."</td>";
	echo"<td>".$array['jul']."</td>";
	echo"<td>".$array['aug']."</td>";
	echo"<td>".$array['sep']."</td>";
	echo"<td>".$array['oct']."</td>";
	echo"<td>".$array['nov']."</td>";
	echo"<td>".$array['dec']."</td>";
	echo"<td>".$array['total']."</td>";

	echo"</tr>";
	
}
}

    mysql_close($connection); // Closing Connection

?>
