<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$num = readline('Enter a number: ');

function test(array $a, int $n): string
{
    $exists = false;
    for ($x = 0; $x < count($a); $x++) {
        if ($a[$x] == $n) {
            $message = "The number $n is at index $x";
            $exists = true;
            break;
        } else {
            continue;
        }
    }

    if (!$exists) {
        $message = "The number doesnot exists";
    }

    return $message;
}

echo test($array, $num);
