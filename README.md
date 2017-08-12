# like-string
简单的相似字符串处理库

## 安装
```bash
$ composer require 96qbhy/like-string 
```

## 使用
```php
require 'vendor/autoload.php';

use \Qbhy\LikeString\LikeString;

$bool = LikeString::formatFullMatch('qbhy', 'qbh7') ? 'true' : 'false';
//print_r($bool);

$numeric = LikeString::generateNumeric('aabbccdd');

print_r($numeric);
//like 22445577
```

[https://www.96qbhy.com](https://www.96qbhy.com)  
96qbhy@gmail.com