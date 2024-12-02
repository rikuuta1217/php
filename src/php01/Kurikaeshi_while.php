<?php
$i = 0;

while ($i < 3) {
    echo 'i =' . $i . '<br />';
    $i += 1;
}

echo "<br />";

$count = 0;

while ($count < 20) {
    $count += 1;
    echo $count . '<br />';
}

echo "<br />";

$i = 0;
while ($i < 10) {
    if ($i == 5) {
        break;
    }
    echo $i ;
    $i++;
}


