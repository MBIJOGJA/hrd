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