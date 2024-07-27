<?php
include '../php/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../Css/header.css">
    <link rel="stylesheet" href="../Css/popUp_profile.css">
    <link rel="stylesheet" href="../Css/Notification_pop_up.css">

</head>

<body>
    <div class="sidenav" id="sidenav">
        <img src="../Img/headerlogo.jpg" alt="img">

        <a class="nav" href="./Home.php"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a>
        <a class="nav" href="./permission.php"><i class="fa fa-cog" aria-hidden="true"></i><span>Permission</span></a>
        <a class="nav" href="./Repair_Status.php"><i class="fa fa-clock" aria-hidden="true"></i><span>Repair Status</span></a>
        <a class="nav" href="./account.php"><i class="fa fa-user" aria-hidden="true"></i><span>Account</span></a>
        <a class="nav" href="./contact_us.php"><i class="fa fa-phone" aria-hidden="true"></i><span>Contact Us</span></a>
        <p id="logout_btn"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Logout</span></p>
    </div>

    <div class="header_body">
        <div class="search">
            <div class="icon">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <div class="input">
                <input type="search" placeholder="Search...">
            </div>
        </div>
        <div class="profile">
            <span id="num">10</span>
            <a onclick="Notifi()"><i class="fa fa-bell" aria-hidden="true"></i></a>
            <div class="notifi_box" id="box_noti">
                <!-- <h2>Notifications <span>17</span></h2> -->
                <div class="notifi-item">
                    <img src="../Img/Mess_man.png" alt="img">
                    <div class="text">
                        <h4>Dodo</h4>
                        <p>@lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="notifi-item">
                    <img src="../Img/Mess_man.png" alt="img">
                    <div class="text">
                        <h4>Amit</h4>
                        <p>@lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="notifi-item">
                    <img src="../Img/Mess_man.png" alt="img">
                    <div class="text">
                        <h4>Sandy</h4>
                        <p>@lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="notifi-item">
                    <img src="../Img/Mess_man.png" alt="img">
                    <div class="text">
                        <h4>Namrita</h4>
                        <p>@lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="notifi-item">
                    <img src="../Img/Mess_man.png" alt="img">
                    <div class="text">
                        <h4>Namrita</h4>
                        <p>@lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="notifi-item">
                    <img src="../Img/Mess_man.png" alt="img">
                    <div class="text">
                        <h4>Namrita</h4>
                        <p>@lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="notifi-item">
                    <img src="../Img/Mess_man.png" alt="img">
                    <div class="text">
                        <h4>Namrita</h4>
                        <p>@lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>

            <a onclick="menuToggle();"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
            <div class="action">
                <div class="menu">
                    <a href="#"><img class="photo" src="../Img/Mess_man.png" alt=""></a>
                    <p id="pic_name"><?php echo ($_SESSION['name']) ?></p>
                    <p><?php echo ($_SESSION['email']) ?></p>
                    <a href="#"><button id="Manage_account">Manage Your account</button></a>
                    <a href="#"><button id="sign_out">Sign Out</button></a>

                </div>
            </div>

        </div>
        <div class="bac_button">
            <button onclick="Back_for()">BACK</button>
        </div>
    </div>

</body>

</html>


<script src="../js/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../js/notification_pop.js"></script>

<script>
    let btn_cont = location.href
    let btns = document.querySelectorAll('.sidenav a')
    let men = btns.length
    for (let i = 0; i < men; i++) {

        if (btns[i].href === btn_cont) {
            btns[i].className = 'active'
            document.querySelector('.bac_button').style.display = 'none';


        }
    }
</script>



<script>
    $("#logout_btn").click(function(e) {

        swal({
                title: "Do you really want to logout ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "../php/logout.php"

                    swal("Logout success!", {
                        icon: "success",
                    });
                } else {
                    // swal("Your imaginary file is safe!");
                }
            });

    })





    const history = window.history;
    const Back_for = () => {
        history.back()

    }


    function menuToggle() {
        let menuToggle = document.querySelector('.menu');
        menuToggle.classList.toggle('active')

    }
</script>