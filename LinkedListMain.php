<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 29/01/2019
 * Time: 09:06
 */
include_once('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes() . "<br>";
$linkData = $linkedList->readList();

echo $totalNodes;
echo implode('-', $linkData);