<?php
	include ('koneksi.php');
	$q = "REG " . $_GET['q'];
?> 
 
 <tbody align="center" id="table_body">
 <?php
	  $no = 1;
	  $query = mysqli_query($conn,"SELECT * FROM migrasi WHERE reg ='".$q."'");
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
	  echo 
	'<script src="jquery-1.10.2.min.js"></script> <!-- Memasukkan plugin jQuery -->
	<script src="jquery.dataTables.js"></script> <!-- Memasukkan file jquery.dataTables.js -->
	<script src="jquery.dataTables.min.js"></script>';
 ?>
 
 
 </tbody>

 