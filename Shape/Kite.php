<?php

    class Kite extends Shape
    {

        private $firstDiagonal;
        private $secondDiagonal;
        
        public function __construct($firstDiagonal, $secondDiagonal)
        {
            parent::__construct("Layang-layang");
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

        public function describeArea()
        {
            echo "Luasnya adalah " . $this->calculateArea() . "\n";
        }

        public function describeAreaFormula()
        {
            echo "Rumus luas " . $this->getName() . " adalah 1/2 x diagonal 1 x diagonal 2 \n";
        }
        
    }
