<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaturan Jadwal USB YPKP</title>

    <!-- Core CSS - Include with every page -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">    
    <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.css'; ?>">
    
    <!-- Page-Level Plugin CSS - Tables -->
    <link href="<?php echo base_url().'assets/css/plugins/dataTables/dataTables.bootstrap.css'?>" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/sb-admin.css'; ?>">


    <!-- Coba library -->
    <link href="<?php echo base_url('assets/css/datepicker.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-clockpicker.min.css');?>" rel="stylesheet">

    <style>
      .datepicker{z-index:1151;}
      .clockpicker-popover {z-index: 999999;}
    </style>

</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'pengaturan'; ?>">UNIVERSITAS SANGGA BUANA YPKP</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil pengguna</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Pengaturan</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->