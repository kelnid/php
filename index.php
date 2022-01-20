<?php

class Figure
{
    protected $type;

    public function getType()
    {
        return $this->type;
    }
}

class Circle extends Figure
{
    private $radius;

    public function __construct($radius)
    {
        $this->type = 'Круг';
        $this->radius = $radius;
    }

    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }

    public function getArea()
    {
        return pi() * ($this->radius ** 2);
    }
}

class Triangle extends Figure
{
    private $firstSide;
    private $secondSide;
    private $thirdSide;

    public function __construct($firstSide, $secondSide, $thirdSide)
    {
        $this->type = 'Треугольник';
        $this->firstSide = $firstSide;
        $this->secondSide = $secondSide;
        $this->thirdSide = $thirdSide;
    }

    public function getPerimeter()
    {
        return $this->firstSide + $this->secondSide + $this->thirdSide;
    }

    public function getArea()
    {
        $p = ($this->firstSide + $this->secondSide + $this->thirdSide) / 2;
        return sqrt($p * ($p - $this->firstSide) * ($p - $this->secondSide) * ($p - $this->thirdSide));
    }
}

class Square extends Figure
{
    private $side;

    public function __construct($side)
    {
        $this->type = 'Квадрат';
        $this->side = $side;
    }

    public function getPerimeter()
    {
        return $this->side * 4;
    }

    public function getArea()
    {
        return $this->side ** 2;
    }
}

$circle = new Circle(5);
echo "Фигура: " . $circle->getType() . ", " . "площадь: " . $circle->getArea() . ", " . "периметр: " . $circle->getPerimeter() . "<br>";
$triangle = new Triangle(2, 3, 4);
echo "Фигура: " . $triangle->getType() . ", " . "площадь: " . $triangle->getArea() . ", " . "периметр: " . $triangle->getPerimeter() . "<br>";
$square = new Square(5);
echo "Фигура: " . $square->getType() . ", " . "площадь: " . $square->getArea() . ", " . "периметр: " . $square->getPerimeter() . "<br>";
