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
    <div class="row">
        <div class="col">
            <center>
                <h3>Bongkar Muat Barang</h3>
            </center>
            <br>
            <div id="grafik-bongkar-muat"></div>
        </div>
        <div class="col">
            <center>
                <h3>Turun Naik Penumpang</h3>
            </center>
            <br>
            <div id="grafik-turun-naik"></div>
        </div>
    </div>
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
    element: 'grafik-bongkar-muat',
    data: [
        <?php 
        include("./../koneksi.php");
        // buat query untuk ambil data dari database
        $sql = "SELECT * FROM ipcbongkarmuat";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
        echo "{ x: '".$data['bulan']."', 
        a: ".$data['bongkar'].", 
        b: ".$data['muat']." },";
        }
        ?>
    ],
    xkey: 'x',
    ykeys: ['a', 'b'],
    labels: ['Bongkar', 
             'Muat'],
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
    element: 'grafik-turun-naik',
    data: [
        <?php 
        include("./../koneksi.php");
        // buat query untuk ambil data dari database
        $sql = "SELECT * FROM ipcturunnaikpenumpang";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
        echo "{ x: '".$data['bulan']."', 
        a: ".$data['turun'].", 
        b: ".$data['naik']." },";
        }
        ?>
    ],
    xkey: 'x',
    ykeys: ['a', 'b'],
    labels: ['Turun', 
             'Naik'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}
</script>