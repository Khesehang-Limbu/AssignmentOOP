<?php
interface Keyboad {
	public function key_press() : void;
}

class Laptop implements Keyboad{
	private $name;
	public function __construct($name){
		$this->name = $name;
	}
	//Function Override
	public function key_press() : void{
		echo "Key Pressed in $this->name";
	}
}

$lenovo = new Laptop("Lenovo Ideapad");
$lenovo->key_press();
