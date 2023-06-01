<?php

include("query.php")

?>


<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
                    crossorigin="anonymous">
       
</head>

<body>
          <div class="container mt-4">
                    <form method="post" enctype="multipart/form-data">
                              <div class="form-group mb-3">
                                        <label for="">Product Name</label>
                                        <input type="text" name="p_name" id="" class="form-control" placeholder="">
                              </div>
                              <div class="form-group mb-3">
                                        <label for="">Product Price</label>
                                        <input type="text" name="p_price" id="" class="form-control" placeholder="">
                              </div>
                              <div class="form-group mb-3">
                                        <label for="">Product image</label>
                                        <input type="file" name="p_image" id="" class="form-control" placeholder="">
                              </div>
                              <div class="form-group mb-3">
                                        <label for="">Product image</label>
                              <select name="c_id" id="" class="form-control" > 
                              <option value="">Select Category</option>            
                              <?php

                              $query = $pdo->query("select * from category");
                              $result = $query->fetchAll(PDO::FETCH_ASSOC);
                              foreach($result as $data){
                                        ?>

                                        <option value="<?php echo $data['id']?>"><?php echo $data['id'] ?></option>
                                        <?php
                              }
                              ?>
                              </select>
                                     </div>
                              <button type="submit" class="btn btn-primary" name="add_product">Submit</button>

                    </form>
          </div>


</body>

</html>