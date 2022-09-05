<?php
require_once('Disk.php');
require_once('FiguresCollection.php');
require_once('Quadrate.php');
require_once('Rectangle.php');

$disk = new Disk(4);
$quadrate = new Quadrate(4);
$rectangle = new Rectangle(4, 5);
$figures_collection = new FiguresCollection;


$disk->getSquare();
$disk->getPerimeter();
echo "Площадь круга = " . $disk->getSquare() . " Периметр круга = " . $disk->getPerimeter();
echo "<br>";

$quadrate->getSquare();
$quadrate->getPerimeter();
echo "Площадь квадрата = " . $quadrate->getSquare() . " Периметр квадрата = " . $quadrate->getPerimeter();
echo "<br>";

$rectangle->getSquare();
$rectangle->getPerimeter();
echo "Площадь прямоугольника = " . $rectangle->getSquare() . " Периметр прямоугольника = " . $rectangle->getPerimeter();
echo "<br>";

$figures_collection->addFigure($disk);
$figures_collection->addFigure($quadrate);
$figures_collection->addFigure($rectangle);

echo "Итоговая площадь = " . $figures_collection->getTotalSquare() . " Итоговый периметр = " . $figures_collection->getTotalPerimeter();
