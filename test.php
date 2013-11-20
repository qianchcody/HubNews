


<?php
$path = '/www.public.html.index.azdex';
$filename = substr(strrchr($path, "."), 1);
echo $filename.'<br/>'; // "index.html"

$arr = array(
	'name'=>'Cody',
	'pic'=>'abc',
	'size'=>'120KB'
);
echo $arrj = json_encode($arr);
 var_dump(json_decode($arrj,true));
 /*
  * 
  */
	$exp = $_GET['exp'].'<br/>';
	
	$str = '201212-2154';
	$strr = explode('-',$str);
	echo $strr[0].'<br/>';
	
	$files =  glob('*.php');
	print_r($files).'<br/>';
	
	$files_1= glob('*.{php,txt}',GLOB_BRACE);
	print_r($files_1).'<br/>';
	
	echo uniqid().'<br/>';
	

	

?>



