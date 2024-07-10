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
<div class="container bg-info pt-5">

<form action="soru8.php" method="get">
<h1>RASTGELE SAYI ÜRETME MAKİNESİ</h1>
<input type="hidden" name="uret" value="yes">
<button type="submit" class="btn btn-danger">ÜRET</button>
</form>
<p>
<p>
<p>

<?php
	if (isset($_GET['uret'])){
		$sayilar = array("");
		for ($i=0; $i<6; $i++){
		$sayi = rand(1,49);
		if (in_array($sayi, $sayilar)){
			$i--;
			}else{
			$sayilar[$i] = $sayi;	
			}
		}

		foreach($sayilar as $s){
			echo "$s, ";
			}
	}
		
?>


</div>
</body>
</html>