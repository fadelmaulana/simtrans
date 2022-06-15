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
        <h3>Kunjungan Kapal</h3>
    </center>
    
    <br>
    
    <div id="grafik-kunjungan-kapal"></div>

</body>
</html>

<script>
$(document).ready(function() {
  barChart();
  lineChart();
  areaChart();
  donutChart();

  $(window).resize(function() {
    window.barChart.redraw();
    window.lineChart.redraw();
    window.areaChart.redraw();
    window.donutChart.redraw();
  });
});

function barChart() {
  window.barChart = Morris.Bar({
    element: 'grafik-kunjungan-kapal',
    data: [
        <?php 
        include("./../koneksi.php");
        // buat query untuk ambil data dari database
        $sql = "SELECT * FROM kunjungankapal";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
        echo "{ x: '".$data['bulan']."', 
        a: ".$data['kapalkargo'].", 
        b: ".$data['kapalkontainer'].", 
        c: ".$data['kapaltanker'].", 
        d: ".$data['kapalperintis'].", 
        e: ".$data['kapalasdp'].", 
        f: ".$data['kapalpenumpang']." },";
        }
        ?>
    ],
    xkey: 'x',
    ykeys: ['a', 'b', 'c', 'd', 'e', 'f'],
    labels: ['Kapal Kargo', 
             'Kapal Kontainer', 
             'Kapal Tanker', 
             'Kepal Perintis', 
             'Kapal ASDP', 
             'Kapal Penumpang'],
    lineWidth: '2px',
    resize: true,
    redraw: true
  });
}
</script>