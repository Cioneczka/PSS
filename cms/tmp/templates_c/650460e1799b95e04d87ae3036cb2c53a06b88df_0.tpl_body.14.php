<?php
/* Smarty version 4.5.2, created on 2025-04-23 10:22:28
  from 'tpl_body:14' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6808a34415bea4_31932552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '650460e1799b95e04d87ae3036cb2c53a06b88df' => 
    array (
      0 => 'tpl_body:14',
      1 => '1745396544',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6808a34415bea4_31932552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),1=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),2=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.cms_selflink.php','function'=>'smarty_function_cms_selflink',),3=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),4=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<body>
  <header id="header">
    <h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
  </header>

  <nav id="menu">
    <ul>
      <li><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
">Home</a></li>
      <li><a href="<?php echo smarty_function_cms_selflink(array('page'=>'aktualnosci','urlonly'=>'1'),$_smarty_tpl);?>
">Aktualności</a></li>
      <li><a href="<?php echo smarty_function_cms_selflink(array('page'=>'galeria','urlonly'=>'1'),$_smarty_tpl);?>
">Galeria</a></li>
    </ul>
  </nav>

  <section id="content">
    <h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
    <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
  </section>

  <footer>
    &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 Wszelkie prawa zastrzeżone.
  </footer>
</body>

</html><?php }
}
