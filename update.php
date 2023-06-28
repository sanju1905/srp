<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body bgcolor="purple">
    <div class="container bg-purple mt-6">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3><b>Update the Hospital Data</b><a href="srp.php"> <button class="btn btn-warning float-end">Back</button></a></h3>
                   
                </div>
                <div class="card-body">
                    <form action="updatecode.php" method="POST">
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email id :</label>
                            <input type="text" name="mail" class="form-control" placeholder="Enter the Email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Trearment for:</label>
                            <input type="text" name="treatment" class="form-control" placeholder="Treatment" required>
                        </div>
                        <div class="form-group">
                            <label for="">Name of the Hospital:</label>
                            <input type="text" name="hospital" class="form-control" placeholder="Name of the Hospital" required>
                        </div>
                        <div class="form-group">
                            <label for="">Address of the Hospital:</label>
                            <input type="text" name="address" class="form-control" placeholder="Address of the Hospital" required>
                        </div>
                        <div class="form-group">
                          
                            <button type="submit" name="update_data" class="btn btn-primary">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </
        <?php include 'footer.php' ?>
    </div>
    
</body>
</html>