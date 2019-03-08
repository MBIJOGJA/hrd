
<html>
<head>
    <title></title>
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
    include 'koneksi.php';
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
</body>
</html>