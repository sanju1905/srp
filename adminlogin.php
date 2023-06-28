<?php 
session_start();
include 'links.php' ?>
<br>
<div class="container">
    <?php
    
    if(isset($_SESSION['status']) && $_SESSION['status'] != '')
    {
        echo '<h2 class= "bg-danger text-white">' .$_SESSION['status']. '</h2>' ;
        unset($_SESSION['status']);
    } 
    
    
    
    
    
    ?>
<form class="user" action="admincode.php" method="POST">
    <div class="form-group">
        <center><h1>Admin Login</h1></center>
            <input type="name" name="name" class="form-control form-control-user" placeholder="Enter the Name" required>
    </div>
    <div class="form-group">
            <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
    </div>
        
    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
    <hr>
</form>
</div>