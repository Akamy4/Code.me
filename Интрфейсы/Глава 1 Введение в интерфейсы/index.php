<?php
require_once('Disk.php');

$disk = new Disk(4);

echo "Площадь круга = " . $disk->getSquare() . " Периметр круга = " . $disk->getPerimeter();
