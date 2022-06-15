<?php
include("./../koneksi.php");
?>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<center>
    <h4>BUS RAPID TRANSIT (BRT)</h4>
</center>
<!-- Tombol Buka Data Start -->
<div class="d-flex justify-content-between bd-highlight mb-3">
    <div class="p-2 bd-highlight"><button id="toggleAccordions" class="btn btn-primary" type="button" data-toggle="collapse">Buka Data</button></div>
    <div class="p-2 bd-highlight">&nbsp</div>
    <div class="p-2 bd-highlight"><a class="btn btn-warning" href='#' data-toggle='modal' data-target='#lokallshelter'>Tampilkan Semua Lokasi Shelter</a></div>
</div>
<!-- Tombol Buka Data End -->

<!-- Isi data Angkutan Kota Start -->
<div id="accordion" style="width:100%;">
    
    <!-- Isi/data Shelter 1 -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql1 = "SELECT * FROM brt WHERE no=1";
        $query1 = mysqli_query($koneksi, $sql1);
        $shelter1 = mysqli_fetch_array($query1);
        ?>
        <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:#<?php echo $shelter1['warna']; ?>" class="card-header" id="headingOne">
            <h5 class="mb-0"><?php echo $shelter1['halte']; ?></h5>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center" style="width:20px">NO</th>
                        <th class="text-center">Rute</th>
                        <th class="text-center" style="width:200px">Jam Operasi</th>
                        <th class="text-center" style="width:100px">Tarif</th>
                        <th class="text-center" style="width:150px">Rincian</th>
                    </tr>
                    <!-- populate table from mysql database -->
                    <?php 
                    $query1 = mysqli_query($koneksi, $sql1);
                    
                    while($datashelter1 = mysqli_fetch_array($query1)){
                    $tarif2 = $datashelter1["tarif2"];
                    $tarif2nominal = number_format($tarif2);
                    echo "
                    <tr>
                        <td class='align-middle text-center'>" . $datashelter1["no"]. "</td>
                        <td class='align-middle'>" . $datashelter1["rute"]. "</td>
                        <td class='align-middle'>Setiap Hari Mulai Pukul :<br>" . $datashelter1["jamoperasi"]. " (Berjadwal)</td>
                        <td class='align-middle'>
                            <b>- 2018 :</b>
                            <br>
                            &nbsp&nbsp Rp. " . $datashelter1["tarif"]. "
                            <br>
                            <b>- 2019 :</b>
                            <br>
                            &nbsp&nbsp Rp. ".$tarif2nominal."
                        </td>
                        <td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#lokshelter1'>Tampilkan Lokasi</a></td>
                    </tr>";
                    }?>
                </table>
            </div>
        </div>
    </div>

    <!-- Isi/data Shelter 2 -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql2 = "SELECT * FROM brt WHERE no=2";
        $query2 = mysqli_query($koneksi, $sql2);
        $shelter2 = mysqli_fetch_array($query2);
        ?>
        <div data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="background-color:#<?php echo $shelter2['warna']; ?>" class="card-header" id="headingOne">
            <h5 class="mb-0"><?php echo $shelter2['halte']; ?></h5>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center" style="width:20px">NO</th>
                        <th class="text-center">Rute</th>
                        <th class="text-center" style="width:200px">Jam Operasi</th>
                        <th class="text-center" style="width:100px">Tarif</th>
                        <th class="text-center" style="width:150px">Rincian</th>
                    </tr>
                    <!-- populate table from mysql database -->
                    <?php 
                    $query2 = mysqli_query($koneksi, $sql2);
                    
                    while($datashelter2 = mysqli_fetch_array($query2)){
                    $tarif2 = $datashelter2["tarif2"];
                    $tarif2nominal = number_format($tarif2);
                    echo "
                    <tr>
                        <td class='align-middle text-center'>" . $datashelter2["no"]. "</td>
                        <td class='align-middle'>" . $datashelter2["rute"]. "</td>
                        <td class='align-middle'>Setiap Hari Mulai Pukul :<br>" . $datashelter2["jamoperasi"]. " (Berjadwal)</td>
                        <td class='align-middle'>
                            <b>- 2018 :</b>
                            <br>
                            &nbsp&nbsp Rp. " . $datashelter2["tarif"]. "
                            <br>
                            <b>- 2019 :</b>
                            <br>
                            &nbsp&nbsp Rp. ".$tarif2nominal."
                        </td>
                        <td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#lokshelter2'>Tampilkan Lokasi</a></td>
                    </tr>";
                    }?>
                </table>
            </div>
        </div>
    </div>

    <!-- Isi/data Shelter 3 -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql3 = "SELECT * FROM brt WHERE no=3";
        $query3 = mysqli_query($koneksi, $sql3);
        $shelter3 = mysqli_fetch_array($query3);
        ?>
        <div data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="background-color:#<?php echo $shelter3['warna']; ?>" class="card-header" id="headingOne">
            <h5 class="mb-0"><?php echo $shelter3['halte']; ?></h5>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center" style="width:20px">NO</th>
                        <th class="text-center">Rute</th>
                        <th class="text-center" style="width:200px">Jam Operasi</th>
                        <th class="text-center" style="width:100px">Tarif</th>
                        <th class="text-center" style="width:150px">Rincian</th>
                    </tr>
                    <!-- populate table from mysql database -->
                    <?php 
                    $query3 = mysqli_query($koneksi, $sql3);
                    
                    while($datashelter3 = mysqli_fetch_array($query3)){
                    $tarif2 = $datashelter3["tarif2"];
                    $tarif2nominal = number_format($tarif2);
                    echo "
                    <tr>
                        <td class='align-middle text-center'>" . $datashelter3["no"]. "</td>
                        <td class='align-middle'>" . $datashelter3["rute"]. "</td>
                        <td class='align-middle'>Setiap Hari Mulai Pukul :<br>" . $datashelter3["jamoperasi"]. " (Berjadwal)</td>
                        <td class='align-middle'>
                            <b>- 2018 :</b>
                            <br>
                            &nbsp&nbsp Rp. " . $datashelter3["tarif"]. "
                            <br>
                            <b>- 2019 :</b>
                            <br>
                            &nbsp&nbsp Rp. ".$tarif2nominal."
                        </td>
                        <td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#lokshelter3'>Tampilkan Lokasi</a></td>
                    </tr>";
                    }?>
                </table>
            </div>
        </div>
    </div>

    <!-- Isi/data Shelter 4 -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql4 = "SELECT * FROM brt WHERE no=4";
        $query4 = mysqli_query($koneksi, $sql4);
        $shelter4 = mysqli_fetch_array($query4);
        ?>
        <div data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="background-color:#<?php echo $shelter4['warna']; ?>" class="card-header" id="headingOne">
            <h5 class="mb-0"><?php echo $shelter4['halte']; ?></h5>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center" style="width:20px">NO</th>
                        <th class="text-center">Rute</th>
                        <th class="text-center" style="width:200px">Jam Operasi</th>
                        <th class="text-center" style="width:100px">Tarif</th>
                        <th class="text-center" style="width:150px">Rincian</th>
                    </tr>
                    <!-- populate table from mysql database -->
                    <?php 
                    $query4 = mysqli_query($koneksi, $sql4);
                    
                    while($datashelter4 = mysqli_fetch_array($query4)){
                    $tarif2 = $datashelter4["tarif2"];
                    $tarif2nominal = number_format($tarif2);
                    echo "
                    <tr>
                        <td class='align-middle text-center'>" . $datashelter4["no"]. "</td>
                        <td class='align-middle'>" . $datashelter4["rute"]. "</td>
                        <td class='align-middle'>Setiap Hari Mulai Pukul :<br>" . $datashelter4["jamoperasi"]. " (Berjadwal)</td>
                        <td class='align-middle'>
                            <b>- 2018 :</b>
                            <br>
                            &nbsp&nbsp Rp. " . $datashelter4["tarif"]. "
                            <br>
                            <b>- 2019 :</b>
                            <br>
                            &nbsp&nbsp Rp. ".$tarif2nominal."
                        </td>
                        <td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#lokshelter4'>Tampilkan Lokasi</a></td>
                    </tr>";
                    }?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Shelter 5 -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql5 = "SELECT * FROM brt WHERE no=5";
        $query5 = mysqli_query($koneksi, $sql5);
        $shelter5 = mysqli_fetch_array($query5);
        ?>
        <div data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" style="background-color:#<?php echo $shelter5['warna']; ?>" class="card-header" id="headingOne">
            <h5 class="mb-0"><?php echo $shelter5['halte']; ?></h5>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center" style="width:20px">NO</th>
                        <th class="text-center">Rute</th>
                        <th class="text-center" style="width:200px">Jam Operasi</th>
                        <th class="text-center" style="width:100px">Tarif</th>
                        <th class="text-center" style="width:150px">Rincian</th>
                    </tr>
                    <!-- populate table from mysql database -->
                    <?php 
                    $query5 = mysqli_query($koneksi, $sql5);
                    
                    while($datashelter5 = mysqli_fetch_array($query5)){
                    $tarif2 = $datashelter5["tarif2"];
                    $tarif2nominal = number_format($tarif2);
                    echo "
                    <tr>
                        <td class='align-middle text-center'>" . $datashelter5["no"]. "</td>
                        <td class='align-middle'>" . $datashelter5["rute"]. "</td>
                        <td class='align-middle'>Setiap Hari Mulai Pukul :<br>" . $datashelter5["jamoperasi"]. " (Berjadwal)</td>
                        <td class='align-middle'>
                            <b>- 2018 :</b>
                            <br>
                            &nbsp&nbsp Rp. " . $datashelter5["tarif"]. "
                            <br>
                            <b>- 2019 :</b>
                            <br>
                            &nbsp&nbsp Rp. ".$tarif2nominal."
                        </td>
                        <td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#lokshelter5'>Tampilkan Lokasi</a></td>
                    </tr>";
                    }?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Shelter 6 -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql6 = "SELECT * FROM brt WHERE no=6";
        $query6 = mysqli_query($koneksi, $sql6);
        $shelter6 = mysqli_fetch_array($query6);
        ?>
        <div data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix" style="background-color:#<?php echo $shelter6['warna']; ?>" class="card-header" id="headingOne">
            <h5 class="mb-0"><?php echo $shelter6['halte']; ?></h5>
        </div>
        <div id="collapseSix" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center" style="width:20px">NO</th>
                        <th class="text-center">Rute</th>
                        <th class="text-center" style="width:200px">Jam Operasi</th>
                        <th class="text-center" style="width:100px">Tarif</th>
                        <th class="text-center" style="width:150px">Rincian</th>
                    </tr>
                    <!-- populate table from mysql database -->
                    <?php 
                    $query6 = mysqli_query($koneksi, $sql6);
                    
                    while($datashelter6 = mysqli_fetch_array($query6)){
                    $tarif2 = $datashelter6["tarif2"];
                    $tarif2nominal = number_format($tarif2);
                    echo "
                    <tr>
                        <td class='align-middle text-center'>" . $datashelter6["no"]. "</td>
                        <td class='align-middle'>" . $datashelter6["rute"]. "</td>
                        <td class='align-middle'>Setiap Hari Mulai Pukul :<br>" . $datashelter6["jamoperasi"]. " (Berjadwal)</td>
                        <td class='align-middle'>
                            <b>- 2018 :</b>
                            <br>
                            &nbsp&nbsp Rp. " . $datashelter6["tarif"]. "
                            <br>
                            <b>- 2019 :</b>
                            <br>
                            &nbsp&nbsp Rp. ".$tarif2nominal."
                        </td>
                        <td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#lokshelter6'>Tampilkan Lokasi</a></td>
                    </tr>";
                    }?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Shelter 7 -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql7 = "SELECT * FROM brt WHERE no=7";
        $query7 = mysqli_query($koneksi, $sql7);
        $shelter7 = mysqli_fetch_array($query7);
        ?>
        <div data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven" style="background-color:#<?php echo $shelter7['warna']; ?>" class="card-header" id="headingOne">
            <h5 class="mb-0"><?php echo $shelter7['halte']; ?></h5>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center" style="width:20px">NO</th>
                        <th class="text-center">Rute</th>
                        <th class="text-center" style="width:200px">Jam Operasi</th>
                        <th class="text-center" style="width:100px">Tarif</th>
                        <th class="text-center" style="width:150px">Rincian</th>
                    </tr>
                    <!-- populate table from mysql database -->
                    <?php 
                    $query7 = mysqli_query($koneksi, $sql7);
                    
                    while($datashelter7 = mysqli_fetch_array($query7)){
                    $tarif2 = $datashelter7["tarif2"];
                    $tarif2nominal = number_format($tarif2);
                    echo "
                    <tr>
                        <td class='align-middle text-center'>" . $datashelter7["no"]. "</td>
                        <td class='align-middle'>" . $datashelter7["rute"]. "</td>
                        <td class='align-middle'>Setiap Hari Mulai Pukul :<br>" . $datashelter7["jamoperasi"]. " (Berjadwal)</td>
                        <td class='align-middle'>
                            <b>- 2018 :</b>
                            <br>
                            &nbsp&nbsp Rp. " . $datashelter7["tarif"]. "
                            <br>
                            <b>- 2019 :</b>
                            <br>
                            &nbsp&nbsp Rp. ".$tarif2nominal."
                        </td>
                        <td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#lokshelter7'>Tampilkan Lokasi</a></td>
                    </tr>";
                    }?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Shelter 8 -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql8 = "SELECT * FROM brt WHERE no=8";
        $query8 = mysqli_query($koneksi, $sql8);
        $shelter8 = mysqli_fetch_array($query8);
        ?>
        <div data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight" style="background-color:#<?php echo $shelter8['warna']; ?>" class="card-header" id="headingOne">
            <h5 class="mb-0"><?php echo $shelter8['halte']; ?></h5>
        </div>
        <div id="collapseEight" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center" style="width:20px">NO</th>
                        <th class="text-center">Rute</th>
                        <th class="text-center" style="width:200px">Jam Operasi</th>
                        <th class="text-center" style="width:100px">Tarif</th>
                        <th class="text-center" style="width:150px">Rincian</th>
                    </tr>
                    <!-- populate table from mysql database -->
                    <?php 
                    $query8 = mysqli_query($koneksi, $sql8);
                    
                    while($datashelter8 = mysqli_fetch_array($query8)){
                    $tarif2 = $datashelter8["tarif2"];
                    $tarif2nominal = number_format($tarif2);
                    echo "
                    <tr>
                        <td class='align-middle text-center'>" . $datashelter8["no"]. "</td>
                        <td class='align-middle'>" . $datashelter8["rute"]. "</td>
                        <td class='align-middle'>Setiap Hari Mulai Pukul :<br>" . $datashelter8["jamoperasi"]. " (Berjadwal)</td>
                        <td class='align-middle'>
                            <b>- 2018 :</b>
                            <br>
                            &nbsp&nbsp Rp. " . $datashelter8["tarif"]. "
                            <br>
                            <b>- 2019 :</b>
                            <br>
                            &nbsp&nbsp Rp. ".$tarif2nominal."
                        </td>
                        <td style='vertical-align:middle' class='text-center'><a href='#' data-toggle='modal' data-target='#lokshelter8'>Tampilkan Lokasi</a></td>
                    </tr>";
                    }?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- Isi data Angkutan Kota End -->

