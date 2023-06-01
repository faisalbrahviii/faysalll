<?php
include "connection.php"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = $pdo->prepare("delete from faculty where f_id = :id");
        $query->bindParam("id",$id);
        $query->execute();
        echo "data deleted successfully";

    }
    
    ?>
</body>
</html>