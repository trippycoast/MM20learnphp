<?php

class Box {
    public $height;
    public $width;
    public $length;

    public function __construct(){
        $this->width = $w;
        $this->height = $h;
        $this->length = $l;
    }

    public function setHeight(int $height){
        if($height>0){
            $this->height = $height;
        }
    }
    public function volume(){
        return $this->height * $this->width * $this->length; 
    }
    public function tostring(){
        return "box w: $this->width, h: $this->Height, l: $this->length and volume is ($this->volume()";
    }

    public function __get($name){
        var_dump("trying to access $name");
    }

    public function __set($name, $value){
        var_dump("trying to set $name with value $value");
    }

    public function __call($name, $args){
        var_dump("trying to call $name with value args" . implode(',', $args));
    }

    public function __invoke(){
        var_dump("trying to use object as function");
    }
}

class Steelbox extends box{
    use Material;
    public $weight;
}

trait Material {
    public $material;

    public function getMaterial(){
        return $this->material;
    }
}

$box1 = new Box();
$box1->height = -12;
$box1->width = 10;
$box1->length = 10;
var_dump($box1);
