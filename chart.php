<html> 
	
	<body> 
		<script src="js/chartjs.min.js" > </script>
		<script src="js/vendor/jquery-2.1.4.min.js"></script>

		<canvas id="line-chart" width="200" height="450"></canvas>
		

		<script>
	$(document).ready(function(){
	$.ajax({
		url: "http://localhost/tesexcel/jsonMigrasi.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var obj = jQuery.parseJSON(data);
			var player = [];
			var score = [];
	
			for(var i in obj) {
				player.push("Witel " + obj[i].witel);
				score.push(obj[i].rank);
			}

			var chartdata = {
				labels: player,
				datasets : [
					{
						data: score,
						label: "Ranking",
						borderColor: "#3cba9f",
						fill: false
											}
				]
			};

			var ctx = $("#line-chart");

			var barGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
		</script>
	</body>
</html>