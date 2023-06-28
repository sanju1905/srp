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
<?php  include 'navbar.php'?>
     
<!-- navbar ends -->
<!-- slider -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <center>
        <img src="d7.jpg"  width="800px" height="400px" alt="medico hands">
        </center>
      </div>
  
      <div class="item">
        <center>
        <img src="d8.jpg" width="800px" height="400px" alt="medico hands">
        </center>
      </div>
  
      <div class="item">
      <center>
        <img src="d9.jpg" width="800px"  height="400px" alt="medico hands">
        </center>
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><br>
<!-- slider ends -->

<!-- cards1 -->
<div class="card pt-5px" >
  <h1 class="card-header"> Heart Treatment</h1>
  <div class="card-body">
    <h5 class="card-title">Tata Memorial Hospitalt</h5>
    <p class="card-text">Dr.E Borges Road ,Parel,Mumbai</p>
    <p>#Offers free Treatment to over 70% Cancer Patients</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
<br>
<div class="card pt-5px" >
  <h1 class="card-header">  Cancer Treatment</h1>
  <div class="card-body">
    <h5 class="card-title">Adyar Cancer Institute</h5>
    <p>Gandhi Nagar, Adyar, Chennai</p>
           <p> # Free or discounted treatment to over 60% patients</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
<br>
<div class="card pt-5px" >
  <h1 class="card-header">  Eye Treatment</h1>
  <div class="card-body">
    <h5 class="card-title">Tata Memorial Hospitalt</h5>
    <p class="card-text">Dr.E Borges Road ,Parel,Mumbai</p>
    <p>#Offers free Treatment to over 70% Cancer Patients</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
  <!-- card ends-->


<?php  include 'about.php'?>





<!-- footer -->
<footer class="bg-light text-center text-lg-start">
    <?php  include 'footer.php'?>
  </footer>
<!-- footer ends -->
</div>
</body>
</html>