<?php

if(!function_exists('lang_encode'))
{
	function lang_encode($data)
	{
		if(is_array($data))
		{
			$result = array();
			foreach($data as $key => $value)
			{
				if (is_string($value))
				{
			 		static $jsonReplaces = array(array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'));
			 		$value = str_replace($jsonReplaces[0], $jsonReplaces[1], $value);
			 	}
				$result[] = '"'.trim($key).'":"'.($value).'"';	
			} 
			return '{'.implode(',', $result).'}';
		}
	}
}

if(!function_exists('lang_decode'))
{
	function lang_decode($data,$select_lang = FALSE)
	{
		$CI =& get_instance();
		$lang = $select_lang ? $select_lang : $CI->session->userdata('lang');
		$obj = json_decode($data);
		$result = (is_object($obj)) ? @($obj->$lang ? htmlspecialchars_decode(str_replace("<n/>", "\n",$obj->$lang)) : htmlspecialchars_decode(str_replace("<n/>", "\n",$obj->en))) : $data;	
		return $result;
	}
}

?>