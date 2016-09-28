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




	/**
	 * strtoupper: 将字符串转为大写;
	 * is_array:   检测变量是否为数组;
	 * count:      计算数组中的单元数目或对象中的属性个数;
	 * http_build_query: 使用给出的关联数组生成一个经过 URL-encode 的请求字符串
	 * stream_context_create: ?
	 * file_get_contents: ?
	 * json_decode: 对 JSON 格式的字符串进行解码;
	 */
 ?>