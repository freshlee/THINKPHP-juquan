<?php if (!defined('THINK_PATH')) exit();?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/Public/Admin/css/Admin.css">
<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">

<title>hshrj</title>
<style>
*{
  margin:0;
  padding:0; 
}
  .toggle_on,input.toggle_on{
    display: none;
 }
  .toggle_off,input.toggle_off{
    display: inline;
 }
 ul{
   list-style: none;
 }
    .table  .thead  .tr  .th{
   float: left;
  }
   .table  .tbody  .tr  .td{
   float: left;
  }
  .table  .tbody  .tr:after{
    content: "";
    clear: both;
    display: block;
  }
    .table .tbody .tr:hover .td{
    background-color:yellow; 
  }
  .table .tbody .tr{
    height: auto;
  }
  .table .th,.table .td{
    border: 1px solid black;
    height: 140px;
    margin-left: -1px;
        margin-top:-1px; 
  }
  .table .thead .th{
    height: 30px;
  }
   .table  .thead  .tr .th, .table  .tbody  .tr .td {
    text-align: center;
    vertical-align: middle;
    float: left;
display: -webkit-flex;
        display: flex;
        -webkit-align-items: center;
              align-items: center;
        -webkit-justify-content: center;
              justify-content: center;

  }


</style>
</head>
<body>

<div class='menu'>&nbsp;教师管理</div>
   <form  action="/Admin/Pagination/modteacher/act/mod" class="form form-inline" enctype="multipart/form-data" method="post" role="form" id="superform" style="visibility: hidden;">
   <input type="text" name="id" value=<?php echo ($vo["id"]); ?>> 
   <input type="text" class="form-control " id="teachername" type="hidden" name="teachername" value=<?php echo ($vo["teachername"]); ?>>
  <input type="text" class="form-control " id="description" type="hidden" name="description" value=<?php echo ($vo["description"]); ?>> 
  <input class="form-control field " type="hidden" name="teacherfield[]">    
   </form>

