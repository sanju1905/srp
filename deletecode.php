<?php 
include 'dbcon.php' ;
if(isset($_POST['delete_data']))
{
    $name=$_POST['name'] ;
    $mail=$_POST['mail'] ;
    $hospital=$_POST['hospital'] ;
    $address=$_POST['address'] ;

    $query =  "DELETE FROM hospital WHERE hospital='$hospital' ; ";
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {?>
        <script>
        alert("data Deleted Successfully") ;
        </script>
        <?php
        $_SESSION['status']="Deleted  SUCCESSFULLY" ;
        header("Location: fetchdata.php");
    }
    else{
        $_SESSION['status']="Not Deleted" ;
        header("Location: delete.php ")  ;
    }
}






?>