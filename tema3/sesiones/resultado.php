<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
echo $_GET['operacion'];
$a=$_SESSION['a'];
$b=$_SESSION['b'];
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