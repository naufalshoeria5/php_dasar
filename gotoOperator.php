<?php

goto a;
echo 'hello a';


a:
echo 'helloww';


$a = 1;
while (true) {
    echo "hallo $a" . PHP_EOL;
    $a++;

    if ($a == 10) {
        goto end;
    }
}

end:
echo 'udah yah';
