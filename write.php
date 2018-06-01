<?php


		$data = $_POST['label'];
		$fname =  "employees.json";

		$file = fopen($fname, 'w');//creates new file
		fwrite($file, $data);
		fclose($file);
		echo $data;


?>
