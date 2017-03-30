<?php
	// This is the file for the parent class
	class ParentClass {
		var $var1= "This is my assignment3";
		var $parent= "This is parent class";
		public function __construct($myname){
			echo "$var1 " . "My name is " . "$myname";
		}
		public function add($array){
			$result= $array[0]+ $array[1];
			echo "The adding result is " . "$result";
		}
		public function substract($array){
			$result= $array[0]- $array[1];
			echo "The substracting result is " . "$result";
		}
		public function __toString(){
			return $this->parent;
		}
	}
