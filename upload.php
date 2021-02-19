<?php
	require 'connect.php';
	
	if(ISSET($_POST['save'])){
		if($_FILES['file']['name']){
			$filename = explode(".", $_FILES['file']['name']);
			if($filename[1] == 'csv'){
				$handler = fopen($_FILES['file']['tmp_name'], "r");
				while($data = fgetcsv($handler)){
					$conn->query("INSERT INTO `data_latih` (`id`, `urban`, `lokal`, `milenial`, `pramil`, `belum_menikah`, `sudah_menikah`, `pernah_menikah`, `laki_laki`, `perempuan`, `golput`) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]')");
				}
				
				fclose($handler);
			}
		}
		
		header('location:data_latih.php');
		
	}
?>
