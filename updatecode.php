<?php 
include 'dbcon.php' ;
if(isset($_POST['update_data']))
{
    $name=$_POST['name'] ;
    $mail=$_POST['mail'] ;
    $treatment=$_POST['treatment'];
    $hospital=$_POST['hospital'] ;
    $address=$_POST['address'] ;

    $query = " UPDATE hospital SET name='$name', email='$email', hospital='$hospital',treatment='$treatment' ,address='$address'WHERE name='$name' ";
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {?>
        <script>
        alert("data saved Successfully") ;
        </script>
        <?php
        $_SESSION['status']="UPDATED  SUCCESSFULLY" ;
        header("Location: fetchdata.php");
    }
    else{
        $_SESSION['status']="Data not Updated" ;
        header("Location: register.php ")  ;
    }
}






?>