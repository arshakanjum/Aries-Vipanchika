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
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
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
        <h1>Results</h1>
            <p>
             <form class="subscribe_form" action="#" method="post">
              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Event..">
             
              
            </form>
          </div>
          <div>
          <h2>Total Points : 
          <?php
            $con = new mysqli("localhost","my_user","my_password",'events');
           $result = $con->query("SELECT sum(P1)+sum(P2) as total1 FROM eventlist");
           $result2 = $con->query("SELECT sum(COALESCE(P1,0))+sum(COALESCE(P2,0))+sum(COALESCE(P3,0))+sum(COALESCE(P4,0))+sum(COALESCE(P5,0)) as total2 FROM sevent");
           $row =  $result->fetch_assoc();
           $row2= $result2->fetch_assoc();
           echo intval($row["total1"])+intval($row2["total2"]);
        ?>
        </h2>
        </div>
        <ul class="list-group">
        <?php
        $result1 = $con->query("SELECT * FROM eventlist WHERE P1 IS NOT NULL OR P2 IS NOT NULL ORDER BY (P1+P2) DESC");
        $result2 = $con->query("SELECT * FROM sevent WHERE P1 IS NOT NULL OR P2 IS NOT NULL OR P3 IS NOT NULL OR P4 IS NOT NULL OR P5 IS NOT NULL ORDER BY (P1+P2+P3+P4+P5) DESC");
        global $output;
        while($row =  $result1->fetch_assoc()){
             echo '<a href = "points.php?T=G&PID='.$row["Eid"].'" class = "list-group-item">
                  <h4 class = "list-group-item-heading">
                     '.$row["Ename"].'
                  </h4>
                  <p class = "list-group-item-text" style="font-size:15px">';
                  if ($row["P1"]!="")
                   echo 'First Slot : '.$row["P1"];
                  if($row["P2"]!="")
                   echo ' | Second Slot : '.$row["P2"];
                 echo '</p>
               </a>';       
              }

        while($row =  $result2->fetch_assoc()){
       echo '<a href = "points.php?T=S&PID='.$row["Sid"].'" class = "list-group-item">
            <h4 class = "list-group-item-heading">
               '.$row["SName"].'
            </h4>
            <p class = "list-group-item-text" style="font-size:15px">';
            if ($row["P1"]!="")
               echo ' First Slot : '.$row["P1"];
            if($row["P2"]!="")
             echo ' | Second Slot : '.$row["P2"];
           if ($row["P3"]!="")
             echo ' | Third Slot : '.$row["P3"];
            if($row["P4"]!="")
             echo ' | Fourth Slot : '.$row["P4"];
           if ($row["P5"]!="")
             echo ' | Fifth Slot : '.$row["P5"];
                  
              
            echo '</p>
         </a>';       
        }
        
        ?>
        </ul>
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    


  </body>
</html>

