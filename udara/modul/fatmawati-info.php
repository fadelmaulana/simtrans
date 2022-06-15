<style>
    * {
        box-sizing: border-box
    }

    /* Style the tab */
    .tab {
        float: left;
        border: 0px solid #ccc;
        background-color: #fff;
        width: 20%;
        height: 100%;
        font-size: 12px;
    }
    .panah:after {
        z-index:2;
        text-align: right;
        float:right;
        margin-top: 8px;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
        border-left: 6px solid grey;
        content: '';
    }
    /* Style the buttons inside the tab */
    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 5px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 12px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
        border-left: 5px solid #005590;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: #ccc;
        border-left: 5px solid #005590;
    }

    /* Style the tab content */
    .tabcontent {
        float: left;
        padding: 0px 20px;
        border: 0px solid #ccc;
        width: 80%;
        border-left: none;
        height: 100%;
    }
    /* Infowindows Style */
    .infoheader {
        border-radius: 25px; 
        border: 5px solid #305c8d; 
        padding-left:20px; 
        padding-top:7px;
        width:400px;
        height:100px;
    }
    .infocontent {
        color:#fff;
        background-color:#4f81bc; 
        margin-top:-60px;
        border-radius: 25px; 
        border: 5px solid #305c8d; 
        padding:10px;
        margin-bottom: 30px;
    }
    .item1 {
        grid-row: 1 / 4;
    }
    .item2 {
        grid-row: 5 / 8;
    }
    .item3 {
        grid-row: 1 / 3;
    }
    .item4 {
        grid-row: 3 / 4;
    }
    .grid-container {
        display: grid;
        grid-template-columns: auto auto;
    }
</style>

<center>
    <h3>Bandara Fatmawati Soekarno Bengkulu</h3>
</center>
<br>

<div class="tab">
  <button class="panah tablinks" onclick="openTab(event, 'lalin')" id="defaultOpen">Lalu Lintas Udara</button>
  <button class="panah tablinks" onclick="openTab(event, 'infoumum')">Info Umum</button>
  <button class="panah tablinks" onclick="openTab(event, 'infolandasan')">Info Landasan Pacu</button>
</div>

