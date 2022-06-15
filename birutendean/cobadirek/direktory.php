<?php
define('_DOC_ROOT',dirname(__FILE__).'/');
function directory_image($dir=false){
	$data = '';
	if ($handle = opendir(_DOC_ROOT.$dir)){
		while (false !== ($file = readdir($handle))) {
			echo $file.'<br/>';
		}
	}
	closedir($handle);
	return $data;
}
$folder = 'report';
echo directory_image($folder);
?>