<?php 

	for($i = 0; $i <= 1000; $i++){

		if($i > 200 && $i < 800) continue;

		if($i == 900) break;

		echo "$i <br>";
	}

 ?>