<?php
include("db.php");
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Matrix Template - The Ultimate Multipurpose Admin Template</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <link href="dist/css/style.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Add DataTables CSS -->
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
    <style>
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            text-align: center;
            background-color: #f1f1f1;
            padding: 10px 0;
            z-index: 1000;
        }

        #main-wrapper {
            padding-bottom: 50px;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- Main wrapper -->
    <div id="main-wrapper">
        <!-- Topbar header -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- Sidebar toggle visible on mobile -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon p-l-10">
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span class="logo-text">
                            <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />
                        </span>
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav float-right">
                        <!-- User profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left Sidebar -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index2.html" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                    class="hide-menu">Make Appointments</span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index2.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                    class="hide-menu">My Appointments</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Page wrapper -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Oreder table</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div>
                        <button type="button" class="btn btn-info float-right" data-toggle="modal"
                            data-target="#order_modal">Place Order</button>
                        <br><br>
                    </div>

                    <div class="table-responsive">
                        <h5>Table No:1</h5>
                        <table id="orders_table" class="table table-striped table-bordered">
                            <thead style="background-color: rgb(220, 20, 70); color: white; ">
                                <tr>

                                    <th>S.No</th>
                                    <th>Orders</th>
                                    <th>Comments</th>
                                    <th>Total Price</th>
                                    <th>Time</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>





                        </table>
                    </div>

                </div>
            </div>
        </div>


        <!-- Modal -->
        <!-- order placing modal -->
        <div class="modal fade" id="order_modal" tabindex="-1" role="dialog" aria-labelledby="order_modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 125%;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="order_modalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table id="menu" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Food</th>
                                        <th>price</th>
                                        <th>Qnty</th>
                                        <th>Select</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $qurey = "SELECT * FROM menu";
                                    $result = mysqli_query($conn, $qurey);
                                    $s = 1;
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $s++ ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $row["food"] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $row["price"] ?></center>
                                            </td>
                                            <td>
                                                <center><input type="number" id="qnty<?php echo $row["id"];?>" style="width: 50px;" required> </center>
                                            </td>
                                            <td>
                                                <center><button type="button"  data-value1="<?php echo $row["food"]; ?>" data-value2="<?php echo $row["price"]; ?>"  data-value3="<?php echo $row["id"];?>"
                                                        class="btn btn-secondary select">
                                                        <span style="font-size: 15px;">+</span>
                                                    </button></center>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Footer -->
        <footer class="footer text-center">Team NAZI</footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Perfect Scrollbar -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <!-- Custom JS -->
    <script src="dist/js/custom.min.js"></script>

    <!--js link for jquerry-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(e) {
            $("#menu").dataTable({
                "lengthMenu": [
                    [5, 10, 15],
                    [5, 10, 15]
                ]
            })
        });

        $(document).on('click', ".select", function(e) {
            e.preventDefault();            
            var button = this;
            var food = button.getAttribute('data-value1');
            var price = button.getAttribute("data-value2");
            var id = button.getAttribute("data-value3");
            var quantity = document.getElementById('qnty' + id).value;
            console.log(food);
            console.log(price);
            console.log(quantity);

            /*  $ajax({
                 url:backend.php,
                 method:"POST",
                 data:{
                     "menu_orderd":true,
                     "id":id
                 },
                 success:function(response){
                     console.log(response);
                 }
             }) */
        });
    </script>



</body>

</html>