<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
<title>Insert title here</title>
<style>
    a{color: black;font-weight: normal;}
	a:hover{color: black;text-decoration: none}
	.table > tbody > tr > td{
		text-align: center;
		vertical-align: middle;
	}
</style>
</head>
<body>
<table border="1" class="table table-hover">
<tbody>
<tr>
	<td>报名编号</td>
	<td>姓名</td>
	<td>日期</td>
	<td>时间段</td>
	<td>电话</td>
	<td>QQ</td>
	<td>email</td>
	<td>wechat</td>
	<td>备注内容</td>
	<td>操作</td>
</tr>
<?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($i); ?></td>
	<td><?php echo ($vo["Name"]); ?></td>
	<td><?php echo ($vo["ConsultationDate"]); ?></td>
	<td><?php echo ($vo["period"]); ?></td>
	<td><?php echo ($vo["tel"]); ?></td>
	<td><?php echo ($vo["qq"]); ?></td>
	<td><?php echo ($vo["email"]); ?></td>
	<td><?php echo ($vo["wechat"]); ?></td>
	<td><a href="#" class="showremark" content="<?php echo ($vo["remark"]); ?>"><?php echo (substr($vo["remark"],0,2)); ?>...</a></td>
	<td>
		<a href="/Admin/Message/delmessage/id/<?php echo ($vo["id"]); ?>"><button type="button" class="btn btn-info">删除</button></a>
	</td>
</tr>
<div class="modal" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">模态弹出窗标题</h4>
			</div>
			<div class="modal-body">
				<p>模态弹出窗主体内容</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				<button type="button" class="btn btn-primary">保存</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->	
</tbody><?php endforeach; endif; else: echo "" ;endif; ?>
</table>


<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
<script>
$(".showremark").click(function(){
	var content=$(this).attr("content");
	$("#mymodal").modal();
	$("#mymodal .modal-body > p").text(content);
})

</script>
</body>
</html>