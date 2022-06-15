<?php
include("./../koneksi.php");
?>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<center>
    <h4>DAMRI</h4>
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
        $sql1 = "SELECT * FROM damribkllubukpinangrinci";
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
                    $query1 = mysqli_query($koneksi, $sql1);
                    
                    while($data1 = mysqli_fetch_array($query1)){
                        $hargatarifac=number_format($data1['tarifac'],0,",",".");
                        $hargatarifekonomi=number_format($data1['tarifekonomi'],0,",",".");
                        echo "<tr>";
                        
                        echo "<td style='vertical-align:middle' class='text-center'>".$data1['no']."</td>";
                        echo "<td style='vertical-align:middle'>".$data1['dari']." - ".$data1['tujuan']."</td>";
                        echo "<td style='vertical-align:middle' class='text-center'>".$data1['jamkeberangkatan']."</td>";
                        echo "<td>Rp. $hargatarifekonomi</td>";
                        echo "<td>Rp. $hargatarifac</td>";
                        
                        echo "</tr>";
                    }		
                    ?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Bengkulu - Muara Sahung -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql2 = "SELECT * FROM damribklmuarasahungrinci";
        ?>
        <div data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="card-header" id="headingTwo">
            <h5 class="mb-0">Bengkulu - Muara Sahung</h5>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordion">
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
                    $query2 = mysqli_query($koneksi, $sql2);
                    
                    while($data2 = mysqli_fetch_array($query2)){
                        $hargatarifac=number_format($data2['tarifac'],0,",",".");
                        $hargatarifekonomi=number_format($data2['tarifekonomi'],0,",",".");
                        echo "<tr>";
                        
                        echo "<td style='vertical-align:middle' class='text-center'>".$data2['no']."</td>";
                        echo "<td style='vertical-align:middle'>".$data2['dari']." - ".$data2['tujuan']."</td>";
                        echo "<td style='vertical-align:middle' class='text-center'>".$data2['jamkeberangkatan']."</td>";
                        echo "<td>Rp. $hargatarifekonomi</td>";
                        echo "<td>Rp. $hargatarifac</td>";
                        
                        echo "</tr>";
                    }		
                    ?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Bengkulu - Napal Putih -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql3 = "SELECT * FROM damribklnapalrinci";
        ?>
        <div data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="card-header" id="headingThree">
            <h5 class="mb-0">Bengkulu - Napal Putih</h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
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
                    error_reporting(0);
                    $query3 = mysqli_query($koneksi, $sql3);
                    
                    while($data3 = mysqli_fetch_array($query3)){
                        $hargatarifac=number_format($data3['tarifac'],0,",",".");
                        $hargatarifekonomi=number_format($data3['tarifekonomi'],0,",",".");
                        echo "<tr>";
                        
                        echo "<td style='vertical-align:middle' class='text-center'>".$data3['no']."</td>";
                        echo "<td style='vertical-align:middle'>".$data3['dari']." - ".$data3['tujuan']."</td>";
                        echo "<td style='vertical-align:middle' class='text-center'>".$data3['jamkeberangkatan']."</td>";
                        echo "<td>Rp. $hargatarifekonomi</td>";
                        echo "<td>Rp. $hargatarifac</td>";
                        
                        echo "</tr>";
                    }		
                    ?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Bengkulu - Tasikmalaya -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql4 = "SELECT * FROM damribkltasikrinci";
        ?>
        <div data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="card-header" id="headingFour">
            <h5 class="mb-0">Bengkulu - Tasikmalaya</h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
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
                    error_reporting(0);
                    $query4 = mysqli_query($koneksi, $sql4);
                    
                    while($data4 = mysqli_fetch_array($query4)){
                        $hargatarifac=number_format($data4['tarifac'],0,",",".");
                        $hargatarifekonomi=number_format($data4['tarifekonomi'],0,",",".");
                        echo "<tr>";
                        
                        echo "<td style='vertical-align:middle' class='text-center'>".$data4['no']."</td>";
                        echo "<td style='vertical-align:middle'>".$data4['dari']." - ".$data4['tujuan']."</td>";
                        echo "<td style='vertical-align:middle' class='text-center'>".$data4['jamkeberangkatan']."</td>";
                        echo "<td>Rp. $hargatarifekonomi</td>";
                        echo "<td>Rp. $hargatarifac</td>";
                        
                        echo "</tr>";
                    }		
                    ?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Enggano -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql5 = "SELECT * FROM damriengganorinci";
        ?>
        <div data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="card-header" id="headingFive">
            <h5 class="mb-0">Enggano</h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
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
                    error_reporting(0);
                    $query5 = mysqli_query($koneksi, $sql5);
                    
                    while($data5 = mysqli_fetch_array($query5)){
                        $hargatarifac=number_format($data5['tarifac'],0,",",".");
                        $hargatarifekonomi=number_format($data5['tarifekonomi'],0,",",".");
                        echo "<tr>";
                        
                        echo "<td style='vertical-align:middle' class='text-center'>".$data5['no']."</td>";
                        echo "<td style='vertical-align:middle'>".$data5['dari']." - ".$data5['tujuan']."</td>";
                        echo "<td style='vertical-align:middle' class='text-center'>".$data5['jamkeberangkatan']."</td>";
                        echo "<td>Rp. $hargatarifekonomi</td>";
                        echo "<td>Rp. $hargatarifac</td>";
                        
                        echo "</tr>";
                    }		
                    ?>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Isi/data Sungai Hitam - Bandara -->
    <div class="card">
        <?php 
        // buat query untuk ambil data dari database
        $sql6 = "SELECT * FROM damrisungaihitamrinci";
        ?>
        <div data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" class="card-header" id="headingFive">
            <h5 class="mb-0">Sungai Hitam - Bandara</h5>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
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
                    error_reporting(0);
                    $query6 = mysqli_query($koneksi, $sql6);
                    
                    while($data6 = mysqli_fetch_array($query6)){
                        $hargatarifac=number_format($data6['tarifac'],0,",",".");
                        $hargatarifekonomi=number_format($data6['tarifekonomi'],0,",",".");
                        echo "<tr>";
                        
                        echo "<td style='vertical-align:middle' class='text-center'>".$data6['no']."</td>";
                        echo "<td style='vertical-align:middle'>".$data6['dari']." - ".$data6['tujuan']."</td>";
                        echo "<td style='vertical-align:middle' class='text-center'>".$data6['jamkeberangkatan']."</td>";
                        echo "<td>Rp. $hargatarifekonomi</td>";
                        echo "<td>Rp. $hargatarifac</td>";
                        
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