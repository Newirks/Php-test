<?php

include "db.php";

	if($_POST){

		$color = $_POST["color"];
		$thick = $_POST["thick"];
		$radius = $_POST["radius"];

			$ekle1 = mysqli_query($conn,"INSERT INTO test (name,value) VALUES ('color','$color')");
			$ekle2 = mysqli_query($conn,"INSERT INTO test (name,value) VALUES ('thick','$thick')");
			$ekle3 = mysqli_query($conn,"INSERT INTO test (name,value) VALUES ('radius','$radius')");

		header('Location: index.php');

			








	}else {}
		


?>