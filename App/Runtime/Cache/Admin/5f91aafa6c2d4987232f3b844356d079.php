<?php if (!defined('THINK_PATH')) exit();?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/Public/Admin/css/Admin.css">

<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
<title>分页管理-教学环境</title>
<style>
   *{
  margin:0;
  padding:0; 
}
  .toggle_on,input.toggle_on{
    display: none;
 }
    .table > tbody > tr > td{
   vertical-align: middle;
   text-align: center;
  }
    .table .thead .th{
    height: 30px;
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

<div class='menu'>分页管理&nbsp>&nbsp教学环境</div>
<?php if(is_array($case)): $i = 0; $__LIST__ = $case;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$case): $mod = ($i % 2 );++$i;?><div class="table table-bordered"><p style="text-align: center;"><?php echo ($case["caseName"]); ?></p>
   <div class="thead">
     <div class="tr">
       <div class="th" style="width: 16.7%">内容ID</div>
       <div class="th" style="width: 16.7%">内容名</div>
       <div class="th" style="width: 16.7%">内容简述</div>
       <div class="th" style="width: 16.7%">内容图片</div>
       <div class="th" style="width: 16.7%">是否优先</div>
       <div class="th" style="width: 16.7%">操作</div>
     </div>
   </div>
   <div class="tbody">
       <?php  $index=1; ?>
   <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["listCase"]) == $case["id"]): ?><form action="/Admin/Pagination/addlist/act/mod" name="newslist" enctype="multipart/form-data" class="newslist" method="post" >
     <div class="tr">
      <input type="hidden" name="listCase" value=<?php echo ($case["id"]); ?>> 
       <div class="td" style="width: 16.7%"><span class="toggle_off"><?php echo $index; ?></span><input type="hidden" name="id" class="form-control id toggle_on" value=<?php echo ($vo["id"]); ?>></div>
       <div class="td" style="width: 16.7%"><span class="toggle_off"><?php echo ($vo["listName"]); ?> </span><input type="text" name="listName" class="form-control listName toggle_on" value=<?php echo ($vo["listName"]); ?>> </div>
       <div class="td" style="width: 16.7%"><span class="toggle_off"><?php echo ($vo["listCont"]); ?> </span><input type="text" name="listCont" class="form-control listCont toggle_on" value=<?php echo ($vo["listCont"]); ?>> </div>
       <div class="td" style="width: 16.7%"><span class="toggle_off"><img src="/Uploads/environment/<?php echo ($vo["listPicThumb"]); ?>" alt=""></span> <input type="file" name="pic" class="pic toggle_on" > </div>
       <?php  $index++; ?>
       <div class="td" style="width: 16.7%"><span class="toggle_off">
       <?php switch($vo["isTop"]): case "0": ?>正常<?php break;?>
         <?php case "1": ?>置顶<?php break; endswitch;?>
       </span> 
       <select name="isTop" class="form-control toggle_on" > 
        <option value="1" <?php if($vo["isTop"] == 1): ?>selected=true<?php endif; ?> >置顶</option>
        <option value="0" <?php if($vo["isTop"] == 0): ?>selected=true<?php endif; ?> >正常</option>
       </select>
       </div>
       <div class="td" style="width: 16.7%">
         <a href="/Admin/Pagination/delenvironment/index/<?php echo ($vo["id"]); ?>"><button type="button" class="btn btn-default movement del">删除</button></a>
         <button type="button" class="btn btn-default movement mod">修改</button>
       </div>
     </div>
     </form><?php endif; endforeach; endif; else: echo "" ;endif; ?>
   </div>
   </div>
        <div class="center-block" style="width: 200px">
        <button type="button" class="btn btn-default add">增加新内容</button>
       <a href="/Admin/Pagination/delEnvironmentCase/index/<?php echo ($case["id"]); ?>> "> <button type="button" class="btn btn-default  ">删除该模块</button> </a> 
   </div>
     <div class="addnewscate" style="border: 2px solid black;padding: 20px 230px;display: none">


     <form  action="/Admin/Pagination/addlist" class="form form-inline" enctype="multipart/form-data" method="post" role="form">
     <div class="form-group" style="left: 50%;margin-left:-265px;position: relative;">
     <label for="listName">内容名
     </label>
       <input type="text" class="form-control" id="listName" name="listName">
       <label for="listCont">内容描述</label>
       <input type="text" class="form-control" id="listCont" name="listCont">
        <select name="isTop" class="form-control toggle_on" > 
        <option value="1"  >置顶</option>
        <option value="0" >正常</option>
       </select>
       <label for="listCont">添加内容图片</label>
       <input type="file" class="form-control" id="pic" name="pic">
       <input type="hidden" name="listCase" value="<?php echo ($case["id"]); ?>">
      </div>
      <div>
      <button class="btn btn-default center-block">添加</button>
      </div>
     </form>     
     </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <form action="/Admin/Pagination/addEnvironmentCase" class="form form-inline" method="POST">
        <div class="form-group" style="left: 50%;margin-left:-265px;position: relative;">
            <label for="caseName">页面模块名</label>
             <input type="text" class="form-control" id="caseName" name="caseName">
            <label for="caseRank">排序</label>
             <input type="text" class="form-control" id="caseRank" name="caseRank">
             <button class="btn btn-info center-block">添加页面模块</button>
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
         $(this).closest("div").next(".addnewscate").css("display",function(index,value){
             value=value=="block"?"none":"block";
             return value;
        })
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


     </script>
</body>
</html>