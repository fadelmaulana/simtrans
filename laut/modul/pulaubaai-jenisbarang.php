<?php
include("./../koneksi.php");
$query = "SELECT DISTINCT komoditi FROM `ipccargo` ORDER BY `no` ASC";
$sql = mysqli_query($koneksi, $query);
?>

<center>
<h3>Pulau Baai - Jenis Barang Muatan</h3>
</center>

<br>

<form action="" method="post">    
    <table class="table table-sm table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="text-center" style="width:30px">NO</th>
                <th class="text-center">Komoditi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            //set counter variable 
            $counter = 1; 
            while($row = mysqli_fetch_array($sql)){
                echo "
                <tr>
                    <td class='text-center'>" . $counter . "</td>
                    <td>" .$row["komoditi"]. "</td>
                </tr>
                ";
            $counter++; //increment counter by 1 on every pass 
            }?>
        </tbody>
    </table>
</form>