<?php

    class Rhomb extends Shape
    {

        private $firstDiagonal;
        private $secondDiagonal;
        
        public function __construct($firstDiagonal, $secondDiagonal)
        {
            parent::__construct("Belah Ketupat");
            $this->firstDiagonal = $firstDiagonal;
            $this->secondDiagonal = $secondDiagonal;
        }
        
        public function getFirstDiagonal()
        {
            return $this->firstDiagonal;
        }
        
        public function setFirstDiagonal($firstDiagonal)
        {
            $this->firstDiagonal = $firstDiagonal;
        }

        public function getSecondDiagonal()
        {
            return $this->secondDiagonal;
        }
        
        public function setSecondDiagonal($secondDiagonal)
        {
            $this->secondDiagonal = $secondDiagonal;
        }
        
        public function calculateArea()
        { // hitung luas
            return 0.5 * $this->firstDiagonal * $this->secondDiagonal;
        }

        public function calculatePerimeter()
        { // hitung keliling

            $sideA = $this->firstDiagonal / 2;
            $sideB = $this->secondDiagonal / 2;

            return 4 * $this->pythagoreanTheorem($sideA, $sideB);

        }

        public function describeArea()
        {
            echo "Luasnya adalah " . $this->calculateArea() . "\n";
        }

        public function describeAreaFormula()
        {
            echo "Rumus luas " . $this->getName() . " adalah 1/2 x diagonal 1 x diagonal 2 \n";
        }

        public function describePerimeter()
        {
            echo "Kelilingnya adalah " . $this->calculatePerimeter() . "\n";
        }

        public function describePerimeterFormula()
        {
            echo "Rumus keliling " . $this->getName() . " adalah 4 x sisi \n";
        }

        public function pythagoreanTheorem($sideA, $sideB)
        {
            return sqrt(pow($sideA, 2) + pow($sideB, 2));
        }
        
    }
