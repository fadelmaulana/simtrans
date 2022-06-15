<?php
 // memanggil koneksi
 require_once __DIR__.'/koneksi.php';

 // menentukan apakah proses berupa tamnbah, edit atau hapus
 $set = $_GET['set'];

  // proses tambah
 if($set == 'tambah'){
  $nama = $_POST['nama'];
  $kota = $_POST['alamat'];
  $provinsi = $_POST['provinsi'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $website = $_POST['website'];
  $latitude = $_POST['lat'];
  $longitude = $_POST['lng'];

  $sql = 'INSERT INTO kantor SET';
  $sql .= ' nama="'.$nama.'",';
  $sql .= ' website="'.$website.'",';
  $sql .= ' no_hp="'.$no_hp.'",';
  $sql .= ' alamat="'.$alamat.'",';
  $sql .= ' kota="'.$kota.'",';
  $sql .= ' provinsi="'.$provinsi.'",';
  $sql .= ' lat="'.$latitude.'",';
  $sql .= ' lng="'.$longitude.'"';
  $rs = mysql_query($sql);

  $id = mysql_insert_id();

  // untuk response ya saya menggunakan array agar bisa menjadi JSON
  $response = array(
   'error'=>false,
   'pesan'=>'Data berhasil di tambahkan'
  );

  // rubah bentuk array ke format JSON
  echo json_encode($response);

 // proses edit
 }elseif($set == 'edit'){
  $id = intval($_GET['id_loc']);
  $nama = $_POST['nama'];
  $kota = $_POST['alamat'];
  $provinsi = $_POST['provinsi'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $website = $_POST['website'];
  $latitude = $_POST['lat'];
  $longitude = $_POST['lng'];

  $sql = 'UPDATE kantor SET';
  $sql .= ' nama="'.$nama.'",';
  $sql .= ' website="'.$website.'",';
  $sql .= ' no_hp="'.$no_hp.'",';
  $sql .= ' alamat="'.$alamat.'",';
  $sql .= ' kota="'.$kota.'",';
  $sql .= ' provinsi="'.$provinsi.'",';
  $sql .= ' lat="'.$latitude.'",';
  $sql .= ' lng="'.$longitude.'"';
  $sql .= ' WHERE id_loc='.$id;
  mysql_query($sql);

  // untuk response ya saya menggunakan array agar bisa menjadi JSON
  $response = array(
   'error'=>false,
   'pesan'=>'Data berhasil di rubah'
  );

  // rubah bentuk array ke format JSON
  echo json_encode($response);

 // proses hapus
 }elseif($set == 'hapus'){
  $id = intval($_GET['id_loc']);

  $sql = 'DELETE FROM kantor';
  $sql .= ' WHERE id_loc='.$id;
  mysql_query($sql);

  // untuk response ya saya menggunakan array agar bisa menjadi JSON
  $response = array(
   'error'=>false,
   'pesan'=>'Data berhasil di hapus'
  );

  // rubah bentuk array ke format JSON
  echo json_encode($response);
 }
