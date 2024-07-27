<?php
include '../Html/header.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../Css/Lab1.css">
    <link rel="stylesheet" href="../Css/lab1_add_first.css">
    <title>lab</title>
</head>

<body>
    <div class="page_body">
        <span id="heading">Lab1</span>
        <hr>
        <!-- add new item -->
        <div class="form_section">
            <div class="form_center">
                <p id="close">
                    <i class="fa-regular fa-circle-xmark"></i>

                </p>
                <form id="add_form">
                    <div class="form-group">

                        <input type="text" placeholder="Company Name" id="box1">

                    </div>
                    <div class="form-group">

                        <input type="text" placeholder="Model Name" id="box2">

                    </div>
                    <div class="form-group">

                        <input type="date" placeholder="Purchase Date" id="box3">

                    </div>
                    <div class="form-group">

                        <input type="text" placeholder="Warrenty Period" id="box4">

                    </div>
                    <button type="submit" class="form-group" id="Add_btn">ADD</button>
                </form>
            </div>

        </div>
        <div class="table_section">
            <table>
                <tr >
                    <th>Product </th>
                    <th>Quantity</th>
                    <th>Products need to be fixed</th>
                    <th>ACTION</th>
                </tr>
                <tr class="hov" data-href="./lab1_pro_1.php">
                    <td><img src="../Img/1.jpg" alt=""></td>
                    <td>100</td>
                    <td>37</td>
                    <td><a href="#" onclick="addClick()"><i class="fa fa-plus-circle" aria-hidden="true"></i></i></a></td>

                </tr>
                <tr class="hov" data-href="./lab1_pro_1.php">
                    <td><img src="../Img/2.jfif" alt=""></td>
                    <td>50</td>
                    <td>0</td>
                    <td><a href="#" onclick="addClick()"><i class="fa fa-plus-circle" aria-hidden="true"></i></i></a></td>

                </tr>
                <tr class="hov">
                    <td><img src="../Img/3.jpg" alt=""></td>
                    <td>20</td>
                    <td>5</td>
                    <td><a href="#" onclick="addClick()"><i class="fa fa-plus-circle" aria-hidden="true"></i></i></a></td>

                </tr>
                <tr class="hov">
                    <td><img src="../Img/4.png" alt=""></td>
                    <td>80</td>
                    <td>0</td>
                    <td><a href="#" onclick="addClick()"><i class="fa fa-plus-circle" aria-hidden="true"></i></i></a></td>

                </tr>
                <tr class="hov">
                    <td><img src="../Img/11.png" alt=""></td>
                    <td>44</td>
                    <td>0</td>
                    <td><a href="#" onclick="addClick()"><i class="fa fa-plus-circle" aria-hidden="true"></i></i></a></td>

                </tr>
                <tr class="hov">
                    <td><img src="../Img/5.jpg" alt=""></td>
                    <td>88</td>
                    <td>9</td>
                    <td><a href="#" onclick="addClick()"><i class="fa fa-plus-circle" aria-hidden="true"></i></i></a></td>

                </tr>
            </table>
        </div>
    </div>

<script src="../js/lab1.js"></script>
<script src="../js/jquery.min.js"></script>
</body>

</html>

<script>
 
</script>

