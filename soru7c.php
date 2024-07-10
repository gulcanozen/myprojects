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
<?php
$sayi1 = $_POST("s1");
$sayi2 = $_POST("s2");
$sayi3 = $_POST("s3");



$buyuk;
if ($sayi1>$sayi2){
	
	if ($sayi1>$sayi3){
		
		$buyuk = $sayi1;
		}else{
			
		$buyuk = $sayi3;	
			}
	   }else{
		   
	if ($sayi2>$sayi3){
		
		$buyuk = $sayi2;
		}else{
			
			$buyuk = $sayi3;
			}
		   
		   }
echo "Verdiğiniz sayılar arasında en büyüğü : $buyuk";
?>
</body>
</html>