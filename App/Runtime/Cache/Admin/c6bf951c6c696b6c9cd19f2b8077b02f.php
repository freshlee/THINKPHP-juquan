<?php if (!defined('THINK_PATH')) exit();?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/Public/Admin/css/Admin.css">

<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
<title>课程管理</title>
</head>
<body>

<div class='menu'>&nbsp;课程管理</div>
<?php if(is_array($coursecate)): $i = 0; $__LIST__ = $coursecate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><table class="table table-bordered"><p style="text-align: center;"><?php echo ($cate["catename"]); ?></p>
   <thead>
     <tr>
       <th style="width: 30%">课程ID</th>
       <th style="width: 30%">课程名</th>
       <th style="width: 30%">课程简述</th>

       <th>操作</th>
     </tr>
   </thead>
   <tbody>
   <?php if(is_array($courselist)): $i = 0; $__LIST__ = $courselist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["coursecate"]) == $cate["id"]): ?><input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
     <tr>
       <td><?php echo ($vo["id"]); ?></td>
       <td><?php echo ($vo["coursename"]); ?></td>
       <td><?php echo ($vo["coursecont"]); ?></td>
       <td>
         <a href="/Admin/Goods/delcourse/index/<?php echo ($vo["id"]); ?>"><button type="button" class="btn btn-default movement del">删除</button></a>
         <a href="/Admin/Goods/add/data/<?php echo ($vo["id"]); ?>"><button type="button" class="btn btn-default movement mod">修改</button>
       </td>
     </tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
   </tbody>
   </table>
     <button type="button" class="btn btn-default center-block add">增加新课程</button>
     <div class="addnewscate" style="border: 2px solid black;padding: 20px 230px;display: none">


     <form  action="/Admin/Goods/addcourselist" class="form form-inline" enctype="multipart/form-data" method="post" role="form">
     <div class="form-group" style="left: 50%;margin-left:-265px;position: relative;">
     <label for="coursename">
       课程名
     </label>
       <input type="text" class="form-control" id="coursename" name="coursename">
       <label for="coursecont">课程简介</label>
       <input type="text" class="form-control" id="coursecont" name="coursecont">
       <input type="hidden" name="coursecate" value="<?php echo ($cate["id"]); ?>">
      </div>
      <div>
      <button class="btn btn-default center-block">添加</button>
      </div>
     </form>     
     </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <form action="/Admin/Goods/addcoursecate" class="form form-inline" method="POST">
        <div class="form-group" style="left: 50%;margin-left:-265px;position: relative;">
            <label for="catename">分类名</label>
             <input type="text" class="form-control" id="catename" name="catename">
            <label for="rank">排序</label>
             <input type="text" class="form-control" id="rank" name="rank">
             <button class="btn btn-info center-block">添加分类</button>
        </div>
             </form>








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
        $(this).next(".addnewscate").css("display",function(index,value){
             value=value=="block"?"none":"block";
             return value;
        })
       })
 



     </script>
</body>
</html>