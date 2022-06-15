<?php
include("./../koneksi.php");
?>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<center>
    <h4>ANGKUTAN KOTA</h4>
</center>
<!-- Tombol Buka Data Start -->
<div class="d-flex justify-content-between bd-highlight mb-3">
    <div class="p-2 bd-highlight"><button id="toggleAccordions" class="btn btn-primary" type="button" data-toggle="collapse">Buka Data</button></div>
    <div class="p-2 bd-highlight">&nbsp</div>
    <div class="p-2 bd-highlight">&nbsp</div>
</div>
<!-- Tombol Buka Data End -->

<!-- Isi data Angkutan Kota Start -->
<div id="accordion" style="width:100%;">
    
    <!-- Isi/data Angkot A -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sqla = "SELECT * FROM angkot WHERE kodeangkutan like '%A%'";
        $querya = mysqli_query($koneksi, $sqla);
        $angkota = mysqli_fetch_array($querya);
        ?>
        <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:#<?php echo $angkota['warna']; ?>" class="card-header" id="headingOne">
            <h5 class="mb-0">Angkot A</h5>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-sm table-bordered table-striped">
                    <tr>
                        <th style="vertical-align:middle;width:5%" class="text-center">Kode Angkot</th>
                        <th style="vertical-align:middle;" class="text-center">Jurusan</th>
                        <th style="vertical-align:middle;width:300px" class="text-center">Tarif</th>
                        <th style="vertical-align:middle;width:150px" class="text-center">Rute</th>
                    </tr>
                    <?php
                    $querya = mysqli_query($koneksi, $sqla);
                    
                    while($dataangkota = mysqli_fetch_array($querya)){
                        echo "<tr>";
                        
                        echo "<td style='vertical-align:middle' class='text-center'>".$dataangkota['kodeangkutan']."</td>";
                        echo "<td style='vertical-align:middle'><b>".$dataangkota['jurusan']."</b><br>Melewati :<br>".$dataangkota['melewati']."</td>";
                        echo "<td>Rp." . $dataangkota["tarifpelajar"]. " (Dewasa/Umum)<br>
                                  Rp." . $dataangkota["tarifmahasiswa"]. " (Mahasiswa)<br>
                                  Rp." . $dataangkota["tarifdewasa"]. " (Pelajar/Anak-anak)
                              </td>";
                        echo "<td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#rutea'>Tampilkan Rute</a></td>";
                        
                        echo "</tr>";
                    }		
                    ?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Angkot B -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sqlb = "SELECT * FROM angkot WHERE kodeangkutan like '%B%'";
        $queryb = mysqli_query($koneksi, $sqlb);
        $angkotb = mysqli_fetch_array($queryb);
        ?>
        <div data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color:#<?php echo $angkotb['warna']; ?>" class="card-header" id="headingTwo">
            <h5 class="mb-0">Angkot B</h5>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-sm table-bordered table-striped">
                    <tr>
                        <th style="vertical-align:middle;width:5%" class="text-center">Kode Angkot</th>
                        <th style="vertical-align:middle;" class="text-center">Jurusan</th>
                        <th style="vertical-align:middle;width:300px" class="text-center">Tarif</th>
                        <th style="vertical-align:middle;width:150px" class="text-center">Rute</th>
                    </tr>
                    <?php
                    $queryb = mysqli_query($koneksi, $sqlb);
                    
                    while($dataangkotb = mysqli_fetch_array($queryb)){
                        echo "<tr>";
                        
                        echo "<td style='vertical-align:middle' class='text-center'>".$dataangkotb['kodeangkutan']."</td>";
                        echo "<td style='vertical-align:middle'><b>".$dataangkotb['jurusan']."</b><br>Melewati :<br>".$dataangkotb['melewati']."</td>";
                        echo "<td>Rp." . $dataangkotb["tarifpelajar"]. " (Dewasa/Umum)<br>
                                  Rp." . $dataangkotb["tarifmahasiswa"]. " (Mahasiswa)<br>
                                  Rp." . $dataangkotb["tarifdewasa"]. " (Pelajar/Anak-anak)
                              </td>";
                        echo "<td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#ruteb'>Tampilkan Rute</a></td>";
                        
                        echo "</tr>";
                    }		
                    ?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Angkot C -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sqlc = "SELECT * FROM angkot WHERE kodeangkutan like '%C%'";
        $queryc = mysqli_query($koneksi, $sqlc);
        $angkotc = mysqli_fetch_array($queryc);
        ?>
        <div data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color:#<?php echo $angkotc['warna']; ?>" class="card-header" id="headingThree">
            <h5 class="mb-0">Angkot C</h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-sm table-bordered table-striped">
                    <tr>
                        <th style="vertical-align:middle;width:5%" class="text-center">Kode Angkot</th>
                        <th style="vertical-align:middle;" class="text-center">Jurusan</th>
                        <th style="vertical-align:middle;width:300px" class="text-center">Tarif</th>
                        <th style="vertical-align:middle;width:150px" class="text-center">Rute</th>
                    </tr>
                    <?php
                    $queryc = mysqli_query($koneksi, $sqlc);

                    while($dataangkotc = mysqli_fetch_array($queryc)){
                        echo "<tr>";

                        echo "<td style='vertical-align:middle' class='text-center'>".$dataangkotc['kodeangkutan']."</td>";
                        echo "<td style='vertical-align:middle'><b>".$dataangkotc['jurusan']."</b><br>Melewati :<br>".$dataangkotc['melewati']."</td>";
                        echo "<td>Rp." . $dataangkotc["tarifpelajar"]. " (Dewasa/Umum)<br>
                                  Rp." . $dataangkotc["tarifmahasiswa"]. " (Mahasiswa)<br>
                                  Rp." . $dataangkotc["tarifdewasa"]. " (Pelajar/Anak-anak)
                              </td>";
                        echo "<td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#rutec'>Tampilkan Rute</a></td>";

                        echo "</tr>";
                    }		
                    ?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Angkot D -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sqld = "SELECT * FROM angkot WHERE kodeangkutan like '%D%'";
        $queryd = mysqli_query($koneksi, $sqld);
        $angkotd = mysqli_fetch_array($queryd);
        ?>
        <div data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background-color:#<?php echo $angkotd['warna']; ?>" class="card-header" id="headingFour">
            <h5 class="mb-0">Angkot D</h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-sm table-bordered table-striped">
                    <tr>
                        <th style="vertical-align:middle;width:5%" class="text-center">Kode Angkot</th>
                        <th style="vertical-align:middle;" class="text-center">Jurusan</th>
                        <th style="vertical-align:middle;width:300px" class="text-center">Tarif</th>
                        <th style="vertical-align:middle;width:150px" class="text-center">Rute</th>
                    </tr>
                    <?php
                    $queryd = mysqli_query($koneksi, $sqld);

                    while($dataangkotd = mysqli_fetch_array($queryd)){
                        echo "<tr>";

                        echo "<td style='vertical-align:middle' class='text-center'>".$dataangkotd['kodeangkutan']."</td>";
                        echo "<td style='vertical-align:middle'><b>".$dataangkotd['jurusan']."</b><br>Melewati :<br>".$dataangkotd['melewati']."</td>";
                        echo "<td>Rp." . $dataangkotd["tarifpelajar"]. " (Dewasa/Umum)<br>
                                  Rp." . $dataangkotd["tarifmahasiswa"]. " (Mahasiswa)<br>
                                  Rp." . $dataangkotd["tarifdewasa"]. " (Pelajar/Anak-anak)
                              </td>";
                        echo "<td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#ruted'>Tampilkan Rute</a></td>";

                        echo "</tr>";
                    }		
                    ?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Angkot E -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sqle = "SELECT * FROM angkot WHERE kodeangkutan like '%E%'";
        $querye = mysqli_query($koneksi, $sqle);
        $angkote = mysqli_fetch_array($querye);
        ?>
        <div data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="background-color:#<?php echo $angkote['warna']; ?>" class="card-header" id="headingFive">
            <h5 class="mb-0">Angkot E</h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-sm table-bordered table-striped">
                    <tr>
                        <th style="vertical-align:middle;width:5%" class="text-center">Kode Angkot</th>
                        <th style="vertical-align:middle;" class="text-center">Jurusan</th>
                        <th style="vertical-align:middle;width:300px" class="text-center">Tarif</th>
                        <th style="vertical-align:middle;width:150px" class="text-center">Rute</th>
                    </tr>
                    <?php
                    $querye = mysqli_query($koneksi, $sqle);

                    while($dataangkote = mysqli_fetch_array($querye)){
                        echo "<tr>";

                        echo "<td style='vertical-align:middle' class='text-center'>".$dataangkote['kodeangkutan']."</td>";
                        echo "<td style='vertical-align:middle'><b>".$dataangkote['jurusan']."</b><br>Melewati :<br>".$dataangkote['melewati']."</td>";
                        echo "<td>Rp." . $dataangkote["tarifpelajar"]. " (Dewasa/Umum)<br>
                                        Rp." . $dataangkote["tarifmahasiswa"]. " (Mahasiswa)<br>
                                        Rp." . $dataangkote["tarifdewasa"]. " (Pelajar/Anak-anak)
                                    </td>";
                        echo "<td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#rutee'>Tampilkan Rute</a></td>";

                        echo "</tr>";
                    }		
                    ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- Isi data Angkutan Kota End -->



