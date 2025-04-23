<?php
/* Smarty version 4.5.2, created on 2025-04-23 10:22:28
  from 'tpl_top:14' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6808a3440e4b00_04698324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f964a163ab78a1aaca59072d2bd42d04624229c6' => 
    array (
      0 => 'tpl_top:14',
      1 => '1745396544',
      2 => 'tpl_top',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6808a3440e4b00_04698324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['process_pagedata'][0], array( array(),$_smarty_tpl ) );?>

<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
"><?php }
}
