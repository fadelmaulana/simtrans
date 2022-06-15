<?php include('../../../akses.php'); ?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">
        
        <link rel="icon" href="../../../assets/images/fav-icon.png" type="image/x-icon" />

		<title>SIMTRANS ADMIN - Dinas Perhubungan Provinsi Bengkulu</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../../../assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../../../assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="../../../assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../../../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="../../../assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="../../../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="../../../assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../../../assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../../../assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../../../assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="../../../assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../../../" class="logo">
						<img src="../../../assets/images/logo.png" height="35" alt="SIMTRANS Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: user box -->
				<div class="header-right">
					<span class="separator"></span>
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="../../../assets/images/!logged-user.png" class="img-circle"/>
							</figure>
							<div class="profile-info">
								<span class="name"><?php echo "". $_SESSION['username']; ?></span>
								<span class="role">Administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							<font color="#fff">Navigation</font>
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
                                    <!-- Menu Beranda Start -->
									<li>
										<a href="../../../">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Beranda</span>
										</a>
									</li>
                                    <!-- Menu Beranda End -->
                                    
                                    <!-- Menu Darat Start -->
									<li class="nav-parent nav-expanded">
										<a>
											<i class="fa fa-car" aria-hidden="true"></i>
											<span>DARAT</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>Angkutan Umum</a>
												<ul class="nav nav-children">
													<li>
														<a href="../../../darat/angkutanumum/angkot">Angkutan Kota</a>
													</li>
													<li>
														<a href="../../../darat/angkutanumum/bisakap">BUS AKAP</a>
													</li>
													<li>
														<a href="../../../darat/angkutanumum/bisakdp">BUS AKDP</a>
													</li>
                                                    <li>
														<a href="../../../darat/angkutanumum/damri">DAMRI</a>
													</li>
													<li>
														<a href="../../../darat/angkutanumum/brt">BRT</a>
													</li>
												</ul>
											</li>
										</ul>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>LLAJ</a>
												<ul class="nav nav-children">
													<li>
														<a href="../../../darat/llaj/trafficlight">Traffic Light</a>
													</li>
													<li>
														<a href="../../../darat/llaj/warninglight">Warning Light</a>
													</li>
													<li>
														<a href="../../../darat/llaj/rambulalin">Rambu Lalulintas</a>
													</li>
												</ul>
											</li>
										</ul>
										<ul class="nav nav-children">
											<li class="nav-parent nav-expanded">
												<a>Terminal</a>
                                                <ul class="nav nav-children">
                                                    <li class="nav-parent">
                                                        <a>Tipe B</a>
                                                        <ul class="nav nav-children">
                                                            <li>
                                                                <a href="../../../darat/terminal/simpangnangka">Simpang Nangka</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/kotojaya">Koto Jaya</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/betungan">Betungan</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/sungaihitam">Sungai Hitam</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/purwodadi">Purwodadi</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/mukomuko">Muko-muko</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-parent nav-expanded">
                                                        <a>Tipe C</a>
                                                        <ul class="nav nav-children">
                                                            <li class="nav-active">
                                                                <a href="../../../darat/terminal/tais">Tais</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/gn.ayu">Gn. Ayu</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/nakau">Nakau</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/kepahiang">Kepahiang</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/muaraaman">Muara Aman</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/kempas">Kempas</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/kotamedan">Kota Medan</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/ketahun">Ketahun</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../darat/terminal/ps.atas">Ps. Atas</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
											</li>
										</ul>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="../../../darat/asdp">ASDP</a>
                                            </li>
										</ul>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="../../../darat/grafik">Grafik Pertumbuhan</a>
                                            </li>
										</ul>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>Angkutan Dari/Ke</a>
												<ul class="nav nav-children">
													<li>
														<a href="../../../darat/dari-ke/bandara">Bandara</a>
													</li>
													<li>
														<a href="../../../darat/dari-ke/pelabuhan">Pelabuhan</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
                                    <!-- Menu Darat End -->
                                    
                                    <!-- Menu Laut Start -->
                                    <li class="nav-parent">
										<a>
											<i class="fa fa-life-ring" aria-hidden="true"></i>
											<span>LAUT</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>Pelabuhan</a>
                                                <ul class="nav nav-children">
                                                    <li class="nav-parent">
                                                        <a>Pulau Baai</a>
                                                        <ul class="nav nav-children">
                                                            <li>
                                                                <a href="../../../laut/pelabuhan/pulaubaai-fasilitasdermaga">Fasilitas Dermaga</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../laut/pelabuhan/pulaubaai-fasilitasalat">Fasilitas Alat</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../laut/pelabuhan/pulaubaai-fasilitasgudang">Fasilitas Gudang & Lapangan</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../laut/pelabuhan/pulaubaai-perusahaan">Perusahaan</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../laut/pelabuhan/pulaubaai-statusoperasi">Status Operasi</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../laut/pelabuhan/pulaubaai-jenisbarang">Jenis Barang Muatan</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-parent">
                                                        <a>Malakoni Enggano</a>
                                                        <ul class="nav nav-children">
                                                            <li>
                                                                <a href="../../../laut/pelabuhan/enggano-jumlahkapal">Jumlah Kapal</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../laut/pelabuhan/enggano-perusahaan">Perusahaan</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../laut/pelabuhan/enggano-kondisi">Kondisi</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../laut/pelabuhan/enggano-status">Status Operasi</a>
                                                            </li>
                                                            <li>
                                                                <a href="../../../laut/pelabuhan/enggano-jenisbarang">Jenis Barang Muatan</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
											</li>
										</ul>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>Pengguna Jasa</a>
												<ul class="nav nav-children">
													<li>
														<a href="../../../laut/jasa/cargoowner">Cargo Owner</a>
													</li>
													<li>
														<a href="../../../laut/jasa/emkl">EMKL</a>
													</li>
                                                    <li>
														<a href="../../../laut/jasa/shippingline">Shipping Line</a>
													</li>
                                                    <li>
														<a href="../../../laut/jasa/pbm">PBM</a>
													</li>
												</ul>
											</li>
										</ul>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>Data Angkutan</a>
												<ul class="nav nav-children">
													<li>
														<a href="../../../laut/data/tarif">Tarif (Orang & Barang)</a>
													</li>
													<li>
														<a href="../../../laut/data/jeniskomoditi">Jenis Komoditi</a>
													</li>
                                                    <li>
														<a href="../../../laut/data/kumjungankapal">Kunjungan Kapal</a>
													</li>
                                                    <li>
														<a href="../../../laut/data/aruspetikemas">Arus Petikemas</a>
													</li>
                                                    <li>
														<a href="../../../laut/data/export-import">Export / Import</a>
													</li>
                                                    <li>
														<a href="../../../laut/data/grafik">Grafik</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
                                    <!-- Menu Laut End -->
                                    
                                    <!-- Menu Udara Start -->
                                    <li class="nav-parent">
										<a>
											<i class="fa fa-plane" aria-hidden="true"></i>
											<span>UDARA</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>Jadwal Penerbangan</a>
												<ul class="nav nav-children">
													<li class="nav-parent">
														<a>Fatmawati Soekarno Bengkulu</a>
														<ul class="nav nav-children">
															<li>
																<a>Third Level Link #1</a>
															</li>
															<li>
																<a>Third Level Link #2</a>
															</li>
														</ul>
													</li>
													<li class="nav-parent">
														<a>Muko-muko</a>
														<ul class="nav nav-children">
															<li>
																<a>Third Level Link #1</a>
															</li>
															<li>
																<a>Third Level Link #2</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>Bandara</a>
												<ul class="nav nav-children">
													<li class="nav-parent">
														<a>Fatmawati Soekarno Bengkulu</a>
														<ul class="nav nav-children">
															<li>
																<a>Third Level Link #1</a>
															</li>
															<li>
																<a>Third Level Link #2</a>
															</li>
														</ul>
													</li>
													<li class="nav-parent">
														<a>Muko-muko</a>
														<ul class="nav nav-children">
															<li>
																<a>Third Level Link #1</a>
															</li>
															<li>
																<a>Third Level Link #2</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
										<ul class="nav nav-children">
											<li>
												<a>Maskapai</a>
											</li>
										</ul>
									</li>
                                    <!-- Menu Udara End -->
                                    
                                    <!-- Menu Upload Start -->
									<li class="">
										<a href="uploaddata">
											<i class="fa fa-file-upload" aria-hidden="true"></i>
											<span>Upload</span>
										</a>
									</li>
                                    <!-- Menu Upload End -->
								</ul>
							</nav>
                            <br>
                            <!-- start: footer -->
                            <div style="position:fixed;
                                        bottom:0;
                                        left:0;
                                        text-align:center;
                                        width:300px;
                                        color:#abb4be;
                                        background:#34495e;
                                        padding:10px;">
                                SIMTRANS
                                &copy 2018<br>
                                Dinas Perhubungan Provinsi Bengkulu
                            </div>
                            <!-- end: footer -->
						</div>
					</div>
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>DARAT</h2>
						<div class="right-wrapper pull-right" style="padding-right: 20px">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>DARAT</span></li>
                                <li><span>Terminal</span></li>
                                <li><span>Tipe C</span></li>
                                <li><span>Tais</span></li>
                            </ol>
						</div>
					</header>
                    
                    <!-- start: page1 -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								</div>
						
								<h2 class="panel-title">Terminal Tais</h2>
							</header>
							<div class="panel-body">
								
                                <h1>Under Development</h1>
                                
							</div>
						</section>
					<!-- end: page -->
				</section>
			</div>

		</section>

		<!-- Vendor -->
		<script src="../../../assets/vendor/jquery/jquery.js"></script>
		<script src="../../../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="../../../assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../../../assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="../../../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="../../../assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="../../../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="../../../assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="../../../assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="../../../assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="../../../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="../../../assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="../../../assets/vendor/flot/jquery.flot.js"></script>
		<script src="../../../assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="../../../assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="../../../assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="../../../assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="../../../assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="../../../assets/vendor/raphael/raphael.js"></script>
		<script src="../../../assets/vendor/morris/morris.js"></script>
		<script src="../../../assets/vendor/gauge/gauge.js"></script>
		<script src="../../../assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="../../../assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="../../../assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="../../../assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="../../../assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="../../../assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="../../../assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="../../../assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="../../../assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="../../../assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="../../../assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="../../../assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="../../../assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="../../../assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="../../../assets/javascripts/dashboard/examples.dashboard.js"></script>
        
<script>
function confirmDelete(delUrl) {
  if (confirm("Apakah anda yakin ingin menghapus data?")) {
   document.location = delUrl;
  }
}
</script>
	</body>
</html>