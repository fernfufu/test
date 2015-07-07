<?
session_start();
putenv("NLS_LANG=AMERICAN_AMERICA.UTF8");
if($_SESSION["login"]){
    echo "<script> alert('login'); </script>";
    echo "<script>window.location='login.php'</script>";
    ini_set('display_errors', '0');
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage AD Self Service </title>
	
	<!-- bootstap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">



      
          <script type="text/javascript" src="libraries/jquery-1.11.1.min.js"></script> 
         <script type="text/javascript" src="libraries/jquery.mobile-1.4.5.min.js"></script> 
 
        <link rel="stylesheet" type="text/css" href="libraries/jquery.mobile-1.4.5.min.css" /> 
        <link rel="stylesheet" type="text/css" href="libraries/custom.css" /> 
        

        <!--UI -->
        
         <link rel="stylesheet" type="text/css" href="libraries/uiDate/jquery-ui.css" />  
          <script type="text/javascript" src="libraries/uiDate/jquery-ui.js"></script>

     <style>
        input::-webkit-input-placeholder
        {
            text-align: center;

        }

        .navbar-brand {
         float:none;
}
    </style>



</head>
<body id="page-top" class="index">
	<nav class="navbar navbar-default navbar-fixed-top">

	
	<div class = 'container'>
		     <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >My Project</a>
            </div>

	

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
</div>
	</nav>
	   <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <img class="img-responsive" src="img/profile.png" alt=""> -->
                    <div class="intro-text">
                        <span  class="name">Project</span>
                        <hr class="star-light">
                        <div data-role="content" data-inset="true" data-theme="d">
                
                    <a  href="#popup" data-role="button"   text-align="center" data-transition="pop">
                        <img src="image/icon/unlocked.png" style ="width:15px;height:15px;">
                       <font color="white"> Unlock Account</font></a>

                        <button>Unlock</button>
                        
                    <a href="#popup2" data-role="button" data-theme="a"  align="center" data-transition="pop">
                        <img src="image/icon/reset.png" style ="width:15px;height:15px;">
                        Reset Password</a>
                        </li> 
                    <!-- <li><a href="#popup" data-role="button" data-theme="a" data-rel="dialog" data-transition="pop">ปลดล็อกไอดี</a></li> -->
                    <a href="#popup3" data-role="button" data-theme="a" >
                        <img src="image/icon/change2.png" style ="width:15px;height:15px;">
                        Change Password</a></li>
                    <!-- <a href="libraries/session_destroy.php" data-role="button" data-theme="a" data-rel="dialog"  data-ajax="false" >
                        <center>BOOOM</center></a> -->
            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>
</html>