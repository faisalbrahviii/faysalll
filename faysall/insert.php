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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <form method="post">
            <div class="form-group mb-3">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group mb-3">
                <label for="">E-mail</label>
                <input type="text" name="email" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group mb-3">
                <label for="">Salary</label>
                <input type="number" name="salary" id="" class="form-control" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $salary = $_POST['salary'];
        $query = $pdo->prepare("INSERT INTO faculty (name,email,salary) values (:name, :email ,:salary)");
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('salary', $salary);
        $query->execute();
       echo "inserted";
    }
    ?>

</body>

</html>