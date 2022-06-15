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
  <button class="panah tablinks" onclick="openTab(event, 'atm')" id="defaultOpen">ATM</button>
  <button class="panah tablinks" onclick="openTab(event, 'parkir')">Parkir</button>
  <button class="panah tablinks" onclick="openTab(event, 'dropzone')">Drop Zone</button>
  <button class="panah tablinks" onclick="openTab(event, 'kios')">Kios</button>
  <button class="panah tablinks" onclick="openTab(event, 'musholla')">Musholla</button>
  <button class="panah tablinks" onclick="openTab(event, 'waitingroom')">Waiting Room</button>
  <button class="panah tablinks" onclick="openTab(event, 'loket')">Loket</button>
</div>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <div id="atm" class="tabcontent">
                    <h3>ATM</h3>
                    <div style="margin-top:10px;" class="row">
                        <?php
                        // Load file koneksi.php
                        include "./../koneksi.php";

                        $query = "SELECT * from fatmawati_fasilitas WHERE jenis = 'atm' ORDER by nama ASC"; // Query untuk menampilkan semua data
                        $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            echo "<div class='col-sm-3 col-sx-6'>";
                                echo "<div style='border:1px solid #f1f1f1;width:150px;height:150px'>";
                                    echo "<img src='../img/".$data['foto']."' width='150'>";
                                echo "</div>";
                                echo "<div style='padding-left:1px;'>".$data['nama']."</div>";
                                echo "<p style='padding-left:1px;margin-bottom:20px;margin-top:-10px;' class='small'>".$data['lokasi']."</p>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>

                <div id="parkir" class="tabcontent">
                    <h3>Parkir Area</h3>
                    <div style="margin-top:10px;" class="row">
                        <?php
                        // Load file koneksi.php
                        include "./../koneksi.php";

                        $query = "SELECT * from fatmawati_fasilitas WHERE jenis = 'parkir' ORDER by nama ASC"; // Query untuk menampilkan semua data
                        $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            echo "<div class='col-sm-3 col-sx-6'>";
                                echo "<div style='border:1px solid #f1f1f1;width:150px;height:150px'>";
                                    echo "<img src='../img/".$data['foto']."' width='150'>";
                                echo "</div>";
                                echo "<div style='padding-left:1px;'>".$data['nama']."</div>";
                                echo "<p style='padding-left:1px;margin-bottom:20px;margin-top:-10px;' class='small'>".$data['lokasi']."</p>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>

                <div id="dropzone" class="tabcontent">
                    <h3>Drop Zone</h3>
                    <div style="margin-top:10px;" class="row">
                        <?php
                        // Load file koneksi.php
                        include "./../koneksi.php";

                        $query = "SELECT * from fatmawati_fasilitas WHERE jenis = 'dropzone' ORDER by nama ASC"; // Query untuk menampilkan semua data
                        $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            echo "<div class='col-sm-3 col-sx-6'>";
                                echo "<div style='border:1px solid #f1f1f1;width:150px;height:150px'>";
                                    echo "<img src='../img/".$data['foto']."' width='150'>";
                                echo "</div>";
                                echo "<div style='padding-left:1px;'>".$data['nama']."</div>";
                                echo "<p style='padding-left:1px;margin-bottom:20px;margin-top:-10px;' class='small'>".$data['lokasi']."</p>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>

                <div id="kios" class="tabcontent">
                    <h3>Kios</h3>
                    <div style="margin-top:10px;" class="row">
                        <?php
                        // Load file koneksi.php
                        include "./../koneksi.php";

                        $query = "SELECT * from fatmawati_fasilitas WHERE jenis = 'kios' ORDER by nama ASC"; // Query untuk menampilkan semua data
                        $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            echo "<div class='col-sm-3 col-sx-6'>";
                                echo "<div style='border:1px solid #f1f1f1;width:150px;height:150px'>";
                                    echo "<img src='../img/".$data['foto']."' width='150'>";
                                echo "</div>";
                                echo "<div style='padding-left:1px;'>".$data['nama']."</div>";
                                echo "<p style='padding-left:1px;margin-bottom:20px;margin-top:-10px;' class='small'>".$data['lokasi']."</p>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>

                <div id="musholla" class="tabcontent">
                    <h3>Musholla</h3>
                    <div style="margin-top:10px;" class="row">
                        <?php
                        // Load file koneksi.php
                        include "./../koneksi.php";

                        $query = "SELECT * from fatmawati_fasilitas WHERE jenis = 'musholla' ORDER by nama ASC"; // Query untuk menampilkan semua data
                        $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            echo "<div class='col-sm-3 col-sx-6'>";
                                echo "<div style='border:1px solid #f1f1f1;width:150px;height:150px'>";
                                    echo "<img src='../img/".$data['foto']."' width='150'>";
                                echo "</div>";
                                echo "<div style='padding-left:1px;'>".$data['nama']."</div>";
                                echo "<p style='padding-left:1px;margin-bottom:20px;margin-top:-10px;' class='small'>".$data['lokasi']."</p>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>

                <div id="waitingroom" class="tabcontent">
                    <h3>Waiting Room</h3>
                    <div style="margin-top:10px;" class="row">
                        <?php
                        // Load file koneksi.php
                        include "./../koneksi.php";

                        $query = "SELECT * from fatmawati_fasilitas WHERE jenis = 'waitingroom' ORDER by nama ASC"; // Query untuk menampilkan semua data
                        $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            echo "<div class='col-sm-3 col-sx-6'>";
                                echo "<div style='border:1px solid #f1f1f1;width:150px;height:150px'>";
                                    echo "<img src='../img/".$data['foto']."' width='150'>";
                                echo "</div>";
                                echo "<div style='padding-left:1px;'>".$data['nama']."</div>";
                                echo "<p style='padding-left:1px;margin-bottom:20px;margin-top:-10px;' class='small'>".$data['lokasi']."</p>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>

                <div id="loket" class="tabcontent">
                    <h3>Loket</h3>
                    <div style="margin-top:10px;" class="row">
                        <?php
                        // Load file koneksi.php
                        include "./../koneksi.php";

                        $query = "SELECT * from fatmawati_fasilitas WHERE jenis = 'loket' ORDER by nama ASC"; // Query untuk menampilkan semua data
                        $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            echo "<div class='col-sm-3 col-sx-6'>";
                                echo "<div style='border:1px solid #f1f1f1;width:150px;height:150px'>";
                                    echo "<img src='../img/".$data['foto']."' width='150'>";
                                echo "</div>";
                                echo "<div style='padding-left:1px;'>".$data['nama']."</div>";
                                echo "<p style='padding-left:1px;margin-bottom:20px;margin-top:-10px;' class='small'>".$data['lokasi']."</p>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <!-- page-content" -->

    <!-- page-wrapper -->
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