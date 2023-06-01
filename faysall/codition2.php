<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      td{
        padding: 5px 10px;
      }
    </style>
</head>
<body>


<?php
$name = "Sami";
$correct = "green";
$error = "red";

if($name == "Sami"){
  ?>
  <h1 style="color:<?php echo  $correct ?>">Welcome <?php echo $name ?></h1>;
  <?php
  }
else {
    ?>
    <h1 style=" color :<?php echo $error ?>">Name Not Matched</h1>
    <?php
}


?>



</body>
</html>