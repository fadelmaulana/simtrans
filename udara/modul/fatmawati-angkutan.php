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
</style>

<center>
    <h3>Bandara Fatmawati Soekarno Bengkulu</h3>
</center>
<br>

<div class="tab">
  <button class="panah tablinks" onclick="openTab(event, 'taxi')" id="defaultOpen">TAXI</button>
  <button class="panah tablinks" onclick="openTab(event, 'damri')">DAMRI</button>
  <button class="panah tablinks" onclick="openTab(event, 'brt')">BRT</button>
</div>

<!-- page-content -->
<main class="page-content">
    <div class="container-fluid">
        <div id="taxi" class="tabcontent">
            <h3>TAXI</h3>
            <table class="table table-sm table-striped text-center" width="100%">
                <thead>
                    <tr class="bg-primary">
                        <th style="width:100px"></th>
                        <th style='vertical-align:middle'>Perjalanan</th>
                        <th style='vertical-align:middle'>Titik Muat</th>
                        <th style='vertical-align:middle'>Tujuan</th>
                        <th style='vertical-align:middle'>Tarif</th>
                        <th style='vertical-align:middle'>Telepon</th>
                        <th style='vertical-align:middle'>Jam<br>Operasional</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // Load file koneksi.php
                include "./../koneksi.php";

                $query = "SELECT * from darike WHERE jenis = 'taksi' ORDER by perjalanan ASC"; // Query untuk menampilkan semua data siswa
                $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                        echo "<td><img src='../img/".$data['foto']."' width='150'></td>";
                        echo "<td style='vertical-align:middle'>".$data['perjalanan']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['titikmuat']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['tujuan']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['tarif']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['telepon']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['jam']." Jam</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        
        <div id="damri" class="tabcontent">
            <h3>DAMRI</h3>
            <table class="table table-sm table-striped text-center" width="100%">
                <thead>
                    <tr class="bg-primary">
                        <th style="width:100px"></th>
                        <th style='vertical-align:middle'>Perjalanan</th>
                        <th style='vertical-align:middle'>Titik Muat</th>
                        <th style='vertical-align:middle'>Tujuan</th>
                        <th style='vertical-align:middle'>Tarif</th>
                        <th style='vertical-align:middle'>Telepon</th>
                        <th style='vertical-align:middle'>Jam<br>Operasional</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // Load file koneksi.php
                include "./../koneksi.php";

                $query = "SELECT * from darike WHERE jenis = 'damri' ORDER by perjalanan ASC"; // Query untuk menampilkan semua data siswa
                $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                        echo "<td><img src='../img/".$data['foto']."' width='150'></td>";
                        echo "<td style='vertical-align:middle'>".$data['perjalanan']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['titikmuat']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['tujuan']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['tarif']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['telepon']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['jam']." Jam</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <div id="brt" class="tabcontent">
            <h3>BRT</h3>
            <table class="table table-sm table-striped text-center" width="100%">
                <thead>
                    <tr class="bg-primary">
                        <th style="width:100px"></th>
                        <th style='vertical-align:middle'>Perjalanan</th>
                        <th style='vertical-align:middle'>Titik Muat</th>
                        <th style='vertical-align:middle'>Tujuan</th>
                        <th style='vertical-align:middle'>Tarif</th>
                        <th style='vertical-align:middle'>Telepon</th>
                        <th style='vertical-align:middle'>Jam<br>Operasional</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // Load file koneksi.php
                include "./../koneksi.php";

                $query = "SELECT * from darike WHERE jenis = 'bus' ORDER by perjalanan ASC"; // Query untuk menampilkan semua data siswa
                $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                        echo "<td><img src='../img/".$data['foto']."' width='150'></td>";
                        echo "<td style='vertical-align:middle'>".$data['perjalanan']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['titikmuat']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['tujuan']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['tarif']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['telepon']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['jam']." Jam</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
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