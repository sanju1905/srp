<?php

$connection= mysqli_connect("localhost","root","","security");



if(isset($_POST['login_btn']))
{
    $name = $_POST['name']; 
    $password = $_POST['password']; 

    $query = "SELECT * FROM admin WHERE name='name' AND password='$password' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_fetch_array($query_run))
    {
       $_SESSION['name']=$name;
       header('Location:fetchdata.php');
    }
    else{
        $_SESSION['status']='Name or Password is Invalid';
        header('Location:adminlogin.php');
    }

}
?>
<h1>ADMIN</h1>