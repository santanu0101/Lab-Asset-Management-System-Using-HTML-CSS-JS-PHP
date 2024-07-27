<?php
include '../php/config.php';
// include '../Html/header.php';
function onLogin()
{
    if (isset($_SESSION['email'])) {
    } else {
        header('Location:index.php');
        exit;
    }
}
onLogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/home_page.css">
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


    <!-- home -->
    <div class="page_body">

        <div class="trxtNormal">

            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Floor 1
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://www.google.co.in/?client=safari&channel=mac_bm&pli=1">Floor 2</a>
                    <a class="dropdown-item" href="#">Floor 3</a>
                    <a class="dropdown-item" href="#">Floor 4</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Add new lab</a>
                </div>
            </div>
            <!-- <span id="Normaltext">Overview</span>
            <span id="flore">Floor 1</span> -->
            <!-- <hr> -->
        </div>

        <div class="container">

            <div class="box" id="box1">
                <i class="fa-solid fa-computer"></i><br>
                <h4>Lab-1</h4>
            </div>


            <div class="box" id="box2">
                <i class="fa-solid fa-computer"></i><br>
                <h4>Lab-2</h4>
            </div>


            <div class="box" id="box3">
                <i class="fa-solid fa-computer"></i><br>
                <h4>Lab-3</h4>
            </div>


            <div class="box" id="box4">
                <i class="fa-solid fa-computer"></i><br>
                <h4>Lab-4</h4>
            </div>


            <div class="box" id="box5">
                <i class="fa-solid fa-computer"></i><br>
                <h4>Lab-5</h4>
            </div>


            <div class="box" id="box6">
                <i class="fa-solid fa-computer"></i><br>
                <h4>Lab-6</h4>
            </div>


            <div class="box" id="box7">
                <i class="fa-solid fa-computer"></i><br>
                <h4>Lab-7</h4>
            </div>


            <div class="box" id="box8">
                <i class="fa-solid fa-computer"></i><br>
                <h4>Lab-8</h4>
            </div>

        </div>

        <div class="page-btn">
            <span class="next1 next_active">1</span>
            <span class="next">2</span>
            <span class="next">3</span>
            <span class="next">4</span>
            <span class="next">&#8594;</span>
        </div>

    </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>

<script src="../js/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../js/notification_pop.js"></script>




<script>
    //  click function in all lab box 
    $("#box1").click(function(e) {
        window.location.href = "../Html/Lab1.php";
    })

    //  click function in all number button  
    $(".next").click(function(e) {
        swal("Page not available 🙂🙂");
    })


    // all nave active code
    let btn_cont = location.href
    let btns = document.querySelectorAll('.sidenav a')
    let men = btns.length
    for (let i = 0; i < men; i++) {

        if (btns[i].href === btn_cont) {
            btns[i].className = 'active'
            document.querySelector('.bac_button').style.display = 'none';


        }
    }

    // logout button jquary code
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

                }
            });

    })




    // back button js code
    const history = window.history;
    const Back_for = () => {
        history.back()

    }

    function menuToggle() {
        let menuToggle = document.querySelector('.menu');
        menuToggle.classList.toggle('active')

    }
</script>