<?php
include("koneksi.php");
?>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<center>
    <h4>TRAFFIC LIGHT</h4>
</center>
<!-- Tombol Buka Data Start -->
<div class="d-flex justify-content-between bd-highlight mb-3">
    <div class="p-2 bd-highlight"></div>
    <div class="p-2 bd-highlight">&nbsp</div>
    <div class="p-2 bd-highlight"><button id="toggleAccordions" class="btn btn-primary" type="button" data-toggle="collapse">Tampilkan Semua</button></div>
</div>
<!-- Tombol Buka Data End -->

<!-- Isi data Angkutan Kota Start -->
<?php 
// buat query untuk ambil data dari database
$sql = "SELECT * FROM trafficlight";
$query = mysqli_query($koneksi, $sql);
?>
<table class="table table-sm table-bordered table-striped">
    <tr>
        <th style="vertical-align:middle;width:20px" class="text-center">NO</th>
        <th style="vertical-align:middle;" class="text-center">Lokasi</th>
        <th style="vertical-align:middle;" class="text-center">Kabupaten</th>
        <th style="vertical-align:middle;" class="text-center">Keterangan</th>
        <th style="vertical-align:middle;width:150px" class="text-center">Rincian</th>
    </tr>
    <?php
    $query = mysqli_query($koneksi, $sql);
                    
    while($trafficlight = mysqli_fetch_array($query)){
        echo "<tr>";
                        
        echo "<td style='vertical-align:middle' class='text-center'>".$trafficlight['id_loc']."</td>";
        echo "<td style='vertical-align:middle'>".$trafficlight['lokasi']."</td>";
        echo "<td style='vertical-align:middle'>".$trafficlight['kabupaten']."</td>";
        echo "<td>" . $trafficlight["keterangan"]. "</td>";
        echo "<td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#lokasi'>Tampilkan Lokasi</a></td>";
                        
        echo "</tr>";
    }		
    ?>
</table>
<!-- Isi data Angkutan Kota End -->



<!-- Rute A -->
<div class="modal fade bd-example-modal-lg" id="lokasi" tabindex="90" role="dialog" aria-labelledby="ruteaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteaLongTitle">Lokasi Traffic Light 
                    <?php 
                    // buat query untuk ambil data dari database
                    $sqlnama = "SELECT * FROM trafficlight where id_loc=1";
                    $querynama = mysqli_query($koneksi, $sqlnama);
                    while($nama = mysqli_fetch_array($querynama)){
                        echo "".$nama['lokasi'],"";
                    } 
                    ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map" style="width:100%;height:450px;margin-top:0px;"></div>
                <script>

                  function initMap() {
                    var myLatLng = {    <?php
                                        //If konesi.php outputs ANYTHING, the map will fail to load. However, you should
                                        //change the connection variable to $connection = mysqli_connect("HOST","USERNAME","PASSWORD","DATABASE");
                                        include('koneksi.php');

                                        //switch to correct database
                                        mysqli_select_db($koneksi,"angkot");

                                        $query = mysqli_query($koneksi,"SELECT lat, lng FROM trafficlight where id_loc=1");
                                        while($row = mysqli_fetch_assoc($query)){
                                            $lat = $row['lat'];
                                            $lon = $row['lng'];
                                            echo 'lat: '.$lat.', lng: '.$lon.'';
                                        }

                                        ?>
                                   };

                    var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 16,
                      center: myLatLng
                    });

                    var marker = new google.maps.Marker({
                      position: myLatLng,
                      map: map,
                      title: 'Hello World!'
                    });
                  }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&callback=initMap"></script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>