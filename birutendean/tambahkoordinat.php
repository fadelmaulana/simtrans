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
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
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
											<i class="fa fa-copy" aria-hidden="true"></i>
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
								<li><span>Dashboard / Bank Data / Tambah Koordinat Ruas</span></li>
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

									<h2 class="panel-title">Tambah Koordinat Ruas Jalan "Dusun Kali - Pagar Ruyung"</h2>
								</header>
								<div class="panel-body">

<!------  Content Start Here -------------------------------------------------------------------------------->

<?php
include_once("koneksi.php");
$carikode = mysqli_query($koneksi, "SELECT id from ".$_GET["noruas"]."") or die (mysqli_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  $jumlah_data = mysqli_num_rows($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($jumlah_data[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $jumlah_data + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $kode_otomatis = "".str_pad($kode, 0, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "1";
  }
?>
                                    
<div class="col-lg-4">
             <a href="editruas.php?noruas=<?php if(isset($_GET['noruas'])){ $no_ruas = $_GET['noruas']; } ?><?php echo $no_ruas ?>">Back</a>
             <br><br>
             <form action="tambahkoordinat.php?noruas=<?php if(isset($_GET['noruas'])){ $no_ruas = $_GET['noruas']; } ?><?php echo $no_ruas ?>" method="post" name="form1">
                 <div class="form-group">
                     <label>No</label>
                     <input class="form-control" placeholder="Enter text" type="text" name="id" value="<?php echo $kode_otomatis;?>">
                 </div>
                 <div class="form-group">
                     <label>Latitude</label>
                     <input class="form-control" placeholder="Masukkan Koordinat Y" type="text" name="lat">
                 </div>
                 <div class="form-group">
                     <label>Longitude</label>
                     <input class="form-control" placeholder="Masukkan Koordinat X" type="text" name="lng">
                 </div>
                 <div class="form-group">
                     <input class="btn btn-default" type="submit" name="Submit" value="Add">
                     <?php
                     // Check If form submitted, insert form data into users table.
                     if(isset($_POST['Submit'])) 
                     {
                         $id = $_POST['id'];
                         $lat = $_POST['lat'];
                         $lng = $_POST['lng'];
                         
                         // include database connection file
                         include_once("koneksi.php");
                         
                         // Insert user data into table
                         $result = mysqli_query($koneksi, "INSERT INTO ".$_GET["noruas"]."(id,lat,lng) VALUES('$id','$lat','$lng')");
                         
                         // Show message when data added
                         echo "Koordinat Berhasil Ditambah !";
                     }
                     ?>
                 </div>
             </form>
</div>
<div class="col-lg-8">
    <div class="panel-body">
        <div id="map" style="width:100%;height:480px"></div>
        <div id="DivToShow" style="background:white;padding:5px"></div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&callback=initMap"></script>
<script>
function initialize() {
var mapOptions = {
zoom: 14.5,
center: new google.maps.LatLng(-3.465158,102.1931501),
mapTypeId: google.maps.MapTypeId.TERRAIN
};
    
var map = new google.maps.Map(document.getElementById('map'),
  mapOptions);

var flightPlanCoordinates = [
<?php
//If konesi.php outputs ANYTHING, the map will fail to load. However, you should
//change the connection variable to $connection = mysqli_connect("HOST","USERNAME","PASSWORD","DATABASE");
include('koneksi.php');

//switch to correct database
mysqli_select_db($koneksi,"dpuprbu");

//Query the user for start and ending location. Store locations in variables
$query = mysqli_query($koneksi,"SELECT titikawalx, titikawaly, titikakhirx, titikakhiry FROM bankdata WHERE id_ruas='".$_GET["noruas"]."'");
$row = mysqli_fetch_assoc($query);
$lat  = $row['titikawaly'];
$lon  = $row['titikawalx'];
$lat2 = $row['titikakhiry'];
$lon2 = $row['titikakhirx'];

//Echo out the users start location
echo 'new google.maps.LatLng('.$lat.', '.$lon.'),';

//Assuming route that lat and long coordinates are in multiple records and not in a array within a single record
//Loop through all records and echo out the positions
$query = mysqli_query($koneksi,"SELECT lat, lng FROM ".$_GET["noruas"]."");
while($row = mysqli_fetch_assoc($query)){
    $lat = $row['lat'];
    $lon = $row['lng'];
    echo 'new google.maps.LatLng('.$lat.', '.$lon.'),';
}

//echo users ending position
echo 'new google.maps.LatLng('.$lat2.', '.$lon2.')';

?>

];

var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 5
});
flightPath.setMap(map);
}
    
google.maps.event.addDomListener(window, 'load', initialize);
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
        