<!doctype html>
<html>
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
<div class="container pt-5 pb-5">
<form action="soru15.php" method="post">
<table class="table">
	<tr>
    	<td>Küçük Sayı:</td>
        <td><input type="text" name="s1"></td>
    </tr>
    <tr>
    	<td>Büyük Sayı:</td>
        <td><input type="text" name="s2"></td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><p><button class="btn btn-primary" type="submit">Oluştur</button></td>
    </tr>
</table>
</form>
</div>
<div class="container bg-warning pt-5">
<?php
if (isset($_POST['s1']) and isset($_POST['s2'])){
	
	$s1 = $_POST['s1'];
	$s2 = $_POST['s2'];
  	echo "<select>";
	for ($i = $s1;$i<=$s2;$i++){
		echo "<option>$i</option>";
		}
	echo "</select>";
    }
?>
</div>
</body>
</html>