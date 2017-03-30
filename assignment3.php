<?php
		$val1= 0;
		$val2= 0;
		if(isset($_POST["value1"])&& isset($_POST["value2"])){
			$val1= $_POST["value1"];
			$val2= $_POST["value2"];
		}
		setcookie("value1", "$val1");
		setcookie("value2", "$val2");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<h3>Calculator</h3>
	<form id= "myform" method= "POST" action= "assignment3.php"> 
		<label>What operation you want to choose</label>
		<input type="radio" name= "calculator" value= "add">Add
		<input type="radio" name= "calculator" value= "substract" >Substract
		<input type="radio" name= "calculator" value= "multiply" >Multiply
		<input type="radio" name= "calculator" value= "divide" >Divide<br>
		<label>Value1</label>
		<input type= "text" name= "value1">
		<label>Value2</label>
		<input type= "text" name= "value2">

		<input type= "submit" value= "calculate">
	</form>
	<?php
			include "ChildClass.php";
			$child= new ChildClass;
			$childClone= clone $child;
			$post= "";
			$val1= "";
			$val2= "";
			if(isset($_POST['calculator']))
				$post= $_POST['calculator'];
			if(isset($_POST['value1']))
				$val1= $_POST['value1'];
			if(isset($_POST['value2']))
				$val2= $_POST['value2'];
			if(isset($val1)&& isset($val2)){
			$array= array($val1, $val2);
			if($post== "add")
			{
				$child->add($array);
			}
			else if($post== "substract")
			{
				$child->substract($array);
			}
			else if($post== "multiply")
			{
				$child->multiply($array);
			}
			else if($post== "divide")
			{
				$child->divide($array);
			}
			}
		?>
</body>
</html>