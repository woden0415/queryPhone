<?php 
	
	/**
	 * @description http请求模块
	 * @author wangdong
	 * @create 2016-09-27 22:22 
	 */

	namespace libs;

	/**
	* http请求模块
	*/
	class httpRequest {
		
		public static function request($url, $params, $method = 'GET') {
			$response = null;
			$options = array(
				'http' => array(
					'header' => 'apikey:8087429251516ff34c9a099b62923548'
				)
			);
			if($url) {
				$method = strtoupper($method);
				if ($method == 'POST') {
					
				}else if($method == 'PUT') {

				}else if($method == 'DELETE') {

				}else {
					if(is_array($params) and count($params)) {
						if(strrpos($url, '?')) {
							$url = $url . '&' . http_build_query($params);
						}else {
							$url = $url . '?' . http_build_query($params);
						}
					}
				}
			}
			$context = stream_context_create($options);
			$response = file_get_contents($url, false, $context);
			echo "<pre>";
			var_dump(json_decode($response));
			echo "<pre>";
		}
	}

 ?>