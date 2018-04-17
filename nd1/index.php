<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-09
 * Time: 19:21
 */

$type = "cat";
$name = "Tim";
$age = 1;
$weight = 3.6;

echo 'Tim is ',($name==='Tim'? 'a cat!': 'not a cat!' );

echo "<br>.</br>";

/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-10
 * Time: 16:41
 */
$price = 482;

if (500<$price && $price<600){
    echo "Price is big enough";
}
else if(600<$price && $price<700){
    echo "OMG";
}
else {
    echo "Price is OK";
}