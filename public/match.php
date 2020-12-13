<?php

//今までの書き方
$number = "1" ;
switch ($number){
    case 0:
        $result = 'りんご';
        break;
    case 1:
        $result = 'バナナ';
        break;
    case "1":
        $result = 'ばなな';
        break;        
    case 2:
        $result = 'みかん';
        break;
}
echo $result;

$result = match ($number) {
    0 => 'りんご',
    1 => 'バナナ',
    "1" => "ばなな",
    2 => 'みかん',
};
echo $result;


echo "<br>";
echo "<br>";
echo "<a href='https://github.com/manafukurou/php8-apache-docker/blob/master/public/match.php'>コード確認</a>";