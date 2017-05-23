<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
<style>
	ul{list-style: none;}
	.table > tbody > tr > td,.table > thead > tr > th{
		text-align: center;
		vertical-align: middle;
	}
</style>
</head>
<body>
<table class="table table-bordered table-hover" align="center" valing="">
	<thead>
		<tr>
			<th style="width: 12.5%;">编号</th>
			<th style="width: 12.5%;">姓名</th>
			<th style="width: 12.5%;">电话</th>
			<th style="width: 12.5%;">QQ</th>
			<th style="width: 12.5%;">email</th>
			<th style="width: 12.5%;">备注</th>
			<th style="width: 12.5%;">所选课程</th>
			<th style="width: 12.5%;">操作</th>
		</tr>
	</thead>
	<tbody>
	<?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($i); ?></td>
			<td><?php echo ($vo["Name"]); ?></td>
			<td><?php echo ($vo["tel"]); ?></td>
			<td><?php echo ($vo["qq"]); ?></td>
			<td><?php echo ($vo["email"]); ?></td>
			<td><?php echo ($vo["remark"]); ?></td>
			<td><ul>
			<?php if(is_array($vo["course"])): $i = 0; $__LIST__ = $vo["course"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><?php echo ($list); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul></td>
			<td>
				<button type="button" class="btn btn-info">展开</button>
				<button type="button" class="btn btn-info">删除</button>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
</body>
</html>