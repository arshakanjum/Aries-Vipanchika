<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vipanchika App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
 //   <script type="text/javascript" src="js/Calculate.js"></script>
        <script type="text/javascript" src="js/search.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>

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
     <?php
     $T=$_GET['T'];
     $PID = (int)$_GET['PID'];
        $con = new mysqli("localhost","my_user","my_password",'events');
        if ($T=='G')
        {
        $result = $con->query("SELECT * FROM eventlist WHERE Eid=$PID");
        global $output;
        $row =  $result->fetch_assoc();
        echo '<h1>'.$row["Ename"].'</h1>';
        if($row["P1"]==NULL){             
        ?>

          <h2>Slot 1</h2>
            <h3>Enter Result</h3>
            <div id="c11" class="radio">
              <label><input type="radio" name="opt11radio" value=10>First</label>
         
              <label><input type="radio" name="opt11radio" value=6>Second</label>
        
              <label><input type="radio" name="opt11radio" value=2>Third</label>
            </div>
          
           <h3>Enter Grade</h3>  
           <div id="c12" class="radio">
              <label><input type="radio" name="opt12radio" value=5>A</label>
         
              <label><input type="radio" name="opt12radio" value=4>B</label>
        
              <label><input type="radio" name="opt12radio" value=3>C</label>

              <label><input type="radio" name="opt12radio" value=2>D</label>


              <label><input type="radio" name="opt12radio" value=1s>E</label>

               <label><input type="radio" name="opt12radio" value=0>DQ</label>
            </div>
            <div id="submit">

              <button onclick="myFunction1(<?php echo $PID?>,1,0)" type="button" class="btn btn-success">Submit</button>
            </div>
            <?php }
            else
            {
              echo '<h3> Slot 1 Points : '.$row['P1'].'<button type="button" onclick="cl('.$PID.',1,0)" class="btn btn-link">Edit</button><h3>';
              echo '</div>';
              }
            if($row["P2"]==NULL){
            ?>

             <h2>Slot 2</h2>
            <h3>Enter Result</h3>
            <div id="c21" class="radio">
              <label><input type="radio" name="opt21radio" value=10>First</label>
         
              <label><input type="radio" name="opt21radio" value=6>Second</label>
        
              <label><input type="radio" name="opt21radio" value=2>Third</label>
            </div>
        <h3>Enter Grade</h3>  
           <div id="c22" class="radio">
              <label><input type="radio" name="opt22radio" value=5>A</label>
         
              <label><input type="radio" name="opt22radio" value=4>B</label>
        
              <label><input type="radio" name="opt22radio" value=3>C</label>

              <label><input type="radio" name="opt22radio" value=2>D</label>

               <label><input type="radio" name="opt22radio" value=1>E</label>

               <label><input type="radio" name="opt22radio" value=0>DQ</label>
            </div>
            <div id="submit">

              <button onclick="myFunction2(<?php echo $PID ?>,2,0)" type="button" class="btn btn-success">Submit</button>
            </div>
           <?php }
            else
            {
              echo '<div >';
              echo '<h3> Slot 2 Points : '.$row['P2'].'<button onclick="cl('.$PID.',2,0)" type="button" class="btn btn-link">Edit</button><h3>';
           //echo '<button class="link" type="button" class="btn btn-link">Edit</button>';
           echo '</div>';
             }
           }
           else 
           {
            $result = $con->query("SELECT * FROM sevent WHERE Sid=$PID");
        global $output;
        $row =  $result->fetch_assoc();
        echo '<h1>'.$row["SName"].'</h1>';
        if($row["P1"]==NULL){             
        ?>

          <h2>Slot 1</h2>
            <h3>Enter Result</h3>
            <div id="c11" class="radio">
              <label><input type="radio" name="opt11radio" value=5>First</label>
         
              <label><input type="radio" name="opt11radio" value=3>Second</label>
       
              <label><input type="radio" name="opt11radio" value=1>Third</label>
            </div>
          
           <h3>Enter Grade</h3>  
           <div id="c12" class="radio">
              <label><input type="radio" name="opt12radio" value=5>A</label>
         
              <label><input type="radio" name="opt12radio" value=4>B</label>
        
              <label><input type="radio" name="opt12radio" value=3>C</label>

              <label><input type="radio" name="opt12radio" value=2>D</label>
              <label><input type="radio" name="opt12radio" value=1>E</label>
               <label><input type="radio" name="opt12radio" value=0>DQ</label>
            </div>
            <div id="submit">

              <button onclick="myFunction1(<?php echo $PID ?>,1,1)" type="button" class="btn btn-success">Submit</button>
            </div>
            <?php }
            else
            {
              echo '<h3> Slot 1 Points : '.$row['P1'].'<button type="button" onclick="cl('.$PID.',1,1)" class="btn btn-link">Edit</button><h3>';
              echo '</div>';
              }
            if($row["P2"]==-1)
            {}

            else if($row["P2"]==NULL){
            ?>

             <h2>Slot 2</h2>
            <h3>Enter Result</h3>
            <div id="c21" class="radio">
              <label><input type="radio" name="opt21radio" value=5>First</label>
         
              <label><input type="radio" name="opt21radio" value=3>Second</label>
        
              <label><input type="radio" name="opt21radio" value=1>Third</label>
            </div>
        <h3>Enter Grade</h3>  
           <div id="c22" class="radio">
              <label><input type="radio" name="opt22radio" value=5>A</label>
         
              <label><input type="radio" name="opt22radio" value=4>B</label>
        
              <label><input type="radio" name="opt22radio" value=3>C</label>

              <label><input type="radio" name="opt22radio" value=2>D</label>

               <label><input type="radio" name="opt22radio" value=1>E</label>

               <label><input type="radio" name="opt22radio" value=0>DQ</label>
            </div>
            <div id="submit">

              <button onclick="myFunction2(<?php echo $PID ?>,2,1)" type="button" class="btn btn-success">Submit</button>
            </div>
           <?php }
            else
            {
              echo '<div >';
              echo '<h3> Slot 2 Points : '.$row['P2'].'<button onclick="cl('.$PID.',2,1)" type="button" class="btn btn-link">Edit</button><h3>';
           //echo '<button class="link" type="button" class="btn btn-link">Edit</button>';
           echo '</div>';
             }

              if($row["P3"]==NULL){
            ?>

             <h2>Slot 3</h2>
            <h3>Enter Result</h3>
            <div id="c31" class="radio">
              <label><input type="radio" name="opt31radio" value=5>First</label>
         
              <label><input type="radio" name="opt31radio" value=3>Second</label>
        
              <label><input type="radio" name="opt31radio" value=1>Third</label>
            </div>
        <h3>Enter Grade</h3>  
           <div id="c32" class="radio">
              <label><input type="radio" name="opt32radio" value=5>A</label>
         
              <label><input type="radio" name="opt32radio" value=4>B</label>
        
              <label><input type="radio" name="opt32radio" value=3>C</label>

              <label><input type="radio" name="opt32radio" value=2>D</label>

              <label><input type="radio" name="opt32radio" value=1>E</label>

               <label><input type="radio" name="opt32radio" value=0>DQ</label>
            </div>
            <div id="submit">

              <button onclick="myFunction3(<?php echo $PID ?>,3,1)" type="button" class="btn btn-success">Submit</button>
            </div>
          
           <?php }
            else if($row["P2"]!=-1)
            {
              echo '<div >';
              echo '<h3> Slot 3 Points : '.$row['P3'].'<button onclick="cl('.$PID.',3,1)" type="button" class="btn btn-link">Edit</button><h3>';
           //echo '<button class="link" type="button" class="btn btn-link">Edit</button>';
           echo '</div>';
             }
           }
            ?>

           


    <script>
    var ch11 = document.getElementsByName('opt11radio');
    var point11, Total1;
    for (var i = ch11.length; i--;) {
        ch11[i].onchange = function() {
          point11=this.value;

        }
    }
      var ch12 = document.getElementsByName('opt12radio');
    var point12;
    for (var i = ch12.length; i--;) {
        ch12[i].onchange = function() {
          point12=this.value;
          
        }
    }

    var ch21 = document.getElementsByName('opt21radio');
    var point21, Total2;
    for (var i = ch21.length; i--;) {
        ch21[i].onchange = function() {
          point21=this.value;

        }
    }
      var ch22 = document.getElementsByName('opt22radio');
    var point22;
    for (var i = ch22.length; i--;) {
        ch22[i].onchange = function() {
          point22=this.value;
          
        }
    }

    var ch31 = document.getElementsByName('opt31radio');
    var point31, Total3;
    for (var i = ch31.length; i--;) {
        ch31[i].onchange = function() {
          point31=this.value;
        
        }
    }
      var ch32 = document.getElementsByName('opt32radio');
    var point32;
    for (var i = ch32.length; i--;) {
        ch32[i].onchange = function() {
          point32=this.value;
          
        }
    }

    var ch41 = document.getElementsByName('opt41radio');
    var point41, Total4;

    for (var i = ch41.length; i--;) {
        ch41[i].onchange = function() {
          point41=this.value;
    
        }
    }
      var ch42 = document.getElementsByName('opt42radio');
    var point42;
    for (var i = ch42.length; i--;) {
        ch42[i].onchange = function() {
          point42=this.value;
        
        }
    }

    var ch51 = document.getElementsByName('opt51radio');
    var point51, Total5;
    for (var i = ch51.length; i--;) {
        ch51[i].onchange = function() {
          point51=this.value;

        }
    }
      var ch52 = document.getElementsByName('opt52radio');
    var point52;
    for (var i = ch52.length; i--;) {
        ch52[i].onchange = function() {
          point52=this.value;
          
        }
    }

      function myFunction1(pid,S,T){
        
           if(point12!=0)
           {

           var Total1 = parseInt(point11)+parseInt(point12);
            }
            else 
            Total1=0; 
         
              
          console.log(T)
          console.log(S)
              console.log(Total1)
          console.log(pid)
             $.ajax({ url: 'aj.php',
             data: {  'T' : T,
                      'Slot':S,
                      'total' : Total1,
                      'Eid' : pid},
             type: 'post',
             dataType:'json'
            });
             location.reload();
             location.reload();
      
      }
      
      function myFunction2(pid,S,T){
            if(point22!=0)
           {
           var Total2 = parseInt(point21)+parseInt(point22);
            }
            else 
            Total2=0; 
             $.ajax({ url: 'ajax1.php',
             data: {'T' : T,
                      'Slot':S,
                      'total' : Total2,
                      'Eid' : pid},
             type: 'post',
             dataType:'json'
            });
             location.reload();
      
      }
     function myFunction3(pid,S,T){
            console.log("function 3")
            if(point32!=0)
           {
           var Total3 = parseInt(point31)+parseInt(point32);
            }
            else 
            Total3=0; 
        
             $.ajax({ url: 'ajax1.php',
             data: {'T' : T,
                      'Slot':S,
                      'total' : Total3,
                      'Eid' : pid},
             type: 'post',
             dataType:'json'
            });
             location.reload();
      
      }
      function myFunction4(pid,S,T){
            if(point42!=0)
           {
           var Total4 = parseInt(point41)+parseInt(point42);
            }
            else 
            Total4=0; 

             $.ajax({ url: 'ajax1.php',
             data: {'T' : T,
                      'Slot':S,
                      'total' : Total4,
                      'Eid' : pid},
             type: 'post',
             dataType:'json'
            });
             location.reload();
      
      }
      function myFunction5(pid,S,T){
            if(point52!=0)
           {
           var Total5 = parseInt(point51)+parseInt(point52);
            }
            else 
            Total5=0; 
             $.ajax({ url: 'ajax1.php',
             data: {'T' : T,
                      'Slot':S,
                      'total' : Total5,
                      'Eid' : pid},
             type: 'post',
             dataType:'json'
            });
             location.reload();
      
      }


      function cl(pid,x,T)
      {
        
        $.ajax({ url: 'clear.php',
             data: {'x' : x,
                    'Eid' : pid,
                    'T' : T},
             type: 'post',
             dataType:'json',
            });
             location.reload();
             location.reload(); 
          }
           
      
    </script>

   
  </body>
</html>


