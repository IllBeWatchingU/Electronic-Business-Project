<?php
/* Smarty version 3.1.43, created on 2022-12-10 15:41:46
  from '/var/www/html/modules/psgdpr/views/templates/admin/tabs/help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949aaaee82f6_17307198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c8f606c36ac8ce080de64bb5b447dc1190bc89e' => 
    array (
      0 => '/var/www/html/modules/psgdpr/views/templates/admin/tabs/help.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63949aaaee82f6_17307198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<div class="panel col-lg-10 right-panel">
    <h3>
        <i class="fa fa-question-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help & contact','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_display']->value,'htmlall','UTF-8' ));?>
</small>
    </h3>
    <div class="helpContentParent">
        <div class="helpContentLeft">
            <div class="left">
                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo_path']->value,'htmlall','UTF-8' ));?>
" alt=""/>
            </div>
            <div class="right">
                <p><span class="data_label" style="color:#00aff0;"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module allows you to :','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></span></p>
                <br>
                <div>
                    <div class="numberCircle">1</div>
                    <div class="numberCircleText">
                    <p class="numberCircleText">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Erase any customer account with his/her personal data collected by your shop if requested by the customer','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </p>
                    </div>
                </div>
                <div>
                    <div class="numberCircle">2</div>
                    <div class="numberCircleText">
                    <p class="numberCircleText">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a consent confirmation checkbox in a module form that collects personal data and customize it','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </p>
                    </div>
                </div>
                <div>
                    <div class="numberCircle">3</div>
                    <div class="numberCircleText">
                    <p class="numberCircleText">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allow your customer to consult and export their personal data collected by your shop on their customer account','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </p>
                    </div>
                </div>
                <div>
                    <div class="numberCircle">4</div>
                    <div class="numberCircleText">
                    <p class="numberCircleText">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all your customers’ actions related to their personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="helpContentRight">
            <div class="helpContentRight-sub">
                <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Need help ?','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b><br>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find here the documentation of this module','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                <a class="btn btn-primary" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['doc']->value,'htmlall','UTF-8' ));?>
" target="_blank" style="margin-left:20px;" href="#">
                    <i class="fa fa-book"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Documentation','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>
                </a>
                <br><br>
                <div class="tab-pane panel" id="faq">
                    <div class="panel-heading"><i class="icon-question"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'FAQ','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['faq']->value, 'category', false, NULL, 'faq', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['total'];
?>
                        <span class="faq-h1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'htmlall','UTF-8' ));?>
</span>
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['blocks'], 'qa');
$_smarty_tpl->tpl_vars['qa']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['qa']->value) {
$_smarty_tpl->tpl_vars['qa']->do_else = false;
?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['qa']->value['question'])) {?>
                                    <li>
                                        <span class="faq-h2"><i class="icon-info-circle"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['qa']->value['question'],'htmlall','UTF-8' ));?>
</span>
                                        <p class="faq-text hide">
                                            <?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['qa']->value['answer'],'htmlall','UTF-8' )),"\n","<br />");?>

                                        </p>
                                    </li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['last'] : null)) {?><hr/><?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}