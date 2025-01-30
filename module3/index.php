 <?php
$point=100;
if($point>=90){
    echo '5';
}
elseif($point<90 && $point>=80){
    echo '4';
}
elseif($point<90 && $point>=80){
    echo '3';
}
elseif($point<90 && $point>=80){
    echo '2';
}
elseif($point<90 && $point>=80){
    echo '1';
}  


$day='monday';

switch('$day'){
    case 'monday':
        echo 'nuk ki kurs';
        break;
        case 'tuesday':
            echo 'ki kurs';
            break;
        case 'wednesday':
            echo 'nuk ki kurs';
                break;
        case 'thursday':
            echo 'ki kurs';
            break;
}

for($number=51, $number<=100, $number+2){
    echo '$number';
}

$students = ['A, B, C, D, E, F'];
foreach($students as $student){
    echo '$student';
}

?>