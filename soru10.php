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
<form action="soru10.php" method="post">
<table class="table">
	<tr>
    	<td>Sayıyı Giriniz:</td>
        <td><input type="text" name="sayi"></td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><button class="btn btn-primary" type="submit">Yazıya Çevir</button></td>
    </tr>
</table>

</form>
</div>
<div class="container bg-warning pt-5">
<?php
if (isset($_POST['sayi'])){
	
	$bas0 = array("", "bir", "iki", "üç", "dört", "beş", "altı", "yedi", "sekiz", "dokuz" );
	$bas1 = array("", "on", "yirmi", "otuz", "kırk", "elli", "altmış", "yetmiş", "seksen", "doksan" );
	$bas2 = array("", "yüz", "iki yüz", "üç yüz", "dört yüz", "beş yüz", "altı yüz", "yedi yüz", "sekiz yüz", "dokuz yüz" );
	$bas3 = array("", "bin", "iki bin", "üç bin", "dört bin", "beş bin", "altı bin", "yedi bin", "sekiz bin", "dokuz bin" );
	
	$sayi = $_POST['sayi'];
	trim($sayi);
	$uzunluk = strlen($sayi);
	$tum_yazi= array("");
	for ($i=0;$i<$uzunluk;$i++){
		
		$dizi_adi = "bas".$i;
		$karakter = substr($sayi,$uzunluk-$i-1, 1);
		$yazi = $$dizi_adi[$karakter];
		$tum_yazi[$i]= $yazi; 
		}
	  $tum_yazi_ters = array_reverse($tum_yazi);
	  foreach ($tum_yazi_ters as $basamak) {
		  echo "$basamak ";
		  }
	}
?>

</div>
</body>
</html>