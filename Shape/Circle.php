<?php

    class Circle extends Shape
    {
        private $radius;
        
        public function __construct($radius)
        {
            parent::__construct("Lingkaran");
            $this->radius = $radius;
        }
        
        public function getRadius()
        {
            return $this->radius;
        }
        
        public function setRadius($radius)
        {
            $this->radius = $radius;
        }
        
        public function calculateArea()
        { // hitung luas
            return pi() * $this->radius * $this->radius;
        }
        
        public function calculateCircumference()
        { // hitung keliling
            return 2 * pi() * $this->radius;
        }

        public function describeArea()
        {
            echo "Luasnya adalah " . $this->calculateArea() . "\n";
        }

        public function describeAreaFormula()
        {
            echo "Rumus luas " . $this->getName() . " adalah pi x jari-jari x jari-jari \n";
        }

        public function describeCircumference()
        {
            echo "Kelilingnya adalah " . $this->calculateCircumference() . "\n";
        }

        public function describeCircumferenceFormula()
        {
            echo "Rumus keliling " . $this->getName() . " adalah 2 x pi x jari-jari \n";
        }

    }
