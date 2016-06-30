<?php

if (empty($argv[1])) {
    exit;
}

$result = 1;
for ($i = $argv[1]; $i > 0; $i--) {
    $result *= $i;
}
echo $result;