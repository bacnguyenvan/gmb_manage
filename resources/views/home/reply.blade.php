<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Connect account</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <style>
        #start-rating .checked {
            color: orange;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Dashboard</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Connect account
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Create template reply
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- Main row -->
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <!-- TO DO List -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="ion ion-clipboard mr-1"></i>
                                        Create template reply
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- 1 sao -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- DIRECT CHAT SUCCESS -->
                                            <div class="card card-success card-outline direct-chat direct-chat-success">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <ul class="todo-list" data-widget="todo-list">
                                                            <li id="start-rating">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                            </li>
                                                        </ul>
                                                    </h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="row justify-content-end">
                                                        <div class="col-md-8">
                                                            <form method="post" action="">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div id="inputFormRow">
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">
                                                                                <div class="input-group-append">
                                                                                    <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div id="newRow"></div>
                                                                        <button id="addRow" type="button" class="btn btn-info">Add template</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.row -->
                                    <!-- 2 sao -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- DIRECT CHAT SUCCESS -->
                                            <div class="card card-success card-outline direct-chat direct-chat-success collapsed-card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <ul class="todo-list" data-widget="todo-list">
                                                            <li id="start-rating">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                            </li>
                                                        </ul>
                                                    </h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="row justify-content-end">
                                                        <div class="col-md-8">
                                                            <form method="post" action="">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div id="inputFormRow">
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">
                                                                                <div class="input-group-append">
                                                                                    <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div id="newRow"></div>
                                                                        <button id="addRow" type="button" class="btn btn-info">Add template</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.row -->
                                    <!--  -->
                                    <!-- 3 sao -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- DIRECT CHAT SUCCESS -->
                                            <div class="card card-success card-outline direct-chat direct-chat-success collapsed-card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <ul class="todo-list" data-widget="todo-list">
                                                            <li id="start-rating">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                            </li>
                                                        </ul>
                                                    </h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="row justify-content-end">
                                                        <div class="col-md-8">
                                                            <form method="post" action="">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div id="inputFormRow">
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">
                                                                                <div class="input-group-append">
                                                                                    <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div id="newRow"></div>
                                                                        <button id="addRow" type="button" class="btn btn-info">Add template</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.row -->
                                    <!-- 4 sao -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- DIRECT CHAT SUCCESS -->
                                            <div class="card card-success card-outline direct-chat direct-chat-success collapsed-card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <ul class="todo-list" data-widget="todo-list">
                                                            <li id="start-rating">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>
                                                            </li>
                                                        </ul>
                                                    </h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="row justify-content-end">
                                                        <div class="col-md-8">
                                                            <form method="post" action="">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div id="inputFormRow">
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">
                                                                                <div class="input-group-append">
                                                                                    <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div id="newRow"></div>
                                                                        <button id="addRow" type="button" class="btn btn-info">Add template</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.row -->
                                    <!-- 5 sao -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- DIRECT CHAT SUCCESS -->
                                            <div class="card card-success card-outline direct-chat direct-chat-success collapsed-card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <ul class="todo-list" data-widget="todo-list">
                                                            <li id="start-rating">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                            </li>
                                                        </ul>
                                                    </h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="row justify-content-end">
                                                        <div class="col-md-8">
                                                            <form method="post" action="">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div id="inputFormRow">
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">
                                                                                <div class="input-group-append">
                                                                                    <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div id="newRow"></div>
                                                                        <button id="addRow" type="button" class="btn btn-info">Add template</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.row (main row) -->
                            </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script type="text/javascript">
        // add row
        $("#addRow").click(function() {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });
    </script>
</body>

</html>