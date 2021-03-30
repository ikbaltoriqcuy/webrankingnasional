<?php 
      
    //$column = "benjar";
      
    if (isset($_POST['upload'])) {
        $convert = false;
        $folder = "Upload/"; 
        $dir = $folder . $_FILES['file-excel']["name"] ;
        if(move_uploaded_file($_FILES['file-excel']['tmp_name'],$dir )){  
            $convert = true; 
        }
        
        $pass = $_POST['pass'];
        $month = $_POST['month'];
        
        echo "<h4> $dir </h4> ";
            /** Include PHPExcel and MySQLi db */
           
        //require_once dirname(__FILE__) . '/PHPExcel-1.8/Classes/DB.php';
        
        if($pass== "TasikJaya123" && $convert == true) {
        require_once dirname(__FILE__) . '/PHPExcel-1.8/Classes/PHPExcel.php';
        
        //Create DB object
        //use DB\MySQLi;
        // Create new PHPExcel object
        try {
            $inputFileType = PHPExcel_IOFactory::identify($dir);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            
            $objPHPExcel = $objReader->load($dir);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($dir,PATHINFO_BASENAME).'": '.$e->getMessage());
            echo "<h1> Error to read Excel </h1>";
        }
        
            //for ($n=0; $n<$objPHPExcel->getSheetCount(); $n++) {
                    
                    $dataArr = array();

                    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                        $worksheetTitle     = $worksheet->getTitle();
                        $highestRow         = $worksheet->getHighestRow(); // e.g. 10
                        $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
                        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
                        for ($row = 1; $row <= $highestRow; ++ $row) {
                            for ($col = 0; $col < $highestColumnIndex; ++ $col) {
                                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                                $val = $cell->getValue();
                                $dataArr[$row][$col] = $val;
                            }
                        }
                        insertDataToDatabase($dataArr,$month,$column);
                        
                        //print json_encode($dataArr); 
                       // print "<br/> <br//>";
                    }
                    unlink ($dir);
                  
                //$objWorksheet = $objPHPExcel->setActiveSheetIndex(1);
                /*    
                //objWorksheet = $objPHPExcel->getActiveSheet();
                echo '<table border=1>' . "\n";
                foreach ($objWorksheet->getRowIterator() as $row) {
                echo '<tr>' . "\n";
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(false); // This loops all cells,
                                                                    // even if it is not set.
                                                                    // By default, only cells
                                                                    // that are set will be
                                                                    // iterated.
                foreach ($cellIterator as $cell) {
                    echo '<td>' . $cell->getValue() . '</td>' . "\n";
                }
                echo '</tr>' . "\n";
                }
                echo '</table>' . "\n";
                */

                /*
                    foreach($dataArr as $val){
                        switch($column){
                            case "benjar" : 
                                $sql = "INSERT INTO `benjar` VALUES (".$val[0].",'".$val[1]."','".$val[2]."','".$val[3]."')";
                            break; 
                            case "validasi" :
                                $sql = "INSERT INTO `valdat` VALUES ('". $worksheetTitle."',".$val[0].",'".$val[1]."','".$val[2]."','".$val[3]."','".$val[4]."','".$val[5]."','".$val[6]."','".$val[7]."')";
                            break; 
                            case "underspec" :
                                $sql = "INSERT INTO `underspec` VALUES ('".$val[0]."','".$val[1]."','".$val[2]."','".$val[3]."','".$val[4]."','".$val[5]."','".$val[6]."','".$val[7]."','".$val[8]."','".$val[9]."','".$val[10]."','".$val[11]."','".$val[12]."','".$val[13]."','".$val[14]."')";
                            break; 
                            case "migrasi" : 
                            $sql = "INSERT INTO `migrasi` VALUES (".$val[0].",'".$val[1]."','".$val[2]."','".$val[3]."','".$val[4]."')";
                            break;     
                        }
                        if ($conn->query($sql) === TRUE) {
                            
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                */
        //}
       }else {
            echo "<h1 style='color:red;'>Password Salah</h1>";
        }
}

function insertDataToDatabase($data, $month,$column) {

    include 'koneksi.php';
    $year = date("Y");
   
    foreach($data as $val){
        switch($column){
            case "benjar" : 
                $sql = "INSERT INTO `benjar` VALUES ('$year','".$month."',".$val[0].",'".$val[1]."','".$val[2]."','".$val[3]."')";
            break; 
            case "validasi" :
                $sql = "INSERT INTO `valdat` VALUES ('$year','".$month."',".$val[0].",'".$val[1]."','".$val[2]."','".$val[3]."','".$val[4]."','".$val[5]."','".$val[6]."','".$val[7]."')";
            break; 
            case "underspec" :
                $sql = "INSERT INTO `underspec` VALUES ('$year','".$month."','".$val[0]."','".$val[1]."','".$val[2]."','".$val[3]."','".$val[4]."','".$val[5]."','".$val[6]."','".$val[7]."','".$val[8]."','".$val[9]."','".$val[10]."','".$val[11]."','".$val[12]."','".$val[13]."','".$val[14]."')";
            break; 
            case "migrasi" : 
            $sql = "INSERT INTO `migrasi` VALUES ('$year','".$month."',".$val[0].",'".$val[1]."','".$val[2]."','".$val[3]."','".$val[4]."')";
            break;     
        }
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>