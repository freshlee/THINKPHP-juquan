<?php if (!defined('THINK_PATH')) exit();?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
<script src="/Public/Admin/js/jquery-1.7.js" language="JavaScript" type="text/javascript" ></script>

<title>hshrj</title>
</head>
<body>
<style type="text/css">
   .menu{
       height: 35px;
       background: url('http://www.server.com/Public/Admin/images/menu_bg.gif');
       font-size:14px;
       margin: 0;
       padding: 12px 0 0 15px; 
   }
</style>
<div class='menu'>&nbsp;查看 &gt; 新闻中心</div>
<div class="content" align="center">
<table width="100%" border="0" cellspacing="0" cellpAdding="0" bgcolor="#d4d0c8" class="table table-hover table-bordered">
<tr bgcolor="#E9F1F4" align="center">
<td width='5%' class='title'>编号</td>
<td width='5%' class='title'>ID</td>
<td class='title' width='10%'>类别</td>
<td class='title' width='30%'>标题</td>
<td width='20%' class='title'>发布时间</td>

<td width='10%' class='title'>是否推荐</td>

<td width='5%' class='title'>排序</td>
<td width='15%'  class='title'>操作</td>
</tr>
 <form action="/Admin/News/modifynews?act=delmulti" method="post" class="form_del"> 
 <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><tr align="center">
 <td align='center'><?php echo ($page*25+$i); ?></td>
  <td align='center'><?php echo ($news["id"]); ?></td>
  <td><?php echo ($news["InformationType"]); ?> </td>
  <td><?php echo (msubstr($news["InformationTitle"],0,20,'utf-8',false)); ?> </td>
  <td><?php echo ($news["InformationUpdate"]); ?> </td>
  <td><?php if($news["IsDes"] == 1): ?>是
  	<?php else: ?>否<?php endif; ?>
  </td>
  <td><?php echo ($news["InformationOrder"]); ?> </td>

  <td align='center'> 
<a href='/Admin/News/NewsEdit/InformationID/<?php echo ($news["id"]); ?>'>修改</a> | 
<a href='/Admin/News/modifynews?InformationID=<?php echo ($news["id"]); ?>&act=del' onClick="return confirm('确定要删除吗？')">删除</a> | 
<input name='CheckBoxID[<?php echo ($i); ?>]' class="checkboxid" id="CheckBoxID"  onClick="" type='checkbox' value='<?php echo ($news["id"]); ?>'>
</td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  <form action="_/Admin/News/modifynews?act=delmulti" method="post">  
  </table>
</div>

  <div class="ttbom">
<input  type='button' class="btn btn-default btn-info center-block" value='删除所选'> &nbsp; 
<input type='checkbox' id="checkall">全选</div>
<div class="<?php echo ($pagestyle); ?>"><?php echo ($page); ?></div>
<!--</form>-->
  <br>
  <script>
  	$("#delselect").click(function(){
  		  
          $(".form_del").submit();
  	})
  	$("#checkall").click(function(){
  		var logic=$(this).attr("checked");
  		$(".checkboxid").attr("checked",function(index,value){
  			if(logic){value=logic;}
             else{value=false;}
          return value;
  		})
  		
  	})
  </script>
</body>
</html>