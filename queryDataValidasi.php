<?php
	include ('koneksi.php');
	$q = $_GET['q'];
	$data = explode(" ",$q);

	$sortByTreg = $data[0] == "All" ? "All" : "TREG ". $data[0];
	$month = $data[1];
	
?> 

 <tbody align="center" id="table_body">
 
 <?php
	
	  if ($sortByTreg == "All")
			$query = mysqli_query($conn,"SELECT * FROM valdat WHERE bulan='$month' ORDER BY ranking ASC");
	  else
			$query = mysqli_query($conn,"SELECT * FROM valdat WHERE treg ='".$sortByTreg."' AND bulan='$month'");
	
	while($data = mysqli_fetch_array($query)){
	   echo "<tr scope='row'>";
		 echo "<td>$data[ranking]</td>";
	   echo "<td>$data[treg]</td>";
		echo "<td>$data[witel]</td>";
		echo "<td>$data[jml_odp_uim]</td>";
	   echo "<td>$data[real_odp_tervalidasi]</td>";
		echo "<td>$data[per_real_odp_tervalidasi]</td>";
		echo "<td>$data[trgt_odp_tervalidasi]</td>";
		echo "<td>$data[pencapaian]</td>";
		echo "</tr>";
	  }
 ?>
 
 </tbody>


 