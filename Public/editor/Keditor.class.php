<?php
/*
 * +---------------------------
 * kindeitor扩展类。
 * +---------------------------
 */
class Keditor extends Think{
	
	protected $config=array();
	protected $jsscript=array();
	public $form="form1";
	
	public function show(){
		
		static $incjs=false;
		
		if(!$incjs){
			$result="<script type='text/javascript' src='/Public/kindeditor/kindeditor-min.js'></script>\n";
			//$result.="<script type='text/javascript' src='/Public/kindeditor/lang/zh_CN.js'></script>\n";
			$result.="<script type='text/javascript' src='/Public/js/kedit.js'></script>\n";
			$incjs=true;
		}
		$this->config[]="basePath:'/Public/kindeditor/'";
		$this->config[]="allowFileManager:true";
		$this->config[]="Keclasspath:'__APP__/Common/Keditor'";
		$this->config[]="colorTable:[
['#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#FF00FF', '#00FFFF'],
['#E53333', '#E56600', '#FF9900', '#64451D', '#DFC5A4', '#FFE500'],
['#009900', '#006600', '#99BB00', '#B8D100', '#60D978', '#00D5FF'],
['#337FE5', '#003399', '#4C33E5', '#9933E5', '#CC33E5', '#EE33EE'],
['#FFFFFF', '#CCCCCC', '#999999', '#666666', '#333333', '#000000']
	]";
		
		$config=implode(",\n", $this->config);
		
		$result.="<script type='text/javascript'>
var KE=KindEditor,
kindconfig={
	{$config}
};
			
KE.ready(function(K) {
			
".join($this->jsscript)."

});
</script>";
		
