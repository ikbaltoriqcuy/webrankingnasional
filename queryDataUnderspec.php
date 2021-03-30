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
			$query = mysqli_query($conn,"SELECT * FROM underspec WHERE bulan='$month' AND tahun='".Date('Y')."' ORDER BY rank ASC");
	  else if ($sortByClass == "All")
			$query = mysqli_query($conn,"SELECT * FROM underspec WHERE reg ='".$sortByReg."' AND bulan='$month' AND tahun='".Date('Y')."'");
	  else if($sortByReg == "All")		
			$query = mysqli_query($conn,"SELECT * FROM underspec WHERE class ='".$sortByClass."' AND bulan='$month' AND tahun='".Date('Y')."'");
	  else
			$query = mysqli_query($conn,"SELECT * FROM underspec WHERE class ='".$sortByClass."' AND reg ='".$sortByReg."' AND bulan='$month' AND tahun='".Date('Y')."'");
	
if (mysqli_num_rows($query) > 0) {

	while($data = mysqli_fetch_array($query)){
	   echo "<tr scope='row'>";
		 echo "<td>$data[class]</td>";
	   echo "<td>$data[reg]</td>";
		echo "<td>$data[witel]</td>";
		echo "<td>$data[jml_underspec]</td>";
		echo "<td>$data[underspec_awal_ok]</td>";
		echo "<td>$data[sisa_underspec_awal_nok]</td>";
		echo "<td>$data[add_lis_ftth]</td>";
		echo "<td>$data[add_lis_ftth_underspec_ok]</td>";
		echo "<td>$data[add_lis_ftth_underspec_nok]</td>";
		echo "<td>$data[sisa_underspec_nok]</td>";
		echo "<td>$data[lis]</td>";
		echo "<td>$data[isa_underspec]</td>";
		echo "<td>$data[target]</td>";
		echo "<td>$data[pencapaian]</td>";
		echo "<td>$data[ranking]</td>";
		
		echo "</tr>";
	  }
}else {
	   echo "<tr scope='row'>";
	   echo "<td valign='top' colspan='15' class='dataTables_empty'>No matching records found</td>";
	   echo "</tr>";
}
	$conn->close();
 ?>
 
 
 </tbody>

 