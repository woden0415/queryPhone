<?php 
	
	class autoload {
		//测试使用
		public static function load($className){
			$filename = sprintf('%s.php',str_replace('\\', '/', $className));
			if(is_file($filename)){
				require_once $filename;
			};
		}
	}

	spl_autoload_register(['autoload','load']);





	/**
	 * sprintf: 返回一个格式化后的字符串;
	 * is_file: 判断给定文件名是否为一个正常的文件;
	 * require_once: 引进一个文件，方便调用文件内部的类和方法,特点是指引进一次;
	 * spl_autoload_register: 放弃__autoload方法寻找类文件，而是调用自己的函数时使用spl_autoload_register
	 * 						  来注册我们的autoload函数;
	 *
	 * 通过以上方式调用所有类中的方法
	 */
 ?>