<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
    <h1>
        <?php echo "this is niyati jain" ?>

    </h1>
    <p>This is a paragraph.</p>
    <h2><?php echo "niyati jain" ?></h2>
    <?php
    $name="niyati jain";
    ?>
    <h3><?php echo $name; ?></h3> 
    <?php
    $student = ["niyati jain" , "nishit" , "nakul"];
   echo  $student[0];
     echo "<br>";
    echo  $student[1];
    echo "<br>";
    echo  $student[2];
    echo "<br>";
    ?>
     <!-- <?php
$name ="niyati jain";
$college ="skit jaipur";
$branch ="cse-ai";
?>
<h1> hello,<?= $name ?></h1>
<p> <?= $college ?> | <?= $branch ?></p>
<?php
date_default_timezone_set("Asia/Kolkata");

echo date("d-m-Y H:i:s");
?>  -->
    
</body>
</html>