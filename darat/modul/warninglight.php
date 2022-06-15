<?php
include("./../koneksi.php");
?>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<center>
    <h4>WARNING LIGHT</h4>
</center>
<br>
<!-- Isi data Angkutan Kota Start -->
<?php 
// buat query untuk ambil data dari database
$sql = "SELECT * FROM llajwarning";
$query = mysqli_query($koneksi, $sql);
?>
<table class="table table-sm table-bordered table-striped">
    <tr>
        <th style="vertical-align:middle;width:20px" class="text-center">NO</th>
        <th style="vertical-align:middle;" class="text-center">Lokasi</th>
        <th style="vertical-align:middle;" class="text-center">Kabupaten</th>
    </tr>
    <?php
    $query = mysqli_query($koneksi, $sql);
                    
    while($trafficlight = mysqli_fetch_array($query)){
        echo "<tr>";
                        
        echo "<td style='vertical-align:middle' class='text-center'>".$trafficlight['no']."</td>";
        echo "<td style='vertical-align:middle'>".$trafficlight['lokasi']."</td>";
        echo "<td style='vertical-align:middle'>".$trafficlight['kabupaten']."</td>";
                        
        echo "</tr>";
    }		
    ?>
</table>
<!-- Isi data Angkutan Kota End -->



<!-- Rute A -->
<div class="modal fade bd-example-modal-lg" id="lokasi" tabindex="90" role="dialog" aria-labelledby="ruteaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ruteaLongTitle">Lokasi Traffic Light</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Under Development
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>