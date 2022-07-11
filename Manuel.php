<?php
include "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manuel</title>

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

                    <marquee behavior="" direction="" class="defile"> SYSTEME DE GESTION DES PREOCCUPATIONS DES AGENTS  DU TRESOR PUBLIC</marquee>
                    <!-- Topbar Navbar -->
                  
                </nav>
                <!-- End of Topbar -->
                
                <div class="container">
                    <div class="row">
                                <div class="col-md-3">
                            
                                    <div class="card bg-info position-relative rounded" style="width:105%; height: 150px;">
                                        <div class="position-absolute mt-3 mx-3 text-white" >
                                            <span style="font-weight: 800; font-size: larger;" >0</span>
                                            <p class="fs-3">Demandes imputées</p>
                                        </div>
                                        <div class="w-100 d-flex justify-content-end rounded" style="padding-right: 5px; height: 80%; background-color: #35332f !important;">
                                            <i class="fa fa-user" style="font-size: 4rem !important;"></i>
                                        </div>
                                        <a href="Liste_Demandes_imputées.php" class="card-footer text-white text-center" style="background-color: #1cc88a !important;">Voir plus<i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
        
        
                                <div class="col-md-3">
                                
                                    <div class="card bg-info position-relative rounded" style="width:105%; height: 150px;">
                                        <div class="position-absolute mt-3 mx-3 text-white" >
                                            <span style="font-weight: 800; font-size: larger;" >0</span>
                                            <p class="fs-3">Demandes en cours</p>
                                        </div>
                                        <div class="w-100 d-flex justify-content-end rounded" style="padding-right: 5px; height: 80%; background-color: #35332f !important;">
                                            <i class="" style="font-size: 4rem !important;"></i>
                                        </div>
                                        <a href="Liste_Demandes_en_cours_de_traitement.php" class="card-footer text-white text-center" style="background-color: #1cc88a !important;">voir plus <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            
                            
                                
                                <div class="col-md-3">
                                
                                    <div class="card bg-info position-relative rounded" style="width:105%; height: 150px;">
                                        <div class="position-absolute mt-3 mx-3 text-white" >
                                            <span style="font-weight: 800; font-size: larger;" >0</span>
                                            <p class="fs-3">Demandes Traitées</p>
                                        </div>
                                        <div class="w-100 d-flex justify-content-end rounded" style="padding-right: 5px; height: 80%; background-color: #ce900a !important;">
                                            <i class="fas fa-fw fa-wrench" style="font-size: 4rem !important;"></i>
                                        </div>
                                        <a href="Liste_Demandes_traitées.php" class="card-footer text-white text-center" style="background-color: #000000 !important;">Voir plus<i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>


    
                               
                <P>
                
                <a class="btn btn-warning mx-2" href="index.php" role="button ">DECONNEXION</a>
                </p>


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