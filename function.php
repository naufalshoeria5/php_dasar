<?php

function sayHellow()
{
    echo "Hellowww" . PHP_EOL;
}

sayHellow();
sayHellow();
sayHellow();


// function in if statement

$condition = true;

if ($condition) {
    function hi()
    {
        echo "Hai";
    }
}

hi();
