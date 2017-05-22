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
	<Form name='EditForm' id='EditForm' method='post' action='/Admin/News/editnews' enctype="multipart/form-data" onSubmit="return aa()">
  <input name="id" value="<?php echo ($newsOnSelected["0"]["id"]); ?>" type="hidden">
  <table width="98%" border="0" bgcolor="#E9F1F4" class="table">
    
<!--      <tr>
        <th width="12%" align="center"><font color="#FF0000">*</font>所属类别</td>
        <td><select  name="InformationType" id="InformationType" onChange="InfoSort()">
		　　 <option>--所属类别--</option>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newstype_info): $mod = ($i % 2 );++$i;?><option value="<?php echo ($newstype_info["InformationTypeID"]); ?>"><?php echo ($newstype_info["InformationTypeName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>           
        </select>
          <span id="SubType"><select name="InformationSubTypeID" id="InformationSubTypeID">
           <option>--所属子类别--</option>
           <option ></option>   
        </select>
        </span></td>
      </tr>-->
	  
	   <tr>
        <th width="12%" align="center"><font color="#FF0000">*</font>所属类别</td>
        <td><select name="fid" >            
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>" <?php if($cat['id'] == $newsOnSelected[0]['InformationType']): ?>selected<?php endif; ?>><?php echo ($cat["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select></td>
      </tr>
	  

      <tr>
        <th align="center"><font color="#FF0000">*</font>新闻标题</td>
        <td><input name="InformationTitle" type="text" value="<?php echo ($newsOnSelected["0"]["InformationTitle"]); ?>" size="60" id="InformationTitle">
		</td>
      </tr>
	  
	   <tr>
        <th align="center">文章出处</td>
      <td><input name="InformationAuthor" type="text" value="<?php echo ($newsOnSelected["0"]["InformationAuthor"]); ?>" size="60" id="InformationAuthor"></td>
      </tr>
	  
	    <tr>
        <th align="center"><font color="#FF0000">*</font>添加图片</td>
        <td><input type="file" name="pcc" size="35" >
                         <img src="/Uploads/news/<?php echo ($newsOnSelected["0"]["InformationPic"]); ?>" height="80" />
		</td>
      </tr>
	  
	  <tr style="display:none;">
        <th align="center"><font color="#FF0000">*</font>简单描述</td>
        <td><textarea name="InformationCont" id="InformationCont" cols="60" rows="5" ><?php echo ($newsOnSelected["0"]["InformationCont"]); ?></textarea>
		 </td>
      </tr>
     
      <tr>
        <th align="center"><font color="#FF0000">*</font>新闻内容</td>
        <td><textarea name="InformationContent" id="InformationContent" style='width:700px;height:300px;'><?php echo ($newsOnSelected["0"]["InformationContent"]); ?></textarea>
		 </td>
      </tr>
	  
	  <tr>
        <th align="center"><font color="#FF0000">*</font>排序</td>
        <td><input name="InformationOrder" type="text" value="<?php echo ($newsOnSelected["0"]["InformationOrder"]); ?>" size="60" id="InformationOrder"></td>
      </tr>
	  
  	<tr>
        <th align="center"><font color="#FF0000">*</font>是否推荐</td>
        <td><input type="radio" name="IsDes" value="1" <?php if(($newsOnSelected["0"]["IsDes"]) == "1"): ?>checked="checked"<?php endif; ?>>是
		<input type="radio" name="IsDes" value="0" <?php if(($newsOnSelected["0"]["IsDes"]) == "0"): ?>checked="checked"<?php endif; ?>>否</td>
      </tr>
	  
		  <tr>
        <th align="center"><font color="#FF0000">*</font>是否置顶</td>
        <td><input type="radio" name="IsTop" value="1" <?php if(($newsOnSelected["0"]["IsTop"]) == "1"): ?>checked="checked"<?php endif; ?>>是
		<input type="radio" name="IsTop" value="0" <?php if(($newsOnSelected["0"]["IsTop"]) == "0"): ?>checked="checked"<?php endif; ?>>否</td>
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
</body>
</html>