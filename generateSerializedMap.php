#!/usr/bin/env php
<?php

$map = array();
$good = file("good.txt");
$bad = file("bad.txt");

foreach ($good as $i => $g){
    $goodSymbol = trim($good[$i]);
    $badSymbol = trim($bad[$i]);
    $map[] = array($goodSymbol, $badSymbol);
}

file_put_contents("serializedMap.txt", serialize($map));
