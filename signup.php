<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $contactnumber = $_POST['contactnumber'];

    $con=new mysqli("localhost","root","","test1");
    if($con->connect_error){
        die("Faild to connect : ".$con->connect_error);
    } else {
        $query="insert into user(username , password , Fullname , Contactnumber) values ('$username' , '$password' , '$fullname' , '$contactnumber')";

        mysqli_query($con, $query);
        /* echo "<script type= 'text/javascript'> alert('Successfully Register')</script>"; */
         
        // Redirect to login.html
        header("Location: signupSuccessful.html");
        exit(); 
    }
    

?>