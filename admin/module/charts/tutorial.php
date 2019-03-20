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
$hired = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Hired'");
$prescreening = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Pre-screening'");
$passed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='Passed'");
$failed = mysql_query("SELECT*FROM recruitment WHERE status_recruitment='failed'");

$jumlahhired = mysql_num_rows($hired);
$jumlahpre = mysql_num_rows($prescreening);
$jumlahpass = mysql_num_rows($passed);
$jumlahfail = mysql_num_rows($failed);
?>


<html>
  <head> 
  <meta charset="UTF-8">
    <title>CV Medika Buwana Informatika | HRMS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
     <script type="text/javascript" src="Chart.js"></script>
    <!-- daterange picker -->
    <link href="../aset/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="../aset/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Color Picker -->
    <link href="../aset/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
    <!-- Bootstrap time Picker -->
    <link href="../aset/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../aset/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../aset/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
  
    <!-- Bootstrap 3.3.4 -->
    <link href="../aset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../aset/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../aset/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../aset/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Status', 'Jumlah'],
          ['Hired',   <?php echo $jumlahhired; ?>],
          ['Pre-screening',   <?php echo $jumlahpre; ?>],
          ['Passed',   <?php echo $jumlahpass; ?>],
          ['Failed',  <?php echo $jumlahfail; ?>]
        ]);

        var options = {
          width: 600  ,
          axes: {
            x: {
              0: { side: 'top', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "75%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 800px; height: 400px;"></div>
  </center></body>
</html>
</div>