<?php

require 'vendor/autoload.php';

use QL\QueryList;

//采集某页面所有的图片
$data = QueryList::get('http://cms.querylist.cc/bizhi/453.html')->find('img')->attrs('src');
//打印结果
print_r($data->all());
