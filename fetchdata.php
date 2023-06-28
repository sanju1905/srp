
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>PHP CRUD - Funda of Web IT</title>
    
</head>
<body>
    <div class="container pt-5px">

        <div class="jumbotron">

            <div class="row">
                <div class="col-md-6">
                    <h2>Hospital Data  </h2>
                </div>
                <div class="col-md-6">
                    <a href="srp.php" class="btn btn-secondary" style="margin-left: 80%;">HOME </a>    
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <?php
                $con= mysqli_connect("localhost","root","","sample");
             

                $query = "SELECT * FROM hospital";
                $query_run = mysqli_query($con, $query);
            ?>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered" style="background-color: white;">
                        <thead class="table-dark">
                            <tr>
                                
                                <th>  Name </th>
                                <th> Email</th>
                                <th>Treatment </th>
                                <th>Hospital</th>
                                <th> Address </th>
                                <th>Add Data</th>
                                <th>Update Data</th>
                                <th>Delete Data</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                                
                        <?php
                        if($query_run)
                        {
                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                                    <tr>
                                      
                                        <th> <?php echo $row['name']; ?> </th>
                                        <th> <?php echo $row['email']; ?> </th>
                                        <th> <?php echo $row['treatment']; ?> </th>
                                        <th> <?php echo $row['hospital']; ?> </th>
                                        <th> <?php echo $row['address']; ?> </th>
                                        <th><a href="register.php" class="btn btn-success"> ADD   </a> </th>         
                                        <th><a href="update.php" class="btn btn-primary" > UPDATE </a> </th>
                                        <th><a href="delete.php" class="btn btn-danger" > DELETE </a> </th>
                                       
                                        
                                      
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>    
                                        <th colspan="6"> No Record Found </th>
                                    </th>
                                <?php
                            }
                        ?>
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
       
        </div>
      

        <?php include 'footer.php' ?>  
    </div>
   
</body>
</html>