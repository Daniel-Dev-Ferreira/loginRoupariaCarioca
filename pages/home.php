<?php
//BUSCANDO AS CLASSES
require_once '../classes/Funcionario.class.php';
//ESTANCIANDO
$objFunc = new Funcionario();
//VALIDANDO USUARIO
session_start();
if($_SESSION["logado"] == "sim"){
    $objFunc->funcionarioLogado($_SESSION['func']);
}else{
    header("location: /loginRoupariaCarioca");
}

if(isset($_GET['sair']) == "sim"){
    $objFunc->sairFuncionario();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="../vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="">
<div class="page-wrapper">
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar2">
        <div class="logo">
            <div>
                <img src="../images/logo-nova2-597x222.png" width="160"/>
            </div>
        </div>
        <div class="menu-sidebar2__content js-scrollbar1">
            <div class="account2">
                <div class="image img-cir img-120">
                    <img src="../images/man.png" />
                </div>
                <h4 class="name"><?=$_SESSION['nome']?></h4>
                <a href="?sair=sim">Sair</a>
            </div>
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li>
                        <a href="teste.php" target="iframe_a">
                            <i class="fas fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="../admin/funcionario/index.php" target="iframe_a">
                            <i class="fas fa-shopping-basket"></i>Funcionário</a>
                    </li>
                    <li>
                        <a href="importacao.php" target="iframe_a">
                            <i class="fas fa-shopping-basket"></i>Importa Excel</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop2">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap2">
                        <div class="logo d-block d-lg-none">
                            <div>
                                <img src="../images/logo-nova2-597x222.png" width="160" alt="CoolAdmin" />
                            </div>
                        </div>
                        <div class="header-button2">
                            <div class="header-button-item mr-0 js-sidebar-btn">
                                <i id="menuHamb" class="zmdi zmdi-menu"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
            <div class="logo">
            </div>
            <div class="menu-sidebar2__content js-scrollbar2">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="../images/man.png" alt="John Doe" />
                    </div>
                    <h4 class="name"><?=$_SESSION['nome']?></h4>
                    <a href="?sair=sim">Sair</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="teste.php" target="iframe_a">
                                <i class="fas fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="../admin/funcionario/index.php" target="iframe_a">
                                <i class="fas fa-shopping-basket"></i>Funcionário</a>
                        </li>
                        <li>
                            <a href="importacao.php" target="iframe_a">
                                <i class="fas fa-shopping-basket"></i>Importação Excel</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END HEADER DESKTOP-->

        <section >
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">

                        <iframe src="../admin/funcionario/index.php" name="iframe_a" style="margin-top: 100px; padding: 10px; border: none" height="600px" width="100%" title="Iframe Example"></iframe>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src="../vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="../vendor/bootstrap-4.1/popper.min.js"></script>
<script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="../vendor/slick/slick.min.js">
</script>
<script src="../vendor/wow/wow.min.js"></script>
<script src="../vendor/animsition/animsition.min.js"></script>
<script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="../vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="../vendor/circle-progress/circle-progress.min.js"></script>
<script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../vendor/chartjs/Chart.bundle.min.js"></script>
<script src="../vendor/select2/select2.min.js">
</script>
<script src="../vendor/vector-map/jquery.vmap.js"></script>
<script src="../vendor/vector-map/jquery.vmap.min.js"></script>
<script src="../vendor/vector-map/jquery.vmap.sampledata.js"></script>
<script src="../vendor/vector-map/jquery.vmap.world.js"></script>

<!-- Main JS-->
<script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->
