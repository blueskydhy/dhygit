<?php /* Smarty version Smarty-3.1.13, created on 2013-03-05 23:11:41
         compiled from "D:\game\odds_game\templates\admin\normalusermanage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270415124bf33b85c85-30319022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dd44c9cb612d3d6b88d20e08b8a0372b6d1a494' => 
    array (
      0 => 'D:\\game\\odds_game\\templates\\admin\\normalusermanage.tpl',
      1 => 1362495677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270415124bf33b85c85-30319022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5124bf33c04a90_93358555',
  'variables' => 
  array (
    'users' => 0,
    'key' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5124bf33c04a90_93358555')) {function content_5124bf33c04a90_93358555($_smarty_tpl) {?><div class="row">
	<div class="span12 well">
		<strong>用户列表</strong>
	</div>
	<div class="span12">
		<table id="usertable" class="table table-striped table-bordered table-condensed span9" style="font-size: 16px;">
			<thead>
				<tr>
					<th>#</th>
					<th>邮箱</th>
					<th>经验值</th>
					<th>虚拟金钱</th>
					<th>注册时间</th>
					<th>最近登录时间</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['user']->key;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_email;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_exp;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_vmoney;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_regdate;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_lastdate;?>
</td>
					<td width="280">
						<a href="#deluserModal" data-toggle="modal" class="btn btn-danger deluser" un="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_email;?>
"><i class="icon-trash icon-white"></i> 删除</a>
						<a href="#userhistorybetModal" data-toggle="modal" class="btn btn-info userhistorybet" un="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_email;?>
"><i class="icon-hand-right icon-white"></i> 投注历史</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>


<div class="modal hide fade" id="deluserModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3 id="wintitle">删除用户</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-error">
	  <strong>警告！</strong> 确认删除用户?
	</div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn"  data-dismiss="modal">关闭</a>
    <a id="deluser" href="#" class="btn btn-danger">确认</a>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('admin/userhistorybet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">

$(document).ready(function(){
	
	$(".deluser").live('click', function(){
		var un = $(this).attr("un");
		$("#deluser").attr('un', un);
	});

	

	$("#deluser").click(function(){
		var useremail = $(this).attr("un");
		$.ajax({
			'url': 'ajaxuserop.php',
			'data': {'method': 'deleteuser', 'useremail': useremail},
			'success': function(data){
				if(data == 'error'){
				}else if(data == 'success'){
					$("#deluserModal").modal('hide');
					$("#usertable >tbody >tr >td").children("a[un='"+useremail+"']").parents("tr").remove();
				}
			}
			});
		});


	
	
});

</script>
<?php }} ?>