<?php
// Turn off error reporting
error_reporting(0);
?>

Silahkan Pilih Tahun :
<form  method="post" name="form1" id="form1">  
<?php
// Load file koneksi.php
include "koneksi.php";

$que = "SELECT DISTINCT tahun FROM fatmawati_datallu ORDER by no ASC"; // Query untuk menampilkan semua data siswa
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

<br>
                Data LLU Tahun <?php echo $_POST['tahun']; ?>
                <table class="table table-bordered table-striped text-center" width="100%">
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
                        include "koneksi.php";

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
                </table> <br>