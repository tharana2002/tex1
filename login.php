<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Databse connection here
    $con=new mysqli("localhost","root","","test1");
    if($con->connect_error){
        die("Faild to connect : ".$con->connect_error);
    } else {
        $stmt = $con->prepare("select * from user where username=?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows>0){
                $data=$stmt_result->fetch_assoc();
                if($username=="Admin123" && $password=="12345")
                {
                    
                    /* echo "<h2> Login Successfully</h2>"; */
                    //header("Location: product.html");
                    header("Location:admin-frame.html");
        exit(); 
                }
                else if($data['password'] === $password)
                {
                    header("Location: product.html");
                    //echo "<h2>Invalid username or password</h2>";
                }
                else{
                    echo "<h2>Invalid username or password</h2>"; 
                }
        }  else{
            echo "<h2>Invalid username or password</h2>";
        }
    }
        
    