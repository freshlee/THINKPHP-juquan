<?php
class KeditorAction extends Action{
	
	
	
    public function filemanager(){
       import("@.ORG.Keditor");
       Keditor::filemanager();
    }
	
	
	
    public function upload(){
       import("@.ORG.Keditor");
       $ke=new Keditor();
       $ke->upload();
    }
	
	public function delfile(){
		import("@.ORG.Keditor");
		$ke=new Keditor();
		$file='.'.$_GET['fileurl'];
		

		if(is_dir($file)){
			$error=$ke->delfolder($file);
			if($error==1){
				$msg='该文件夹非空,不能删除!';				
			}
		}else{
			$error=$ke->delfile($file);
			if($error==1){
				$msg='删除文件失败!';				
			}
		}
		header('Content-type: text/html; charset=UTF-8');
		echo json_encode(array('error' => $error, 'message' => $msg));
		
		

	}
	
}