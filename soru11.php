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
<form action="soru11.php" method="post">
<table class="table">
	<tr>
    	<td>Sayıyı Giriniz:</td>
        <td><input type="text" name="sayi"></td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><button class="btn btn-primary" type="submit">FAKTÖRİYELİNİ BUL</button></td>
    </tr>
</table>
</form>
</div>
<div class="container bg-warning pt-5">
<?php
if (isset($_POST['sayi'])){
	
	$sayi = $_POST['sayi'];
	
	$carpim = 1;
	
	for ($i=1;$i<=$sayi;$i++){
	
		$carpim = $carpim * $i;
         }
		echo "$sayi ! = $carpim";
	    }
?>
</body>
</html>