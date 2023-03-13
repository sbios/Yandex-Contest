<?php
$handle = fopen("input.txt", "r");
$countOfTanks = intval(fgets($handle));
$data = explode(" ", fgets($handle));
echo validate($data,$countOfTanks);

function validate($data,$countOfTanks){
	$lastItem = intval(end($data));
	$firstItem = intval(reset($data));
	for ($i=1; $i < $countOfTanks; $i++) { 
		if($data[$i]<$data[$i-1]){
			return -1;
		}
	}
	return $lastItem-$firstItem;
}
?>