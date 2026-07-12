<?php include 'header.php'; ?>
<?php

include 'dc_connect.php';

$errors = [];
$name = mysqli_real_escape_string($conn,$_POST['name']);
$branch = mysqli_real_escape_string($conn,$_POST['branch']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$phone = mysqli_real_escape_string($conn,$_POST['phone']);
$cgpa = mysqli_real_escape_string($conn,$_POST['cgpa']);

if(empty($name)){
    $errors[] = "Name is required.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "email is invalid";
}

if(!preg_match("/^[6-9][0-9]{9}$/",$phone)){
    echo "invalid phone number";
} 
if(empty($branch)){
    $errors[] = "Branch is required.";
}
if($cgpa < 0 || $cgpa > 10){
    $errors[] = "Invalid CGPA.";
}


if (empty($_POST['name'])) {
$errors[] = "Name is required.";
}
if (!filter_var($_POST['email'],
FILTER_VALIDATE_EMAIL)) {
$errors[] = "Invalid email address.";
}
if(count($errors) > 0){

    foreach($errors as $error){
        echo $error . "<br>";
    }

}





if (empty($errors)) {
    

    $sql = "INSERT INTO student (name, email, phone, branch, cgpa)
VALUES ('$name', '$email', '$phone', '$branch', '$cgpa')";
    

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

echo "<br><br>";

echo "Name : $name <br>";
echo "Branch : $branch <br>";
echo "Email : $email <br>";
echo "Phone : $phone <br>";
echo "CGPA : $cgpa <br>";

?>
<?php include 'footer.php'; ?>