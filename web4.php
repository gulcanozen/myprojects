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
echo "<table border='1' bgcolor='#CC66CC'>";
	echo "<tr>";
		echo "<td>Hücre 1</td>";
		echo "<td>Hücre 2</td>";
	echo "</tr>";
	
	echo "<tr>";
		echo "<td>Hücre 3</td>";
		echo "<td>Hücre 4</td>";
	echo "</tr>";

echo "</table>";	
$zaman = getdate();
$saat = $zaman['hours']+ 3;
$gun = $zaman['wday'];
if ($saat<=11 and $saat>=5){
	echo "Günaydın";
	
	}elseif($saat<=16 and $saat>=12){
	
	echo "İyi Günler";
	
	}elseif($saat<=23 and $saat>=19){
	
	echo "İyi Akşamlar";	
	
	}else{
		
	echo "İyi Geceler";
	}
switch ($gun){
	case 1:
	$gun2 = "Pazartesi";
	break;
	
	case 2:
	$gun2 = "Salı";
	break;
	
	case 3:
	$gun2 = "Çarşamba";
	break;
	
	case 4:
	$gun2 = "Perşembe";
	break;
	
	case 5:
	$gun2 = "Cuma";
	break;
	
	case 6:
	$gun2 = "Cumartesi";
	break;
	
	case 7:
	$gun2 = "Pazar";
	break;
	
	default:
	$gun2 = "isimsiz gün";
	break;
	}
echo "<p>Bugün günlerden $gun2";
?>


</body>
</html>
















