<?php
// $students = ['olsa, Olsa, olsaa'];
// print_r($students);

// $num = 1.5 + 1.5;
// echo $num;
// echo gettype($num);

$things = ["pen", "paper", "bag", "pencil"];
array_push($things, "ruler");
print_r($things);

$count = count($things);
for($i=0;$i<$count;$i++){
    echo $things[$i];
}
echo "<br>";
array_pop($things);
print_r($things);
echo "<br>";
array_unshift($things, "car");
print_r($things);
echo "<br>";
array_shift($things);
print_r($things);
echo "<br>";
$things_slice = array_slice($things, 1);
print_r($things_slice);


function getAverage($array) {
    return array_sum($array) / count($array);
}

$arr = [10, 20, 30, 40, 50];
$average = getAverage($arr);

echo "The average is: " . $average;

?>

