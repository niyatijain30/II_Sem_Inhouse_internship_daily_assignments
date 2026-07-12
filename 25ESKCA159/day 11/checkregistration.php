<?php

include('dc_connect.php');

$error = "";

$name = "";
$email = "";
$password = "";
$confirmpassword = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = mysqli_real_escape_string($conn,$_POST["name"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $confirmpassword = mysqli_real_escape_string($conn,$_POST["confirmpassword"]);

    $check = mysqli_query($conn,
    "SELECT * FROM user WHERE email='$email'");

    if(mysqli_num_rows($check)>0){
    $error = "Email already exists.";
}
elseif ($name == "" || $email == "" || $password == "" || $confirmpassword == "") {
    $error = "All fields are required.";
}
elseif($password != $confirmpassword){
    $error = "Password does not match";
}
else{
    $insertQuery = "INSERT INTO user(name, email, password)
    VALUES('$name','$email','$password')";

    $result = mysqli_query($conn, $insertQuery);

    if($result){
        header("Location: success.php");
        exit();
    }
    else{
        echo "Error occurred while storing data";
    }
}
    
if($error != ""){
    echo $error;
}


    

?>