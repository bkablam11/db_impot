<?php
include "Connexion.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        #accordionSidebar {
            background-color: #0040ff !important;
            background-image: linear-gradient(180deg,#201d1d 10%,#201d1d 100%) !important;
            background-size: cover;
            background-size: cover;
            margin-top: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            margin-left: 8px;
            height: 50px;
        }

    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <img src="img/1.png" alt="" width="50" height="50">
                <div class="sidebar-brand-text mx-3">GESTPAT <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" id="headingDem" href="#" data-toggle="collapse" data-target="#collapseDem"
                    aria-expanded="true" aria-controls="collapseDem">
                    <i class="fa fa-hand-holding-usd"></i>
                    <span>DEMANDE</span>
                </a>
                <div id="collapseDem" class="collapse" aria-labelledby="headingDem" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="Manuel.php">Liste des Demandes</a>
                    </div>
                </div>
            </li>

            

            
        </ul>
        <!-- End of Sidebar -->

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <marquee behavior="" direction="" class="defile"> SYSTEME DE GESTION DES PREOCCUPATIONS DES AGENTS DU TRESOR PUBLIC</marquee>
                    <!-- Topbar Navbar -->
                  
                </nav>
                <!-- End of Topbar -->
                
                <div class="container">
                    <div class="row">
                                <div class="col-md-3">
                            
                                    <div class="card bg-info position-relative rounded" style="width:105%; height: 150px;">
                                        <div class="position-absolute mt-3 mx-3 text-white" >
                                            <span style="font-weight: 800; font-size: larger;" >0</span>
                                            <p class="fs-3">Demande</p>
                                        </div>
                                        <div class="w-100 d-flex justify-content-end rounded" style="padding-right: 5px; height: 80%; background-color: #35332f !important;">
                                            <i class="fa fa-hand-holding-usd" style="font-size: 4rem !important;"></i>
                                        </div>
                                        <a href="inscription.php" class="card-footer text-white text-center" style="background-color: #1cc88a !important;">Voir plus<i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
        
        
                                <div class="col-md-3">
                                
                                    <div class="card bg-info position-relative rounded" style="width:105%; height: 150px;">
                                        <div class="position-absolute mt-3 mx-3 text-white" >
                                            <span style="font-weight: 800; font-size: larger;" >0</span>
                                            <p class="fs-3">Agents</p>
                                        </div>
                                        <div class="w-100 d-flex justify-content-end rounded" style="padding-right: 5px; height: 80%; background-color: #35332f !important;">
                                            <i class="fas fa-spinner" style="font-size: 4rem !important;"></i>
                                        </div>
                                        <a href="Agents_internes.php" class="card-footer text-white text-center" style="background-color: #1cc88a !important;">voir plus <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            
                            
                                
                                <div class="col-md-3">
                                
                                    <div class="card bg-info position-relative rounded" style="width:105%; height: 150px;">
                                        <div class="position-absolute mt-3 mx-3 text-white" >
                                            <span style="font-weight: 800; font-size: larger;" >0</span>
                                            <p class="fs-3">Redirection</p>
                                        </div>
                                        <div class="w-100 d-flex justify-content-end rounded" style="padding-right: 5px; height: 80%; background-color: #ce900a !important;">
                                            <i class="fas fa-fw fa-cog" style="font-size: 4rem !important;"></i>
                                        </div>
                                        <a href="fich_redirigé.php" class="card-footer text-white text-center" style="background-color: #000000 !important;">Voir plus<i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 ">
                                
                                    <div class="card bg-info position-relative rounded" style="width:105%; height: 150px;">
                                        <div class="position-absolute mt-3 mx-3 text-white" >
                                            <span style="font-weight: 800; font-size: larger;" >0</span>
                                            <p class="fs-3">Evaluations</p>
                                        </div>
                                        <div class="w-100 d-flex justify-content-end rounded" style="padding-right: 5px; height: 80%; background-color: #ce900a !important;">
                                            <i class="fa fa-user" style="font-size: 4rem !important;"></i>
                                        </div>
                                        <a href="display.php" class="card-footer text-white text-center" style="background-color: #000000!important;">Voir plus<i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                    </div>
                </div>
                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                       
                    </div>

                    
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>