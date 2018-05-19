<?php 

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	$stmt = $conn->prepare("select * from tb_usuarios");

	$stmt-> execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//echo json_encode($results);
	print_r($results);

	echo "<br>";
	echo "<br>";

	foreach ($results as $key =>$result) {
		
		foreach ($result as $key => $dados) {

			echo($key)." = ".$dados."<br>";
		}

		echo "<br>";
		echo "=========================================";
		echo "<br>";
	}
	


 ?>