<?php

if (empty($argv[1])) {
    exit;
}

function batch($n)
{
    echo $n;

    if ($n < 1) {
        return;
    } else {
        batch($n - 1);
    }

    echo $n;
}

batch($argv[1]);