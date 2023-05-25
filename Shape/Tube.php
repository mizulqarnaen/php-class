<?php

    class Tube extends Shape
    {

        private $radius;
        private $height;
        
        public function __construct($radius, $height)
        {
            parent::__construct("Tabung");
            $this->radius = $radius;
            $this->height = $height;
        }
        
        public function getRadius()
        {
            return $this->radius;
        }
        
        public function setRadius($radius)
        {
            $this->radius = $radius;
        }
        
        public function getHeight()
        {
            return $this->height;
        }
        
        public function setHeight($height)
        {
            $this->height = $height;
        }
        
        public function calculateVolume()
        {
            return pi() * pow($this->radius, 2) * $this->height;
        }
        
        public function calculateSurfaceArea()
        {
            $baseArea = 2 * pi() * pow($this->radius, 2);
            $sideArea = 2 * pi() * $this->radius * $this->height;

            return $baseArea + $sideArea;
        }

        public function describeVolume()
        {
            echo "Volumenya adalah " . $this->calculateVolume() . "\n";
        }

        public function describeVolumeFormula()
        {
            echo "Rumus volume " . $this->getName() . " adalah pi x jari-jari x jari-jari x tinggi \n";
        }

        public function describeSurfaceArea()
        {
            echo "Luas permukaannya adalah " . $this->calculateSurfaceArea() . "\n";
        }

        public function describeSurfaceAreaFormula()
        {
            echo "Rumus luas permukaan " . $this->getName() . " adalah (2 x pi x r ^ 2) + (2 x pi x r x t) \n";
        }

    }
