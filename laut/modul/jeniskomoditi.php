<html>
<head>
    <link rel="stylesheet" href="https://www.cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <meta charset=utf-8 />
    
    <style>
        .morris-hover {
            position:absolute;
            z-index:1000;
        }
        
        .morris-hover.morris-default-style {     
            border-radius:10px;
            padding:6px;
            color:#666;
            background:rgba(255, 255, 255, 0.8);
            border:solid 2px rgba(230, 230, 230, 0.8);
            font-family:sans-serif;
            font-size:12px;
            text-align:center;
        }
        
        .morris-hover.morris-default-style .morris-hover-row-label {
            font-weight:bold;
            margin:0.25em 0;
        }
        
        .morris-hover.morris-default-style .morris-hover-point {
            white-space:nowrap;
            margin:0.1em 0
        }
        
        svg { width: 100%; }
    </style>
</head>
<body>
    <center>
        <h3>Arus Barang Berdasarkan Jenis Komoditi (Ton)</h3>
    </center><br>
    <div class="row">
        <div class="col">
            <center>
                <h5>Berdasarkan Jenis Komoditi</h5>
            </center>
            <br>
            <div id="grafik-jenis-komoditi"></div>
            
        </div>
        <div class="col">
            <center>
                <h5>Berdasarkan Jenis Pedagangan</h5>
            </center>
            <br>
            <div id="grafik-jenis-perdagangan"></div>
        </div>
    </div>
    
    <br>
    <hr>
    <br>
    
    <center>
        <h3>Data jumlah kapal Masuk dan Keluar di Pelabuhan Pulau Baai</h3>
    </center><br>
    <div class="row">
        <div class="col">
            <center>
                <h5>Arus Kunjungan Kapal (Gross Tonage)</h5>
            </center>
            <br>
            <div id="grafik-aruskapal-gt"></div>
        </div>
        <div class="col">
            <center>
                <h5>Arus Kunjungan Kapal (Unit)</h5>
            </center>
            <br>
            <div id="grafik-aruskapal-unit"></div>
        </div>
    </div>
    <br>
</body>
</html>

<script>
$(document).ready(function() {
  barChart();

  $(window).resize(function() {
    window.barChart.redraw();
  });
});

function barChart() {
  window.barChart = Morris.Bar({
    element: 'grafik-jenis-komoditi',
    data: [
        <?php 
        include("./../koneksi.php");
        // buat query untuk ambil data dari database
        $sql = "SELECT * FROM ipcarusbarangkomoditi";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
        echo "{ x: '".$data['tahun']."', 
        a: ".$data['curah_kering'].", 
        b: ".$data['curah_cair'].", 
        c: ".$data['bag_cargo'].", 
        d: ".$data['general_cargo']."},";
        }
        ?>
    ],
    xkey: 'x',
    ykeys: ['a', 'b', 'c', 'd'],
    labels: ['Curah Kering', 
             'Curah Cair', 
             'Bag Cargo', 
             'General Cargo'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}
</script>

<script>
$(document).ready(function() {
  barChart2();

  $(window).resize(function() {
    window.barChart2.redraw();
  });
});

function barChart2() {
  window.barChart2 = Morris.Bar({
    element: 'grafik-jenis-perdagangan',
    data: [
        <?php 
        include("./../koneksi.php");
        // buat query untuk ambil data dari database
        $sql = "SELECT * FROM ipcarusbarangpedagangan";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
        echo "{ x: '".$data['tahun']."', 
        a: ".$data['export'].", 
        b: ".$data['import'].", 
        c: ".$data['bongkar'].", 
        d: ".$data['muat']." },";
        }
        ?>
    ],
    xkey: 'x',
    ykeys: ['a', 'b', 'c', 'd'],
    labels: ['Export', 
             'Import', 
             'Bongkar', 
             'Muat'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}
</script>

<script>
$(document).ready(function() {
  barChart3();

  $(window).resize(function() {
    window.barChart3.redraw();
  });
});

function barChart3() {
  window.barChart3 = Morris.Bar({
    element: 'grafik-aruskapal-gt',
    data: [
        <?php 
        include("./../koneksi.php");
        // buat query untuk ambil data dari database
        $sql = "SELECT * FROM ipcaruskunjungankapalgt";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
        echo "{ x: '".$data['tahun']."', 
        a: ".$data['pelluar'].", 
        b: ".$data['peldalam'].", 
        c: ".$data['jumlah']."},";
        }
        ?>
    ],
    xkey: 'x',
    ykeys: ['a', 'b', 'c'],
    labels: ['Pel. Luar Negeri', 
             'Pel. Dalam Negeri', 
             'Jumlah',],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}
</script>

<script>
$(document).ready(function() {
  barChart4();

  $(window).resize(function() {
    window.barChart4.redraw();
  });
});

function barChart4() {
  window.barChart4 = Morris.Bar({
    element: 'grafik-aruskapal-unit',
    data: [
        <?php 
        include("./../koneksi.php");
        // buat query untuk ambil data dari database
        $sql = "SELECT * FROM ipcaruskunjungankapalunit";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
        echo "{ x: '".$data['tahun']."', 
        a: ".$data['pelluar'].", 
        b: ".$data['peldalam'].", 
        c: ".$data['jumlah']."},";
        }
        ?>
    ],
    xkey: 'x',
    ykeys: ['a', 'b', 'c'],
    labels: ['Pel. Luar Negeri', 
             'Pel. Dalam Negeri', 
             'Jumlah',],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}
</script>