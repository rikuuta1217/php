<?php

$i = 0;

while ($i < 3) {
    echo 'i = ' . $i . '<br />';
    $i += 1;
}

echo "<br />";

$count = 0;

while ($count < 20) {
    $count +=1;
    echo $count . '<br />';
}

echo "<br />";

$i = 0;
while ($i < 10) {
    if ($i == 5) {
        break;
    }
    echo $i;
    $i++;
}

echo "<br />";

$i = 0;
while ($i < 10) {
    if ($i == 5) {
        $i++;
        continue;
    }
    echo $i;
    $i++;
}

echo "<br />";

$count = 0;

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . '<br />';
    $count++;
}

echo "<br />";

$i = 0;
do {
    echo $i . '<br />';
    $i++;
}   while ($i < 5);

echo "<br />";

$num = 0;

do {
    echo 'num = ' . $num . '<br />';
    $num += 1;
}   while ($num < 3);

