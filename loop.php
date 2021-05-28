<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_get('max_execution_time');

$x = '85';
// max second number in chain...
$maxChainNumber = pow(9,2) * 7;

function quickMaths($int) {
    $sum1 = ""; 
    $sum2 = "";
    $array = str_split($int);
    $total = "";
    
    $sum1 = $array[0] * $array[0];
    $sum2 = $array[1] * $array[1];
    
    $total = $sum1 + $sum2;
    
    return $total;
}

function numberList($int){
    $maxChainNumber = "";
    for ($i=1; $i < $maxChainNumber; $i++) { 
        $y = $i;
        while($i != '1' && $i != '89'){
            $y = 0;
            $y = str_split($i);
            foreach ($y as $key) {
                $key += pow($key,2);
                echo $key . '<br>';
            }
        }
        if ($i == 89) {
            array_push($result,$i);
        }
    }
    return $int;
}

function oneThousandCount($result) {
    $totalNum = 0;
    $convertedNumber = [];
    for ($j = 1; $j < 100000; $j++) { 
        $a = 0;
        
        foreach (str_split($j) as $b) {
            
            $a += pow($b,2);

            

            $convertedNumber = array_map('intval', str_split($result));
            // echo var_dump($convertedNumber);

            $reConstructedNumber = $convertedNumber[0] . $convertedNumber[1];
            // echo $reConstructedNumber;
            // die();

            if ($reConstructedNumber == numberList($result)) {
                
                $totalNum++;
                // echo $totalNum .'<br>';
                // die();
            }
            
        }

    }
    return $totalNum;
}

$total = quickMaths($x);

$timerS = microtime(true);
$result = [];
$result = numberList($total);
$completeNumbers = oneThousandCount($result);
$timerE = microtime(true);
$x_time = ($timerS - $timerE);
