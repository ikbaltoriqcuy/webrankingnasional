<?php 
include('koneksi.php');
?>
<html>
<head>
<title>Benjar Data Nasional</title>

<link rel="stylesheet" href="jquery.dataTables.css"> <!-- Memasukkan file jquery.dataTables.css -->
<link rel="stylesheet" href="datatables.bootstrap4.css">
<link rel="stylesheet" href="datatables.bootstrap4.min.css">
<link rel="stylesheet" href="ranking.css">

	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/cs-skin-elastic.css">
    <link rel="stylesheet" href="scss/style.css">
	<link href="css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body>

<span id="script"> 
	<script src="jquery-1.10.2.min.js"></script> <!-- Memasukkan plugin jQuery -->
	<script src="jquery.dataTables.js"></script> <!-- Memasukkan file jquery.dataTables.js -->
	<script src="jquery.dataTables.min.js"></script>
	<script src="style.js"></script>  		
	<script>
	$(document).ready(function() {
		$('#contoh').dataTable(); // Menjalankan plugin DataTables pada id contoh. id contoh merupakan tabel yang kita gunakan untuk menampilkan data
	} );
	</script>
	
	<script src="js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


    <script src="js/lib/chart-js/Chart.bundle.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/widgets.js"></script>
    <script src="js/lib/vector-map/jquery.vmap.js"></script>
    <script src="js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>	
	<script>
		function callData() {			
				var regionData = document.getElementById("selectRegion").value;
				var month = document.getElementById("changeMonth").value;
				if (regionData == "") {
					document.getElementById("table_body").innerHTML = "";
					return;
				} else { 
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("table_body").innerHTML = this.responseText;
						}
					};
					xmlhttp.open("GET","queryDataBenjar.php?q="+regionData+" "+month,true);
					xmlhttp.send();
				}
		}
	</script>

	
	<script>
	$(document).ready(function(){
		var month = $("#changeMonth").val(); 
	$.ajax({
		url: "http://localhost/tesexcel/jsonBenjar.php?q="+month,
		method: "GET",
		success: function(data) {
			console.log(data);
			var obj = jQuery.parseJSON(data);
			var player = [];
			var score = [];
	
			for(var i in obj) {
				player.push(obj[i].witel);
				score.push(obj[i].ranking);
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
			
			var chartdata1 = {
				labels: player,
				datasets : [
					{
						data: score,
						label: "Ranking",
						backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
					}
				]
			};

			var ctx = $("#line-chart");

			var barGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
			
			var ctx1 = $("#pie-chart");

			var barGraph = new Chart(ctx1, {
				type: 'bar',
				data: chartdata1
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
	</script>
	<script src="js/chartjs.min.js" > </script>

	
	<script> 
		function openFormUpload(){
			document.getElementById('form-upload').style.visibility = 'visible';
		} 

		function closeFormUpload(){
			document.getElementById('form-upload').style.visibility = 'hidden';
		}
	</script> 


</span>


<div class="form-upload" id="form-upload"
		style="height:100%;
			   width:100%;
			   background:rgba(0,0,0,.8);
			   position:fixed;
			   z-index: 999;
			   visibility:hidden;
			   "
		>
	<div class="form" 
		style="background:#f1f1f1; 
			   width:30%;
			   padding:30px;
			   margin-left:35%;
			   margin-top:1%;
			   "
		>

		<button onclick="closeFormUpload()" 
			class="btn btn-danger" style="float:right;"> X </button>
		<br/>
		<form method="POST" enctype="multipart/form-data"> 
			<br>
			<Label> Upload Data  : </Label>  
			<input class="form-control" type="file" accept="tets" name="file-excel" />
			<br/> 

			<br> 
			<Label> Bulan </Label> 
			<select class="form-control" name="month"> 
	  					  <option value="jan">Januari</option> 
						  <option value="feb">Februari</option> 
						  <option value="mar">Maret</option> 
						  <option value="apr">April</option> 
						  <option value="mei">Mei</option> 
						  <option value="jun">Juni</option> 
						  <option value="jul">Juli</option> 
						  <option value="agus">Agustus</option> 
						  <option value="sep">September</option> 
						  <option value="ok">Oktober</option> 
						  <option value="nov">November</option> 
						  <option value="des">Desember</option> 
			</select>
			</br>
			<!--
			<br>
			<Label>Tahun</Label> <input type="number" class="form-control" required/>
			</br>
			-->

			<br>
			<Label> Masukkan Password  : </Label>  <input type="password" name="pass" required class="form-control"/>
			<br/>

			<input type="Submit" name="upload" class="btn btn-success" /> 

			<?php 
				$column = "benjar";
				include("ConvertExcelToDatabase.php");
			?>

		</form> 
	</div>
	
	
</div>



<?php 
	include('aside_design.php');
?>

<div id="title" style="color:#fff;padding-top:15px;width:100%; height:100px;"> 
    <div id="text-title" style="margin-left:10%;margin-top:1%;"> 
		<h4 style="float:left;"> Rangking Pencapaian Nasional Access Optima & Maintenance <?php echo date('Y') ?> : </h4>
		<h4 class="sub_menu" style="padding:5px;text-align:center;float:left;margin-left:10px;width:200px;background-color:#ffa000;border-radius:10px;">Benjar</div> 
	</div>
</div>

<br> <br>


<div id="content">
<button class="btn btn-primary"  onclick="openFormUpload()"> Upload Data Excel </button>
	<br/><br/>
	<select class="form-control" onchange="location = 'benjar.php?q='+this.value" id="changeMonth">
		<?php
		$month = "";
		if(isset($_GET['q'])) { 
			$month =$_GET['q'];
		 }
		?>

							<option value="jan"
							<?php if($month  == 'jan') echo "selected" ?>
							>Januari</option> 
							<option value="feb"
							<?php if($month  == 'feb') echo "selected" ?>
							>Februari</option> 
							<option value="mar"
							<?php if($month  == 'mar') echo "selected" ?>
							>Maret</option> 
							<option value="apr"
							<?php if($month  == 'apr') echo "selected" ?>
							>April</option> 
							<option value="mei"
							<?php if($month  == 'mei') echo "selected" ?>
							>Mei</option> 
							<option value="jun"
							<?php if($month  == 'jun') echo "selected" ?>
							>Juni</option> 
							<option value="jul"
							<?php if($month == 'jul') echo "selected" ?>
							>Juli</option> 
							<option value="agus"
							<?php if($month  == 'agus') echo "selected" ?>
							>Agustus</option> 
							<option value="sep"
							<?php if($month  == 'sep') echo "selected" ?>
							>September</option> 
							<option value="okt"
							<?php if($month  == 'okt') echo "selected" ?>
							>Oktober</option> 
							<option value="nov"
							<?php if($month  == 'nov') echo "selected" ?>
							>November</option> 
							<option value="des"
							<?php if($month  == 'des') echo "selected" ?>
							>Desember</option> 
	
	</select>

<div class="content mt-3">	
<table id="contoh" class="table table-dark">
  <thead align="center">
   <tr>
        <th>REGION
			<select id="selectRegion" style="color:#000;" class="selectpicker" onchange="callData()"> 
				<option value="All" selected>All</option>
				<?php 
					for($i =0 ; $i<8; $i++) {
				?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php
					}
				?>
			</select>
		</th>
        <th>WITEL</th>
        <th>TOTAL NILAI</th>
        <th>RANKING</th>
   </tr>
 </thead>
 
 <tbody align="center" id="table_body">
 
 <?php
	if(isset($_GET['q'])) {
		$query = mysqli_query($conn,"SELECT * FROM benjar WHERE bulan='".$_GET['q']."' ORDER BY ranking ASC");
	}else{
		$query = mysqli_query($conn,"SELECT * FROM benjar  ORDER BY ranking ASC");
	} 
	 while($data = mysqli_fetch_array($query)){
	   echo "<tr scope='row'>";
		 echo "<td>$data[region]</td>";
	   echo "<td>$data[witel]</td>";
		echo "<td>$data[total_nilai]</td>";
		echo "<td>$data[ranking]</td>";
		echo "</tr>";
	  }
 ?>
 </tbody>
</table>
</div>
</div>

<div class="badges" align="center" style="padding-top:500px;">
  		<div class="card" style="width:90%;">
            <div class="card-header">
                <strong>Bar Chart</strong>
            </div>
        <div class="card-body">
				<canvas id="pie-chart"   width="800" height="450"></canvas>
		</div>
</div>


</body>

</html>

