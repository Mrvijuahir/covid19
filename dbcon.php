<?php

$server='remotemysql.com';
$username='YoAXC5DS0b';
$password='rH3aiL8I7M';
$db='YoAXC5DS0b';

$con=mysqli_connect($server,$username,$password,$db);
if($con){
    ?>
    <script>
    alert("Connection Successful");
    </script>
    <?php
}else
{
    ?>
    <script>
    alert("Connection Failed");
    </script>
    <?php
}

?>