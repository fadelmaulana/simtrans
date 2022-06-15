<style type="text/css">
	table{border:#ff9900 1px solid;}
	table tr td{border-bottom:#ff9900 1px solid;border-right:#ff9900 1px solid;padding:0 5px 0 5px;}
</style>
<?php
define('_DOC_ROOT',dirname(__FILE__).'/');
function directory_image($dir=false){
	$type = array('folder'=>'folder.png','doc'=>'doc.png','docx'=>'doc.png','xls'=>'xlsx.png','pdf'=>'pdf.png');
	$data = '<table cellpadding="0" cellspacing="0">';
	$nomor=1;
	if ($handle = opendir(_DOC_ROOT.$dir)){
		while (false !== ($file = readdir($handle))) {
			if($file=='.' || $file=='..'){
				
			}
			else{
				$exp = explode('.',$file);
				$icon= count($exp)==1?'folder':$exp[count($exp)-1];
				if($icon=='folder'){
					$link = '<a href="#open" title="Open folder content"><img src="images/open.png" border="0"/></a>';
				}
				else{
					$link = '<a href="#download" title="Download file"><img src="images/download.png" border="0"/></a> 
							 <a href="#delete" title="Delete file"><img src="images/delete.png" border="0" onclick="return confirm(\'Yakiiin ?\');"/></a>';
				}
				$data .='<tr>
							<td>'.$nomor.'</td>
							<td><img src="images/'.$type[$icon].'" width="25" align="absmiddle" title="'.$icon.'"/></td>
							<td>'.$file.'</td>
							<td>'.$link.'</td>
						 </tr>';
				$nomor++;
			}
		}
	}
	closedir($handle);
	$data .='</table>';
	return $data;
}
$folder = 'report';
echo directory_image($folder);
?>