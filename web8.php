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
$ogrenci ="Atakan";
$ogrenciler = array ("Gökhan" , "Ezgi" , "Gülcan", "Esila","Gökben") ;
echo $ogrenciler[0];
echo"<br>";
foreach($ogrenciler as $ad){
    echo"$ad,";
}
$ogrenciler[2] = "Gülcan";
echo "<br>" ;
foreach($ogrenciler as $ad){
    echo"$ad,";
}
$ogrenciler[] = "Gökhan";
$ogrenciler[] = "Kürsat";
echo "<br>";
foreach($ogrenciler as $ad){
    echo"$ad, ";
}
if (is_array($ogrenciler)){
    echo "<p> ogrenciler bir dizidir";
    }else {
    echo"<p> ogrenciler bir degiskendir";
    }
if (is_array($ogrenci)){
    echo "<p> ogrenci bir dizidir" ;
}else{
    echo"<p> ogrenci bir degiskendir";
}
$sayilar1 = array(1,2,3,4,5);
$sayilar2 = array(6,7,8,9,10);
$yeni = array_merge($sayilar1,$sayilar2);
echo "<p>";
foreach($yeni as $sayi){
    echo "$sayi,";
}
$harfler = array("a", "b", "c");
array_push($harfler,"d","e");
echo"<p>";
foreach($harfler as $harf){
    echo "$harf, ";
}
array_shift($harfler);
echo"<p>";
foreach($harfler as $harf){
    echo "$harf, ";
}
$kesit = array_slice($yeni, 6,4);
print_r($kesit);
rsort($yeni);
echo "<p>";
foreach($yeni as $sayi){
    echo "$sayi,";
}
sort($ogrenciler);
echo "<br>";
foreach($ogrenciler as $ad){
    echo"$ad, ";
}

?>
</body>
</html>