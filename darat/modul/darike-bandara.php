<?php
include("./../koneksi.php");
?>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<center>
    <h4>Angkutan Dari & Ke Bandara</h4>
</center>
<!-- Tombol Buka Data Start -->
<div class="d-flex justify-content-between bd-highlight mb-3">
    <div class="p-2 bd-highlight"><button id="toggleAccordions" class="btn btn-primary" type="button" data-toggle="collapse">Buka Data</button></div>
    <div class="p-2 bd-highlight">&nbsp</div>
    <div class="p-2 bd-highlight">&nbsp</div>
</div>
<!-- Tombol Buka Data End -->

<!-- Isi data Dari & ke Bandara -->
<div id="accordion" style="width:100%;">
    
    <!-- Isi/data Taksi -->
    <div class="card">
        <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="card-header" id="headingOne">
            <h5 class="mb-0">Taksi</h5>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
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
        </div>
    </div>
    
    <!-- Isi/data BRT -->
    <div class="card">
        <div data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="card-header" id="headingOne">
            <h5 class="mb-0">BRT</h5>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
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
    </div>
</div>
<!-- Isi data Angkutan Kota End -->

<br>

<script type="text/javascript">
$('#toggleAccordions').on('click', function(e) {
  $('#accordion .collapse').toggleClass('show')
})
</script>