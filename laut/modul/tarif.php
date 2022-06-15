<?php

if(isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `pelbaai` WHERE CONCAT(`no`, `namakapal`, `jurusan`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
}

else {
    $query = "SELECT * FROM `pelbaai`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query) {
    include("./../koneksi.php");
    $filter_Result = mysqli_query($koneksi, $query);
    return $filter_Result;
}

?>
<center>
<h3>Tarif</h3>
</center>

<br>

<form action="" method="post">
    <input type="text" name="valueToSearch" placeholder="Cari Data">
    <input type="submit" name="search" class="NEWCLASS" value="&#xf002;"><br><br>
    
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">NO</th>
                <th class="text-center">Nama Kapal</th>
                <th class="text-center">Trayek (Jurusan)</th>
                <th class="text-center" style="width:150px">Kapasistas</th>
                <th class="text-center">Jadwal</th>
                <th class="text-center" style="width:200px">Tarif</th>
                <th class="text-center">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <!-- populate table from mysql database -->
            <?php while($row = mysqli_fetch_array($search_result)){
                $jmltarifekodewasa = $row['tarifekonomidewasa'] + $row['asuransiekodws'];
                $jmltarifekoanak = $row['tarifekonomianak'] + $row['asuransiekoank'];
                $jmltarifbisnisdewasa = $row['tarifbisnisdewasa'] + $row['asuransibsndws'];
                $jmltarifbisnisanak = $row['tarifbisnisanak'] + $row['asuransibsnank'];
                $trfbayi = $row['tarifbayi'];
                echo "
                <tr>
                <td class='text-center'>" .$row["no"]. "</td>
                <td>" .$row["namakapal"]. "</td>
                <td>" .$row["jurusan"]. "</td>
                <td>Orang : " .$row["kapasitasorang"]. "<br>
                    Truk : " .$row["kapasitastruk"]. " Unit<br>
                    Minibus : " .$row["kapasitasminibus"]. " Unit<br>
                </td>
                <td>" .$row["jadwal"]. "</td>
                <td><b>- &nbspKelas Ekonomi :</b><br>
                    &nbsp&nbsp Dewasa : Rp. " . number_format($jmltarifekodewasa, 0, ',', '.') . "<br>
                    &nbsp&nbsp Anak-Anak : Rp. " . number_format($jmltarifekoanak, 0, ',', '.') . "<br><br>
                    <b>- &nbspKelas Bisnis :</b><br>
                    &nbsp&nbsp Dewasa : Rp. " . number_format($jmltarifbisnisdewasa, 0, ',', '.') . "<br>
                    &nbsp&nbsp Anak-Anak : Rp. " . number_format($jmltarifbisnisanak, 0, ',', '.') . "<br><br>
                    Bayi : Rp. " .$row["tarifbayi"]. "
                </td>
                <td>" .$row["keterangan"]. "</td>
                </tr>
                ";
            }?>
        </tbody>
    </table>
</form>