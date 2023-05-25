<?php

    class Triangle extends Shape
    {

        private $base;
        private $height;
        
        public function __construct($base, $height)
        {
            parent::__construct("Segitiga");
            $this->base = $base;
            $this->height = $height;
        }
        
        public function getBase()
        {
            return $this->base;
        }
        
        public function setBase($base)
        {
            $this->base = $base;
        }

        public function getHeight()
        {
            return $this->height;
        }
        
        public function setHeight($height)
        {
            $this->height = $height;
        }
        
        public function calculateArea()
        { // hitung luas
            return 0.5 * $this->base * $this->height;
        }

        public function describeArea()
        {
            echo "Luasnya adalah " . $this->calculateArea() . "\n";
        }

        public function describeAreaFormula()
        {
            echo "Rumus luas " . $this->getName() . " adalah 1/2 x alas x tinggi \n";
        }
        
    }
