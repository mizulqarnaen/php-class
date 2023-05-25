<?php

    class Animal
	{
        private $name;
        private $age;
        private $species;

		public function __construct($name, $age, $species)
		{
			$this->name = $name;
			$this->age = $age;
			$this->species = $species;
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function setAge($age)
		{
			$this->age = $age;
		}

		public function setSpecies($species)
		{
			$this->species = $species;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getAge()
		{
			return $this->age;
		}

		public function getSpecies()
		{
			return $this->species;
		}

		public function eat()
		{
			echo "$this->name sedang makan \n";
		}

		public function drink()
		{
			echo "$this->name sedang minum \n";
		}

		public function sleep()
		{
			echo "$this->name sedang tidur \n";
		}

		public function play()
		{
			echo "$this->name sedang bermain \n";
		}

		public function makeSound()
		{
			echo "$this->name sedang bersuara \n";
		}

		public function describeSpecies()
		{
			echo "Spesies hewanku yang bernama $this->name adalah $this->species \n";
		}

		public function describeAge()
		{
			echo "Umur hewanku adalah $this->age \n";
		}

	}
