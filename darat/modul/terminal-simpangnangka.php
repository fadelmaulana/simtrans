<?php
if(isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `rampcheck` WHERE CONCAT(`no`, `namapo`, `nokendaraan`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
}

else {
    $query = "SELECT * FROM `rampcheck`";
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
    <h4>Terminal Simpang Nangka</h4>
</center>

<br>
<!-- Isi data Start -->
<form action="" method="post">
    <input type="text" name="valueToSearch" placeholder=" Cari Data">
    <input type="submit" name="search" class="NEWCLASS" value="&#xf002;"><br><br>
    
    <table class="table table-sm table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th style="vertical-align:middle;width:20px" class="text-center">NO</th>
                <th style="vertical-align:middle;" class="text-center">No Form</th>
                <th style="vertical-align:middle;" class="text-center">Tanggal</th>
                <th style="vertical-align:middle;" class="text-center">Nama PO</th>
                <th style="vertical-align:middle;" class="text-center">No Kendaraan</th>
                <th style="vertical-align:middle;" class="text-center">Jenis Kendaraan</th>
                <th style="vertical-align:middle;" class="text-center">Jenis Trayek</th>
                <th style="vertical-align:middle;" class="text-center">Sanksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_array($search_result)){
                echo "<tr>";
                    echo "<td style='vertical-align:middle' class='text-center'>".$data['no']."</td>";
                    echo "<td style='vertical-align:middle' class='text-center'>".$data['noform']."</td>";
                    echo "<td style='vertical-align:middle' class='text-center'>".$data['tanggal']."</td>";
                    echo "<td style='vertical-align:middle' class='text-center'>".$data['namapo']."</td>";
                    echo "<td style='vertical-align:middle' class='text-center'>".$data['nokendaraan']."</td>";
                    echo "<td style='vertical-align:middle' class='text-center'>".$data['jeniskendaraan']."</td>";
                    echo "<td style='vertical-align:middle' class='text-center'>".$data['jenistrayek']."</td>";
                    echo "<td style='vertical-align:middle;background-color:".$data['warna']."' class='text-center'>".$data['sanksi']."</td>";
                echo "</tr>";
                    }		
                    ?>
        </tbody>
    </table>
</form>
<br>
<!-- Isi data End -->