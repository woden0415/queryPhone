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

 ?>