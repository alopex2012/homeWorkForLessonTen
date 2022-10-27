<?php

require_once __DIR__ . '/vendor/autoload.php';;

use StringHelper\StringHelper;

$myString = "Hello";
$str = new StringHelper($myString);
echo $result = $str->toUpper(); // $result equal HELLO
$result1 = $str->toLower(); // $result equal hello

$result2 = $str->startsWith('STRING'); // equal false
$result21 = $str->startsWith('He'); // equal true
$result3 = $str->endWith('o'); // equal true
$result4 = $str->endWith('ttttt'); // equal false