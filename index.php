<?php
function counter()
{
    static $count = 0;
    $count++;
    echo $count . PHP_EOL;
}

counter();
counter();
counter();