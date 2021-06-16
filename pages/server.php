<?php
$con=mysqli_connect('localhost','root','10012001','meeles');
if($con)
{
    echo"connection done";
}
else{
    echo"connection not done";
}
?>