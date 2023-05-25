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

        public function eat()
        {
            echo $this->getName() . " senang makan \n";
        }

        public function describe()
        {
            echo "Nama : " . $this->getName() . "\n";
            echo "Umur : " . $this->getAge() . "\n";
            echo "Jenis : " . $this->getType() . "\n";
        }

    }
