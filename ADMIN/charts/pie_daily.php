<?php
	//connection
	include('../connection/connection.php');
    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');
	$sql = "SELECT CAST(date_created AS DATE) as total, SUM(price_to_pay) as number FROM proceed_to_pay WHERE CAST(date_created AS DATE)  = '$date'  GROUP BY CAST(date_created AS DATE)";
	$query = $conn->query($sql);
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<!-- this is where we show our chart -->
<center><div id="piechart" style="width: 100%; height: 300px;"></div></center>
 
<!-- Load our Scripts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript">  
	google.charts.load('current', {'packages':['corechart']});  
	google.charts.setOnLoadCallback(drawChart);  
	function drawChart(){  
    var data = google.visualization.arrayToDataTable([  
              	['Date', 'Purchase Count'],  
              	<?php  
	              	while($row = $query->fetch_assoc()){  
	               		echo "['".$row["total"]."', ".$row["number"]."],";  
	              	}  
              	?>  
         	]);  
    var options = {  
          		title: '',  
          		//is3D:true,  
          		pieHole: 0.4  
         	};  
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
    chart.draw(data, options);  
}  
</script>
</body>
</html>