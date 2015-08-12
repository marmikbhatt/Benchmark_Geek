<?php
//Defining a constant Test
$DefConst_TimeStart = microtime();
$DefConst_MemStart = memory_get_usage();
for($i=1;$i<=100000;$i++){
	define("x$i",$i);
}
$DefConst_MemEnd = memory_get_usage();
$DefConst_TimeEnd = microtime();
//Variable test
$Variable_TimeStart = microtime();
$Variable_MemStart = memory_get_usage();
for($i=1;$i<=100000;$i++){
	${"x".$i} = $i;
}
$Variable_MemEnd = memory_get_usage();
$Variable_TimeEnd = microtime();

//Output of the results
echo "Define Constant: Time: ".($DefConst_TimeEnd - $DefConst_TimeStart)." ms | Memory: ".($DefConst_MemEnd - $DefConst_MemStart)." Bytes\n";
echo "Setting Variable: Time: ".($Variable_TimeEnd - $Variable_TimeStart)." ms | Memory: ".($Variable_MemEnd - $Variable_MemStart)." Bytes\n";
