<?php 

 include "db.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Test</title>
</head>
<body>

	<div class="test">
		<p>Resim kenar rengini, kenarlık kalınlığını ve ovalliğini değiştirme.</p>
		<form method="post" action="run.php">
			
			<table>
				<tr>
					<td><input type="text" name="color" placeholder="Renk Giriniz."></td>
				</tr>
				<tr>
					<td><input type="text" name="thick" placeholder="Kalınlık Giriniz."></td>
				</tr>
				<tr>
					<td><input type="text" name="radius" placeholder="Ovallik Giriniz."></td>
				</tr>
				<tr>
					<td><center><input class="buton" style="" type="submit" name="gonder" value="Uygula"></center></td>
				</tr>
			</table>

		</form>

	</div>

	<div class="resim">

		<?php

			$search1 = mysqli_query($conn,"SELECT * FROM test WHERE name = 'color' ORDER BY id DESC ");
			$write1 = mysqli_fetch_array($search1);

			$value1 = $write1["value"];

			$search2 = mysqli_query($conn,"SELECT * FROM test WHERE name = 'thick' ORDER BY id DESC ");
			$write2 = mysqli_fetch_array($search2);

			$value2 = $write2["value"];

			$search3 = mysqli_query($conn,"SELECT * FROM test WHERE name = 'radius' ORDER BY id DESC ");
			$write3 = mysqli_fetch_array($search3);

			$value3 = $write3["value"];


			echo "<img style='border-radius:".$value3."px;  border:".$value2."px solid ".$value1.";' src='resim.jpg'>";

		 ?>
		
		

	</div>


</body>
</html>