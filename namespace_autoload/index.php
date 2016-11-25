<?php
use \apanly\test\test;
//根据class名字 找文件
function myLoader($classname){
	$class_file = $classname . '.php';

	if ( file_exists($class_file) ){
		require_once($class_file);
	}else{
		echo "[ autoload ]".$class_file." not found";
	}
}

spl_autoload_register("myLoader");


new test();
new a();
