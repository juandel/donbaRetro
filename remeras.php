<?php 
		function remeras_index(){
			$remeras = array("Francia"=>"francia.png", "Inglaterra"=>"Inglaterra.png", "Italia"=>"Italia.png");
			foreach ($remeras as $key => $value) { 
				echo "<ul class='pricing-table small-2'><li class='title'><img src='images/".$value."'></li><li class='description'>".$key."</li></ul>";
			}
		}

?>

