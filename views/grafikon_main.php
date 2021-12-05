<?php
	


try {

$dbh = new PDO('mysql:host=localhost;dbname=web2', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

$data1 = '';
$data2 = '';

$sql = "SELECT * FROM munkalap";     
$sth = $dbh->query($sql);
$rows = $sth->fetchAll(PDO::FETCH_ASSOC);

}
catch (PDOException $e) {
echo "Hiba: ".$e->getMessage();
}

$data1 = $data1 . '"'. $row['data1'].'",';
$data2 = $data2 . '"'. $row['data2'] .'",';

//query to get data from the table

//$result = mysqli_query($mysqli, $sql);

//loop through the returned data
//while ($row = mysqli_fetch_array($result)) {

  
//}

$data1 = trim($data1,",");
$data2 = trim($data2,",");


?>




	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
		

		

	</head>

	<body>	   
	    <div class="container">	
	    <h1 >CHART.JS MYSQL </h1>
			<canvas id="chart" style="width: 60%; height: 45vh; background: #222; border: 1px solid gray; ">
        </canvas>

			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'line',
		        data: {
		            labels: [1,2,3,4,5,6,7,8,9],
		            datasets: 
		            [{
		                label: 'Data 1',
		                data: [<?php echo $data1; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            },

		            {
		            	label: 'Data 2',
		                data: [<?php echo $data2; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,255,255)',
		                borderWidth: 3	
		            }]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
	    </div>
	    
	</body>
