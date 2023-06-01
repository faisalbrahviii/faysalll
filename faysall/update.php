<?php
include("connection.php")

          ?>

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                    crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                    crossorigin="anonymous"></script>
</head>

<body>

          <?php
          if (isset($_GET['id'])) {
                    $emp_id = $_GET['id'];
                    $query = $pdo->prepare("select * from faculty  where f_id = :e_id");
                    $query->bindParam('e_id', $emp_id);
                    $query->execute();
                    $data = $query->fetch(PDO::FETCH_ASSOC);
          }

          ?>

          <div class="container mt-4">
                    <form action="" method="post">
                             
                              <div class="form-group mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="e_name" id="" value="<?php echo $data['name'] ?>"
                                                  class="form-control" placeholder="">
                              </div>
                              <div class="form-group mb-3">
                                        <label for="">Email</label>
                                        <input type="text" name="e_email" id="" value="<?php echo $data['email'] ?>"
                                                  class="form-control" placeholder="">
                              </div>
                              <div class="form-group mb-3">
                                        <label for="">Salary</label>
                                        <input type="number" name="e_salary" id="" value="<?php echo $data['salary'] ?>"
                                                  class="form-control" placeholder="">
                              </div>


                              <button type="submit" class="btn btn-primary" name="update">update</button>
                    </form>
          </div>

          <?php
          if (isset($_POST['update'])) {
                    // $id = $_POST['e_id'];
                    $name = $_POST['e_name'];
                    $email = $_POST['e_email'];
                    $salary = $_POST['e_salary'];
                    $query = $pdo->prepare("update faculty set name = :name ,email = :email ,salary=:salary where f_id = :e_id");
                    $query->bindParam('e_id', $emp_id);
                    $query->bindParam('name', $name);
                    $query->bindParam('email', $email);
                    $query->bindParam('salary', $salary);
                    $query->execute ();
                    echo "data successfully inserted";
          }
          ?>
</body> 

</html>