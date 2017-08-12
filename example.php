<?php

require 'vendor/autoload.php';

use \Qbhy\LikeString\LikeString;

$bool = LikeString::formatFullMatch('qbhy', 'qbh7') ? 'true' : 'false';
//print_r($bool);

$numeric = LikeString::generateNumeric('aabbccdd');

print_r($numeric);
//like 22445577



