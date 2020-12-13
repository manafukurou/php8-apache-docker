<?php
$testCalculation = new TestCalculation();

//今までの書き方
echo $testCalculation->execute(0,100,0,3);
//php8の書き方
echo $testCalculation->execute(paramB:100,paramD:3);

class TestCalculation
{
    public function execute($paramA = 0,$paramB = 0,$paramC = 0,$paramD = 1){
        $result = ( $paramA + $paramB + $paramC) * $paramD;
        return $result;
    }

}