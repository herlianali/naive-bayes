<?php
					$query = $conn->query("SELECT * FROM `data_testing`");
					while($fetch = $query->fetch_array()){
				?>
				<?php 
						if (($fetch['urban'])=='tinggi') {
						 	if (round($Putgb, 2) > round($Putgk, 2)) {
						 		$urban = round($Putgb, 2);
						 		echo $urban;
						 	}else{
						 		$urban = round($Putgk, 2);
						 		echo $urban;
						 	}
						}elseif (($fetch['urban'])=='rendah') {
							if (round($Purgb, 2) > round($Purgk, 2)) {
						 		$urban = round($Purgb, 2);
						 		echo $urban;
						 	}else{
						 		$urban = round($Purgk, 2);
						 		echo $urban;
						 	}
						}
						// echo $fetch['urban'];
					?>