<?php
/* Smarty version 3.1.33, created on 2019-11-29 01:50:04
  from 'C:\xampp\htdocs\proyectos\nfautoparts\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de06b3cd90233_31589030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd5ba755a2a4859be99c0fd4e65df3b6df8c54ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\nfautoparts\\templates\\error.tpl',
      1 => 1573759550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5de06b3cd90233_31589030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="alert alert-danger" role="alert">
        <h2>Error:</h2>
        <h2><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>
    </div>
</body>
</html> <?php }
}
