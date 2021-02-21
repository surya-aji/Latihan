<?php
  include ('db.php');

$sql = "SELECT COUNT(*) as count FROM agenda 
WHERE Year(created) GROUP BY Month(created)";
$viewer = mysqli_query($mysqli,$sql);
$viewer = mysqli_fetch_all($viewer,MYSQLI_ASSOC);
$viewer = json_encode(array_column($viewer, 'count'),JSON_NUMERIC_CHECK);


?>

<div id="container"></div>

<script type="text/javascript">
  var data_viewer = <?php echo $viewer; ?>;
  Highcharts.chart('container', {
      title: {
          text: 'STATISTIK PEREDARAN SURAT'
      },
      subtitle: {
          text: ''
      },
      xAxis: {
          categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September','October', 'November', 'December']
      },
      yAxis: {
          title: {
              text: 'Jumlah'
          }
      },
      legend: {
          layout: 'vertical',
          align: 'right',
          verticalAlign: 'middle'
      },
      plotOptions: {
          series: {
              allowPointSelect: true
          }
      },
      series: [{
          name: 'Jumlah Surat',
          data: [21,30,20,80,80,90,1] 
      }],
      responsive: {
          rules: [{
              condition: {
                  maxWidth: 500
              },
              chartOptions: {
                  legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                  }
              }
          }]
      }
  });
</script>