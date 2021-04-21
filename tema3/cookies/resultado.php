<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo $_GET['operacion'];
$a=$_COOKIE['a'];
$b=$_COOKIE['b'];
switch ($_GET['operacion']) {
	case 'suma':
		echo $a+$b;
		break;
	
	case 'resta':
		# code...
		echo $a-$b;
		break;
	case 'multiplicacion':
		# code...
		echo $a*$b;
		break;
	case 'division':
		# code...
		echo $a/$b;
		break;
	
	default:
		# code...
		break;
}
?>
<meta http-equiv="refresh" content="4;URL=menu.php?a=<?php echo $a; ?>&b=<?php echo $b; ?>">
</body>
</html>