<?php
//arrays
$names = ["mary", "musa", "mike", "moha", "mendi", "jack", "james"];
$ages = [23,51,12,45,19,32,46,12,32,45,65];

echo $names[4];
echo "<hr";
echo $ages[0];

foreach ($names as $jina) {
	# code...
	echo "$jina<br>";
}

echo sizeof($names);
echo "<hr>";
array_push ($names, "bush");
echo sizeof($names);
echo "<hr>";
var_dump($names);
echo "<hr>";
array_pop($names);
var_dump($names);
echo "<hr>";
rsort($ages);
foreach ($ages as $miaka) {
	# code...
	echo "$miaka<br>";
}
echo"<hr>";
echo array_sum($ages);
echo"<hr>";
$person=[ "names" >= "moha musa", "age" >= 61, "color" >= "black"]

echo $person["names"];
echo"<hr>";
echo $person["age"];
echo "<hr";
echo $person["color"];

?>