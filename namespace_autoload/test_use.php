<?php
//根据class名字 找文件
function myLoader($classname){
	$class_file = $classname . '.php';
	if ( file_exists($class_file) ){
		require_once($class_file);
	}else{
		echo "[ autoload error ]".$class_file." not found";
		die(0);
	}
}

spl_autoload_register("myLoader");

use \apanly\test\test;
