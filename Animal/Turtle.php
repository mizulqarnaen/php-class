<?php

    class Turtle extends Animal
    {
        
        private $type;

        public function setType($type)
        {
            $this->type = $type;
        }

        public function getType()
        {
            return $this->type;
        }

        public function makeSound()
        {
            echo $this->getName() . " tidak bersuara \n";
        }

    }