<!-- Lokasi Semua Shelter -->
<div class="modal fade bd-example-modal-lg" id="lokallshelter" tabindex="90" role="dialog" aria-labelledby="rutebTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteb1LongTitle">Lokasi Semua Shelter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map-allshelter" style="width:100%;height:450px;margin-top:0px;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk"></script>

                <script>
                    var marker;
                    function initialize() {

                        // Variabel untuk menyimpan informasi (desc)
                        var infoWindow = new google.maps.InfoWindow;

                        //  Variabel untuk menyimpan peta Roadmap
                        var mapOptions = {
                            center:new google.maps.LatLng(-3.7973787,102.2659725),
                            zoom:12,
                            mapTypeId:google.maps.MapTypeId.ROADMAP
                        } 

                        // Pembuatan petanya
                        var map = new google.maps.Map(document.getElementById('map-allshelter'), mapOptions);


                        // Pengambilan data dari database
                        <?php
                            $queryall = mysqli_query($koneksi,"select * from brt where no='4' or no='5' or no='6'");
                            while ($dataall = mysqli_fetch_array($queryall))
                            {
                                $shelter = $dataall['halte'];
                                $lat = $dataall['lat'];
                                $long = $dataall['long'];

                                echo ("addMarker($lat, $long, '<b>$shelter</b>');\n");                        
                            }
                          ?>

                        // Proses membuat marker 
                        function addMarker(lat, lng, info) {
                            var lokasi = new google.maps.LatLng(lat, lng);

                            var marker = new google.maps.Marker({
                                map: map,
                                position: lokasi
                            });       

                            bindInfoWindow(marker, map, infoWindow, info);
                         }

                        // Menampilkan informasi pada masing-masing marker yang diklik
                        function bindInfoWindow(marker, map, infoWindow, html) {
                            google.maps.event.addListener(marker, 'click', function() {
                                infoWindow.setContent(html);
                                infoWindow.open(map, marker);
                            });
                        }

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

<!-- Lokasi Shelter 1 -->
<div class="modal fade bd-example-modal-lg" id="lokshelter1" tabindex="90" role="dialog" aria-labelledby="rutebTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteb1LongTitle">Lokasi <?php echo $shelter1['halte']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map-shelter1" style="width:100%;height:450px;margin-top:0px;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&callback=initMap"></script>
                <?php
                // buat query untuk ambil data dari database
                $sqlshelter1 = "SELECT * FROM brt WHERE no=1";
                ?>
                <script>
                function initialize() {
                    var propertiPeta = {
                        center:new google.maps.LatLng(
                            <?php
                            $queryshelter1 = mysqli_query($koneksi, $sqlshelter1);
                            while($datashelter1 = mysqli_fetch_array($queryshelter1)){
                                echo "".$datashelter1['lat'].", ".$datashelter1['long']."";
                            }
                            ?>
                        ),
                        zoom:15,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    };

                    var peta = new google.maps.Map(document.getElementById("map-shelter1"), propertiPeta);
                    var contentString = 
                        '<?php
                        $queryshelter1 = mysqli_query($koneksi, $sqlshelter1);
                        while($datashelter1 = mysqli_fetch_array($queryshelter1)){
                            echo "".$datashelter1['halte']."";
                        }
                        ?>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    // membuat Marker
                    var marker=new google.maps.Marker({
                        position: new google.maps.LatLng(
                            <?php
                            $queryshelter1 = mysqli_query($koneksi, $sqlshelter1);
                            while($datashelter1 = mysqli_fetch_array($queryshelter1)){
                                echo "".$datashelter1['lat'].", ".$datashelter1['long']."";
                            }
                            ?>
                        ),
                        map: peta,
                        title: '<?php
                        $queryshelter1 = mysqli_query($koneksi, $sqlshelter1);
                        while($datashelter1 = mysqli_fetch_array($queryshelter1)){
                            echo "".$datashelter1['halte']."";
                        }
                        ?>'
                    });
                    marker.addListener('click', function() {
                        infowindow.open(peta, marker);
                    });
                }
                // event jendela di-load  
                google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Lokasi Shelter 2 -->
<div class="modal fade bd-example-modal-lg" id="lokshelter2" tabindex="90" role="dialog" aria-labelledby="rutebTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteb1LongTitle">Lokasi <?php echo $shelter2['halte']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map-shelter2" style="width:100%;height:450px;margin-top:0px;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&callback=initMap"></script>
                <?php
                // buat query untuk ambil data dari database
                $sqlshelter2 = "SELECT * FROM brt WHERE no=2";
                ?>
                <script>
                function initialize() {
                    var propertiPeta = {
                        center:new google.maps.LatLng(
                            <?php
                            $queryshelter2 = mysqli_query($koneksi, $sqlshelter2);
                            while($datashelter2 = mysqli_fetch_array($queryshelter2)){
                                echo "".$datashelter2['lat'].", ".$datashelter2['long']."";
                            }
                            ?>
                        ),
                        zoom:15,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    };

                    var peta = new google.maps.Map(document.getElementById("map-shelter2"), propertiPeta);
                    var contentString = 
                        '<?php
                        $queryshelter2 = mysqli_query($koneksi, $sqlshelter2);
                        while($datashelter2 = mysqli_fetch_array($queryshelter2)){
                            echo "".$datashelter2['halte']."";
                        }
                        ?>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    // membuat Marker
                    var marker=new google.maps.Marker({
                        position: new google.maps.LatLng(
                            <?php
                            $queryshelter2 = mysqli_query($koneksi, $sqlshelter2);
                            while($datashelter2 = mysqli_fetch_array($queryshelter2)){
                                echo "".$datashelter2['lat'].", ".$datashelter2['long']."";
                            }
                            ?>
                        ),
                        map: peta,
                        title: '<?php
                        $queryshelter2 = mysqli_query($koneksi, $sqlshelter2);
                        while($datashelter2 = mysqli_fetch_array($queryshelter2)){
                            echo "".$datashelter2['halte']."";
                        }
                        ?>'
                    });
                    marker.addListener('click', function() {
                        infowindow.open(peta, marker);
                    });
                }
                // event jendela di-load  
                google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Lokasi Shelter 3 -->
<div class="modal fade bd-example-modal-lg" id="lokshelter3" tabindex="90" role="dialog" aria-labelledby="rutebTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteb1LongTitle">Lokasi <?php echo $shelter3['halte']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map-shelter3" style="width:100%;height:450px;margin-top:0px;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&callback=initMap"></script>
                <?php
                // buat query untuk ambil data dari database
                $sqlshelter3 = "SELECT * FROM brt WHERE no=3";
                ?>
                <script>
                function initialize() {
                    var propertiPeta = {
                        center:new google.maps.LatLng(
                            <?php
                            $queryshelter3 = mysqli_query($koneksi, $sqlshelter3);
                            while($datashelter3 = mysqli_fetch_array($queryshelter3)){
                                echo "".$datashelter3['lat'].", ".$datashelter3['long']."";
                            }
                            ?>
                        ),
                        zoom:15,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    };

                    var peta = new google.maps.Map(document.getElementById("map-shelter3"), propertiPeta);
                    var contentString = 
                        '<?php
                        $queryshelter3 = mysqli_query($koneksi, $sqlshelter3);
                        while($datashelter3 = mysqli_fetch_array($queryshelter3)){
                            echo "".$datashelter3['halte']."";
                        }
                        ?>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    // membuat Marker
                    var marker=new google.maps.Marker({
                        position: new google.maps.LatLng(
                            <?php
                            $queryshelter3 = mysqli_query($koneksi, $sqlshelter3);
                            while($datashelter3 = mysqli_fetch_array($queryshelter3)){
                                echo "".$datashelter3['lat'].", ".$datashelter3['long']."";
                            }
                            ?>
                        ),
                        map: peta,
                        title: '<?php
                        $queryshelter3 = mysqli_query($koneksi, $sqlshelter3);
                        while($datashelter3 = mysqli_fetch_array($queryshelter3)){
                            echo "".$datashelter3['halte']."";
                        }
                        ?>'
                    });
                    marker.addListener('click', function() {
                        infowindow.open(peta, marker);
                    });
                }
                // event jendela di-load  
                google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Lokasi Shelter 4 -->
<div class="modal fade bd-example-modal-lg" id="lokshelter4" tabindex="90" role="dialog" aria-labelledby="rutebTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteb1LongTitle">Lokasi <?php echo $shelter4['halte']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map-shelter4" style="width:100%;height:450px;margin-top:0px;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&callback=initMap"></script>
                <?php
                // buat query untuk ambil data dari database
                $sqlshelter4 = "SELECT * FROM brt WHERE no=4";
                ?>
                <script>
                function initialize() {
                    var propertiPeta = {
                        center:new google.maps.LatLng(
                            <?php
                            $queryshelter4 = mysqli_query($koneksi, $sqlshelter4);
                            while($datashelter4 = mysqli_fetch_array($queryshelter4)){
                                echo "".$datashelter4['lat'].", ".$datashelter4['long']."";
                            }
                            ?>
                        ),
                        zoom:15,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    };

                    var peta = new google.maps.Map(document.getElementById("map-shelter4"), propertiPeta);
                    var contentString = 
                        '<?php
                        $queryshelter4 = mysqli_query($koneksi, $sqlshelter4);
                        while($datashelter4 = mysqli_fetch_array($queryshelter4)){
                            echo "".$datashelter4['halte']."";
                        }
                        ?>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    // membuat Marker
                    var marker=new google.maps.Marker({
                        position: new google.maps.LatLng(
                            <?php
                            $queryshelter4 = mysqli_query($koneksi, $sqlshelter4);
                            while($datashelter4 = mysqli_fetch_array($queryshelter4)){
                                echo "".$datashelter4['lat'].", ".$datashelter4['long']."";
                            }
                            ?>
                        ),
                        map: peta,
                        title: '<?php
                        $queryshelter4 = mysqli_query($koneksi, $sqlshelter4);
                        while($datashelter4 = mysqli_fetch_array($queryshelter4)){
                            echo "".$datashelter4['halte']."";
                        }
                        ?>'
                    });
                    marker.addListener('click', function() {
                        infowindow.open(peta, marker);
                    });
                }
                // event jendela di-load  
                google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Lokasi Shelter 5 -->
<div class="modal fade bd-example-modal-lg" id="lokshelter5" tabindex="90" role="dialog" aria-labelledby="rutebTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteb1LongTitle">Lokasi <?php echo $shelter5['halte']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map-shelter5" style="width:100%;height:450px;margin-top:0px;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&callback=initMap"></script>
                <?php
                // buat query untuk ambil data dari database
                $sqlshelter5 = "SELECT * FROM brt WHERE no=5";
                ?>
                <script>
                function initialize() {
                    var propertiPeta = {
                        center:new google.maps.LatLng(
                            <?php
                            $queryshelter5 = mysqli_query($koneksi, $sqlshelter5);
                            while($datashelter5 = mysqli_fetch_array($queryshelter5)){
                                echo "".$datashelter5['lat'].", ".$datashelter5['long']."";
                            }
                            ?>
                        ),
                        zoom:15,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    };

                    var peta = new google.maps.Map(document.getElementById("map-shelter5"), propertiPeta);
                    var contentString = 
                        '<?php
                        $queryshelter5 = mysqli_query($koneksi, $sqlshelter5);
                        while($datashelter5 = mysqli_fetch_array($queryshelter5)){
                            echo "".$datashelter5['halte']."";
                        }
                        ?>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    // membuat Marker
                    var marker=new google.maps.Marker({
                        position: new google.maps.LatLng(
                            <?php
                            $queryshelter5 = mysqli_query($koneksi, $sqlshelter5);
                            while($datashelter5 = mysqli_fetch_array($queryshelter5)){
                                echo "".$datashelter5['lat'].", ".$datashelter5['long']."";
                            }
                            ?>
                        ),
                        map: peta,
                        title: '<?php
                        $queryshelter5 = mysqli_query($koneksi, $sqlshelter5);
                        while($datashelter5 = mysqli_fetch_array($queryshelter5)){
                            echo "".$datashelter5['halte']."";
                        }
                        ?>'
                    });
                    marker.addListener('click', function() {
                        infowindow.open(peta, marker);
                    });
                }
                // event jendela di-load  
                google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Lokasi Shelter 6 -->
<div class="modal fade bd-example-modal-lg" id="lokshelter6" tabindex="90" role="dialog" aria-labelledby="rutebTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteb1LongTitle">Lokasi <?php echo $shelter6['halte']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map-shelter6" style="width:100%;height:450px;margin-top:0px;"></div>
                <?php
                // buat query untuk ambil data dari database
                $sqlshelter6 = "SELECT * FROM brt WHERE no=6";
                ?>
                <script>
                function initialize() {
                    var propertiPeta = {
                        center:new google.maps.LatLng(
                            <?php
                            $queryshelter6 = mysqli_query($koneksi, $sqlshelter6);
                            while($datashelter6 = mysqli_fetch_array($queryshelter6)){
                                echo "".$datashelter6['lat'].", ".$datashelter6['long']."";
                            }
                            ?>
                        ),
                        zoom:15,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    };

                    var peta = new google.maps.Map(document.getElementById("map-shelter6"), propertiPeta);
                    var contentString = 
                        '<?php
                        $queryshelter6 = mysqli_query($koneksi, $sqlshelter6);
                        while($datashelter6 = mysqli_fetch_array($queryshelter6)){
                            echo "".$datashelter6['halte']."";
                        }
                        ?>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    // membuat Marker
                    var marker=new google.maps.Marker({
                        position: new google.maps.LatLng(
                            <?php
                            $queryshelter6 = mysqli_query($koneksi, $sqlshelter6);
                            while($datashelter6 = mysqli_fetch_array($queryshelter6)){
                                echo "".$datashelter6['lat'].", ".$datashelter6['long']."";
                            }
                            ?>
                        ),
                        map: peta,
                        title: '<?php
                        $queryshelter6 = mysqli_query($koneksi, $sqlshelter6);
                        while($datashelter6 = mysqli_fetch_array($queryshelter6)){
                            echo "".$datashelter6['halte']."";
                        }
                        ?>'
                    });
                    marker.addListener('click', function() {
                        infowindow.open(peta, marker);
                    });
                }
                // event jendela di-load  
                google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Lokasi Shelter 7 -->
<div class="modal fade bd-example-modal-lg" id="lokshelter7" tabindex="90" role="dialog" aria-labelledby="rutebTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteb1LongTitle">Lokasi <?php echo $shelter7['halte']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map-shelter7" style="width:100%;height:450px;margin-top:0px;"></div>
                <?php
                // buat query untuk ambil data dari database
                $sqlshelter7 = "SELECT * FROM brt WHERE no=7";
                ?>
                <script>
                function initialize() {
                    var propertiPeta = {
                        center:new google.maps.LatLng(
                            <?php
                            $queryshelter7 = mysqli_query($koneksi, $sqlshelter7);
                            while($datashelter7 = mysqli_fetch_array($queryshelter7)){
                                echo "".$datashelter7['lat'].", ".$datashelter7['long']."";
                            }
                            ?>
                        ),
                        zoom:15,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    };

                    var peta = new google.maps.Map(document.getElementById("map-shelter7"), propertiPeta);
                    var contentString = 
                        '<?php
                        $queryshelter7 = mysqli_query($koneksi, $sqlshelter7);
                        while($datashelter7 = mysqli_fetch_array($queryshelter7)){
                            echo "".$datashelter7['halte']."";
                        }
                        ?>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    // membuat Marker
                    var marker=new google.maps.Marker({
                        position: new google.maps.LatLng(
                            <?php
                            $queryshelter7 = mysqli_query($koneksi, $sqlshelter7);
                            while($datashelter7 = mysqli_fetch_array($queryshelter7)){
                                echo "".$datashelter7['lat'].", ".$datashelter7['long']."";
                            }
                            ?>
                        ),
                        map: peta,
                        title: '<?php
                        $queryshelter7 = mysqli_query($koneksi, $sqlshelter7);
                        while($datashelter7 = mysqli_fetch_array($queryshelter7)){
                            echo "".$datashelter7['halte']."";
                        }
                        ?>'
                    });
                    marker.addListener('click', function() {
                        infowindow.open(peta, marker);
                    });
                }
                // event jendela di-load  
                google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Lokasi Shelter 8 -->
<div class="modal fade bd-example-modal-lg" id="lokshelter8" tabindex="90" role="dialog" aria-labelledby="rutebTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteb1LongTitle">Lokasi <?php echo $shelter8['halte']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map-shelter8" style="width:100%;height:450px;margin-top:0px;"></div>
                <?php
                // buat query untuk ambil data dari database
                $sqlshelter8 = "SELECT * FROM brt WHERE no=8";
                ?>
                <script>
                function initialize() {
                    var propertiPeta = {
                        center:new google.maps.LatLng(
                            <?php
                            $queryshelter8 = mysqli_query($koneksi, $sqlshelter8);
                            while($datashelter8 = mysqli_fetch_array($queryshelter8)){
                                echo "".$datashelter8['lat'].", ".$datashelter8['long']."";
                            }
                            ?>
                        ),
                        zoom:15,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    };

                    var peta = new google.maps.Map(document.getElementById("map-shelter8"), propertiPeta);
                    var contentString = 
                        '<?php
                        $queryshelter8 = mysqli_query($koneksi, $sqlshelter8);
                        while($datashelter8 = mysqli_fetch_array($queryshelter8)){
                            echo "".$datashelter8['halte']."";
                        }
                        ?>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    // membuat Marker
                    var marker=new google.maps.Marker({
                        position: new google.maps.LatLng(
                            <?php
                            $queryshelter8 = mysqli_query($koneksi, $sqlshelter8);
                            while($datashelter8 = mysqli_fetch_array($queryshelter8)){
                                echo "".$datashelter8['lat'].", ".$datashelter8['long']."";
                            }
                            ?>
                        ),
                        map: peta,
                        title: '<?php
                        $queryshelter8 = mysqli_query($koneksi, $sqlshelter8);
                        while($datashelter8 = mysqli_fetch_array($queryshelter8)){
                            echo "".$datashelter8['halte']."";
                        }
                        ?>'
                    });
                    marker.addListener('click', function() {
                        infowindow.open(peta, marker);
                    });
                }
                // event jendela di-load  
                google.maps.event.addDomListener(window, 'load', initialize);
                </script>
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