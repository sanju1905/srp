<?php 
include 'dbcon.php' ;
if(isset($_POST['save_data']))
{
    $name=$_POST['name'] ;
    $mail=$_POST['mail'] ;
    $treatment=$_POST['treatment'];
    $hospital=$_POST['hospital'] ;
    $address=$_POST['address'] ;

    $query="INSERT INTO hospital (name,email,treatment,hospital,address) VALUES ('$name','$mail','$treatment','$hospital','$address')" ;
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {?>
        <script>
        alert("data saved Successfully") ;
        </script>
        <?php
        $_SESSION['status']="INSERTED SUCCESSFULLY" ;
        header("Location: fetchdata.php");
    }
    else{
        $_SESSION['status']="Data not Inserted" ;
        header("Location: register.php ")  ;
    }
}






?>