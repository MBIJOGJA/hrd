<html>
<head>
    <title></title>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<h2>Grafik Batang</h2>
<?php
include "koneksi.php"; ?>
    <script type="text/javascript" src="Chart.js"></script>
    <meta charset="utf-8"/>
    <title>Form Wizard with jQuery and PHP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
    <div class="box box-solid box-primary">
                <div class="box-header">
                <h3 class="btn btn disabled box-title">
                <i class="fa fa-user-md"></i> Dashboard </h3>
                <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                <i class="fa fa-minus"></i></a>
                    </div>
                     <div class="box-body">
                <table border="0" width="1030">
                <div class="form-group">
    <?php
$host="localhost";
$user="root";
$pass="";

$db="sistempegawai";

$sql=mysql_connect($host,$user,$pass);
mysql_select_db($db,$sql);
    ?>
 
    <div style="width: 800px;margin: 0px auto;">
        <canvas id="myChart"></canvas>
    </div>
 
    <br/>
    <br/>

    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Passed", "Hired", "Failed", "Pre-Screening"],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $jumlah_passed = mysql_query("select * from recruitment where status_recruitment='Passed'");
                    echo mysql_num_rows($jumlah_passed);
                    ?>, 
                    <?php 
                    $jumlah_hired = mysql_query("select * from recruitment where status_recruitment='Hired'");
                    echo mysql_num_rows($jumlah_hired);
                    ?>, 
                    <?php 
                    $jumlah_failed = mysql_query("select * from recruitment where status_recruitment='Failed'");
                    echo mysql_num_rows($jumlah_failed);
                    ?>, 
                    <?php 
                    $jumlah_prescreening = mysql_query("select * from recruitment where status_recruitment='Pre-screening'");
                    echo mysql_num_rows($jumlah_prescreening);
                    ?>
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
</div>
</table>
</div>
</div>

<h2>grafik Lingkaran</h2>
<?php 
$host="localhost";
$user="root";
$password="";
$database="sistempegawai";
$koneksi=mysql_connect($host,$user,$password);
mysql_select_db($database,$koneksi);
//cek koneksi
if($koneksi){
} else {
    echo"gagal koneksi";
}
$hired = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Hired'");
$prescreening = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Pre-screening'");
$passed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed'");
$failed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='failed'");
$all = mysql_query("SELECT*From recruitment WHERE nama");

$jumlahhired = mysql_num_rows($hired);
$jumlahpre = mysql_num_rows($prescreening);
$jumlahpass = mysql_num_rows($passed);
$jumlahfail = mysql_num_rows($failed);
$jumlahall = mysql_num_rows($all);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Company', 'Status Recruitment'],
          ['Hired',   <?php echo $jumlahhired; ?>],
          ['Pre-screening',   <?php echo $jumlahpre; ?>],
          ['Passed',   <?php echo $jumlahpass; ?>],
          ['Failed',  <?php echo $jumlahfail; ?>]
        ]);

        var options = {
          title: 'Status Recruitment'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    
  </body>
</html>