<?php
include 'db_credential.php';
$conn = mysqli_connect($host, $user, $password, $database);

$category = array('coffee', 'tea', 'softdrinks', 'cookie', 'muffin', 'donut');
foreach ($category as $cat) {
  $sql = "SELECT sum(sale) FROM product WHERE category='".$cat."' ";
  $results2 = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($results2);
  //print_r($row['sum(sale)']);
  $sales[$cat] = array($row['sum(sale)']);
  //print_r($sales);
  //print_r($sales[$cat][0]);
  //echo "<br>";
}
//print_r($sales);
//print_r($sales['coffee'][0]);
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>PIECHART OF SALES</title>
  <link rel="stylesheet" href="../css/chart.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
  // Load google charts
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  // Draw the chart and set the chart values
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['category', 'sales'],
    <?php
    echo "['coffee',".$sales['coffee'][0]."],";
    echo "['tea',".$sales['tea'][0]."],";
    echo "['softdrinks',".$sales['softdrinks'][0]."],";
    echo "['cookie',".$sales['cookie'][0]."],";
    echo "['muffin',".$sales['muffin'][0]."],";
    echo "['donut',".$sales['donut'][0]."],";
    ?>
  ]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'SALES', 'width':550, 'height':400};
    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
  </script>

</head>
<body>
  <div class="back">
    <button type="button" name="button"> <a href="inventory.php">BACK TO INVENTORY</a> </button>
  </div>
<div id="piechart"></div>


</body>
</html>
