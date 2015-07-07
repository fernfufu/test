  <?php
  putenv("NLS_LANG=AMERICAN_AMERICA.UTF8");
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname ="food";



  // Create connection
 
  $obj_con = mysql_connect($servername,$username,$password);
       mysql_select_db($dbname,$obj_con);
       mysql_query("SET NAMES UTF8");
  // mysql_query("SET character_set_results=utf8");
// mysql_query("SET character_set_client=tis620");
// mysql_query("SET character_set_connection=tis620");
  // Check connection



  $sql = "SELECT * FROM food ORDER BY `food`.`FoodID` ASC";
 $result = mysql_query($sql,$obj_con);
//$row = mysql_fetch_array($result);


  ?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Project</title>
  
  <!-- bootstap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- Optional theme -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

     <style>
        input::-webkit-input-placeholder
        {
            text-align: center;

        }
    </style>



</head>
<body > <!-- style="background-color:#18BC9C;" -->

<nav class="navbar  navbar-default "> <!-- navbar-inverse -->

  <div class="container-fluid">
    <!--leftชือซ้ายสุด-- <div class="container-fluid"> -->

    <div class="navbar-header" >
      <a class="navbar-brand" href="#">Project Name</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li ><a  href="#">Page 1 </a>
         
        </li><li> <a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span> <img src="cat.jpg" class="img-circle" alt="Cinque Terre" width="30" height="25"></span> fern</a> </li>
        <li ><a href="#"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
        
        <div  class="container" >
          <h2>Test Table </h2>
          <p>Table for look all data</p>            
          <table   class="table table-condensed  ,table table-striped ,table table-hover   " > <!-- , table table-bordered -->
            <thead>
              <tr >
                <th><big>ID</big></th>
                <th><big>FoodName</big><span class=" glyphicon glyphicon-triangle-bottom"></span> </th>
                <th><big>Air</big></th>
                <!-- <th>delete</th> -->
                
              </tr>
            </thead>
            <tbody>
              <?
              while($row = mysql_fetch_array($result)){ ?>
              <tr>
                <td> <?=$row['FoodID']?> </td>
                <td> <?=$row['FoodName']?> </td>
                <td> <?=$row['Air']?> </td>
                <td><span class=" glyphicon glyphicon-trash"></span></td>
              </tr>
            <? }
            ?>
             
            </tbody>
          </table>
        </div>
     
</body>
</html>



