<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>

</style>
<title>基础表格</title>
<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
<link rel="stylesheet" href="style/style_course/">
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="./jquery.validate-1.13.1.js"></script>
<script src="./jquery.metadata.js"></script>
<script src="./messages_zh.js"></script>
<script>
        $(function(){
            $("#mainform").validate();
        });
</script>
<style>
  thead > tr >th {
    text-align: center;
  }
  .timepart input{
    display: inline;
  }
  .table > tbody > tr > td{
   vertical-align: middle;
  }

</style>
</head>

<body>
<form id="mainform" action="/Admin/Goods/add" method="post">
<fieldset>
<input type="text" style="display: none;" class="datanum" name="datanum" value="1">
<div style="overflow: hidden;">
  <select class="form-control" style="width: 20%" name="coursename" id="coursename">
    <?php if(is_array($courselist)): $i = 0; $__LIST__ = $courselist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo["id"]); ?> <?php if($vo['id'] == $coursename[0]['id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["coursename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
  </select>
</div>

<table class="table table-bordered table-hover" align="center" style="text-align: center;">

   <thead style="text-align: center;">
     <tr>
       <th class="col-sm-2">部分</th>
       <th class="col-sm-2">时间</th>
       <th class="col-sm-2">大纲</th>
       <th class="col-sm-2">内容</th>
       <th class="col-sm-2">方式</th>
       <th class="col-sm-2">操作</th>        
     </tr>
   </thead>
   <tbody>
   <?php if($course): if(is_array($course)): $index = 0; $__LIST__ = $course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($index % 2 );++$index;?><tr style="height: 200px;" name="group_<?php echo ($index); ?>">
        
       <td><?php echo ($index); ?></td>
       <td>


       <div class="expend timepart">

       <!--以下是时间修改表单-->



         上午 <input type="text" class="form-control  input-sm clock" style="width:25%" basename="AM_C_1" value="<?php echo ($list["AM_C_1"]); ?>">：<input basename="AM_M_1" class="form-control input-sm minute" type="text" style="width: 25%" value="<?php echo ($list["AM_M_1"]); ?>"> <br> 
         --&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control  input-sm clock" style="width:25%" basename="AM_C_2" value="<?php echo ($list["AM_C_2"]); ?>">：<input basename="AM_M_2" class="form-control input-sm minute" type="text" style="width: 25%" value="<?php echo ($list["AM_M_2"]); ?>"> <br> 
         中午 <input type="text" class="form-control  input-sm clock" style="width:25%" basename="AF_C_1" value="<?php echo ($list["AF_C_1"]); ?>">：<input basename="AF_M_1" class="form-control input-sm minute" type="text" style="width: 25%" value="<?php echo ($list["AF_M_1"]); ?>"> <br>
         --&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control  input-sm clock" style="width:25%" basename="AF_C_2" value="<?php echo ($list["AF_C_2"]); ?>">：<input basename="AF_M_2" class="form-control input-sm minute" type="text" style="width: 25%" value="<?php echo ($list["AF_M_2"]); ?>"> <br>
         下午 <input type="text" class="form-control  input-sm clock" style="width:25%" basename="PM_C_1" value="<?php echo ($list["PM_C_1"]); ?>">：<input basename="PM_M_1" class="form-control input-sm minute" type="text" style="width: 25%" value="<?php echo ($list["PM_M_1"]); ?>"> <br>
         --&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control  input-sm clock" style="width:25%" basename="PM_C_2" value="<?php echo ($list["PM_C_2"]); ?>">：<input basename="PM_M_2" class="form-control input-sm minute" type="text" style="width: 25%" value="<?php echo ($list["PM_M_2"]); ?>"> <br>
        


       </div>      
       </td>
       <td><textarea class="form-control outline" rows="8"  name="<?php echo ($index); ?>_outline" placeholder="请输入大纲"><?php echo ($list["outline"]); ?></textarea></td>
       <td style="position: relative;">

       <div class="expend content" >
       <!--以下为内容修改表单-->
      <input type="text" class="listnum" name="<?php echo ($index); ?>_listnum" style="display: none;" value="1">
       <ol>
       <?php if(is_array($list["content"])): $i = 0; $__LIST__ = $list["content"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <input type="text" name="<?php echo ($index); ?>_content_1" class=" form-control  input-sm contentinput" style="width:100% " value= <?php echo ($vo); ?>></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ol>
         <button id="addcontent" class="btn btn-default center-block addcontent" type="button" style="margin-top:80px; ">增加</button>
     
       </div> 
       </td>
       <td><textarea class="form-control method" rows="8" name="<?php echo ($index); ?>_method"  placeholder="请输入方式"><?php echo ($list["method"]); ?></textarea></td>
               </td>
       <td><button type="button" class="btn btn-primary delsection">删除</button>
       </td>
     </tr><?php endforeach; endif; else: echo "" ;endif; ?>

   <?php else: ?>

     <tr style="height: 200px;" name="group_1">
        
       <td>1</td>
       <td>


       <div class="expend timepart">

       <!--以下是时间修改表单-->



         上午 <input type="text" class="form-control  input-sm clock" style="width:25%" basename="AM_C_1">：<input basename="AM_M_1" class="form-control input-sm minute" type="text" style="width: 25%"> <br> 
         --&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control  input-sm clock" style="width:25%" basename="AM_C_2">：<input basename="AM_M_2" class="form-control input-sm minute" type="text" style="width: 25%"> <br> 
         中午 <input type="text" class="form-control  input-sm clock" style="width:25%" basename="AF_C_1">：<input basename="AF_M_1" class="form-control input-sm minute" type="text" style="width: 25%"> <br>
         --&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control  input-sm clock" style="width:25%" basename="AF_C_2">：<input basename="AF_M_2" class="form-control input-sm minute" type="text" style="width: 25%"> <br>
         下午 <input type="text" class="form-control  input-sm clock" style="width:25%" basename="PM_C_1">：<input basename="PM_M_1" class="form-control input-sm minute" type="text" style="width: 25%"> <br>
         --&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control  input-sm clock" style="width:25%" basename="PM_C_2">：<input basename="PM_M_2" class="form-control input-sm minute" type="text" style="width: 25%"> <br>
        


       </div>      
       </td>
       <td><textarea class="form-control outline" rows="8"  name="outline" placeholder="请输入大纲"></textarea></td>
       <td style="position: relative;">

       <div class="expend content" >
       <!--以下为内容修改表单-->
      <input type="text" class="listnum" name="listnum" style="display: none;" value="1">
       <ol>
         <li> <input type="text" name="content" class=" form-control  input-sm contentinput" style="width:100% "> </li>

      </ol>
         <button id="addcontent" class="btn btn-default center-block addcontent" type="button" style="margin-top:80px; ">增加</button>
     
       </div> 
       </td>
       <td><textarea class="form-control method" rows="8" name="method"  placeholder="请输入方式"></textarea></td>
       <td><button type="button" class="btn btn-primary delsection">删除</button>

       </td>

     </tr>
     <script>

    $("tbody > tr:first").find("input").attr("name",function(index,value){
        value=1+"_"+value;
        return value;
    });
    $("tbody > tr:first").find("textarea").attr("name",function(index,value){
        value=1+"_"+value;
        return value;
    });
     </script><?php endif; ?>
   </tbody>

 </table>

<div style="height: 50px;float: left;overflow: hidden;position: relative;left: 50%;margin-left: -112px">
  <button type="button" class="btn btn-default " id="add">添加新的部分</button>
  <button type="button" id="submit" class="btn btn-default">提交</button>
</div>
</fieldset>
 </form>

<script>
var i;
var datanum;
var group;
var permit=true;
var remindcount=0;
var mes;
renewstable();
//这个部分是增加内容的脚本
$(".addcontent").click(function(){
  var groupname=$(this).parents("tr").attr("name").split("_")[1];
  var pre=groupname;
  i=1+parseInt($(this).parents("div").find("ol input:last").attr("name").split("_")[2]);
  var newname=pre+"_content_"+i;
  var clone=$(".content ol li:first").clone(true);
  clone.find("input").attr("name",newname);
  clone.find("input").val("");
  $(this).parent().find("ol").append(clone);
  $(this).parents("tr").find("input.listnum").attr("value",i);

  i++;
  
});


//这个部分是增加section的脚本
   var subclone=$("tbody > tr:first").clone(true);
  $("#add").click(function(){
    var clone=subclone.clone(true);
    clone.find("input").val("");    
    clone.find("textarea").val("");
    $("tbody").append(clone);
    check()
$(".delsection").click(function(){
   $(this).closest("tr").remove();
   renewstable();
})
  //修改后的增加section脚本

   renewstable();
  });
  function renewstable(){
  $(".outline").attr("name",function(index,value){
      var mysection=$(this).closest("tr").index()+1;
      console.log(mysection);
      value=mysection+"_outline";
      return value;
  })
  $(".method").attr("name",function(index,value){
      var mysection=$(this).closest("tr").index()+1;
      console.log(mysection);
      value=mysection+"_method";
      return value;
  })
    $(".clock").attr("name",function(){
      var basename=$(this).attr("basename");
      var mysection=$(this).closest("tr").index()+1;
      console.log(mysection);
      var value=mysection+"_"+basename;
      return value;
  })
      $(".minute").attr("name",function(){
      var basename=$(this).attr("basename");
      var mysection=$(this).closest("tr").index()+1;
      console.log(mysection);
      var value=mysection+"_"+basename;
      return value;
  })
        $("tr").find("td:first").text(function(){
      var value=$(this).closest("tr").index()+1;
      return value;
  })
        $(".datanum").attr("value",function(){
          var value=$("tbody tr").length;
          return value;
        })
  }






function check(){
var showerror=function(){

var reg = /^[0-9]*$/;
if (!reg.test($(this).val())||$(this).val()>60 && !remindcount) {
$(this).parents(".expend").append("<p>请输入正确的时间</p>");
remindcount+=1;
permit=false;
$(this).off("change");
$(this).on("change",delerror);
return false;
}
}


var delerror=function(){

  var reg = /^[0-9]*$/;
  if (reg.test($(this).val()) && $(this).val()<=60 && remindcount)
    {$(this).parents(".expend").find("p").remove()
  remindcount-=1;
  permit=true;
  $(this).off("change");
$(this).on("change",showerror);
    }
}



$(".timepart").children("input.minute").on("change",showerror);

var showerror2=function(){

var reg = /^[0-9]*$/;
if (!reg.test($(this).val())||$(this).val()>24 && !remindcount) {
$(this).parents(".expend").append("<p>请输入正确的时间</p>");
remindcount+=1;
permit=false;
$(this).off("change");
$(this).on("change",delerror2);
return false;
}
}


var delerror2=function(){

  var reg = /^[0-9]*$/;
  if (reg.test($(this).val()) && $(this).val()<=24 && remindcount)
  { $(this).parents(".expend").find("p").remove()
  remindcount-=1;
  permit=true;
  $(this).off("change");
$(this).on("change",showerror2);
  }
}

$(".timepart").children("input.clock").on("change",showerror2);

}



check();







$("#submit").click(function(){
  if(permit){
	  $.ajax({
          cache: true,
          type: "POST",
          url:"/Admin/Goods/add/act/del",
          data:$('#mainform').serialize(),// 你的formid
          async: false,
          error: function(request) {
              alert("Connection error");
          },
          success:function(){
        	  alert("提交成功");
        	  window.location.reload();
          }
      });
  }
  else{
    alert("请检查格式")
  }
})
//以下为section删除脚本
$(".delsection").click(function(){
   $(this).closest("tr").remove();
   renewstable();
})

</script>

</body>