<div  class="table table-bordered">
   <div class="thead">
     <div class="tr">
       <div class="th" style="width:7%">教师ID</div>
       <div class="th" style="width:7%">教师名</div>
       <div class="th" style="width:12%">教师头衔</div>
       <div class="th" style="width:12%">教师简述</div>
       <div class="th" style="width:7%">教师头像</div>
       <div class="th" style="width:12%">教师观点</div>
       <div class="th" style="width:12%">教师擅长</div>
       <div class="th" style="width:12%">教师经历s</div>
       <div class="th" style="width:12%">所授课程</div>
       <div class="th" style="width:7%">操作</div>
     </tr>
   </div>
   <div class="tbody">
   <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form  action="/Admin/Pagination/modteacher/act/mod"  enctype="multipart/form-data" method="post" role="form"  >
     <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
     <div class="tr">
       <div class="td" style="width:7%"><span class="toggle_off"><?php echo ($vo["id"]); ?></span> <input class="form-control toggle_on" type="text" name="id" value=<?php echo ($vo["id"]); ?>> </div>
       <div class="td" style="width:7%"><span class="toggle_off"><?php echo ($vo["teachername"]); ?></span> <input type="text" class="form-control toggle_on teachername" id="teachername" name="teachername" value=<?php echo ($vo["teachername"]); ?>> </div>
       <div class="td" style="width:12%"><span class="toggle_off"><?php echo ($vo["teacherhonor"]); ?></span> <input type="text" class="form-control toggle_on teacherhonor" id="teacherhonor" name="teacherhonor" value=<?php echo ($vo["teacherhonor"]); ?>></div>
       <div class="td" style="width:12%"><span class="toggle_off"><?php echo ($vo["description"]); ?></span> <input type="text" class="form-control toggle_on description" id="description" name="description" value=<?php echo ($vo["description"]); ?>></div>
       <div class="td" style="width:7%" style="height: auto"><img src="/Uploads/teacher/<?php echo ($vo["pic_thumb"]); ?>" class="toggle_off"><input type="file" class="form-control pic toggle_on" id="pic" name="pic" value=""></div>
       <div class="td" style="width:12%"><span class="toggle_off"><?php echo ($vo["opinion"]); ?></span> <input type="text" class="form-control toggle_on opinion" id="opinion" name="opinion" value=<?php echo ($vo["opinion"]); ?>></div>
       <div class="td" style="width:12%"><span class="toggle_off"><?php echo ($vo["advantage"]); ?></span> <input type="text" class="form-control toggle_on advantage" id="advantage" name="advantage" value=<?php echo ($vo["advantrue"]); ?>></div>
       <div class="td" style="width:12%"><span class="toggle_off"><?php echo ($vo["experience"]); ?></span> <input type="text" class="form-control toggle_on experience" id="experience" name="experience" value=<?php echo ($vo["experience"]); ?>></div>
       <div class="td" style="width:12%"> 
       <ul>
       <?php if(is_array($vo["teacherfield"])): $i = 0; $__LIST__ = $vo["teacherfield"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldlist): $mod = ($i % 2 );++$i;?><li><span class="toggle_off"><?php echo ($fieldlist["coursename"]); ?> </span>

       <select class="form-control field toggle_on" name="teacherfield[]">
       <option  checked></option>
       <?php if(is_array($course)): $i = 0; $__LIST__ = $course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><option value=<?php echo ($list["id"]); ?> <?php if($list['id'] == $fieldlist['courseid']): ?>selected="selected"<?php endif; ?> >    <?php echo ($list["coursename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
       </select>

       </li>
       </form><?php endforeach; endif; else: echo "" ;endif; ?>
       </ul> </div>
       <div class="td" style="width:7%">
         <a href="/Admin/Pagination/del/index/<?php echo ($vo["id"]); ?>"><button type="button" class="btn btn-default movement del">删除</button></a>
         <button type="button" class="btn btn-default movement mod">编辑</button>
       </div>

     </div><?php endforeach; endif; else: echo "" ;endif; ?>
   </div>
   </div>
     <button type="button" class="btn btn-default center-block add">增加新教师</button>
          <form  action="/Admin/Pagination/modteacher/act/add" class="form form-horizontal" enctype="multipart/form-data" method="post" role="form">
     <div class="addnewscate center-block" style="width: 500px;display: none">
     <div class="form-group">
     <label for="catename">
       教师名
     </label>
       <input type="text" class="form-control" id="teachername" name="teachername">
            <label for="catename">
       教师头衔
     </label>
       <input type="text" class="form-control" id="teacherhonor" name="teacherhonor">
              <label for="intruducion">教师简述</label>
       <textarea class="form-control" id="description" name="description"></textarea>
                     <label for="intruducion">教师头像</label>
       <input type="file" class="form-control pic" id="pic" name="pic"><br>

       <label for="intruducion">所授课程</label>
       <select class="form-control field" name="teacherfield[]" >
       <option value="" checked></option>
       <?php if(is_array($course)): $i = 0; $__LIST__ = $course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["coursename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
       </select>

      </div>
      <div>
      <button class="btn btn-default center-block" >添加</button>
      </div>
     </form>    
     </div>
     <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
     <script>
     $(document).ready(function(){
       $(".newslist").attr("name",function(index,value){
           value=value+parseInt(index+1);
           return value;
       });
       $(".del").click(function(){
         $(this).closest("form").submit(); 
         window.reload();
       })
       $(".add").click(function(){
        $(".addnewscate").css("display",function(index,value){
             value=value=="block"?"none":"block";
             return value;
        })
       })
      //保障只有最后一个select才能触发新select,并且新的select选择为空
       $(".field").change(function(){ 
        var $clone=$(this).clone(true);
        $clone.find("option").attr("selected",null);
        $clone.find("option:first").attr("selected","selected");
        $(this).after($clone);
        var all=$("tbody tr");
        for(var i=0;i<=all.length;i++){
          $(".tbody .tr:eq("+i+")").find(".field").not(":last").off("change");
        }
        $(this).off("change");
       })


       $(".mod").click(buttontoggle_off);

       function buttontoggle_on(){
        $(this).closest(".tr").find(".toggle_on").css("display",function(index,value){
          value=value=="block"?"none":"block";
          return value;
        })
        $(this).closest(".tr").find(".toggle_off").css("display",function(index,value){
          value=value=="inline"?"none":"inline";
          return value;

        })
        $(this).text(function(index,value){
          value=value=="编辑"?"完成编辑":"编辑";
          return value;
        })
          $(this).closest("form").submit();
          $(this).off("click");
          $(this).on("click",buttontoggle_off);
       }



       function buttontoggle_off(){
          $(this).closest(".tr").find(".toggle_on").css("display",function(index,value){
          value=value=="block"?"none":"block";
          return value;
        })
        $(this).closest(".tr").find(".toggle_off").css("display",function(index,value){
          value=value=="none"?"inline":"none";
          return value;

        })
        $(this).text(function(index,value){
          value=value=="编辑"?"完成编辑":"编辑";
          return value;
        })
        $(this).off("click");
        $(this).on("click",buttontoggle_on);
       }
        

     });



     </script>
</body>
</html>