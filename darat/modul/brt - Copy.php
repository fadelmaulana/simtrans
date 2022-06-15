<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `brt` WHERE CONCAT(`no`, `rute`, `halte`, `jamoperasi`, `tarif`,`tarif2`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
}

else {
    $query = "SELECT * FROM `brt`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "simtrans");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>

<center><h4>BIS RAPID TRANSIT (BRT)</h4></center><br>
<form action="" method="post">
    <div class="input-group col-lg-6">
        <input type="text" class="form-control" name="valueToSearch" placeholder="Cari Data">
        <span class="input-group-btn">
            <!-- tombol search dan reset -->
            <input class="btn btn-success" type="submit" name="search" value="CARI">
            <a href="" class="btn btn-warning">RESET</a>
        </span>
    </div><br>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center" style="width:20px">NO</th>
                <th class="text-center" style="width:31%">Rute</th>
                <th class="text-center" style="width:22%">Halte</th>
                <th class="text-center" style="width:18%">Jam Operasi</th>
                <th class="text-center" style="width:80px">Tarif</th>
                <th class="text-center" style="width:110px">Rincian</th>
            </tr>
        </thead>
        <tbody>
            <!-- populate table from mysql database -->
            <?php while($row = mysqli_fetch_array($search_result)){
            $tarif2 = $row["tarif2"];
            $tarif2nominal = number_format($tarif2);
            echo "
			<tr>
				<td class='align-middle text-center'>" . $row["no"]. "</td>
				<td class='align-middle'>" . $row["rute"]. "</td>
				<td class='align-middle'>" . $row["halte"]. "</td>
				<td class='align-middle'>Setiap Hari Mulai Pukul :<br>" . $row["jamoperasi"]. " (Berjadwal)</td>
                <td class='align-middle'>
                    <b>- 2018 :</b>
                    <br>
                    &nbsp&nbsp Rp. " . $row["tarif"]. "
                    <br>
                    <b>- 2019 :</b>
                    <br>
                    &nbsp&nbsp Rp. ".$tarif2nominal."
                </td>
                <td class='align-middle'><a href='?r=rinci" . $row["no"]. "'>Tampilkan Rincian</a></td>
			</tr>";
            }?>
        </tbody>
    </table>
</form>