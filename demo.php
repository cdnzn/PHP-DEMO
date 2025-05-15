<?php
// odd or even
// $num = readline("enter a number");
// $result = "Even";
// if ($num % 2 != 0){
//     $result = "Odd";
// }
// echo "The number is: {$result}";

// <?php
// // odd or even
// $num = readline("enter a number");
// if($num % 2 == 0){
//     echo $num . " is Even\n";
// } else {
//     echo $num . " is Odd";
// }

/* prime numbers
function isPrime($num){
    if($num<2){
        return "{$num} is not a prime\n";
    }
    if ($num == 2){
        return "{$num} is a prime\n";
    }
    if($num % 2 == 0){
        return "{$num} is not a prime\n";
    }
    $sqrtNum = sqrt($num);
    for($i=3; $i <= $sqrtNum; $i +=2){
        if($num % $i == 0){
            return "{$num} is not a prime\n";
        }
    }
    return "{$num} is a prime\n";

}

$num = readline("enter a number");
    if(!is_numeric($num)){
        echo "Invalid input";
        exit;
    }
$num = (int)$num;
for ($ctr=0; $ctr<=$num; $ctr++){
    echo isPrime($ctr);
}
*/

require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->slugify("This is the new title.");