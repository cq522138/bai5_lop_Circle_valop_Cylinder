<?php
class Cricle
{
    public $radius;
    private $color;

    public function __construct($radius,$color)
    {
        $this->radius = $radius;
        $this->color=$color;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);

    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public function getColor(){
        return $this->color;
    }
    function toString(){
        echo "ban kinh la".$this->radius." mau la".$this->color;
    }
}
class Cylinder extends Cricle{
    public $height;
    public function __construct($name, $radius,$height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
}


$vong1 = new Cricle(5,"blue");
echo $vong1->toString();