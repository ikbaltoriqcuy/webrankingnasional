<?php 
	include("koneksi.php");

	if(isset($_GET['q'])) {	
		$query = mysqli_query($conn,"SELECT witel,rank FROM migrasi WHERE reg='REG 3' AND bulan='".$_GET['q']."' AND tahun='".date('Y')."'");
	}
	
	$data = array();
	foreach ($query as $row) {
		$data[] = $row;
	}
	
	//free memory associated with result
	$query->close();

	//close connection
	$conn->close();

	//now print the data
	print json_encode($data);
?>