<?php
$dogs = array(
    array('Husky', 'Mexico', 15),
    array('Pug', 'Italy', 13),
    array('Bulldog', 'Germany', 20),
);
echo $dogs [0][0]. " Origin:". $dogs[0][1]. " life span:", $dogs[0][2]. "<br>";
echo $dogs [1][0]. " Origin:". $dogs[1][1]. " life span:", $dogs[1][2]. "<br>";
echo $dogs [2][0]. " Origin:". $dogs[2][1]. " life span:", $dogs[2][2]. "<br>";

for($row=0; $row<3;$row++){
    echo "<p><b>row number $row</b> </p>";
    echo "<ul>";
    for($col=0; $col<3;$col++) {
        echo "<li>" . $dogs[$row][$col] . "</li>";
    }
    echo "</ul>";
}

$arrays = array(
    array(1,2,3),
    array(1,2,3),
    array(1,2,3),
);

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++) {
        echo "Array: $i Element: $j <br>";
    }
}
echo "<br>";
echo "<br>";

$grades = array(
    "Math" => "3",
    "Art" => "5",
    "History" => "4",
    "Music" => "5",
);

foreach($grades as $key => $value){
    echo "Subject:" . $key . ", Grade:" . $value;
    echo "<br>";
}

for($i = 1;$i<5;$i++){
    for($j = 1;$j<=$i;$j++){
        echo"*";
    }
    echo "<br>";
}
?>