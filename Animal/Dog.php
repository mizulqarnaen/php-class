<?php

    class Dog extends Animal
    {
        
        private $breed;
        private $color;

        public function setBreed($breed)
        {
            $this->breed = $breed;
        }

        public function getBreed()
        {
            return $this->breed;
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
            echo $this->getName() . " yang berjenis " . $this->getBreed() . " sedang menggonggong \n";
        }

        public function play()
        {
            echo $this->getName() . " senang bermain \n";
        }

        public function describe()
        {
            echo "Nama : " . $this->getName() . "\n";
            echo "Umur : " . $this->getAge() . "\n";
            echo "Jenis : " . $this->getBreed() . "\n";
            echo "Warna : " . $this->getColor() . "\n";
        }

    }
