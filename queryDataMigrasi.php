<?php
	include ('koneksi.php');
	$q = $_GET['q'];
	$data = explode(" ",$q);
	
	$sortByClass = $data[0];
	$sortByReg = $data[1] == "All" ? "All" : "Reg ". $data[1];
	$month = $data[2];
	
?> 

 <tbody align="center" id="table_body">
 <?php
	  $no = 1;
	  if($sortByClass == "All" && $sortByReg =="All")
			$query = mysqli_query($conn,"SELECT * FROM migrasi WHERE bulan='$month' AND tahun='".date('Y')."' ORDER BY rank ASC");
	  else if ($sortByClass == "All")
			$query = mysqli_query($conn,"SELECT * FROM migrasi WHERE reg ='".$sortByReg."' AND bulan='$month' AND tahun='".date('Y')."' ");
	  else if($sortByReg == "All")		
			$query = mysqli_query($conn,"SELECT * FROM migrasi WHERE class ='".$sortByClass."' AND bulan='$month' AND tahun='".date('Y')."' ");
	  else
			$query = mysqli_query($conn,"SELECT * FROM migrasi WHERE class ='".$sortByClass."' AND reg ='".$sortByReg."' AND bulan='$month' AND tahun='".date('Y')."' ");
	
if (mysqli_num_rows($query) > 0) {

	while($data = mysqli_fetch_array($query)){
	   echo "<tr scope='row'>";
		echo "<td>$no";
	   echo "<td>$data[rank]</td>";
	   echo "<td>$data[class]</td>";
		echo "<td>$data[reg]</td>";
		echo "<td>$data[witel]</td>";
	   echo "<td>$data[jan]</td>";
		echo "</tr>";
	   $no++;
	}
}else {
	   echo "<tr scope='row'>";
	   echo "<td valign='top' colspan='8' class='dataTables_empty'>No matching records found</td>";
	   echo "</tr>";
}	
	
 ?>
 
 
 </tbody>

 