<?php

    echo $host = "localhost";
   echo $dbusername = "root";
    echo $dbpassword = "";
    echo $dbname = "project";
    // Create connection
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);


    $email=$_POST['email'];
    $pwd=$_POST['password'];


    $query= "SELECT `email`, `password` FROM `users` WHERE email='$email' && password='$pwd'  ";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

    if($total==1)
    {

        header('location:loginsucc.php');
    }
    else
    {
        echo "Congratulations, you are successfully logged in!";
    }
?>