<!-- page-content -->
<main class="page-content">
    <div class="container-fluid">
        <div id="lalin" class="tabcontent">
            <h4>Lalu Lintas Udara</h4>
            <br>
            Silahkan Pilih Tahun :
            <form  method="post" name="form1" id="form1">  
            <?php
                // disable error reporting
                error_reporting(0);
                
                // Load file koneksi.php
                include "./../koneksi.php";
                
                $que = "SELECT DISTINCT tahun FROM fatmawati_datallu ORDER by no ASC"; // Query untuk menampilkan semua data
                $sql = mysqli_query($koneksi, $que); // Eksekusi/Jalankan query dari variabel $query
                
                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    
                    echo "<label class='radio-inline'><input type='radio' name='tahun' value='".$data['tahun']."'> ".$data['tahun']."</label> &nbsp&nbsp&nbsp&nbsp";
                }
            ?> 
            </form>  

            <script>
            $(document).ready(function() {  // wait until the document has loaded
                $('input[name=tahun]').change(function(){  // monitor the input element with a name of selectedfaucet
                    $('form').submit(); // if there is a change of value then submit the form
                }); // end input change function
            }); // end document loaded function
            </script>
            
            <script>
                function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
            </script>   
            <div id="datalalin">
                <br>
                Data LLU Tahun <?php echo $_POST['tahun']; ?>
                <table class="table-sm table-bordered table-striped text-center" width="100%">
                    <!-- <thead class="thead-dark"> -->
                    <thead class="table-primary">
                      <tr>
                        <th class="align-middle" rowspan="3">NO</th>
                        <th class="align-middle" rowspan="3">BULAN</th>
                        <th class="align-middle" colspan="2" rowspan="2">PESAWAT</th>
                        <th class="align-middle" colspan="6">PENUMPANG</th>
                        <th class="align-middle" colspan="2" rowspan="2">BAGASI</th>
                        <th class="align-middle" colspan="2" rowspan="2">KARGO</th>
                        <th class="align-middle" colspan="2" rowspan="2">POS (Kg)</th>
                      </tr>
                      <!-- <tr bgcolor="#212529" style="color:white;"> -->
                      <tr>
                        <th class="align-middle" colspan="3">DATANG</th>
                        <th class="align-middle" colspan="3">BERANGKAT</th>
                      </tr>
                      <!-- <tr bgcolor="#212529" style="color:white;"> -->
                      <tr>
                        <th>DATANG</th>
                        <th>BERANGKAT</th>
                        <th>DEWASA</th>
                        <th>ANAK</th>
                        <th>BAYI</th>
                        <th>DEWASA</th>
                        <th>ANAK</th>
                        <th>BAYI</th>
                        <th>DATANG</th>
                        <th>BERANGKAT</th>
                        <th>DATANG</th>
                        <th>BERANGKAT</th>
                        <th>DATANG</th>
                        <th>BERANGKAT</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tahun = $_POST['tahun'];

                        // Load file koneksi.php
                        include "./../koneksi.php";

                        $query = "SELECT * from fatmawati_datallu WHERE tahun = '$tahun' ORDER by no ASC"; // Query untuk menampilkan semua data siswa
                        $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                        echo "<tr>";
                            echo "<td style='vertical-align:middle'>".$data['no']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['bulan']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['datang']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['berangkat']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['dtg_dewasa']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['dtg_anak']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['dtg_bayi']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['brk_dewasa']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['brk_anak']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['brk_bayi']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['bagasi_dtg']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['bagasi_brk']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['kargo_dtg']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['kargo_brk']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['pos_dtg']."</td>";
                            echo "<td style='vertical-align:middle'>".$data['pos_brk']."</td>";
                        echo "</tr>";
                        }
                        ?>
                        <tr class="table-success">
                        <?php
                        $query1 = "
                        SELECT 
                        SUM(`datang`), 
                        SUM(`berangkat`), 
                        SUM(`dtg_dewasa`), 
                        SUM(`dtg_anak`), 
                        SUM(`dtg_bayi`), 
                        SUM(`brk_dewasa`), 
                        SUM(`brk_anak`), 
                        SUM(`brk_bayi`), 
                        SUM(`bagasi_dtg`), 
                        SUM(`bagasi_brk`), 
                        SUM(`kargo_dtg`), 
                        SUM(`kargo_brk`), 
                        SUM(`pos_dtg`), 
                        SUM(`pos_brk`) 
                        FROM fatmawati_datallu WHERE tahun = '$tahun' ORDER by no ASC"; // Query untuk menampilkan semua data siswa
                        $sql2 = mysqli_query($koneksi, $query1); // Eksekusi/Jalankan query dari variabel $query

                        while($data2 = mysqli_fetch_array($sql2)){ // Ambil semua data dari hasil eksekusi $sql
                        ?>
                            <td>&nbsp</td>
                            <td>TOTAL</td>
                            <td><?php echo " ".$data2['SUM(`datang`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`berangkat`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`dtg_dewasa`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`dtg_anak`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`dtg_bayi`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`brk_dewasa`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`brk_anak`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`brk_bayi`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`bagasi_dtg`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`bagasi_brk`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`kargo_dtg`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`kargo_brk`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`pos_dtg`)']." "; ?></td>
                            <td><?php echo " ".$data2['SUM(`pos_brk`)']." "; ?></td>
                        <?php
                        }
                        ?>
                        </tr>
                    </tbody>
                </table> 
            </div><br>
            <button onclick="printContent('datalalin')">Print Content</button>
        </div>
        
        <div id="infoumum" class="tabcontent">
            <h4>Info Umum</h4>
            <br>
            <div class="row grid-container">
                <div class="col item1">
                    <!-- I -->
                    <div class="infoheader">
                        AERODROME DATA
                    </div>
                    <div class="infocontent">
                        <table>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Nama Bandara</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Fatmawati Soekarno</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Milik/Pengelola</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Direktorat Jendral Perhubungan Udara Kantor UPBU Fatmawati Soekarno</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Provinsi</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Bengkulu</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">ARP Coordinate & Site and AD</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">03051'40"S 14 KM Jarak dari Kota</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Evaluasi</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">50 Feet</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top">Aedrodemereferensi Temperature</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">-</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">7.</td>
                                    <td class="align-top">Air Traffic Service</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Unattended</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">8.</td>
                                    <td class="align-top">Klasifikasi/Jam Operasi</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">06:00 - 21:00 WIB (23:00 - 14:00 UTC)</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">9.</td>
                                    <td class="align-top">Pelayanan ATC</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ADC Combine, APP Non Radar</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">10.</td>
                                    <td class="align-top">Kemampuan OPS</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Boeing 737-900 ER, Airbus 320</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">11.</td>
                                    <td class="align-top">Status Bandara</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Badan Layanan Umum SK Mentri<br>Keuangan No.62/KMK.05/2017<br>Tanggal<br>3 Februari 2016</td>
                                </tr>                  
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- II -->
                    <div class="infoheader">
                        RUNWAY
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Designations</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">13 dan 31</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">2.250 x 45</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Strengths</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">PCN 51 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Clearaway 13</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">90 x 90m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top">Clearaway 31</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">170 x 90m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">7.</td>
                                    <td class="align-top">Runway Strip</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">2370 x 150m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">8.</td>
                                    <td class="align-top">Resa</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">110 x 90m</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- III -->
                    <div class="infoheader">
                        TAXIWAY A
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">133 x 23m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Strenghts</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">46 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- IV -->
                    <div class="infoheader">
                        TAXIWAY B
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">130 x 26m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Strenghts</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">51 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- V -->
                    <div class="infoheader">
                        APRON
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">375 x 80m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Strenghts</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">51 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- VI -->
                    <div class="infoheader">
                        HELI PAD
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">24 x 24</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- VIII -->
                    <div class="infoheader">
                        MASKAPAI YANG BEROPERASI
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Garuda Indonesia</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">3x Sehari</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Lion Air</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">4x Sehari</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Citilink</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">1x Sehari</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">Sriwijaya Air</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">1x Sehari</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Batik Air</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">1x Sehari</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top">Wings Air</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">5x Sehari</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- VII -->
                    <div class="infoheader">
                        FASILITAS DAN KANTOR GEDUNG TERMINAL Lt. 1
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top" colspan="3">Security Check Point 1</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top" colspan="3">CIP Room</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top" colspan="3">Check-in Room</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top" colspan="3">Arrival Room</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top" colspan="3">Public Arrival Lobby</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top" colspan="3">Public Departure Lobby</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">7.</td>
                                    <td class="align-top" colspan="3">Departure Gate</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">8.</td>
                                    <td class="align-top" colspan="3">Trolly Station</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">9.</td>
                                    <td class="align-top" colspan="3">Smoking Room</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">10.</td>
                                    <td class="align-top" colspan="3">Arrival Gate</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">11.</td>
                                    <td class="align-top" colspan="3">Stair to Second Floor</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">12.</td>
                                    <td class="align-top" colspan="3">Stair to Waiting Room</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">13.</td>
                                    <td class="align-top" colspan="3">Toilet Lobby Keberangkatan</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">14.</td>
                                    <td class="align-top" colspan="3">Toilet Ruang Check-in</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">15.</td>
                                    <td class="align-top" colspan="3">Toilet Ruang Kedatangan</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">16.</td>
                                    <td class="align-top" colspan="3">SToilet Lobby Kedatangan</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">17.</td>
                                    <td class="align-top" colspan="3">Kantor Informasi</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">18.</td>
                                    <td class="align-top" colspan="3">Kantor Hygiene Sanitasi</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">19.</td>
                                    <td class="align-top" colspan="3">Kantor AVSEC</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">20.</td>
                                    <td class="align-top" colspan="3">Kantor Petugas Terminal</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">21.</td>
                                    <td class="align-top" colspan="3">Ruang Lanisa</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">22.</td>
                                    <td class="align-top" colspan="3">Gudang</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- IX -->
                    <div class="infoheader">
                        FASILITAS DAN KANTOR GEDUNG TERMINAL Lt. 2
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top" colspan="3">Security Check Point 2</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top" colspan="3">Waiting Room</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top" colspan="3">Child Playground</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top" colspan="3">Nursery Room</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top" colspan="3">Selfie Area</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top" colspan="3">Trully Lounge</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">7.</td>
                                    <td class="align-top" colspan="3">Kantin Nifa (Smoking Room)</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">8.</td>
                                    <td class="align-top" colspan="3">Kanting Nifa</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">9.</td>
                                    <td class="align-top" colspan="3">Kantor Karantina Pertanian</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">10.</td>
                                    <td class="align-top" colspan="3">Lion Air Ruang KK</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">11.</td>
                                    <td class="align-top" colspan="3">Ruang AVSEC CCTV</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">12.</td>
                                    <td class="align-top" colspan="3">Kantor Karantina Ikan</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">13.</td>
                                    <td class="align-top" colspan="3">Musholla</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">14.</td>
                                    <td class="align-top" colspan="3">Toilet</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">15.</td>
                                    <td class="align-top" colspan="3">Kuala Deli Oleh-oleh</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col item2">
                    <!-- X -->
                    <div class="infoheader">
                        KONSESIONER GEDUNG TERMINAL Lt.1
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top" colspan="3">Aeroflyer</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top" colspan="3">Kantin Raflesia</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top" colspan="3">Tiara Ice Cream</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top" colspan="3">Oleh-oleh Mekarsari</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top" colspan="3">Striping Daffa</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top" colspan="3">Striping  Arinil</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">7.</td>
                                    <td class="align-top" colspan="3">Striping Diandri</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">8.</td>
                                    <td class="align-top" colspan="3">Roti O</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">9.</td>
                                    <td class="align-top" colspan="3">Dapoer Terbang</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">10.</td>
                                    <td class="align-top" colspan="3">Ruang PT. Adi</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">11.</td>
                                    <td class="align-top" colspan="3">Gudang Lost&Found</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">12.</td>
                                    <td class="align-top" colspan="3">Lion Air (Ruang LL)</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">13.</td>
                                    <td class="align-top" colspan="3">Sriwijaya Air (Ruang DM)</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">14.</td>
                                    <td class="align-top" colspan="3">Gapura Angkasa</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">15.</td>
                                    <td class="align-top" colspan="3">Potret 3 Saudara</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">16.</td>
                                    <td class="align-top" colspan="3">Garuda (Ruang CS)</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">17.</td>
                                    <td class="align-top" colspan="3">Citilink (Ruang CS)</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">18.</td>
                                    <td class="align-top" colspan="3">Lion Air (Ruang CS)</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">19.</td>
                                    <td class="align-top" colspan="3">Sriwijaya (Ruang CS)</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">20.</td>
                                    <td class="align-top" colspan="3">KKP</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">21.</td>
                                    <td class="align-top" colspan="3">Garuda (Ruang LL)</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">22.</td>
                                    <td class="align-top" colspan="3">ATM Mandiri</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">23.</td>
                                    <td class="align-top" colspan="3">ATM BNI</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">24.</td>
                                    <td class="align-top" colspan="3">ATM BRI</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">25.</td>
                                    <td class="align-top" colspan="3">Loket Damri</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">26.</td>
                                    <td class="align-top" colspan="3">Loket Taksi Tiga Putra</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">26.</td>
                                    <td class="align-top" colspan="3">Loket Taksi Tiga Putra</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">27.</td>
                                    <td class="align-top" colspan="3">Loket Taksi Bintang Zilova</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">28.</td>
                                    <td class="align-top" colspan="3">Susi Air</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">29.</td>
                                    <td class="align-top" colspan="3">ATM Bank Bengkulu</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">30.</td>
                                    <td class="align-top" colspan="3">Counter Check-In</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top" colspan="3">a. Citilink</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top" colspan="3">b. Sriwijaya Air</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top" colspan="3">c. Garuda Indonesia</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top" colspan="3">d. Lion Air</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top" colspan="3">e. Susi Air</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">31.</td>
                                    <td class="align-top" colspan="3">Reklame</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top" colspan="3">a. Hotel Santika</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top" colspan="3">b. Sinarsport Hotel</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
            </div>
            
            <table class="table table-sm">
                <!--
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">I.</th>
                        <th class="tg-s268" colspan="4">AERODROME DATA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Nama Bandara</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Fatmawati Soekarno</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Milik/Pengelola</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Direktorat Jendral Perhubungan Udara Kantor UPBU Fatmawati Soekarno</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Provinsi</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Bengkulu</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">4.</td>
                        <td class="align-top">ARP Coordinate & Site and AD</td>
                        <td class="align-top">:</td>
                        <td class="align-top">03051'40"S 14 KM Jarak dari Kota</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">5.</td>
                        <td class="align-top">Evaluasi</td>
                        <td class="align-top">:</td>
                        <td class="align-top">50 Feet</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">6.</td>
                        <td class="align-top">Aedrodemereferensi Temperature</td>
                        <td class="align-top">:</td>
                        <td class="align-top">-</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">7.</td>
                        <td class="align-top">Air Traffic Service</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Unattended</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">8.</td>
                        <td class="align-top">Klasifikasi/Jam Operasi</td>
                        <td class="align-top">:</td>
                        <td class="align-top">06:00 - 21:00 WIB (23:00 - 14:00 UTC)</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">9.</td>
                        <td class="align-top">Pelayanan ATC</td>
                        <td class="align-top">:</td>
                        <td class="align-top">ADC Combine, APP Non Radar</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">10.</td>
                        <td class="align-top">Kemampuan OPS</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Boeing 737-900 ER, Airbus 320</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">11.</td>
                        <td class="align-top">Status Bandara</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Badan Layanan Umum SK Mentri<br>Keuangan No.62/KMK.05/2017<br>Tanggal<br>3 Februari 2016</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">II.</th>
                        <th class="tg-s268" colspan="4">RUNWAY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Designations</td>
                        <td class="align-top">:</td>
                        <td class="align-top">13 dan 31</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Dimension</td>
                        <td class="align-top">:</td>
                        <td class="align-top">2.250 x 45</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Strengths</td>
                        <td class="align-top">:</td>
                        <td class="align-top">PCN 51 F/C/X/T</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">4.</td>
                        <td class="align-top">Surface</td>
                        <td class="align-top">:</td>
                        <td class="align-top">ASPHALT Flexible</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">5.</td>
                        <td class="align-top">Clearaway 13</td>
                        <td class="align-top">:</td>
                        <td class="align-top">90 x 90m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">6.</td>
                        <td class="align-top">Clearaway 31</td>
                        <td class="align-top">:</td>
                        <td class="align-top">170 x 90m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">7.</td>
                        <td class="align-top">Runway Strip</td>
                        <td class="align-top">:</td>
                        <td class="align-top">2370 x 150m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">8.</td>
                        <td class="align-top">Resa</td>
                        <td class="align-top">:</td>
                        <td class="align-top">110 x 90m</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">III.</th>
                        <th class="tg-s268" colspan="4">TAXIWAY A</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Dimension</td>
                        <td class="align-top">:</td>
                        <td class="align-top">133 x 23m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Strenghts</td>
                        <td class="align-top">:</td>
                        <td class="align-top">46 F/C/X/T</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Surface</td>
                        <td class="align-top">:</td>
                        <td class="align-top">ASPHALT Flexible</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">IV.</th>
                        <th class="tg-s268" colspan="4">TAXIWAY B</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Dimension</td>
                        <td class="align-top">:</td>
                        <td class="align-top">130 x 26m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Strenghts</td>
                        <td class="align-top">:</td>
                        <td class="align-top">51 F/C/X/T</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Surface</td>
                        <td class="align-top">:</td>
                        <td class="align-top">ASPHALT Flexible</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">V.</th>
                        <th class="tg-s268" colspan="4">APRON</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Dimension</td>
                        <td class="align-top">:</td>
                        <td class="align-top">375 x 80m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Strenghts</td>
                        <td class="align-top">:</td>
                        <td class="align-top">51 F/C/X/T</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Surface</td>
                        <td class="align-top">:</td>
                        <td class="align-top">ASPHALT Flexible</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">VI.</th>
                        <th class="tg-s268" colspan="4">HELI PAD</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Dimension</td>
                        <td class="align-top">:</td>
                        <td class="align-top">24 x 24</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">VII.</th>
                        <th class="tg-s268" colspan="4">MASKAPAI YANG BEROPERASI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Garuda Indonesia</td>
                        <td class="align-top">:</td>
                        <td class="align-top">3x Sehari</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Lion Air</td>
                        <td class="align-top">:</td>
                        <td class="align-top">4x Sehari</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Citilink</td>
                        <td class="align-top">:</td>
                        <td class="align-top">1x Sehari</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">4.</td>
                        <td class="align-top">Sriwijaya Air</td>
                        <td class="align-top">:</td>
                        <td class="align-top">1x Sehari</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">5.</td>
                        <td class="align-top">Batik Air</td>
                        <td class="align-top">:</td>
                        <td class="align-top">1x Sehari</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">6.</td>
                        <td class="align-top">Wings Air</td>
                        <td class="align-top">:</td>
                        <td class="align-top">5x Sehari</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">VIII.</th>
                        <th class="tg-s268" colspan="4">FASILITAS DAN KANTOR GEDUNG TERMINAL Lt. 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top" colspan="3">Security Check Point 1</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top" colspan="3">CIP Room</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top" colspan="3">Check-in Room</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">4.</td>
                        <td class="align-top" colspan="3">Arrival Room</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">5.</td>
                        <td class="align-top" colspan="3">Public Arrival Lobby</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">6.</td>
                        <td class="align-top" colspan="3">Public Departure Lobby</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">7.</td>
                        <td class="align-top" colspan="3">Departure Gate</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">8.</td>
                        <td class="align-top" colspan="3">Trolly Station</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">9.</td>
                        <td class="align-top" colspan="3">Smoking Room</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">10.</td>
                        <td class="align-top" colspan="3">Arrival Gate</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">11.</td>
                        <td class="align-top" colspan="3">Stair to Second Floor</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">12.</td>
                        <td class="align-top" colspan="3">Stair to Waiting Room</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">13.</td>
                        <td class="align-top" colspan="3">Toilet Lobby Keberangkatan</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">14.</td>
                        <td class="align-top" colspan="3">Toilet Ruang Check-in</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">15.</td>
                        <td class="align-top" colspan="3">Toilet Ruang Kedatangan</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">16.</td>
                        <td class="align-top" colspan="3">SToilet Lobby Kedatangan</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">17.</td>
                        <td class="align-top" colspan="3">Kantor Informasi</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">18.</td>
                        <td class="align-top" colspan="3">Kantor Hygiene Sanitasi</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">19.</td>
                        <td class="align-top" colspan="3">Kantor AVSEC</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">20.</td>
                        <td class="align-top" colspan="3">Kantor Petugas Terminal</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">21.</td>
                        <td class="align-top" colspan="3">Ruang Lanisa</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">22.</td>
                        <td class="align-top" colspan="3">Gudang</td>
                    </tr>
                </tbody>
                -->
            </table>
        </div>
        <div id="infolandasan" class="tabcontent">
            <h4>Info Landasan</h4>
            <br>
            <div class="row grid-container">
                <div class="col item3">
                    <!-- II -->
                    <div class="infoheader">
                        RUNWAY
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Designations</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">13 dan 31</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">2.250 x 45</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Strengths</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">PCN 51 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Clearaway 13</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">90 x 90m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top">Clearaway 31</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">170 x 90m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">7.</td>
                                    <td class="align-top">Runway Strip</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">2370 x 150m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">8.</td>
                                    <td class="align-top">Resa</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">110 x 90m</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- III -->
                    <div class="infoheader">
                        TAXIWAY A
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">133 x 23m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Strenghts</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">46 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- IV -->
                    <div class="infoheader">
                        TAXIWAY B
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">130 x 26m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Strenghts</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">51 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col item4">
                    <!-- V -->
                    <div class="infoheader">
                        APRON
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">375 x 80m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Strenghts</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">51 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- VI -->
                    <div class="infoheader">
                        HELI PAD
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">24 x 24</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- page-content -->

<br>
<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>