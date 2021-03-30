<?php 
	include ("koneksi.php");
?>
<html> 
<head> 
	<title>Dashboard</title>
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

	</span>
	<style> 
		.content-body{
			padding:20px;
			box-shadow : 1px 1px 1px 1px rgba(80,80,80,.3);
		}
		
		#title{
			box-shadow :0px 0px 0px 2px rgba(80,80,80,.3);
			background : #272c33;
			width :100%; 
			height : 70px;
			border-bottom : 3px solid #808080;
		}
	</style>
	<?php include("aside_design.php"); ?>

	
<div id="title" style="color:#fff;padding-top:15px;width:100%; height:100px;"> 
    <div id="text-title" style="margin-left:10%;margin-top:1%;"> 
		<h4 style="float:left;"> DASHBOARD PERFORMANCE ACCESS OPTIMA DAN MAINTENANCE <?php echo date('Y') ?> </h4>
	</div>
</div>
			<br/>
			<br/>
	        <div class="content mt-3">
            <div class="animated fadeIn">
				<?php 
					$month = ""; 

					switch(date('m')) {
						case 1:$month = "jan"; break; 
						case 2:$month = "feb"; break; 
						case 3:$month = "mar"; break; 
						case 4:$month = "apr"; break; 
						case 5:$month = "mei"; break; 
						case 6:$month = "jun"; break; 
						case 7:$month = "jul"; break; 
						case 8:$month = "agus"; break; 
						case 9: $month = "sep";break; 
						case 10: $month = "okt";break; 
						case 11: $month = "nov";break; 
						case 12: $month = "des";break; 
						
					}
				
				?>
                    <div class="badges">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Tasikmalaya</strong>
                                </div>
                                <div class="card-body">
								  <div class="row" align="center"> 
										<div class="col-sm-3"> 
											<a href="migrasi.php" >
											<div class="content-body">
											<img src="img/Dashboard Icon/migrasi.png" width="200px" />
												<?php 
													$query = mysqli_query($conn,"SELECT * FROM migrasi WHERE witel ='TASIKMALAYA' AND tahun = '".date('Y')."'  AND bulan = '$month' ");
													if (230 > 0) {

														//while($data = mysqli_fetch_array($query)){
														   echo "	<h4>Ranking : 120 </h4>
																	<h4>Pencapaian :  110 </h4>"; 
														//}
													}else {
														   echo "<tr scope='row'>";
														   echo "<td valign='top' colspan='8' class='dataTables_empty'>No matching records found</td>";
														   echo "</tr>";
													}
												?>
												
											
												
											</div>
											</a>
										</div>
										<div class="col-sm-3"> 
											<div class="content-body">
												<a href="validasi.php" >
												<img src="img/Dashboard Icon/validasidata.png" width="200px" />
												<?php 
										
													$query = mysqli_query($conn,"SELECT * FROM valdat WHERE witel ='TASIKMALAYA' AND tahun = '".date('Y')."'  AND bulan = '$month'");
													if (230 > 0) {

														//while($data = mysqli_fetch_array($query)){
														   echo "	<h4>Ranking : 120 </h4>
																	<h4>Pencapaian :  110 </h4>"; 
														//}
													}else {
														   echo "<tr scope='row'>";
														   echo "<td valign='top' colspan='8' class='dataTables_empty'>No matching records found</td>";
														   echo "</tr>";
													}
												 
												?>
												
												</a>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="content-body">
												<a href="benjar.php" >
												<img src="img/Dashboard Icon/benjar.png" width="200px" />
												<?php 
													$query = mysqli_query($conn,"SELECT * FROM benjar WHERE witel ='TASIKMALAYA' AND tahun = '".date('Y')."'  AND bulan = '$month'");
													if (230 > 0) {

														//while($data = mysqli_fetch_array($query)){
														   echo "	<h4>Ranking : 120 </h4>
																	<h4>Pencapaian :  110 </h4>"; 
														//}
													}else {
														   echo "<tr scope='row'>";
														   echo "<td valign='top' colspan='8' class='dataTables_empty'>No matching records found</td>";
														   echo "</tr>";
													}
												?>
												
												</a>
											</div>
										</div>
										<div class="col-sm-3"> 
											<div class="content-body">
												<a href="underspec.php" >
												<img src="img/Dashboard Icon/underspec.png" width="200px" />
												<?php 
													$query = mysqli_query($conn,"SELECT * FROM underspec WHERE witel ='TASIKMALAYA' AND tahun = '".date('Y')."'  AND bulan = '$month'");
													if (230 > 0) {

														//while($data = mysqli_fetch_array($query)){
														   echo "	<h4>Ranking : 120 </h4>
																	<h4>Pencapaian :  110 </h4>"; 
														//}
													}else {
														   echo "<tr scope='row'>";
														   echo "<td valign='top' colspan='8' class='dataTables_empty'>No matching records found</td>";
														   echo "</tr>";
													}
												?>
												</a>
											</div>
										</div>
								  </div>
								
			
                                </div>
                            </div><!-- /# card -->
					  
					</div>
			</div>
<body>