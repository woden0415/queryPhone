<?php 
	
	namespace app;
	//引用库
	use libs\httpRequest;

	//定义请求api的路径

	class QueryPhone {

		const BAIDU_API = 'http://apis.baidu.com/apistore/mobilephoneservice/mobilephone';
		public static function query($phone) {
			//url所需参数
			$data = ['tel'=>$phone];
			if (self::verifyPhone($phone)){
				httpRequest::request(self::BAIDU_API, $data);
			}
		}

		/**
		 * 校验手机号码合法性
		 * @param  [string] $phone [前台传进来的号码]
		 * @return [真假]          [判断传来的号码的格式是否正确]
		 */
		public static function verifyPhone($phone = null) {
			$reg = false;
			if($phone) {
				if(preg_match('/^1[34578]{1}\d{9}/',$phone)) {
					$reg = true;
				}
			}
			return $reg;
		}
	
	}

	/**
	 * 类调用方法，调用属性;
	 * preg_match: 匹配正则表达式;
	 */
 ?>