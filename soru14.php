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
<form action="soru14.php" method="post">
<table class="table">
	<tr>
    	<td>Metin Girin:</td>
        <td><input type="text" name="kelime"></td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><button class="btn btn-primary" type="submit">YAZDIR</button></td>
    </tr>
</table>
</form>
</div>
<div class="container bg-warning pt-5">
<?php
if (isset($_POST['kelime'])){
	
	$kelime = $_POST['kelime'];
	
	for ($i=8;$i<=70;$i++){
	
	echo "<p style='font-size:".$i."px;'>$kelime</p> ";
		}
	for ($i=70;$i>=8;$i--){
	
	echo "<p style='font-size:".$i."px;'>$kelime</p> ";
		}
         
	    }
?>
</div>
</body>
</html>