<?php
$testMixed = new TestMixed();
$result =  $testMixed->execute(2,5);
echo "<br>";
echo "関数外のresultの型:".gettype($result);
echo "<br>";
echo "結果:".$result;



class TestMixed
{
    public function execute($paramA = 0,$paramB = 0):mixed{
        $result = ( $paramA + $paramB ) ;
        $result = (string)$result;
        echo "関数内部のresultの型:".gettype($result);
        return $result;
    }

}
echo "<hr>";

$testMixed2 = new TestMixed2();
$result =  $testMixed2->execute(2,5);
echo "<br>";
echo "関数外のresultの型:".gettype($result);
echo "<br>";
echo "結果:".$result;

class TestMixed2
{
    public function execute($paramA = 0,$paramB = 0):int{
        $result = ( $paramA + $paramB ) ;
        $result = (string)$result;
        echo "関数内部のresultの型:".gettype($result);
        return $result;
    }

}

echo "<br>";
echo "<br>";
echo "<a href='https://github.com/manafukurou/php8-apache-docker/blob/master/public/mixed.php'>コード確認</a>";