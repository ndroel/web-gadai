<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>GABUT Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url() ?>admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="<?php echo base_url() ?>admin/css/style.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="<?php echo base_url() ?>admin/css/lines.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url() ?>admin/css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <script src="<?php echo base_url() ?>admin/js/jquery.min.js"></script>
        <!----webfonts--->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <!---//webfonts--->  
        <!-- Nav CSS -->
        <link href="<?php echo base_url() ?>admin/css/custom.css" rel="stylesheet">
        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url() ?>admin/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url() ?>admin/js/custom.js"></script>
        <!-- Graph JavaScript -->
        <script src="<?php echo base_url() ?>admin/js/d3.v3.js"></script>
        <script src="<?php echo base_url() ?>admin/js/rickshaw.js"></script>
        <script src="<?php echo base_url() ?>admin/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>admin/js/Chart.js"></script>
        <script>function validateForm() {
                var r = confirm("are you sure to delete?")
                if (r == true)
                {
                    window.location.href='batal_transaksi';
                } else
                {
                    return false;
                }
            }</script>
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <?php echo anchor('', 'GABUT', array('class' => 'navbar-brand')) ?>

                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="<?php echo base_url() ?>/admin/images/1.png"></a>
                        <ul class="dropdown-menu">                            
                            <li class="m_2"><?php echo anchor('c_account/end_session', '<i class="fa fa-lock"></i>Logout') ?></li>	
                        </ul>
                    </li>
                </ul>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <?php echo anchor('', '<i class="fa fa-dashboard fa-fw nav_icon"></i>Home') ?>
                            </li>
                            <li>
                                <?php echo anchor('c_member/get_all_member', '<i class="fa fa-user nav_icon"></i>Lihat Member') ?>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <?php echo anchor('c_transaksi/get_all_transaksi', '<i class="fa fa-shopping-cart nav_icon"></i>Lihat Transaksi') ?>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <?php echo anchor('c_bibit/get_all_data', '<i class="fa fa-pagelines nav_icon"></i>Lihat Bibit & Pupuk') ?>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>