<?php 
function factorial($n)
{
	$fact=1;
	for ($i=2; $i<=$n  ; $i++) { 
		$fact*=$i;
	}
	return $fact;
}

function fibonacci($n)
{
	if ($n==1 or $n==0)
		return $n;
	else 
		return fibonacci(n-2)+fibonacci(n-1);
}
?>