<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <table border="2">
        <tbody>
            <?php
          $i = 1;
          while ($i <= 10) {
                ?>
                <tr>
                    <td>
                        <?php echo "3" ?>
                    </td>
                    <td>
                        <?php echo "x" ?>
                    </td>
                    <td>
                        <?php echo $i ?>
                    </td>
                    <td>
                        <?php echo "=" ?>
                    </td>
                    <td>
                        <?php echo $i * 3 ?>
                    </td>
                </tr>
                <?php
                $i++
                ?>
                <?php
                
            }
            ?>
        </tbody>
    </table>
</body>

</html>