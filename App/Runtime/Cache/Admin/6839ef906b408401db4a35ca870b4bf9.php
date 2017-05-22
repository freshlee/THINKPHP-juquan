<?php if (!defined('THINK_PATH')) exit();?><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
<script src="/Public/Admin/js/jquery-1.7.js" language="JavaScript" type="text/javascript" ></script>

<title>服务项目编辑</title>
<style type="text/css">
   .menu{
       height: 35px;
       background: url('http://www.server.com/Public/Admin/images/menu_bg.gif');
       font-size:14px;
       margin: 0;
       padding: 12px 0 0 15px; 
   }
</style>

<script src="/Public/editor/kindeditor.js" type="text/javascript"></script>
	 <script type="text/javascript">    
           KE.show({                      //实例化编辑器 
           id : 'InformationContent' ,//TEXTAREA输入框的ID 
		   width:'700px' ,
		   height:'300px'
           }); 
	   
</script> 

</head>
<body>

<div class='menu'>&nbsp;编辑 &gt; 添加文章  <font color="#FF0000">(*为必填项目)</font></div>

<div class="content">
	<Form name='EditForm' id='EditForm' method='post' action='/Admin/News/addnews'  enctype="multipart/form-data" class="form-inline">

  <table width="98%" border="0" cellspacing="0" cellpAdding="1" align="center" class="table">
	  
	   <tr>
        <th width="12%" align="center"><font color="#FF0000">*</font>所属类别</td>
        <td><select name="fid"  >
        <option value="">请选择...</option>
        <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"> <?php echo ($vo["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

					<!--</volist>-->
			<!--</volist>-->
            </select></td>
      </tr>
	  
      <tr>
        <th align="center"><font color="#FF0000">*</font>新闻标题</td>
        <td><input class="form-control"  name="InformationTitle" type="text" value="" size="60" id="InformationTitle"></td>
      </tr>
	  
	  <tr>
        <th align="center">文章出处</td>
        <td><input class="form-control" name="InformationAuthor" type="text" value="" size="60" id="InformationAuthor"></td>
      </tr>
	  
	  <tr>
        <th align="center"><font color="#FF0000">*</font>添加图片</td>
        <td><input  type="file" name="pcc" class="file" size="35" value=""/>
                        
		</td>
      </tr>
     
	 <tr>
        <th align="center"><font color="#FF0000">*</font>简单描述</td>
        <td><textarea class="form-control" name="InformationCont" id="InformationCont"  cols="40" >0</textarea></td>
      </tr>
	 
      <tr>
        <th align="center"><font color="#FF0000">*</font>新闻内容</td>
        <td><textarea class="form-control" name="InformationContent" id="InformationContent" style='width:700px;height:300px;' ></textarea></td>
      </tr>
	  
	  <tr>
        <th align="center"><font color="#FF0000">*</font>排序</td>
        <td><input class="form-control" name="InformationOrder" type="text" value="50"  id="InformationOrder"></td>
      </tr>
	  
	   <tr>
        <th align="center"><font color="#FF0000">*</font>是否推荐</td>
        <td><input class="form-control" type="radio" name="IsDes" value="1" >是
		<input type="radio" name="IsDes" value="0" checked="checked">否</td>
      </tr>
	  
	   <tr>
        <th align="center"><font color="#FF0000">*</font>是否置顶</td>
        <td><input class="form-control" type="radio" name="IsTop" value="1" >是
		<input type="radio" name="IsTop" value="0" checked="checked">否</td>
      </tr>
	  
	  
	  
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td align="left"><input type="submit" name="Submit" value="保 存" class="button" > &nbsp;&nbsp; 
        <input type="reset" value="重 置"   class="button">
      <!--  <input type="hidden" name="myimg" id="myimg">--></td>
      </tr>
 
  </table>
     </Form>
  <br>
</div>
<br>
<script>
  $("input:file").change(function(){
      var path=$("input:file").val();
    var node=document.createElement("img");
    var newnode=$(node);
    newnode.attr("src",path);
    $(this).after(newnode);
  })
</script>
</body>
</html>