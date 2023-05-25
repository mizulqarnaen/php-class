<?php

    class Cat extends Animal
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
            echo $this->getName() . " yang berjenis " . $this->getBreed() . " sedang mengeong \n";
        }

        public function sleep()
        {
            echo $this->getName() . " senang tidur \n";
        }

    }
