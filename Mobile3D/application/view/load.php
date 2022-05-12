<?php
class Load {
	function view($file_name, $data = null)
	{
		if( is_array($data) ) {
			extract($data);
		}
		$output = include $file_name . '.php';
		//echo $output;
		echo $data;
		echo json_encode($data);
	}
}
?>