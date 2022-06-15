<?php include('akses.php'); ?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Admin Database Jalan DPUPR Bengkulu Utara - Tambah Data</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
            <header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.png" height="35" alt="JSOFT Admin" />
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
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name">Admin DPUPRBU</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
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
							Navigation
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
										<a href="index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li class="nav-parent nav-expanded nav-active">
										<a>
											<i class="fa fa-database" aria-hidden="true"></i>
											<span>Bank Data</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-active">
												<a href="bankdata.php">
													 Lihat Data
												</a>
											</li>
											<li>
												<a href="tambahbankdata.php">
													 Tambah Data
												</a>
											</li>
										</ul>
									</li>
                                    <li>
										<a href="rekapdata.php">
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Rekapitulasi Data</span>
										</a>
									</li>
                                    <li  class="nav-parent">
										<a>
											<i class="fa fa-camera" aria-hidden="true"></i>
											<span>Dokumentasi</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="foto">
													 Foto
												</a>
											</li>
											<li>
												<a href="video">
													 Video
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Bank Data</h2>
					
						<div class="right-wrapper pull-right" style="padding-right: 20px">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard / Bank Data</span></li>
                            </ol>
						</div>
					</header>

						<div class="row">
						<div class="col-md-12">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Bank Data</h2>
								</header>
								<div class="panel-body">

<!------  Content Start Here -------------------------------------------------------------------------------->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dpuprbu";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
  
$limit = 7;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

$sql = "SELECT * FROM bankdata ORDER BY id_ruas ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql);  
?> 

<link rel="stylesheet" href="dist/simplePagination.css" />
<script src="dist/jquery.simplePagination.js"></script>

<br>
    <table  class="table-striped table-bordered table-hover">
        <thead>
        <tr style="text-align:center">
            <td rowspan="3">No</td>
            <td rowspan="3" style="width:70px;padding:5px;">No Ruas Jalan</td>
            <td rowspan="3" style="padding:5px;">Nama Ruas Jalan</td>
            <td rowspan="3" style="padding:5px;">Kecamatan</td>
            <td rowspan="3" style="padding:5px;">Status Jalan</td>
            <td rowspan="3" style="padding:5px;">Panjang Ruas<br>(Km)</td>
            <td rowspan="3" style="padding:5px;">Lebar Ruas<br>(m)</td>
            <td colspan="8" style="padding:5px;">Panjang Tiap Kondisi</td>
            <td rowspan="2" colspan="2" style="padding:5px;">Titik Awal</td>
            <td rowspan="2" colspan="2" style="padding:5px;">Titik Akhir</td>
        </tr>
        <tr style="text-align:center">
            <td colspan="2" style="width:5%;padding:5px;">Baik</td>
            <td colspan="2" style="width:5%;padding:5px;">Sedang</td>
            <td colspan="2" style="width:5%;padding:5px;">Rusak Ringan</td>
            <td colspan="2" style="width:5%;padding:5px;">Rusak Berat</td>
            
        </tr>
        <tr style="text-align:center">
            <td style="padding:5px;padding:5px">KM</td>
            <td style="padding:5px;padding:5px">%</td>
            <td style="padding:5px;padding:5px">KM</td>
            <td style="padding:5px;padding:5px">%</td>
            <td style="padding:5px;padding:5px">KM</td>
            <td style="padding:5px;padding:5px">%</td>
            <td style="padding:5px;padding:5px">KM</td>
            <td style="padding:5px;padding:5px">%</td>
            <td style="width:5%;padding:5px;">X</td>
            <td style="width:5%;padding:5px;">Y</td>
            <td style="width:5%;padding:5px;">X</td>
            <td style="width:5%;padding:5px;">Y</td>
        </tr>
        </thead>
        <?php if(mysqli_num_rows($rs_result)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($rs_result)){
        ?>
        <tr>
            <td style="padding:5px;text-align:center;"><?php echo $no ?></td>
            <td style="padding:5px;"><?php echo $data["id_ruas"];?></td>
            <td style="padding:5px;"><a href="editruas.php?noruas=<?php echo $data["id_ruas"] ?>"><?php echo $data["nama_ruas"];?></a> </td>
            <td style="padding:5px;"><?php echo $data["nama_kec"];?></td>
            <td style="padding:5px;"><?php echo $data["nama_statjalan"];?></td>
            <td style="padding:5px;text-align:center;width:10%"><?php echo $data["panjangruas"];?></td>
            <td style="padding:5px;text-align:center;width:10%"><?php echo $data["lebarruas"];?></td>
            <td style="padding:5px;"><?php echo $data["kmbaik"];?></td>
            <td style="padding:5px;"><?php echo $data["persenbaik"];?></td>
            <td style="padding:5px;"><?php echo $data["kmsedang"];?></td>
            <td style="padding:5px;"><?php echo $data["persensedang"];?></td>
            <td style="padding:5px;"><?php echo $data["kmringan"];?></td>
            <td style="padding:5px;"><?php echo $data["persenringan"];?></td>
            <td style="padding:5px;"><?php echo $data["kmberat"];?></td>
            <td style="padding:5px;"><?php echo $data["persenberat"];?></td>
            <td style="padding:5px;text-align:center;"><?php echo $data["titikawalx"];?></td>
            <td style="padding:5px;text-align:center;"><?php echo $data["titikawaly"];?></td>
            <td style="padding:5px;text-align:center;"><?php echo $data["titikakhirx"];?></td>
            <td style="padding:5px;text-align:center;"><?php echo $data["titikakhiry"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
<?php  
        $sql = "SELECT COUNT(id_ruas) FROM bankdata";  
        $rs_result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_row($rs_result);  
        $total_records = $row[0];  
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "<nav><ul class='pagination'>";  
        for ($i=1; $i<=$total_pages; $i++) {  
            $pagLink .= "<li><a href='?page=".$i."'>".$i."</a></li>";  
        };  
        echo $pagLink . "</ul></nav>";  
        ?>
<br>

<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'dark-theme',
		currentPage : <?php echo $page;?>,
		hrefTextPrefix : '?page='
    });
	});
</script>
                             
<!------  Content End Here -------------------------------------------------------------------------------->
                                    
								</div>
							</section>
						</div>
                    </div>
                </section>
            </div>
        </section>
        <!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>
        