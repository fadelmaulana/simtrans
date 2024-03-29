<?php
 // memanggil koneksi
 require_once __DIR__.'/koneksi.php';

 $sql = 'SELECT * FROM kantor';
 $rs = mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>CRUD DI PHP DENGAN AJAX</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<style type="text/css">
body { font-family: verdana; font-size: 13px; }
input, textarea, button { padding: 5px; }
button { cursor: pointer; }
.container { margin: auto; }
.container .content-form { display: none; }
.container .content-view { display: none; }
.container .table thead tr th { padding: 7px 10px; background-color: #EBEBEB; }
.container .table tbody tr td { padding: 7px 10px; border-bottom: 1px solid #DDDDDD; }
.close-form { float: right; margin-right: 5px; cursor: pointer; }
</style>
</head>
<body>
<div class="container">
    <h2>GIS Informasi Kantor</h2>
    <hr />

    <!-- FORM UNTUK INPUT ATAU MENAMPILKAN HASIL EDIT -->
    <div class="content-form">
    <hr />
    <span class="title">FORM ENTRI</span>
    <span class="close-form">X</span>
    <hr />
        <form method="POST" class="form" action="index.php">
            <table>
                <tbody>
                    <tr>
                        <td width="100">Nama</td>
                        <td>: <input type="text" name="nama" id="nama" /></td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td>: <input type="text" name="kota" id="kota" /></td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td>: <input type="text" name="provinsi" id="provinsi" /></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <textarea name="alamat" id="alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td>NO Telp</td>
                        <td>: <input type="text" name="no_hp" id="no_hp" /></td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td>: <input type="text" name="website" id="website" /></td>
                    </tr>
                    <tr>
                        <td>Latitude</td>
                        <td>: <input type="text" name="lat" id="lat" /></td>
                    </tr>
                    <tr>
                        <td>Longitude</td>
                        <td>: <input type="text" name="lng" id="lng" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" id="button">TAMBAH</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
     <hr />
     </div>
    <!-- /FORM UNTUK INPUT ATAU MENAMPILKAN HASIL EDIT -->


 <!-- MENAMPILKAN VIEW -->
 <div class="content-view">
 <hr />
 <span class="title">VIEW</span>
 <span class="close-form">X</span>
 <hr />
 <table>
  <tbody>
  <tr>
   <td width="100">Nama</td>
   <td>: <span class="result-nama"></span></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td>: <span class="result-kota"></span></td>
  </tr>
  </tbody>
 </table>
 <hr />
 </div>
 <!-- /MENAMPILKAN VIEW -->

 <a href="#" class="control" data-set="tambah" data-url="aksi.php?set=tambah">Tambah data</a>
 <table class="table" width="100%">
  <thead>
  <tr>
  <th width="50">NO</th>
  <th width="170">NAMA</th>
  <th width="300">KOTA</th>
  <th width="170">PROVINSI</th>
  <th width="300">ALAMAT</th>
  <th width="170">NO TELP</th>
  <th width="300">LATITUDE</th>
  <th width="160">LONGITUDE</th>
      <th width="160">AKSI</th>
  </tr>
  </thead>
  <tbody>
  <?php
   $i = 1;
   if(mysql_num_rows($rs) > 0){
   while($row = mysql_fetch_array($rs)){
    $id_loc = $row['id_loc'];
    $nama = $row['nama'];
       $kota = $row['kota'];
       $prov = $row['provinsi'];
    $alamat = $row['alamat'];
       $notelp = $row['no_hp'];
       $lat = $row['lat'];
       $lng = $row['lng'];
  ?>
  <tr>
  <td align="center"><?php echo $i; ?></td>
  <td><?php echo $nama; ?></td>
  <td><?php echo $kota; ?></td>
  <td><?php echo $prov; ?></td>
  <td><?php echo $alamat; ?></td>
  <td><?php echo $notelp; ?></td>
  <td><?php echo $lat; ?></td>
<td><?php echo $lng; ?></td>
  <td align="center">
  <a href="#" class="control" data-set="lihat" data-nama="<?php echo $nama; ?>" data-alamat="<?php echo $alamat; ?>">lihat</a> | 
  <a href="#" class="control" data-set="edit" data-nama="<?php echo $nama; ?>" data-alamat="<?php echo $alamat; ?>" data-url="aksi.php?set=edit&id_loc=<?php echo $id_loc; ?>">edit</a> | 
  <a href="aksi.php?set=hapus&id_loc=<?php echo $id_loc; ?>" class="hapus">hapus</a>
  </td>
  </tr>
  <?php $i++; }}else{ ?>
  <tr>
  <td colspan="4" align="center">BELUM ADA DATA</td>
  </tr>
  <?php } ?>
  </tbody>
 </table>
</div>
<script type="text/javascript">
$(function(){
 $('.control').on('click', function(){
  // mengambil isi element data-set dari class control untuk mengetahui proses yang akan di lakukan
  $set = $(this).attr('data-set');

  // jika isi set adalah tambah atau edit maka yang di animasi adalam form
  if($set == 'tambah' || $set == 'edit'){
   // mengambil isi element data-url dari class control
   $url = $(this).attr('data-url');

   // buat motion buka tutup
   $('.content-form, .content-view').slideUp('fast');
   setTimeout(function(){ $('.content-form').slideDown('slow') }, 500);

   // ganti isi attribute action pada class form dengan url hasil dari element data-url pada class control
   $('.form').attr('action', $url);

  // tapi jika isi set adalah lihat maka yang di animasi adalah view
  }else if($set == 'lihat'){
   $('.content-form, .content-view').slideUp('fast');
   setTimeout(function(){ $('.content-view').slideDown('slow') }, 500);
  }

  if($set == 'tambah'){
   // kosongkan input, dan textarea
   $('#nama, #alamat').val('');

   // rubah text button pada class form dengan tulisan TAMBAH DATA, dan rubah judul form pada class title
   $('.content-form .title').html('FORM ENTRI');
   $('.form #button').html('TAMBAH DATA');

  }else if($set == 'edit'){
   // ambil isi attribute data-nama dan data-kota pada class control
   $nama = $(this).attr('data-nama');
   $kota = $(this).attr('data-kota');

   // kemudian masukan kedalam input, dan textarea
   $('#nama').val($nama);
   $('#kota').val($kota);

   // rubah text button pada class form dengan tulisan SIMPAN, dan rubah judul form pada class title
   $('.content-form .title').html('FORM EDIT');
   $('.form #button').html('SIMPAN');

  }else if($set == 'lihat'){
   // ambil isi attribute data-nama dan data-kota pada class control
   $nama = $(this).attr('data-nama');
   $kota = $(this).attr('data-kota');

   // kemudian tempelkan di class result-nama dan result-kota;
   $('.content-view .result-nama').html($nama);
   $('.content-view .result-kota').html($kota);
  }
 });

 // menutup form atau view
 $('.close-form').on('click', function(){
  $('.content-form, .content-view').slideUp('fast');
 });

 $('.form').on('submit', function(e){
  // ambil semua data yang ada di form dengan serialize()
  $data = $(this).serialize();

  // ambil url yang sudah di rubah pada attribute action
  $url = $(this).attr('action');

  // gunakan ajax untuk mengirim data
  // disini saya manggunakan JSON untuk mendapatkan response nya
  $.ajax({
   'type': 'POST',
   'dataType': 'JSON',
   'data': $data,
   'url': $url,
   'beforeSend': function(){
    // proses sebelum mengirim data
   },
   'success': function(response){
    // proses saat data berhasil di kirim
    if(response.error == false){
     alert(response.pesan);
    }

    // segerkan halaman
    window.location = 'index.php';
   }
  });

  // tahan form agar tidak berpindah halaman
  e.preventDefault();
 });

 $('.hapus').on('click', function(e){
  // ambil isi attribute href pada class hapus
  $url = $(this).attr('href');

  if(confirm('Yakin akan di hapus ? ')){
   $.ajax({
    'type': 'GET',
    'dataType': 'JSON',
    'url': $url,
    'beforeSend': function(){
     // proses sebelum mengirim data
    },
    'success': function(response){
     // proses saat data berhasil di kirim
     if(response.error == false){
      alert(response.pesan);
     }

     // segerkan halaman
     window.location = 'index.php';
    }
   });

   return false;
  }

  e.preventDefault();
 })
});
</script>
</body>
</html>
