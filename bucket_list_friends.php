<?php
$arr = [];
echo"Hoeveel vrienden zal ik vragen on hun droom?".PHP_EOL;

$antwoord = readline("");

for($i = 1; $i <= $antwoord; $i++){
$a =  readline("wat is jouw naam?").PHP_EOL;
$b =  readline("wat is jouw droom").PHP_EOL;

$arr[$a] = [
    'dream' => $b,
];
}

foreach($arr as $a => $data){
    echo "{$a} heeft als droom : {$data['dream']}".PHP_EOL;
}

?>