<!-- Rute A -->
<div class="modal fade bd-example-modal-lg" id="rutea" tabindex="90" role="dialog" aria-labelledby="ruteaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteaLongTitle">Rute Angkutan Kota A</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map-rutea" style="width:100%;height:450px;margin-top:0px;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&callback=initMap"></script>
                <script>
                    function initialize() {
                        var mapOptions = {
                            zoom: 13.2,
                            center: new google.maps.LatLng(-3.7776244,102.2667238),
                            mapTypeId: google.maps.MapTypeId.TERRAIN
                        };
                        
                        var map = new google.maps.Map(document.getElementById('map-rutea'),mapOptions);
                        
                        var flightPlanCoordinates = [
                            <?php
                            //If konesi.php outputs ANYTHING, the map will fail to load. However, you should
                            //change the connection variable to $connection = mysqli_connect("HOST","USERNAME","PASSWORD","DATABASE");
                            include('./../koneksi.php');


                            //Query the user for start and ending location. Store locations in variables
                            $query = mysqli_query($koneksi,"SELECT lat, long1, lat2, long2 FROM lokasia1 LIMIT 1");
                            $row = mysqli_fetch_assoc($query);
                            $lat = $row['lat'];
                            $lon = $row['long1'];
                            $lat2 = $row['lat2'];
                            $lon2 = $row['long2'];

                            //Echo out the users start location
                            echo 'new google.maps.LatLng('.$lat.', '.$lon.'),';

                            //Assuming route that lat and long coordinates are in multiple records and not in a array within a single record
                                //Loop through all records and echo out the positions
                            $query = mysqli_query($koneksi,"SELECT lat, lng FROM rutea1");
                            while($row = mysqli_fetch_assoc($query)){
                                $lat = $row['lat'];
                                $lon = $row['lng'];
                                echo 'new google.maps.LatLng('.$lat.', '.$lon.'),';
                            }

                            //echo users ending position
                            echo 'new google.maps.LatLng('.$lat2.', '.$lon2.')';

                            ?>
                        ];
                        
                        var flightPath = new google.maps.Polyline({path: flightPlanCoordinates,
                                                                   geodesic: true,
                                                                   strokeColor: '#FF0000',
                                                                   strokeOpacity: 1.0,
                                                                   strokeWeight: 2
                                                                  });
                        flightPath.setMap(map);
                    }
                    google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Rute B -->
