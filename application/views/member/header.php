<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>GABUT Gadai Bibit Pupuk Terpercaya</title>
        <!--css-->
        <link href="<?php echo base_url() ?>member/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo base_url() ?>member/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url() ?>member/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url() ?>member/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url() ?>member/css/font-awesome.css" rel="stylesheet">
        <!--css-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="<?php echo base_url() ?>member/js/jquery.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
        <!--search jQuery-->
        <script src="<?php echo base_url() ?>member/js/main.js"></script>
        <!--search jQuery-->
        <script src="<?php echo base_url() ?>member/js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <!--mycart-->
        <script type="text/javascript" src="<?php echo base_url() ?>member/js/bootstrap-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>member/js/bootstrap-datepicker.min.js"></script>
        <!-- cart -->
        <script src="<?php echo base_url() ?>member/js/simpleCart.min.js"></script>
        <!-- cart -->
        <!--start-rate-->
        <script src="<?php echo base_url() ?>member/js/jstarbox.js"></script>

        <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
        <script defer src="<?php echo base_url() ?>member/js/jquery.flexslider.js"></script>
        <link rel="stylesheet" href="<?php echo base_url() ?>member/css/flexslider.css" type="text/css" media="screen" />
        <script src="<?php echo base_url() ?>member/js/imagezoom.js"></script>
        <script>
            // Can also be used with $(document).ready()
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
        <script type="text/javascript">
            jQuery(function () {
                jQuery('.starbox').each(function () {
                    var starbox = jQuery(this);
                    starbox.starbox({
                        average: starbox.attr('data-start-value'),
                        changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                        ghosting: starbox.hasClass('ghosting'),
                        autoUpdateAverage: starbox.hasClass('autoupdate'),
                        buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                        stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function (event, value) {
                        if (starbox.hasClass('random')) {
                            var val = Math.random();
                            starbox.next().text(' ' + val);
                            return val;
                        }
                    })
                });
            });
        </script>
        <!--//End-rate-->
        <script>function validateForm() {
                var r = confirm("are you sure to delete?")
                if (r == true)
                {
                    window.location.href = 'batal_transaksi';
                } else
                {
                    return false;
                }
            }</script>
    </head>
    <body>
        <!--header-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="top-right">
                        <ul>
                            <?php
                            if (!$this->session->userdata('username')) {
                                echo "<li>" . anchor('c_account/login', 'Login') . "</li>
                            <li>" . anchor('c_account/register', 'Register') . "</li>";
                            } else {
                                echo "<li>" . anchor('c_member/get_profil_member', "Profil") . "</li>";
                                echo"<li>" . anchor('c_account/end_session', 'logout') . "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="heder-bottom">
                <div class="container">
                    <div class="logo-nav">
                        <div class="logo-nav-left">
                            <h1><?php echo anchor('?', 'GABUT<span style ="letter-spacing: 1px">Gadai Bibit Pupuk Terpercaya</span>') ?></h1>
                        </div>
                        <div class="logo-nav-left1">
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header nav_2">
                                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div> 
                                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                    <ul class="nav navbar-nav">
                                        <li><?php echo anchor('?', 'Home') ?></li>	
                                        <li><?php echo anchor('c_transaksi/hitung_harga', 'Gadaikan') ?></li>
                                        <li><?php echo anchor('c_bibit/get_all_data', 'Bibit & Pupuk') ?></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="header-right2">
                            <div class="cart box_1">
                                <?php echo anchor('c_transaksi/get_transaksi_member', "<h3> <div class=\"total\">
                                             Transaksi</div>
                                        <img src=\"" . base_url() . "member/images/bag.png\"/>
                                    </h3>");
                                ?>
                                <div class="clearfix"> </div>
                            </div>	
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>