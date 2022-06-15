<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="../../img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SIMTRANS UDARA - Dinas Perhubungan Provinsi Bengkulu</title>
        
        <link href="css/lightgallery.css" rel="stylesheet">

        <!-- Icon css link -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="../../vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="../../vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="../../vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="../../vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="../../vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
                
        <link href="../../css/style.css" rel="stylesheet">
        <link href="../../css/responsive.css" rel="stylesheet">
        <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <style type="text/css">
            .demo-gallery {
                padding: 10px;
            }
            .demo-gallery > ul {
                margin-bottom: 0;
            }
            .demo-gallery > ul > li {
                float: left;
                margin-bottom: 15px;
                margin-right: 20px;
                width: 200px;
            }
            .demo-gallery > ul > li a {
                border: 3px solid #000;
                border-radius: 3px;
                display: block;
                overflow: hidden;
                position: relative;
                float: left;
            }
            .demo-gallery > ul > li a > img {
                -webkit-transition: -webkit-transform 0.15s ease 0s;
                -moz-transition: -moz-transform 0.15s ease 0s;
                -o-transition: -o-transform 0.15s ease 0s;
                transition: transform 0.15s ease 0s;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                height: 100%;
                width: 100%;
            }
            .demo-gallery > ul > li a:hover > img {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
                opacity: 1;
            }
            .demo-gallery > ul > li a .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.1);
                bottom: 0;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                -webkit-transition: background-color 0.15s ease 0s;
                -o-transition: background-color 0.15s ease 0s;
                transition: background-color 0.15s ease 0s;
            }
            .demo-gallery > ul > li a .demo-gallery-poster > img {
                left: 50%;
                margin-left: -10px;
                margin-top: -10px;
                opacity: 0;
                position: absolute;
                top: 50%;
                -webkit-transition: opacity 0.3s ease 0s;
                -o-transition: opacity 0.3s ease 0s;
                transition: opacity 0.3s ease 0s;
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .justified-gallery > a > img {
                -webkit-transition: -webkit-transform 0.15s ease 0s;
                -moz-transition: -moz-transform 0.15s ease 0s;
                -o-transition: -o-transform 0.15s ease 0s;
                transition: transform 0.15s ease 0s;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                height: 100%;
                width: 100%;
            }
            .demo-gallery .justified-gallery > a:hover > img {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
                opacity: 1;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.1);
                bottom: 0;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                -webkit-transition: background-color 0.15s ease 0s;
                -o-transition: background-color 0.15s ease 0s;
                transition: background-color 0.15s ease 0s;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
                left: 50%;
                margin-left: -10px;
                margin-top: -10px;
                opacity: 0;
                position: absolute;
                top: 50%;
                -webkit-transition: opacity 0.3s ease 0s;
                -o-transition: opacity 0.3s ease 0s;
                transition: opacity 0.3s ease 0s;
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .video .demo-gallery-poster img {
                height: 48px;
                margin-left: -24px;
                margin-top: -24px;
                opacity: 0.8;
                width: 48px;
            }
            .demo-gallery.dark > ul > li a {
                border: 3px solid #04070a;
            }
            .home .demo-gallery {
                padding-bottom: 80px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>
    <body>

        <!--================ Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="../../"><img src="../../img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="../../about-us.html">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://dishub.bengkuluprov.go.id" target="_blank">Web Dishub</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../contact.html">Kontak</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================ End Header Menu Area =================-->
        
        <!--================ Banner Area =================-->
        <br><br>
        <section class="banner_area banner_area_laut">
            <div class="container">
                <div class="banner_inner_text">
                    <div class="judulmenu" ><font size="8">SIMTRANS UDARA</font></div>
                    <p>Menyediakan informasi di bidang transportasi udara seperti : <br>Bandara Fatmawati Soekarno Bengkulu, Bandara Muko-muko, <br>dan Bandara Enggano.</p>
                </div>
            </div>
        </section>
        <!--================ End Banner Area =================-->
        
        <!--================ Nav Area =================-->
        <div class="container" id="proj-headermain">
            <div id="proj-menu" class="hidden-xs">
                <ul>
                    <!--- Menu Angkutan Umum Start --->
                    <li>
                        <a href="#">
                            <div class="proj-menu-icon"><img src="../../img/jadwal.svg" alt=""></div>
                            <div class="proj-menu-text">
                                <span class="proj-menu-highlight">Jadwal Penerbangan</span>
                                <span class="proj-menu-sub">Informasi Jadwal Penerbangan</span>
                            </div>
                        </a>
                        <div class="proj-submenu proj-list-bar">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="proj-list-bar-title"><a href="#">Bandara Fatmawati Soekarno Bengkulu</a></div>
                                        <ul>
                                            <li><a href="../?menu=fatmawati-keberangkatan">Keberangkatan</a></li>
                                            <li><a href="../?menu=fatmawati-kedatangan">Kedatangan</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="proj-list-bar-title"><a href="#">Bandara Muko-muko</a></div>
                                        <ul>
                                            <li><a href="../?menu=mukomuko-keberangkatan">Keberangkatan</a></li>
                                            <li><a href="../?menu=mukomuko-kedatangan">Kedatangan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--- Menu Angkutan Umum End --->
                    
                    <!--- Menu LLAJ Start --->
                    <li>
                        <a href="#">
                            <div class="proj-menu-icon"><img src="../../img/bandara.svg" alt=""></div>
                            <div class="proj-menu-text">
                                <span class="proj-menu-highlight">Bandara</span>
                                <span class="proj-menu-sub">Informasi Bandara</span>
                            </div>
                        </a>
                        <div class="proj-submenu proj-list-bar">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="proj-list-bar-title"><a href="#">Bandara Fatmawati Soekarno Bengkulu</a></div>
                                        <ul>
                                            <li><a href="../?menu=fatmawati-fasilitas">Fasilitas</a></li>
                                            <li><a href="../?menu=fatmawati-peta">Peta Bandara</a></li>
                                            <li><a href="../?menu=fatmawati-info">Data Info Bandara</a></li>
                                            <li><a href="../?menu=fatmawati-angkutan">Angkutan Bandara</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="proj-list-bar-title"><a href="#">Bandara Muko-muko</a></div>
                                        <ul>
                                            <li><a href="../?menu=mukomuko-fasilitas">Fasilitas</a></li>
                                            <li><a href="../?menu=mukomuko-info">Data Info Bandara</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--- Menu LLAJ End --->
                    
                    <!--- Menu Terminal Start --->
                    <li>
                        <a href="../?menu=maskapai">
                            <div class="proj-menu-icon"><img src="../../img/maskapai.svg" alt=""></div>
                            <div class="proj-menu-text">
                                <span class="proj-menu-highlight">Maskapai</span>
                                <span class="proj-menu-sub">Informasi Maskapai</span>
                            </div>
                        </a>
                    </li>
                    <!--- Menu Terminal End --->
                    
                </ul>
            </div>
        </div>
        <hr>
        <!--================ Nav Area =================-->
        
        <!--================ Content Area =================-->
        <div class="container">
            <center>
                <h3>Peta Bandara</h3><br>
            </center>
            <div class="demo-gallery">
                <ul id="lightgallery" class="list-unstyled row">
                    <li class="col-md-2" data-responsive="img/1-375.jpg" data-src="img/1-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                        <a href="">
                            <img class="img-responsive" src="img/thumb-1.jpg">
                        </a>
                    </li>
                    <li class="col-md-2" data-responsive="img/2-375.jpg" data-src="img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                        <a href="">
                            <img class="img-responsive" src="img/thumb-2.jpg">
                        </a>
                    </li>
                    <li class="col-md-2" data-responsive="img/13-375.jpg" data-src="img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                        <a href="">
                            <img class="img-responsive" src="img/thumb-13.jpg">
                        </a>
                    </li>
                    <li class="col-md-2" data-responsive="img/4-375.jpg" data-src="img/4-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                        <a href="">
                            <img class="img-responsive" src="img/thumb-4.jpg">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--================ End Content Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footr_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row footer_widget_inner">
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_about_widget"><br><br>
                                <p>Jalan Kapt. Tendean No. 32, Jemb. Kecil, Singaran Pati, Kota Bengkulu, Bengkulu 38225.</p>
                                <p>Telp. (0736) 28914</p>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_subs_widget">
                                <div class="f_title">
                                    <h3>Subscribe to newsletter</h3>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your e-mail address here" aria-label="Your e-mail address here">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Dinas Perhubungan Provinsi Bengkulu. All rights reserved.
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </h5>
                        <font color="#fff" size="1">This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></font>
                    </div>
                    <div class="float-sm-right">
                        <div class="text-center" style="color: #fff">Terhubung Dengan Kami</div>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================ Script Area =================-->
        <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
            thumbnail:false
        });
        </script>
        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="js/lightgallery.js"></script>
        <script src="js/jquery.mousewheel.min.js"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../../js/popper.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="../../vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="../../vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="../../vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="../../vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="../../vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="../../vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="../../vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="../../vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="../../vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="../../vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="../../vendors/counterup/apear.js"></script>
        <script src="../../vendors/counterup/countto.js"></script>
        <script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../../vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="../../js/smoothscroll.js"></script>
        <script src="../../vendors/circle-bar/circle-progress.min.js"></script>
        <script src="../../vendors/circle-bar/plugins.js"></script>
        <script src="../../vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../../vendors/isotope/isotope.pkgd.min.js"></script>
        
        <script src="../../js/circle-active.js"></script>
        <script src="../../js/theme.js"></script>
        <!--================ Script Area End =================-->
    </body>
</html>
