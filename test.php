<?php

require 'vendor/autoload.php';

$bool = \Qbhy\LikeString\LikeString::FormatFullMatch('qbhy', 'qbh7') ? 'true' : 'false';
print_r($bool);


