<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vipanchika App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/search.js"></script>
  </head>
  <body id="page-top" >
     
     <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Aries</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="Result.php">Result</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

     <div class="jumbotron" align="center">
     <div class="centered-text">
        <h1>Select Event</h1>
            <p>
             <form class="subscribe_form" action="#" method="post">
              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Event..">
             
              
            </form>
          </div>
      <span>     
    
      <div style="display:inline-block; vertical-align: top; ">
      <h3>Group Events</h3>
      <ul id="myUL" Name="list" >
      <?php
        $con = new mysqli("localhost","my_user","my_password",'events');
        $result = $con->query("SELECT * FROM eventlist ORDER BY Ename");
        global $output;
        while($row =  $result->fetch_assoc()){
             echo '<li> <a href="points.php?T=G&PID='.$row["Eid"].'" >'.$row["Ename"].'</a></li>';       
              }
        
        ?>
     </div>
     <div style="display:inline-block; vertical-align: top; ">
      <h3>Single Events</h3>
      <ul id="myUL" Name="list" >
        <?php
          $result = $con->query("SELECT * FROM sevent ORDER BY Sname");
          global $output;
          while($row =  $result->fetch_assoc()){
               echo '<li> <a href="points.php?T=S&PID='.$row["Sid"].'" >'.$row["SName"].'</a></li>';       
                }
          
          ?>
      
       
       </div>
       </span>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>

  </body>
</html>

