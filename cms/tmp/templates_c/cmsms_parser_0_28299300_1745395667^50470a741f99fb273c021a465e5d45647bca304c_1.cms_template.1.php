<?php
/* Smarty version 4.5.2, created on 2025-04-23 10:07:47
  from 'cms_template:1' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_68089fd348f029_77803560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50470a741f99fb273c021a465e5d45647bca304c' => 
    array (
      0 => 'cms_template:1',
      1 => '1745395167',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68089fd348f029_77803560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),3=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),4=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),5=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),6=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.cms_selflink.php','function'=>'smarty_function_cms_selflink',),7=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
  <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
  <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

  <?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      font-family: Arial, sans-serif;
      background: #eef7ff;
      color: #333;
    }

    header {
      background: #006699;
      color: white;
      padding: 1rem;
      text-align: center;
    }

    nav#menu {
      background: #005580;
      padding: 0.5rem;
    }

    nav#menu ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      gap: 2rem;
    }

    nav#menu ul li {
      display: inline;
    }

    nav#menu ul li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      transition: background 0.3s ease;
    }

    nav#menu ul li a:hover {
      background-color: #0077aa;
    }

    section#content {
      flex: 1;
      padding: 2rem;
    }

    footer {
      background: #004466;
      color: white;
      text-align: center;
      padding: 1rem;
      margin-top: auto;
    }
  </style>
</head>

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
    
  </section>

  <footer>
    &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 Wszelkie prawa zastrzeżone.
  </footer>
</body>

</html><?php }
}
