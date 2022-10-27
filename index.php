    <?php

    require_once __DIR__ . '/vendor/autoload.php';

    use App\StringHelper;

    $myString = "Hello";
    $str = new StringHelper($myString);

    $result = $str->toUpper(); // $result equal HELLO
    echo ($result . "\n");
    $result1 = $str->toLower(); // $result equal hello
    echo ($result1 . "\n");
    $result2 = $str->startsWith('STRING'); // equal false
    echo ($result2 . "\n");
    $result21 = $str->startsWith('He'); // equal true
    echo ($result21 . "\n");
    $result3 = $str->endWith('o'); // equal true
    echo ($result3 . "\n");
    $result4 = $str->endWith('ttttt'); // equal false
    echo ($result4 . "\n");

    ?>

