<?php
    $con = mysqli_connect("localhost","root","","stories");
    if(!$con){
        die(mysqli_error($con));
    }
?>