<?php

    class Square extends Shape
    {

        private $sideLength;
        
        public function __construct($sideLength)
        {
            parent::__construct("Persegi");
            $this->sideLength = $sideLength;
        }
        
        public function getSideLength()
        {
            return $this->sideLength;
        }
        
        public function setSideLength($sideLength)
        {
            $this->sideLength = $sideLength;
        }
        
        public function calculateArea()
        { // hitung luas
            return $this->sideLength * $this->sideLength;
        }
        
        public function calculatePerimeter()
        { // hitung keliling
            return 4 * $this->sideLength;
        }

        public function describeArea()
        {
            echo "Luasnya adalah " . $this->calculateArea() . "\n";
        }

        public function describeAreaFormula()
        {
            echo "Rumus luas " . $this->getName() . " adalah sisi x sisi \n";
        }

        public function describePerimeter()
        {
            echo "Kelilingnya adalah " . $this->calculatePerimeter() . "\n";
        }

        public function describePerimeterFormula()
        {
            echo "Rumus keliling " . $this->getName() . " adalah 4 x sisi \n";
        }

    }
