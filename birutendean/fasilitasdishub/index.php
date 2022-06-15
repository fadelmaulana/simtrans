<?php include('../akses.php'); ?>
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
											<li>
												<a href="../fasilitaslalin">
													 Fasilitas Lalu Lintas
												</a>
											</li>
                                            <li class="nav-active">
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
                                <li><span>Fasilitas Dishub</span></li>
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
						
								<h2 class="panel-title">Bandara</h2>
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
                                <?php include("../config.php"); ?>
                                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kota</th>
                                            <th>Provinsi</th>
                                            <th>Alamat</th>
                                            <th>NO Telp</th>
                                            <th>Website</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT * FROM bandara";
                                        $query = mysqli_query($db, $sql);

                                        while($bandara = mysqli_fetch_array($query)){
                                            echo "<tr>";

                                            echo "<td>".$bandara['id_loc']."</td>";
                                            echo "<td>".$bandara['nama']."</td>";
                                            echo "<td>".$bandara['kota']."</td>";
                                            echo "<td>".$bandara['provinsi']."</td>";
                                            echo "<td>".$bandara['alamat']."</td>";
                                            echo "<td>".$bandara['no_hp']."</td>";
                                            echo "<td><a target='_blank' href='http://".$bandara['website']."'>".$bandara['website']."</a></td>";
                                            echo "<td>".$bandara['lat']."</td>";
                                            echo "<td>".$bandara['lng']."</td>";

                                            echo "<td>";
                                            echo "<a href='form-edit.php?id_loc=".$bandara['id_loc']."'><i class='fa fa-pencil'></i></a> | ";
                                            echo "<a href='hapus.php?id_loc=".$bandara['id_loc']."'><i class='fa fa-trash-o'></i></a>";
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
						
								<h2 class="panel-title">Pelabuhan</h2>
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
                                            <th>Nama</th>
                                            <th>Kota</th>
                                            <th>Provinsi</th>
                                            <th>Alamat</th>
                                            <th>NO Telp</th>
                                            <th>Website</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT * FROM pelabuhan";
                                        $query = mysqli_query($db, $sql);

                                        while($pelabuhan = mysqli_fetch_array($query)){
                                            echo "<tr>";

                                            echo "<td>".$pelabuhan['id_loc']."</td>";
                                            echo "<td>".$pelabuhan['nama']."</td>";
                                            echo "<td>".$pelabuhan['kota']."</td>";
                                            echo "<td>".$pelabuhan['provinsi']."</td>";
                                            echo "<td>".$pelabuhan['alamat']."</td>";
                                            echo "<td>".$pelabuhan['no_hp']."</td>";
                                            echo "<td><a target='_blank' href='http://".$pelabuhan['website']."'>".$pelabuhan['website']."</a></td>";
                                            echo "<td>".$pelabuhan['lat']."</td>";
                                            echo "<td>".$pelabuhan['lng']."</td>";

                                            echo "<td>";
                                            echo "<a href='form-edit.php?id_loc=".$pelabuhan['id_loc']."'><i class='fa fa-pencil'></i></a> | ";
                                            echo "<a href='hapus.php?id_loc=".$pelabuhan['id_loc']."'><i class='fa fa-trash-o'></i></a>";
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
						
								<h2 class="panel-title">DAMRI</h2>
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
                                            <th>Nama</th>
                                            <th>Kota</th>
                                            <th>Provinsi</th>
                                            <th>Alamat</th>
                                            <th>NO Telp</th>
                                            <th>Website</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT * FROM damri";
                                        $query = mysqli_query($db, $sql);

                                        while($damri = mysqli_fetch_array($query)){
                                            echo "<tr>";

                                            echo "<td>".$damri['id_loc']."</td>";
                                            echo "<td>".$damri['nama']."</td>";
                                            echo "<td>".$damri['kota']."</td>";
                                            echo "<td>".$damri['provinsi']."</td>";
                                            echo "<td>".$damri['alamat']."</td>";
                                            echo "<td>".$damri['no_hp']."</td>";
                                            echo "<td><a target='_blank' href='http://".$damri['website']."'>".$damri['website']."</a></td>";
                                            echo "<td>".$damri['lat']."</td>";
                                            echo "<td>".$damri['lng']."</td>";

                                            echo "<td>";
                                            echo "<a href='form-edit.php?id_loc=".$damri['id_loc']."'><i class='fa fa-pencil'></i></a> | ";
                                            echo "<a href='hapus.php?id_loc=".$damri['id_loc']."'><i class='fa fa-trash-o'></i></a>";
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
						
								<h2 class="panel-title">Terminal</h2>
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
                                            <th>Nama</th>
                                            <th>Kota</th>
                                            <th>Provinsi</th>
                                            <th>Alamat</th>
                                            <th>NO Telp</th>
                                            <th>Jumlah Armada</th>
                                            <th style="width:12%">Sanksi Operasional</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT * FROM terminal";
                                        $query = mysqli_query($db, $sql);

                                        while($terminal = mysqli_fetch_array($query)){
                                            echo "<tr>";

                                            echo "<td>".$terminal['id_loc']."</td>";
                                            echo "<td>".$terminal['nama']."</td>";
                                            echo "<td>".$terminal['kota']."</td>";
                                            echo "<td>".$terminal['provinsi']."</td>";
                                            echo "<td>".$terminal['alamat']."</td>";
                                            echo "<td>".$terminal['no_hp']."</td>";
                                            echo "<td>".$terminal['jumlaharmada']." Armada</td>";
                                            echo "<td>
                                                    Ditilang : ".$terminal['tilang']." Unit<br>
                                                    Dilarang Operasi : ".$terminal['dilarang']." Unit<br>
                                                    Diijinkan Operasi : ".$terminal['diijinkan']." Unit<br>
                                                  </td>";
                                            echo "<td>".$terminal['lat']."</td>";
                                            echo "<td>".$terminal['lng']."</td>";

                                            echo "<td>";
                                            echo "<a href='form-edit.php?id_loc=".$terminal['id_loc']."'><i class='fa fa-pencil'></i></a> | ";
                                            echo "<a href='hapus.php?id_loc=".$terminal['id_loc']."'><i class='fa fa-trash-o'></i></a>";
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