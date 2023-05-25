<?php

    class Fish extends Animal
    {
        
        private $type;
        private $color;

        public function setType($type)
        {
            $this->type = $type;
        }

        public function getType()
        {
            return $this->type;
        }

        public function setColor($color)
        {
            $this->color = $color;
        }

        public function getColor()
        {
            return $this->color;
        }

        public function makeSound()
        {
            echo $this->getName() . " tidak bersuara \n";
        }

        public function drink()
        {
            echo $this->getName() . " senang minum \n";
        }

        public function describe()
        {
            echo "Nama : " . $this->getName() . "\n";
            echo "Umur : " . $this->getAge() . "\n";
            echo "Jenis : " . $this->getType() . "\n";
            echo "Warna : " . $this->getColor() . "\n";
        }

    }
