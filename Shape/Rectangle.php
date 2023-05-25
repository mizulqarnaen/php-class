<?php

    class Rectangle extends Shape
    {

        private $width;
        private $length;
        
        public function __construct($width, $length)
        {
            parent::__construct("Persegi Panjang");
            $this->width = $width;
            $this->length = $length;
        }
        
        public function getWidth()
        {
            return $this->width;
        }
        
        public function setWidth($width)
        {
            $this->width = $width;
        }

        public function getLength()
        {
            return $this->length;
        }
        
        public function setLength($length)
        {
            $this->length = $length;
        }
        
        public function calculateArea()
        { // hitung luas
            return $this->width * $this->length;
        }
        
        public function calculatePerimeter()
        { // hitung keliling
            return 2 * ($this->width + $this->length);
        }

        public function describeArea()
        {
            echo "Luasnya adalah " . $this->calculateArea() . "\n";
        }

        public function describeAreaFormula()
        {
            echo "Rumus luas " . $this->getName() . " adalah panjang x lebar \n";
        }

        public function describePerimeter()
        {
            echo "Kelilingnya adalah " . $this->calculatePerimeter() . "\n";
        }

        public function describePerimeterFormula()
        {
            echo "Rumus keliling " . $this->getName() . " adalah 2 x (panjang + lebar) \n";
        }
        
    }
