<?php
$maxint = gmp_init('2147483647');

$table = array ('0'=>'0', '1'=>'1');

for ($i=2; $i<=500; $i++) {
	$a = gmp_init($table[$i - 2]);
	$b = gmp_init($table[$i - 1]);
	$new = gmp_add($a, $b);
	$table[strval($i)] = gmp_strval($new);
}

echo "<?php\n\$_fibonacciTable = array (\n";
foreach ($table as $index=>$fib) {
	$new = gmp_init($fib);
	if (gmp_cmp($new, $maxint) > 0) {
		echo "'$index' => '$fib',\n"; 
	}
}
echo ");\n?>";
?>
