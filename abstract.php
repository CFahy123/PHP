<?php 

abstract class Animal{
	public $name; 
	public $color; 

	public function describe(){
		return $this->name . ' is ' . $this->color . "\n";  
	}

	abstract public function makeSound(); 


}

class Duck extends Animal{

	public function describe(){
		return parent::describe();
	}

	public function makeSound(){
		return 'Quack Quack...';
	}
}

class Dog extends Animal{

	public function describe(){
		return parent::describe();
	}

	public function makeSound(){
		return 'Woof Woof...';
	}
}

$animal = new Dog(); 
$animal->name = 'Chales';
$animal->color = 'Black';
echo $animal->describe();
echo $animal->makeSound();

 ?>