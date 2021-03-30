<?php
	include ('koneksi.php');
	$q = $_GET['q'];
	$data = explode(" ",$q);

	$sortByRegion = $data[0] == "All" ? "All" : $data[0];
	$month = $data[1];
	
?> 

 <tbody align="center" id="table_body">
 
 <?php
	
	  if ($sortByRegion == "All")
			$query = mysqli_query($conn,"SELECT * FROM benjar WHERE bulan='$month' AND tahun='".date('Y')."' ORDER BY ranking ASC");
	  else
			$query = mysqli_query($conn,"SELECT * FROM benjar WHERE region ='".$sortByRegion."' AND bulan='$month' AND tahun='".date('Y')."'");
	
	
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


 