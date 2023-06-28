<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="sanju.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    
    /* Float four columns side by side */
    .column {
      float: left;
      width: 25%;
      padding: 0 10px;
    }
    
    /* Remove extra left and right margins, due to padding */
    .row {margin: 0 -5px;}
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Responsive columns */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
      }
    }
    
    /* Style the counter cards */
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 16px;
      text-align: center;
      background-color: #f1f1f1;
    }
    </style>
<body bgcolor="purple">
  <div class="container bg-purple">
    <center><p style="font-size: 50px ; color:#fff; background-color:purple"><a class="navbar-brand" href="#"></a><i><i class="fa fa-heartbeat" ></i><b>MEDICO HANDS</b></i></p></center>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- navbar  -->
<?php  include 'navbarfordata.php'?>
     
<!-- navbar ends -->
<?php include 'dbcon.php' ;
$query="SELECT * from hospital";
$query_run=mysqli_query($con,$query);
$check_data=mysqli_num_rows($query_run) > 0;
if($check_data)
{
   while($row =mysqli_fetch_array($query_run))
   {
       ?>
      <!-- cards1 -->
              <div class="card pt-5px" >
                  <h1 class="card-header"><center><?php  echo $row['treatment']; ?></center></h1>
                     <div class="card-body">
                        <h4 class="card-title"><?php echo $row['hospital'] ?></h4>
                           <h5class="card-text"><?php echo $row['address'] ?></h5>
                             
                     </div>
               </div>
               <br>
  <!-- card ends-->

           <?php
      
   }
}
else{
    echo "no Record Found";
}



?>










<!-- footer -->
<footer class="bg-light text-center text-lg-start">
    <?php  include 'footer.php'?>
  </footer>
<!-- footer ends -->
</div>
</body>
</html>