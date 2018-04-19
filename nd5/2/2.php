<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-19
 * Time: 14:43
 */
$current_date = new DateTime("now", new DateTimeZone('UTC'));
$another_date = new DateTime('1990-07-08 17:00', new DateTimeZone('UTC'));
$current_date->setTimezone(new DateTimeZone('Europe/Vilnius'));
echo $current_date->format("Y-m-d H:i:s");
echo "<br>";
echo $another_date->format("Y-m-d H:i:s");
echo "<br>";
$difference = $another_date->diff($current_date);
echo "Praejo ".$difference->format(" %h dienų");
echo "<pre>";
print_r($difference);
echo "</pre>";