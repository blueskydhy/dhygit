<?php /* Smarty version Smarty-3.1.13, created on 2013-02-20 13:20:24
         compiled from "D:\game\odds_game\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:324775124cd98617ff8-52623782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c7b6cf759c696f63bc0cae1596ed29f0bd4655a' => 
    array (
      0 => 'D:\\game\\odds_game\\templates\\index.tpl',
      1 => 1361291506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324775124cd98617ff8-52623782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlroot' => 0,
    'ownmoney' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5124cd986e9508_20920259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5124cd986e9508_20920259')) {function content_5124cd986e9508_20920259($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/main.js"></script>
<div class="container"> 
        <div class="tietle">
            <font>足球</font>&nbsp;&or;
        </div>
        <div class="container-left">
            <div class="sais-list">
                <ul class="list-title">
                    <li class="sais">赛事</li>
                    <li class="changc">场次</li>
                    <li class="shij">时间</li>
                    <li class="zhud">主队</li>
                    <li class="ked">客队</li>
                    <li class="zhus">主胜</li>
                    <li class="ping">平</li>
                    <li class="zhuf">主负</li>
                </ul>
                
                <div id="refreashTitle" style=" padding: 5px; background-color: #DDDDDD; display: none;"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/images/loading.gif">正在刷新数据...</div>
                
                <?php echo $_smarty_tpl->getSubTemplate ('eventtable.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                
            </div>
        </div>
        <!-- left END -->
        <div class="container-right">
        	<span class="cont-r-title-l">
            	&nbsp;投注项
            </span>
            <span class="cont-r-title-r">
            	赔率&nbsp;&nbsp;赢/位置&nbsp;
            </span>
            <span id="ownmoney" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['ownmoney']->value;?>
</span>
            
            <div class="clumu clumusimple" style="display: none;">
            	<span class="bordtop">&nbsp;</span>
                <div class="duim">
                	<a href="javascript:void(0)" class="dele">删除</a>
                    <span class="duiName">
                    	诺丁汉森林队&nbsp;<font>3-2</font>
                    </span>
                    <span class="bettype">胜负</span>
                    <span class="gail">26.00</span>
                </div>
                <div class="benj">
                	本金
                    <form>
                    	<input type="text" class="inp-text betmoney" />
                    </form>
                    预期返还&nbsp;&nbsp;<font class="rmoney">0.00</font>
                    <br />
                    <span style="padding-left:40px; color:#bbb;">最高投金</span>
                </div>
                <span class="bordbot">&nbsp;</span>
            </div>
            
            <div id="betpanel">
            
            
            </div>
            
            <div id="msgPanel" class="clumu" style="display: none;">
            	<span class="bordtop">&nbsp;</span>
                <p id="beterror" class="tis">如选项被加亮显示，则此项不能串成过关投注</p>
                <span class="bordbot">&nbsp;</span>
            </div>
            <div class="zongje">总投注金额:<font id="rmoneycount">000.00</font></div> 
            <div class="touz">
            	<a id="deleteAll" href="javascript:void(0);" class="q-delt">全部删除</a>
                <a id="betnow" href="javascript:void(0);" class="touz-bot">投注</a>
            </div>
        </div>
        <div class="container-right" style="margin-top:5px; padding-top:8px;">
            <span class="toptitle">排行榜</span>
            <ul class="top-tabl">
                <li><a href="#">周榜</a></li>
                <li class="xzbg"><a href="#">月榜</a></li>
                <li><a href="#">总榜</a></li>
            </ul>
            <div class="clumu" style="margin-top:0;">
                <span class="bordtop">&nbsp;</span>
                <ul class="top-list">
                    <li>1.<span>张三</span><font>1800</font>分</li>
                    <li>2.<span>张三</span><font>1800</font>分</li>
                    <li>3.<span>张三</span><font>1800</font>分</li>
                    <li>4.<span>张三</span><font>1800</font>分</li>
                    <li>5.<span>张三</span><font>1800</font>分</li>
                    <li>6.<span>张三</span><font>1800</font>分</li>
                    <li>7.<span>张三</span><font>1800</font>分</li>
                    <li>8.<span>张三</span><font>1800</font>分</li>
                </ul>
                <span class="bordbot">&nbsp;</span>
            </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>