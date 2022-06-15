<?php
include"koneksi.php";
$data1=$_GET['data1'];
$detail_produk=mysqli_query($koneksi,"SELECT * FROM traffictlight WHERE id_loc='$data1'");
$dp=mysqli_fetch_array($detail_produk);
echo"<img src='images/cover/".$dp['produk_cover_image']."'/>
<div class='description'>
    <div class='title-area'>
          <h4>".$dp['lokasi']."</h4>
    </div>
</div>";
?>