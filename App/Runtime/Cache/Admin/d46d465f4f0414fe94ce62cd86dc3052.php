<?php if (!defined('THINK_PATH')) exit();?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/Public/Admin/css/Admin.css">

<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
<title>hshrj</title>
</head>
<body>

<div class='menu'>&nbsp;分类管理</div>

<table class="table table-bordered">
   <thead>
     <tr>
       <th>分类ID</th>
       <th>分类名</th>
       <th>分类简述</th>
       <th>操作</th>
     </tr>
   </thead>
   <tbody>
   <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form action="/Admin/News/modifynews" name="newslist" class="newslist" method="post" >
     <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
     <tr>
       <td><?php echo ($vo["id"]); ?></td>
       <td><?php echo ($vo["catename"]); ?></td>
       <td><?php echo ($vo["cateintruduction"]); ?></td>
       <td>
         <button type="submit" class="btn btn-default movement del">删除</button>
         <button type="button" class="btn btn-default movement mod">修改</button>
       </td>
     </tr>
     </form><?php endforeach; endif; else: echo "" ;endif; ?>
   </tbody>
   </table>
     <button type="button" class="btn btn-default center-block add">增加新分类</button>
     <div class="addnewscate" style="border: 2px solid black;padding: 20px 230px;display: none">
     <form  action="/Admin/News/addnewscate" class="form form-inline" enctype="multipart/form-data" method="post" role="form">
     <div class="form-group">
     <label for="catename">
       分类名
     </label>
       <input type="text" class="form-control" id="catename" name="catename">
       <label for="intruducion">分类简介</label>
       <input type="text" class="form-control" id="cateintruduction" name="cateintruduction">
      </div>
      <div>
      <button class="btn btn-default center-block" >添加</button>
      </div>
     </form>     
     </div>
     <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
     <script>
       $(".newslist").attr("name",function(index,value){
           value=value+parseInt(index+1);
           return value;
       });
       $(".del").click(function(){
         $(this).closet("form").submit(); 
         window.reload();
       })
       $(".add").click(function(){
        $(".addnewscate").css("display",function(index,value){
             value=value=="block"?"none":"block";
             return value;
        })
       })



     </script>
</body>
</html>