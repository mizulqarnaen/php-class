<?php

    class Trapezoid extends Shape
    {

        private $bottomBase;
        private $topBase;
        private $height;
        
        public function __construct($bottomBase, $topBase, $height)
        {
            parent::__construct("Trapesium");
            $this->bottomBase = $bottomBase;
            $this->topBase = $topBase;
            $this->height = $height;
        }
        
        public function getBottomBase()
        {
            return $this->bottomBase;
        }
        
        public function setBottomBase($bottomBase)
        {
            $this->bottomBase = $bottomBase;
        }

        public function getTopBase()
        {
            return $this->topBase;
        }
        
        public function setTopBase($topBase)
        {
            $this->topBase = $topBase;
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
            return 0.5 * ($this->bottomBase + $this->topBase) * $this->height;
        }

        public function describeArea()
        {
            echo "Luasnya adalah " . $this->calculateArea() . "\n";
        }

        public function describeAreaFormula()
        {
            echo "Rumus luas " . $this->getName() . " adalah 1/2 x (a + b) x tinggi \n";
        }
        
    }
