<?php
include("./../koneksi.php");
?>
<?php

if(isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `pelbaai_fasilitasgudang` WHERE CONCAT(`fasilitas`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
}

else {
    $query = "SELECT * FROM `pelbaai_fasilitasgudang`";
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
<h3>Pulau Baai - Fasilitas Gudang dan Lapangan</h3>
</center>

<br>

<form action="" method="post">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="text-center" style="width:30px">NO</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Fasilitas</th>
                <th class="text-center">Luas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $query = "SELECT * from pelbaai_fasilitasgudang ORDER by no ASC"; // Query untuk menampilkan semua data siswa
            
            $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
            
            while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                echo "<tr>";
                    echo "<td style='vertical-align:middle'>".$data['no']."</td>";
                    echo "<td><img src='img-pulaubaai-fasilitasgudang/".$data['foto']."' width='150'></td>";
                    echo "<td style='vertical-align:middle'>".$data['fasilitas']."</td>";
                    echo "<td style='vertical-align:middle'>".$data['luas']."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</form>