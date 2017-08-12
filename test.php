<?php

require 'vendor/autoload.php';

use \Qbhy\LikeString\LikeString;

$bool = LikeString::formatFullMatch('qbhy', 'qbh7') ? 'true' : 'false';
//print_r($bool);

$numeric = [];
for ($i = 0; $i < 100; $i++) {
    $numeric[] = LikeString::generateNumeric('aabbccdd');
}

print_r($numeric);


