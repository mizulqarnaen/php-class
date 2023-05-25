<?php

    class Block extends Shape
    {

        private $length;
        private $width;
        private $height;
        
        public function __construct($length, $width, $height)
        {
            parent::__construct("Balok");
            $this->length = $length;
            $this->width = $width;
            $this->height = $height;
        }
        
        public function getLength()
        {
            return $this->length;
        }
        
        public function setLength($length)
        {
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
        
        public function getHeight()
        {
            return $this->height;
        }
        
        public function setHeight($height)
        {
            $this->height = $height;
        }
        
        public function calculateVolume()
        { // hitung volume
            return $this->length * $this->width * $this->height;
        }
        
        public function calculateSurfaceArea()
        { // hitung luas permukaan
            return 2 * ($this->length * $this->width + $this->length * $this->height + $this->width * $this->height);
        }

        public function describeVolume()
        {
            echo "Volumenya adalah " . $this->calculateVolume() . "\n";
        }

        public function describeVolumeFormula()
        {
            echo "Rumus volume " . $this->getName() . " adalah panjang x lebar x tinggi \n";
        }

        public function describeSurfaceArea()
        {
            echo "Luas permukaannya adalah " . $this->calculateSurfaceArea() . "\n";
        }

        public function describeSurfaceAreaFormula()
        {
            echo "Rumus luas permukaan " . $this->getName() . " adalah 2 x ( p x l + l x t + p x t ) \n";
        }

    }
