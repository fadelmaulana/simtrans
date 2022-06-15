<?php
if(isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `pelbaai_perusahaan` WHERE CONCAT(`no`, `namaperusahaan`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
}

else {
    $query = "SELECT * FROM `pelbaai_perusahaan`";
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
    <h3>Pulau Baai - Perusahaan</h3>
</center>

<br>

<form action="" method="post">
    <input type="text" name="valueToSearch" placeholder="Cari Data">
    <input type="submit" name="search" class="NEWCLASS" value="&#xf002;"><br><br>
    
    <table class="table table-sm table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="text-center" style="width:30px">NO</th>
                <th class="text-center">Nama Perusahaan</th>
            </tr>
        </thead>
        <tbody>
            <!-- populate table from mysql database -->
            <?php while($row = mysqli_fetch_array($search_result)){
                echo "
                <tr>
                    <td class='text-center'>" .$row["no"]. "</td>
                    <td>" .$row["namaperusahaan"]. "</td>
                </tr>
                ";
            }?>
        </tbody>
    </table>
</form>