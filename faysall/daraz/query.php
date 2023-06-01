<?php

include("connection.php");

if(isset($_POST['add_product'])){

          $p_name = $_POST['p_name'];
          $p_price = $_POST['p_price'];
          $c_id = $_POST['c_id'];
          $p_img = $_FILES['p_image'] ['name'];
          $p_img_size = $_FILES['p_image'] ['size'];
          $p_img_tmp_name = $_FILES['p_image'] ['tmp_name'];
          $p_img_extension = pathinfo($p_img,PATHINFO_EXTENSION);
          $destination = "image/".$p_img;

          if ($p_img_size <= 48000000) {
                    if($p_img_extension == "jpg" || $p_img_extension == "jpg" || $p_img_extension == "jpeg"){
                                        if(move_uploaded_file($p_img_tmp_name,$destination)){
                                                  $query = $pdo->prepare("insert into product(p_name, p_price, c_id, p_image) values (:name, :price, :c_id, :image)");
                                                  $query->bindParam("name", $p_name);
                                                  $query->bindParam("price", $p_price);
                                                  $query->bindParam("c_id", $c_id);
                                                  $query->bindParam("image", $p_img);
                                                  $query->execute();
                                                  echo "<script>alert('Product added successfully')</script>";


                                        }
                    }
                    else{
                              echo "<script>alert('not valid extension')
                              location.assign('insert.php');
                              </script>";
                    }
          }
          else{
                    echo "file size is greater";
          }

}

?>