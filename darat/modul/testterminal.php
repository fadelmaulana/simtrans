<?php
include("./../koneksi.php");
?>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<center>
    <h4>Terminal Simpang Nangka</h4>
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
    
    <!-- Isi/data Angkot Bengkulu - Lubuk Pinang -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql = "SELECT * FROM rampcheck WHERE pengisi='Terminal Simpang Nangka'";
        ?>
        <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="card-header" id="headingOne">
            <h5 class="mb-0">Bengkulu - Lubuk Pinang</h5>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2" style="vertical-align:middle;width:20px" class="text-center">NO</th>
                        <th rowspan="2" style="vertical-align:middle;" class="text-center">Trayek</th>
                        <th rowspan="2" style="vertical-align:middle;" class="text-center">Jam Keberangkatan</th>
                        <th colspan="2" style="vertical-align:middle;" class="text-center">Tarif</th>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle;" class="text-center">Ekonomi</td>
                        <td style="vertical-align:middle;" class="text-center">AC</td>
                    </tr>
                    <?php
                    $query = mysqli_query($koneksi, $sql);
                    
                    while($data = mysqli_fetch_array($query)){
                                            
                        echo "<tr>";
                        
                        echo "<td style='vertical-align:middle' class='text-center'>".$data['no']."</td>";
                        echo "<td style='vertical-align:middle'>".$data['noform']." - ".$data['tanggal']."</td>";
                        echo "<td style='vertical-align:middle' class='text-center'>".$data['namapo']."</td>";
                        
                        echo "</tr>";
                    }		
                    ?>
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