<div class="halaman">
  <center><h2>Data Hasil Proses Recruitment</h2>
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
$all = mysql_query("SELECT*FROM recruitment");
//staff
$shired = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Hired' AND posisi='Staff'");
$sprescreening = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Pre-screening' AND posisi='Staff'");
$spassed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed' AND posisi='Staff'");
$sfailed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='failed' AND posisi='Staff'");

//OA
$ohired = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Hired' AND posisi='OA'");
$oprescreening = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Pre-screening' AND posisi='OA'");
$opassed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed' AND posisi='OA'");
$ofailed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='failed' AND posisi='OA'");

//SA
$sahired = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Hired' AND posisi='Sistem Analis'");
$saprescreening = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Pre-screening' AND posisi='Sistem Analis'");
$sapassed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed' AND posisi='Sistem Analis'");
$safailed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='failed' AND posisi='Sistem Analis'");
//Manager
//SA
$mhired = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Hired' AND posisi='Sistem Analis'");
$mprescreening = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Pre-screening' AND posisi='Sistem Analis'");
$mpassed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed' AND posisi='Sistem Analis'");
$mfailed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='failed' AND posisi='Sistem Analis'");
//staff
$sjumlahhired = mysql_num_rows($shired);
$sjumlahpre = mysql_num_rows($sprescreening);
$sjumlahpass = mysql_num_rows($spassed);
$sjumlahfail = mysql_num_rows($sfailed);
//OA
$ojumlahhired = mysql_num_rows($ohired);
$ojumlahpre = mysql_num_rows($oprescreening);
$ojumlahpass = mysql_num_rows($opassed);
$ojumlahfail = mysql_num_rows($ofailed);
//SA
$sajumlahhired = mysql_num_rows($sahired);
$sajumlahpre = mysql_num_rows($saprescreening);
$sajumlahpass = mysql_num_rows($sapassed);
$sajumlahfail = mysql_num_rows($safailed);

//Manger
$mjumlahhired = mysql_num_rows($sahired);
$mjumlahpre = mysql_num_rows($saprescreening);
$mjumlahpass = mysql_num_rows($sapassed);
$mjumlahfail = mysql_num_rows($safailed);
$jumlahall = mysql_num_rows($all);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Total Pendaftar = <?php echo $jumlahall ?>', 'Programmer', 'Sistem Analisis', 'OA', 'Manger'],
          ['Pre-screening', <?php echo $sjumlahpre; ?> , <?php echo $sajumlahpre;?>, <?php echo $ojumlahpre; ?>, <?php echo $mjumlahpre; ?>],
          ['Passed', <?php echo $sjumlahpass; ?>, <?php echo $sajumlahpass; ?>, <?php echo $ojumlahpass; ?>, <?php echo $mjumlahpass; ?>],
          ['Failed', <?php echo $sjumlahfail; ?>, <?php echo $sajumlahfail; ?>, <?php echo $ojumlahfail; ?>, <?php echo $ojumlahfail; ?>],
          ['Hired', <?php echo $sjumlahhired; ?>,<?php echo $sajumlahhired;?>, <?php echo $ojumlahhired; ?>, <?php echo $mjumlahhired; ?>]
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>  
  </body>
</html>