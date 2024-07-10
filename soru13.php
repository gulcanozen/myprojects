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
<form action="soru13.php" method="post">
<table class="table">
	<tr>
    	<td>1.Sayı :</td>
        <td><input type="text" name="s1"></td>
    </tr>
    <tr>
    	<td>2.Sayı :</td>
        <td><input type="text" name="s2"></td>
    </tr>
    <tr>
    	<td>3.Sayı :</td>
        <td><input type="text" name="s3"></td>
    </tr>
    <tr>
    	<td>4.Sayı :</td>
        <td><input type="text" name="s4"></td>
    </tr>
    <tr>
    	<td>5.Sayı :</td>
        <td><input type="text" name="s5"></td>
    </tr>
    <tr>
    	<td>6.Sayı :</td>
        <td><input type="text" name="s6"></td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><button class="btn btn-info" type="submit">SAYISAL LOTO OYNA</button></td>
    </tr>
</table>
</form>
</div>
<div class="container bg-warning pt-5">
<?php
if (isset($_POST['s1']) and isset($_POST['s2']) and isset($_POST['s3']) and isset($_POST['s4']) and isset($_POST['s5']) and isset($_POST['s6'])){
	//Kullanıcının girdiği 6 adet sayıyı bir dizi içerisine alma
	$s = array();
	$s[]  = $_POST['s1'];
	$s[]  = $_POST['s2'];
	$s[]  = $_POST['s3'];
	$s[]  = $_POST['s4'];
	$s[]  = $_POST['s5'];
	$s[]  = $_POST['s6'];
	
	//bilgisayarın 6 adet birbirinden farklı 1-49 arasında rastgele sayı üretmesi ve loto isimli dizinin içerisine kaydetmesi
	    $loto = array();
	    for ($i=1;$i<=6;$i++){
	    $random = rand(1,49);
	    if (in_array($random, $loto )){
	    $i--;
		}else{
		 
	    $loto[]=$random;
		 }
         }
		 
 //bilgisayarın ürettiği random sayıları ekrana yazma
		 
         echo "<p>Sayısal Loto Sayıları: ";
		 foreach($loto as $lot){
		 echo "$lot ";
			 }
	 
	     echo "<p>Kullanıcının Sayıları: ";
		 foreach($s as $slot){
		 echo "$slot ";
			 } 
//kullanıcının lotoda kaç tutturduğunu tespit etme		

	    $skor = 0;
	    for ($i=0;$i<6;$i++){
		if (in_array($s[$i], $loto))
		$skor++;
		}echo "<p>Kaç tuttu: $skor";
	    }
?>
</div>
<body>
</body>
</html>