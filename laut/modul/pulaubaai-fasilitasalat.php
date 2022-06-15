<?php
include("./../koneksi.php");
?>
<?php

if(isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `pelbaai_fasilitasalat` WHERE CONCAT(`fasilitas`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
}

else {
    $query = "SELECT * FROM `pelbaai_fasilitasalat`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    include("./../koneksi.php");
    $filter_Result = mysqli_query($koneksi, $query);
    return $filter_Result;
}

?>
<center>
<h3>Pulau Baai - Fasilitas Alat</h3>
</center>

<br>

<form action="" method="post">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="text-center" style="width:30px">NO</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Fasilitas</th>
                <th class="text-center">Jumlah</th>
                <th class="text-center">Kapasitas</th>
                <th class="text-center">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="6" bgcolor="#e9ecef">A. Alat Pandu Tunda</td>
            </tr>
            <?php
            
            $query = "SELECT * from pelbaai_fasilitasalat WHERE kategori = 'A' ORDER by no ASC"; // Query untuk menampilkan semua data siswa
            
            $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
            
            while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                echo "<tr>";
                    echo "<td style='vertical-align:middle'>".$data['no']."</td>";
                    echo "<td><img src='img-pulaubaai-fasilitasalat/".$data['foto']."' width='150'></td>";
                    echo "<td style='vertical-align:middle'>".$data['fasilitas']."</td>";
                    echo "<td style='vertical-align:middle'>".$data['jumlah']." unit</td>";
                    echo "<td style='vertical-align:middle'>".$data['kapasitas']."</td>";
                    echo "<td style='vertical-align:middle'>".$data['keterangan']."</td>";
                echo "</tr>";
            }
            ?>
            <tr>
                <td colspan="6" bgcolor="#e9ecef">B. Alat Terminal Curah Kering</td>
            </tr>
            <?php
            
            $query = "SELECT * from pelbaai_fasilitasalat WHERE kategori = 'B' ORDER by no ASC"; // Query untuk menampilkan semua data siswa
            
            $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
            
            while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                echo "<tr>";
                    echo "<td style='vertical-align:middle'>".$data['no']."</td>";
                    echo "<td><img src='img-pulaubaai-fasilitasalat/".$data['foto']."' width='150'></td>";
                    echo "<td style='vertical-align:middle'>".$data['fasilitas']."</td>";
                    echo "<td style='vertical-align:middle'>".$data['jumlah']." unit</td>";
                    echo "<td style='vertical-align:middle'>".$data['kapasitas']."</td>";
                    echo "<td style='vertical-align:middle'>".$data['keterangan']."</td>";
                echo "</tr>";
            }
            ?>
            <tr>
                <td colspan="6" bgcolor="#e9ecef">C. Alat Terminal Multi Purpose & Curah Cair</td>
            </tr>
            <?php
            
            $query = "SELECT * from pelbaai_fasilitasalat WHERE kategori = 'C' ORDER by no ASC"; // Query untuk menampilkan semua data siswa
            
            $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
            
            while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                echo "<tr>";
                    echo "<td style='vertical-align:middle'>".$data['no']."</td>";
                    echo "<td><img src='img-pulaubaai-fasilitasalat/".$data['foto']."' width='150'></td>";
                    echo "<td style='vertical-align:middle'>".$data['fasilitas']."</td>";
                    echo "<td style='vertical-align:middle'>".$data['jumlah']." unit</td>";
                    echo "<td style='vertical-align:middle'>".$data['kapasitas']."</td>";
                    echo "<td style='vertical-align:middle'>".$data['keterangan']."</td>";
                echo "</tr>";
            }
            ?>
            <tr>
                <td colspan="6" bgcolor="#e9ecef">D. Fasilitas Pendukung</td>
            </tr>
            <?php
            
            $query = "SELECT * from pelbaai_fasilitasalat WHERE kategori = 'D' ORDER by no ASC"; // Query untuk menampilkan semua data siswa
            
            $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
            
            while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                echo "<tr>";
                    echo "<td style='vertical-align:middle'>".$data['no']."</td>";
                    echo "<td><img src='img-pulaubaai-fasilitasalat/".$data['foto']."' width='150'></td>";
                    echo "<td style='vertical-align:middle'>".$data['fasilitas']."</td>";
                    echo "<td style='vertical-align:middle'>".$data['jumlah']." unit</td>";
                    echo "<td style='vertical-align:middle'>".$data['kapasitas']."</td>";
                    echo "<td style='vertical-align:middle'>".$data['keterangan']."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</form>