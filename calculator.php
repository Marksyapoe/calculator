<?php
	function add($num, $num2){
		return $num + $num2;
	}

	function sub($numm, $numm2){
		return $numm - $numm2;
	}

	function multi($numi, $numi2){
		return $numi * $numi2;
	}

	function div($numd, $numd2){
		return $numd / $numd2;
	}

	echo "Enter a number"."<br>";
	$num = (int)readline(" ");

	echo "Enter an operator"."<br>";
	$op = readline("");

	echo "Enter another number"."<br>";
	$num2 = (int)readline(" ");

	if ($op == "+"){
		echo add($num, $num2);
	}elseif($op == "-"){
		echo sub($num, $num2);
	}elseif($op == "/"){
		echo div($num, $num2);
	}elseif($op == "*"){
		echo multi($num, $num2);
	}elseif($op == "x"){
		echo multi($num, $num2);
	}else{
		echo "wrong input";
	}



