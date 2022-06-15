<?php include('akses.php'); ?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>SIMTRANS Dinas Perhubungan Provinsi Bengkulu</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="../assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="../assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="../assets/images/logo.png" height="35" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
					<span class="separator"></span>
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="../assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="../assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name"><?php echo "". $_SESSION['username']; ?></span>
								<span class="role">Administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="profile.php"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
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
									<li>
										<a href="../">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Beranda</span>
										</a>
									</li>
                                    <li class="nav-parent nav-expanded nav-active">
										<a>
											<i class="fa fa-map-marker" aria-hidden="true"></i>
											<span>GIS</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="../lokkantor">
													 Lokasi Kantor
												</a>
											</li>
											<li class="nav-active">
												<a href="../fasilitaslalin">
													 Fasilitas Lalu Lintas
												</a>
											</li>
                                            <li>
												<a href="../fasilitasdishub">
													 Fasilitas DISHUB
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-car" aria-hidden="true"></i>
											<span>SIMTRANS</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>Darat</a>
												<ul class="nav nav-children">
													<li>
														<a href="../angkot">Angkot/AKDP</a>
													</li>
													<li>
														<a href="../bisakap">BIS AKAP</a>
													</li>
                                                    <li>
														<a href="../damri">PERUM DAMRI</a>
													</li>
													<li>
														<a href="../brt">BRT</a>
													</li>
												</ul>
											</li>
										</ul>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>Laut</a>
												<ul class="nav nav-children">
													<li>
														<a>Pelabuhan Pulau Baai</a>
													</li>
													<li>
														<a>Pelabuhan Linau</a>
													</li>
                                                    <li>
														<a>Pelabuhan Malakoni Enggano</a>
													</li>
												</ul>
											</li>
										</ul>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a>Udara</a>
												<ul class="nav nav-children">
													<li class="nav-parent">
														<a>Third Level</a>
														<ul class="nav nav-children">
															<li>
																<a>Third Level Link #1</a>
															</li>
															<li>
																<a>Third Level Link #2</a>
															</li>
														</ul>
													</li>
													<li>
														<a>Second Level Link #1</a>
													</li>
													<li>
														<a>Second Level Link #2</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="../tematikanalog.php">
											<i class="fa fa-image" aria-hidden="true"></i>
											<span>Tematik Analog</span>
										</a>
									</li>
									<li>
										<a href="../data.php">
											<i class="fa fa-cloud-upload" aria-hidden="true"></i>
											<span>Unduh / Upload Data</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>GIS</h2>
					
						<div class="right-wrapper pull-right" style="padding-right: 20px">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>GIS</span></li>
                                <li><span>Fasilitas Lalu Lintas</span></li>
                            </ol>
						</div>
					</header>
                    
                    <!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Traffic Light</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
                                            <a style="color:#fff" href="tambah-tl.php">
                                                <button class="btn btn-primary">Tambah <i class="fa fa-plus"></i></button>
                                            </a>
										</div>
									</div>
								</div>
                                <?php include("config.php"); ?>
                                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Lokasi</th>
                                            <th>Kabupaten</th>
                                            <th>Keterangan</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT * FROM trafficlight";
                                        $query = mysqli_query($db, $sql);

                                        while($tl = mysqli_fetch_array($query)){
                                            echo "<tr>";

                                            echo "<td>".$tl['id_loc']."</td>";
                                            echo "<td>".$tl['lokasi']."</td>";
                                            echo "<td>".$tl['kabupaten']."</td>";
                                            echo "<td>".$tl['keterangan']."</td>";
                                            echo "<td>".$tl['lat']."</td>";
                                            echo "<td>".$tl['lng']."</td>";

                                            echo "<td>";
                                            echo "<a href='edit-tl.php?id_loc=".$tl['id_loc']."'><i class='fa fa-pencil'></i></a> | ";
                                            echo "<a href='hapus-tl.php?id_loc=".$tl['id_loc']."'><i class='fa fa-trash-o'></i></a>";
                                            echo "</td>";

                                            echo "</tr>";
                                        }		
                                        ?>

                                    </tbody>
                                    </table>

                                    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
							</div>
						</section>
					<!-- end: page -->
                    <!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Warning Light</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
                                            <a style="color:#fff" href="tambah-wl.php">
                                                <button class="btn btn-primary">Tambah <i class="fa fa-plus"></i></button>
                                            </a>
										</div>
									</div>
								</div>
                                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Lokasi</th>
                                            <th>Kabupaten</th>
                                            <th>Keterangan</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT * FROM warnlight";
                                        $query = mysqli_query($db, $sql);

                                        while($wl = mysqli_fetch_array($query)){
                                            echo "<tr>";

                                            echo "<td>".$wl['id_loc']."</td>";
                                            echo "<td>".$wl['lokasi']."</td>";
                                            echo "<td>".$wl['kabupaten']."</td>";
                                            echo "<td>".$wl['keterangan']."</td>";
                                            echo "<td>".$wl['lat']."</td>";
                                            echo "<td>".$wl['lng']."</td>";

                                            echo "<td>";
                                            echo "<a href='edit-wl.php?id_loc=".$wl['id_loc']."'><i class='fa fa-pencil'></i></a> | ";
                                            echo "<a href='hapus-wl.php?id_loc=".$wl['id_loc']."'><i class='fa fa-trash-o'></i></a>";
                                            echo "</td>";

                                            echo "</tr>";
                                        }		
                                        ?>

                                    </tbody>
                                    </table>

                                    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
							</div>
						</section>
					<!-- end: page -->
                    <!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Titik Rawan</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
                                            <a style="color:#fff" href="tambah-tr.php">
                                                <button class="btn btn-primary">Tambah <i class="fa fa-plus"></i></button>
                                            </a>
										</div>
									</div>
								</div>
                                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Lokasi</th>
                                            <th>Kabupaten</th>
                                            <th>Keterangan</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT * FROM macet";
                                        $query = mysqli_query($db, $sql);

                                        while($tr = mysqli_fetch_array($query)){
                                            echo "<tr>";

                                            echo "<td>".$tr['id_loc']."</td>";
                                            echo "<td>".$tr['lokasi']."</td>";
                                            echo "<td>".$tr['kabupaten']."</td>";
                                            echo "<td>".$tr['keterangan']."</td>";
                                            echo "<td>".$tr['lat']."</td>";
                                            echo "<td>".$tr['lng']."</td>";

                                            echo "<td>";
                                            echo "<a href='edit-tr.php?id_loc=".$tr['id_loc']."'><i class='fa fa-pencil'></i></a> | ";
                                            echo "<a href='hapus-tr.php?id_loc=".$tr['id_loc']."'><i class='fa fa-trash-o'></i></a>";
                                            echo "</td>";

                                            echo "</tr>";
                                        }		
                                        ?>

                                    </tbody>
                                    </table>

                                    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
							</div>
						</section>
					<!-- end: page -->
				</section>
			</div>

		</section>

		<!-- Vendor -->
		<script src="../assets/vendor/jquery/jquery.js"></script>
		<script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="../assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="../assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="../assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="../assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.js"></script>
		<script src="../assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="../assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="../assets/vendor/raphael/raphael.js"></script>
		<script src="../assets/vendor/morris/morris.js"></script>
		<script src="../assets/vendor/gauge/gauge.js"></script>
		<script src="../assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="../assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="../assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="../assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="../assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="../assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="../assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="../assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="../assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>