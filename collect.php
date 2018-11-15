<?php
//>> 285964377@qq.comP HP_VERSION

require 'vendor/autoload.php';
use QL\QueryList;

$url = $_POST['url'];
$data = QueryList::get($url)
    // 设置采集规则
    ->rules([
        'title'=>array('.dn>a','href'),
        'url'=>array('.dn>a','text')
    ])
    ->queryData();

//print_r($data);
echo json_encode($data);