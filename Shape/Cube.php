<?php

    class Cube extends Shape
    {

        private $sideLength;
        
        public function __construct($sideLength)
        {
            parent::__construct("Kubus");
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
        
        public function calculateVolume()
        { // hitung volume
            return pow($this->sideLength, 3);
        }
        
        public function calculateSurfaceArea()
        { // hitung luas permukaan
            return 6 * pow($this->sideLength, 2);
        }

        public function describeVolume()
        {
            echo "Volumenya adalah " . $this->calculateVolume() . "\n";
        }

        public function describeVolumeFormula()
        {
            echo "Rumus volume " . $this->getName() . " adalah sisi x sisi x sisi \n";
        }

        public function describeSurfaceArea()
        {
            echo "Luas permukaannya adalah " . $this->calculateSurfaceArea() . "\n";
        }

        public function describeSurfaceAreaFormula()
        {
            echo "Rumus luas permukaan " . $this->getName() . " adalah 6 x sisi x sisi \n";
        }

    }
