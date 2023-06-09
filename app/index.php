<?php
$array = [
    'fruit' => ['apple', 'pear', 'strawberry', 'cheer'],
    'red' => ['strawberry', 'cheer', 'tomato'],
    'sweet' => ['sugar', 'cake', 'strawberry'],
];

function countOccurrences($array, $item): int
{
    $count = array_reduce($array, function ($carry, $subArray) use ($item) {
        return $carry + count(array_intersect($subArray, [$item]));
    }, 0);

    return $count;
}

$item = 'strawberry';
$count = countOccurrences($array, $item);

echo "The item '$item' appears $count times in the array.";
