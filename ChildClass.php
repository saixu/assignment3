<?php 
	// this file will extend PArentClass.php
	include "ParentClass.php";
	class ChildClass extends ParentClass {
		private $child= "This is child class";
		public function __construct(){
			
		}
		public function multiply($array){
			$result= $array[0]* $array[1];
			echo "The multiplying result is " . "$result";
		}
		public function divide($array){
			$result= $array[0]/$array[1];
			echo "The dividiing result is " . "$result";
		}
		public function __toString(){
			return $this->child;
		}
		public function __clone(){

		}
	}
