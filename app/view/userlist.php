<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>

		table{
			border: none;
		}
		tr td{
			border: 1px solid black;
			padding: 5px;
		}

	</style>
</head>
<body>
	

<table border="1">

<?php 
		

$images = $this->model->selectAll();


foreach ($images as $key => $value) {
	
	echo "<tr>";

		echo "<td>".$value['username']."</td><td>".$value['email']."</td>";

	echo "</tr>";

}



 ?>
</table>


</body>
</html>