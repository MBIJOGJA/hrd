<<<<<<< HEAD
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
$spassedpi = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed Interview' AND posisi='Staff'");
$sfailedfi = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Failed Interview' AND posisi='Staff'");
$spassedpt = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed Test' AND posisi='Staff'");
$sfailedft = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Failed Test' AND posisi='Staff'");

//OA
$ohired = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Hired' AND posisi='OA'");
$oprescreening = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Pre-screening' AND posisi='OA'");
$opassedpi = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed Interview' AND posisi='OA'");
$ofailedfi = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Failed Interview' AND posisi='OA'");
$opassedpt = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed Test' AND posisi='OA'");
$ofailedft = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Failed Test' AND posisi='OA'");

//SA
$sahired = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Hired' AND posisi='Sistem Analis'");
$saprescreening = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Pre-screening' AND posisi='Sistem Analis'");
$sapassedpi = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed Interview' AND posisi='Sistem Analis'");
$safailedfi = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='failed Interview' AND posisi='Sistem Analis'");
$sapassedpt = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed Test' AND posisi='Sistem Analis'");
$safailedft = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Failed Test' AND posisi='Sistem Analis'");

//Manager
$mhired = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Hired' AND posisi='Sistem Analis'");
$mprescreening = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Pre-screening' AND posisi='Sistem Analis'");
$mpassedpi = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed Interview' AND posisi='Sistem Analis'");
$mfailedfi = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Failed Interview' AND posisi='Sistem Analis'");
$mpassedpt = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed Test' AND posisi='Sistem Analis'");
$mfailedpt = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Failed Test' AND posisi='Sistem Analis'");
//staff
$sjumlahhired = mysql_num_rows($shired);
$sjumlahpre = mysql_num_rows($sprescreening);
$sjumlahpasspi = mysql_num_rows($spassedpi);
$sjumlahfailfi = mysql_num_rows($sfailedfi);
$sjumlahpasspt = mysql_num_rows($spassedpt);
$sjumlahfailft = mysql_num_rows($sfailedft);
//OA
$ojumlahhired = mysql_num_rows($ohired);
$ojumlahpre = mysql_num_rows($oprescreening);
$ojumlahpasspi = mysql_num_rows($opassedpi);
$ojumlahfailfi = mysql_num_rows($ofailedfi);
$ojumlahpasspt = mysql_num_rows($opassedpt);
$ojumlahfailft = mysql_num_rows($ofailedft);
//SA
$sajumlahhired = mysql_num_rows($sahired);
$sajumlahpre = mysql_num_rows($saprescreening);
$sajumlahpasspi = mysql_num_rows($sapassedpi);
$sajumlahfailfi = mysql_num_rows($safailedfi);
$sajumlahpasspt = mysql_num_rows($sapassedpt);
$sajumlahfailft = mysql_num_rows($safailedft);

//Manger
$mjumlahhired = mysql_num_rows($mhired);
$mjumlahpre = mysql_num_rows($mprescreening);
$mjumlahpasspi = mysql_num_rows($mpassedpi);
$mjumlahfailfi = mysql_num_rows($mfailedfi);
$mjumlahpasspt = mysql_num_rows($mpassedpt);
$mjumlahfailft = mysql_num_rows($mfailedft);
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
          ['Passed Interview', <?php echo $sjumlahpasspi; ?>, <?php echo $sajumlahpasspi; ?>, <?php echo $ojumlahpasspi; ?>, <?php echo $mjumlahpasspi; ?>],
          ['Failed Interview', <?php echo $sjumlahfailfi; ?>, <?php echo $sajumlahfailfi; ?>, <?php echo $ojumlahfailfi; ?>, <?php echo $ojumlahfailfi; ?>],
          ['Passed Test', <?php echo $sjumlahpasspt; ?>, <?php echo $sajumlahpasspt; ?>, <?php echo $ojumlahpasspt; ?>, <?php echo $mjumlahpasspt; ?>],
          ['Failed Test', <?php echo $sjumlahfailft; ?>, <?php echo $sajumlahfailft; ?>, <?php echo $ojumlahfailft; ?>, <?php echo $ojumlahfailft; ?>],
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
=======
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
>>>>>>> 9f1c983f35a5033132bdee03148c613f8a09c0e6
</html>