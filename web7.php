<html>
<head>
<meta charset ="utf-8"
<title>Başlıksız Belge</title>
</head>

<body>
<?php 
$ogrenci ="Atakan";
$ogrenciler =array ("Gülcan","Ezgi","Gökhan","Esila");
echo $ogrenciler[0];
$ogrenciler[2] = "Gökben";
echo $ogrenciler[2];
foreach($ogrenciler as $ad) {

    echo "$ad, ";
}
$ogrenciler[] = "Gökhan";
$ogrenciler[] = "Kürşat";
echo "<br>";
foreach($ogrenciler as $ad){
    echo "$ad, ";
}

if (is_array($ogrenciler)){

        echo "<p>öğrenciler bir dizidir";
        }else{
        echo"<p>öğrenciler bir değişkendir"
        }
 if (is_array($ogrenci)){

     echo "<p>öğrenciler bir dizidir";
      }else{
     echo"<p>öğrenciler bir değişkendir"
     }
?>

</body>


</html>