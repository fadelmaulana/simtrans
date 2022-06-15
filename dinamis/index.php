<!DOCTYPE html>
<html>
<head>
<title>Contact Page with Single Map Modal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<!-- Bootstrap core CSS -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
 
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
<![endif]-->
<style>
  body { padding: 10px; background-color:#CCC }
  #map-container { height: 450px }
</style>
</head>
<body>
<div class="container">
<div class="row">
 
    <div class="col-md-6">
<!-- Form -->
<form class="form-horizontal" name="commentform">
    <div class="form-group">
        <div class="col-md-6">
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"/>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Your question or comment here"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <button type="submit" value="Submit" class="btn btn-warning pull-right">Send</button>
        </div>
    </div>
</form>
    </div> <!-- / column 1 -->
 
  <div class="col-md-6">
  <div class="col-md-offset-2 col-md-8">
 
        <h2>Venice</h2>
        <address>
        <strong>Peggy Guggenheim Collection</strong><br>
            Dorsoduro, 701-704<br>
            30123<br>
            Venezia<br>
            Italia<br>
            <abbr>P:</abbr> +39 041 240 5411
            <!-- Button to trigger modal -->
            <p><a href="#mapmodals" data-toggle="modal" role="button"><img src="04_maps.png" width="64" height="64" alt="map Venice" title="click to open Map"></a></p>  
       </address>
    </div>
  </div> <!-- /column 2 -->
</div> <!-- /row -->
 
<!-- Modal -->
  <div class="modal fade" id="mapmodals">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Peggy Guggenheim Collection - Venice</h4>
        </div>
        <div class="modal-body">
            <?php
            //memasukkan koneksi database
            require_once("koneksi.php");
                $sql = "SELECT * FROM trafficlight WHERE id_loc=1";
            ?>
            <?php
            $query = mysqli_query($koneksi, $sql);
            while($data = mysqli_fetch_array($query)){
                echo "".$data['lat'].", ".$data['lng']."";
            }
            ?>

          <div id="map-container">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="close" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div><!-- /container -->
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    

    
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
			var var_map;
    		var var_location = new google.maps.LatLng(
            <?php
            $query = mysqli_query($koneksi, $sql);
            while($data = mysqli_fetch_array($query)){
                echo "".$data['lat'].", ".$data['lng']."";
            }
            ?>
            );
	
     function map_init() {		 	
			
            var var_mapoptions = {
              center: var_location,
              zoom: 14,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              mapTypeControl: false,
              panControl:false,
              rotateControl:false,
              streetViewControl: false,
            };
            var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);
      
          var contentString = 
				'<div id="mapInfo">'+
				'<strong><?php echo''.$data['lokasi'].''; ?></strong>'+
				'</div>';
 
          var var_infowindow = new google.maps.InfoWindow({
            content: contentString
          });
          
          var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title:"Click for more information",
                  maxWidth: 200,
                  maxHeight: 200
          });
 
          google.maps.event.addListener(var_marker, 'click', function() {
             var_infowindow.open(var_map,var_marker);
          });
      }
 
          google.maps.event.addDomListener(window, 'load', map_init);
      
      //start of modal google map
      $('#myModal').on('shown.bs.modal', function () {
          google.maps.event.trigger(var_map, "resize");
          var_map.setCenter(var_location);
      });
</script>
</body>
</html>