		return $result;
	}
	
	public function create($id='content'){
		$this->jsscript[]="K.create('#".$id."',kindconfig);\n";
	}
	
	public function uploadsel($id='url',$ty='image'){
		$this->jsscript[]="uploadsel('".$id."','".$ty."');\n";
	}
	
	public function selcolor($id='color'){
		$this->jsscript[]="selcolor('".$id."');\n";
	}
	
	public static function upload(){

		
		function alert($msg) {
			header('Content-type: text/html; charset=UTF-8');
			echo json_encode(array('error' => 1, 'message' => $msg));
			exit;
        }
		
		$save_path = './Public/Upload/';
		$save_url = '/Public/Upload/';
		
		//定义允许上传的文件扩展名
		$ext_arr = array(
			'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
			'flash' => array('swf', 'flv'),
			'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
			'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2'),
		);
		
		//最大文件大小
		$max_size = 1000000;

		$save_path = realpath($save_path) . '/';

		//有上传文件时
		if (empty($_FILES) === false) {
			//原文件名
			$file_name = $_FILES['imgFile']['name'];
			//服务器上临时文件名
			$tmp_name = $_FILES['imgFile']['tmp_name'];
			//文件大小
			$file_size = $_FILES['imgFile']['size'];
			//检查文件名
			if (!$file_name) {
				alert("请选择文件。");
			}
			//检查目录
			if (@is_dir($save_path) === false) {
				alert("上传目录不存在。");
			}
			//检查目录写权限
			if (@is_writable($save_path) === false) {
				alert("上传目录没有写权限。");
			}
			//检查是否已上传
			if (@is_uploaded_file($tmp_name) === false) {
				alert("临时文件可能不是上传文件。");
			}
			//检查文件大小
			if ($file_size > $max_size) {
				alert("上传文件大小超过限制。");
			}
			//检查目录名
			$dir_name = empty($_GET['dir']) ? 'image' : trim($_GET['dir']);
			if (empty($ext_arr[$dir_name])) {
				alert("目录名不正确。");
			}
			//获得文件扩展名
			$temp_arr = explode(".", $file_name);
			$file_ext = array_pop($temp_arr);
			$file_ext = trim($file_ext);
			$file_ext = strtolower($file_ext);
			//检查扩展名
			if (in_array($file_ext, $ext_arr[$dir_name]) === false) {
				alert("上传文件扩展名是不允许的扩展名。\n只允许" . implode(",", $ext_arr[$dir_name]) . "格式。");
			}
			//创建文件夹
			if ($dir_name !== '') {
				$save_path .= $dir_name . "/";
				$save_url .= $dir_name . "/";
				if (!file_exists($save_path)) {
					mkdir($save_path);
				}
			}
			$ymd = date("Ymd");
			$save_path .= $ymd . "/";
			$save_url .= $ymd . "/";
			if (!file_exists($save_path)) {
				mkdir($save_path);
			}
			//新文件名
			$new_file_name = date("His") . '_' . rand(1000, 9999) . '.' . $file_ext;
			//移动文件
			$file_path = $save_path . $new_file_name;
			if (move_uploaded_file($tmp_name, $file_path) === false) {
				alert("上传文件失败。");
			}
			@chmod($file_path, 0644);
			$file_url = $save_url . $new_file_name;
			$imgid=$save_path.$new_file_name;
			header('Content-type: text/html; charset=UTF-8');

			echo json_encode(array('error' => 0, 'url' => $file_url,'imgid'=>$imgid));
			exit;
		
		}	
	
	
	}
	
	

	public function filemanager(){

		//根目录路径，可以指定绝对路径，比如 /var/www/attached/
		$root_path = './Public/Upload/';
		//根目录URL，可以指定绝对路径，比如 http://www.yoursite.com/attached/
		$root_url = '/Public/Upload/';
		
		//图片扩展名
		$ext_arr = array('gif', 'jpg', 'jpeg', 'png', 'bmp');
		
		//目录名
		$dir_name = empty($_GET['dir']) ? '' : trim($_GET['dir']);
		if (!in_array($dir_name, array('', 'image', 'flash', 'media', 'file'))) {
			echo "Invalid Directory name.";
			exit;
		}
		if ($dir_name !== '') {
			$root_path .= $dir_name . "/";
			$root_url .= $dir_name . "/";
			if (!file_exists($root_path)) {
				mkdir($root_path);
			}
		}

		//根据path参数，设置各路径和URL
		if (empty($_GET['path'])) {
			$current_path = realpath($root_path) . '/';
			$current_url = $root_url;
			$current_dir_path = '';
			$moveup_dir_path = '';
		} else {
			$current_path = realpath($root_path) . '/' . $_GET['path'];
			$current_url = $root_url . $_GET['path'];
			$current_dir_path = $_GET['path'];
			$moveup_dir_path = preg_replace('/(.*?)[^\/]+\/$/', '$1', $current_dir_path);
		}
		//echo realpath($root_path);
		
		//排序形式，name or size or type
		$order = empty($_GET['order']) ? 'name' : strtolower($_GET['order']);

		//不允许使用..移动到上一级目录
		if (preg_match('/\.\./', $current_path)) {
			echo 'Access is not allowed.';
			exit;
		}
		//最后一个字符不是/
		if (!preg_match('/\/$/', $current_path)) {
			echo 'Parameter is not valid.';
			exit;
		}
		//目录不存在或不是目录
		if (!file_exists($current_path) || !is_dir($current_path)) {
			echo 'Directory does not exist.';
			exit;
		}

		//遍历目录取得文件信息
		$file_list = array();
		if ($handle = opendir($current_path)) {
			$i = 0;
			while (false !== ($filename = readdir($handle))) {
				if ($filename{0} == '.') continue;
				$file = $current_path . $filename;
				if (is_dir($file)) {
					$file_list[$i]['is_dir'] = true; //是否文件夹
					$file_list[$i]['has_file'] = (count(scandir($file)) > 2); //文件夹是否包含文件
					$file_list[$i]['filesize'] = 0; //文件大小
					$file_list[$i]['is_photo'] = false; //是否图片
					$file_list[$i]['filetype'] = ''; //文件类别，用扩展名判断
				} else {
					$file_list[$i]['is_dir'] = false;
					$file_list[$i]['has_file'] = false;
					$file_list[$i]['filesize'] = filesize($file);
					$file_list[$i]['dir_path'] = '';
					$file_ext = strtolower(array_pop(explode('.', trim($file))));
					$file_list[$i]['is_photo'] = in_array($file_ext, $ext_arr);
					$file_list[$i]['filetype'] = $file_ext;
				}
				$file_list[$i]['filename'] = $filename; //文件名，包含扩展名
				$file_list[$i]['datetime'] = date('Y-m-d H:i:s', filemtime($file)); //文件最后修改时间
				$i++;
			}
			closedir($handle);
		}
		//排序
		function cmp_func($a, $b) {

			if ($a['is_dir'] && !$b['is_dir']) {
				return -1;
			} else if (!$a['is_dir'] && $b['is_dir']) {
				return 1;
			} else {
					return strcmp($b['filename'], $a['filename']);
			}
		}
		function cmp_funcsize($a, $b) {

			if ($a['is_dir'] && !$b['is_dir']) {
				return -1;
			} else if (!$a['is_dir'] && $b['is_dir']) {
				return 1;
			} else {
				if ($a['filesize'] > $b['filesize']) {
					return 1;
				} else if ($a['filesize'] < $b['filesize']) {
					return -1;
				} else {
					return 0;
				}
			}
		}
		function cmp_functype($a, $b) {
			if ($a['is_dir'] && !$b['is_dir']) {
				return -1;
			} else if (!$a['is_dir'] && $b['is_dir']) {
				return 1;
			} else {
				return strcmp($a['filetype'], $b['filetype']);
			}
		}
		
		if ($order == 'size') {
			usort($file_list, 'cmp_funcsize');
		} else if ($order == 'type') {
			usort($file_list, 'cmp_functype');
		}else{
			usort($file_list, 'cmp_func');
		}

		

		$result = array();
		//相对于根目录的上一级目录
		$result['moveup_dir_path'] = $moveup_dir_path;
		//相对于根目录的当前目录
		$result['current_dir_path'] = $current_dir_path;
		//当前目录的URL
		$result['current_url'] = $current_url;
		//文件数
		$result['total_count'] = count($file_list);
		//文件列表数组
		$result['file_list'] = $file_list;
		

		//输出JSON字符串
		header('Content-type: application/json; charset=UTF-8');
		echo json_encode($result);
	}

	public static function delfile($imgfile){
		/*$imgs=explode("|",$imgfield);
		for($i=0;$i<=count($imgs)-2;$i++){
			@(unlink($imgs[$i]));
		}
		*/
	
		unlink($imgfile);
		return 0;
	}
	
	public static function delfolder($directory){
		function empty_dir($directory)
		{
			$handle = opendir($directory);
			while (($file = readdir($handle)) !== false)
			{
				if ($file != "."&& $file != ".."){
					closedir($handle);
					return false;
				}
			}
			closedir($handle);
			return true;
		} 
		if(empty_dir($directory)){
			@rmdir($directory);return 0;
		}else{
			
			return 1;
			
		}
	
		

	}

	public  function __set($name, $value){
		if(strpos($value, "function")===FALSE and strpos($value, "[")===FALSE and !is_int($value)){
			if(is_bool($value)){
				$val=$value?"true":"false";
			}else{
				$val="'{$value}'";
			}
		}else{
			$val=$value;
		}
		if($name=="items" and $value=="little"){//精简模式
			$val="['fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold', 'italic', 'underline','removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist','insertunorderedlist', '|', 'emoticons', 'image', 'link']
			";
		}

		$this->config[$name]="{$name}:{$val}";
	}
	public  function __get($name){
		return $this->config[$name];
	}


}