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
      tr{
        padding: 5px 10px;
      }
    </style>
</head>
<body>
    

<table border=1>

  <tbody>

    
       <?php
       $row = 8;
       $col = 2;
   for ($i = 1; $i <= $col ; $i++){ 
  
            echo "<td>".$i."</td>"
            ?>
          <?php
   }
           for ($e = 1; $e <= $row ; $e++){ 
            ?>
            <tr>
              <?php  
              echo "<tr>".$e
              ."</tr>"
              ?>
              </tr>
          
            <?php

          
        }

         
      ?>

  </tbody>
</table>















</body>
</html>