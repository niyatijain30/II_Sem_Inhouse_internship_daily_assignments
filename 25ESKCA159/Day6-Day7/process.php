<!DOCTYPE html>
<html lang="en">
  if($_SERVER["REQUEST_METHOD"] != "POST"){
    die("Invalid Request");
}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Details</title>

    <style>
        body{
            background:white;
            color:black;
            transition:0.3s;
        }

        .dark{
            background:#121212;
            color:white;
        }

        .container{
            width:min(400px,90%);
            background:#2c3e50;
            border:1px solid #3498db;
            border-radius:15px;
            padding:25px 30px;
            margin:20px auto;
            box-shadow:0 10px 25px rgba(0,0,0,0.5);
        }

        h1,h2{
            color:white;
            text-align:center;
        }

        h3{
            color:white;
            text-align:left;
        }

        h4{
            color:wheat;
        }

        button{
            width:100%;
            padding:10px;
            background:#00bcd4;
            color:white;
            border:none;
            border-radius:8px;
            cursor:pointer;
            font-size:16px;
        }

        button:hover{
            background:#0097a7;
            transform:scale(1.05);
        }

        .footer{
            background:#4b464a;
            color:white;
            padding:20px;
            text-align:center;
        }

        #themeBtn{
            padding:10px 20px;
        }
    </style>
</head>

<body>

<div class="container">

<button id="themeBtn">🌙 Dark Mode</button>

<h1>

<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$college = trim($_POST['college']);
$branch = trim($_POST['branch']);
$mobile_number = trim($_POST['mobile_number']);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);
$gender = $_POST['gender'];
$course = $_POST['course'];
$address = trim($_POST['address']);

if(empty($name)){
    echo "Name is required";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid Email ID";
}
elseif(empty($college)){
    echo "College is required";
}
elseif(empty($branch)){
    echo "Branch is required";
}
elseif(!preg_match("/^[6-9][0-9]{9}$/",$mobile_number)){
    echo "Invalid Mobile Number";
}
elseif(strlen($password) < 8){
    echo "Password must be at least 8 characters long";
}
elseif($password != $confirm_password){
    echo "Passwords do not match";
}
elseif(empty($gender)){
    echo "Please select gender.";
}
elseif(empty($course)){
    echo "Please select course.";
}
elseif(empty($address)){
    echo "Please enter address.";
}
else{

    echo "🎉 Registration Successful!";
    echo "<hr>";

    echo "Name = " . $name;
    echo "<br>";

    echo "Email = " . $email;
    echo "<br>";

    echo "College = " . $college;
    echo "<br>";

    echo "Branch = " . $branch;
    echo "<br>";

    echo "Mobile Number = " . $mobile_number;
    echo "<br>";

    echo "Gender = " . $gender;
    echo "<br>";

    echo "Course = " . $course;
    echo "<br>";

    echo "Address = " . $address;
    echo "<br>";

    if(isset($_FILES['photo'])){
        echo "Photo = " . $_FILES['photo']['name'];
        echo "<br>";
    }

}
?>
<h4>
<?php
date_default_timezone_set("Asia/Kolkata");

echo "Registration Date : " . date("d-m-Y");
echo "<br>";
echo "Registration Time : " . date("h:i:s A");
?>
</h4>
<button onclick="window.print()">Print Details</button>

<br><br>

<a href="form.php">
    <button>Go Home</button>
</a>

</div>

<footer class="footer">
    © 2026 Registration Form
</footer>

<script>

const btn = document.getElementById("themeBtn");

if(localStorage.getItem("theme")==="dark"){
    document.body.classList.add("dark");
    btn.innerHTML="☀️ Light Mode";
}

btn.onclick=function(){

    document.body.classList.toggle("dark");

    if(document.body.classList.contains("dark")){
        localStorage.setItem("theme","dark");
        btn.innerHTML="☀️ Light Mode";
    }
    else{
        localStorage.setItem("theme","light");
        btn.innerHTML="🌙 Dark Mode";
    }

}

</script>

</body>
</html>