<div class="modal fade bd-example-modal-lg" id="ruteb" tabindex="90" role="dialog" aria-labelledby="rutebTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteb1LongTitle">Rute Angkutan Kota B</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map-ruteb" style="width:100%;height:450px;margin-top:0px;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&callback=initMap"></script>
                <script>
                    function initialize() {
                        var mapOptions = {
                            zoom: 13.2,
                            center: new google.maps.LatLng(-3.7776244,102.2667238),
                            mapTypeId: google.maps.MapTypeId.TERRAIN
                        };
                        
                        var map = new google.maps.Map(document.getElementById('map-ruteb'),mapOptions);
                        
                        var flightPlanCoordinates = [
                            <?php
                            //If konesi.php outputs ANYTHING, the map will fail to load. However, you should
                            //change the connection variable to $connection = mysqli_connect("HOST","USERNAME","PASSWORD","DATABASE");
                            include('./../koneksi.php');

                            //switch to correct database
                            mysqli_select_db($koneksi,"angkot");

                            //Query the user for start and ending location. Store locations in variables
                            $query = mysqli_query($koneksi,"SELECT lat, long1, lat2, long2 FROM lokasib1 LIMIT 1");
                            $row = mysqli_fetch_assoc($query);
                            $lat = $row['lat'];
                            $lon = $row['long1'];
                            $lat2 = $row['lat2'];
                            $lon2 = $row['long2'];

                            //Echo out the users start location
                            echo 'new google.maps.LatLng('.$lat.', '.$lon.'),';

                            //Assuming route that lat and long coordinates are in multiple records and not in a array within a single record
                                //Loop through all records and echo out the positions
                            $query = mysqli_query($koneksi,"SELECT lat, lng FROM ruteb1");
                            while($row = mysqli_fetch_assoc($query)){
                                $lat = $row['lat'];
                                $lon = $row['lng'];
                                echo 'new google.maps.LatLng('.$lat.', '.$lon.'),';
                            }

                            //echo users ending position
                            echo 'new google.maps.LatLng('.$lat2.', '.$lon2.')';

                            ?>
                        ];
                        
                        var flightPath = new google.maps.Polyline({path: flightPlanCoordinates,
                                                                   geodesic: true,
                                                                   strokeColor: '#FF0000',
                                                                   strokeOpacity: 1.0,
                                                                   strokeWeight: 2
                                                                  });
                        flightPath.setMap(map);
                    }
                    google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Rute C -->
<div class="modal fade bd-example-modal-lg" id="rutec" tabindex="90" role="dialog" aria-labelledby="ruteaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteaLongTitle">Rute Angkutan Kota C</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Under Development
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Rute D -->
<div class="modal fade bd-example-modal-lg" id="ruted" tabindex="90" role="dialog" aria-labelledby="ruteaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteaLongTitle">Rute Angkutan Kota D</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Under Development
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Rute E -->
<div class="modal fade bd-example-modal-lg" id="rutee" tabindex="90" role="dialog" aria-labelledby="ruteaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteaLongTitle">Rute Angkutan Kota E</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Under Development
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<br>

<script type="text/javascript">
$('#toggleAccordions').on('click', function(e) {
  $('#accordion .collapse').toggleClass('show')
})
</script>