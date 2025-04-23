<?php
/* Smarty version 4.5.2, created on 2025-04-23 10:22:14
  from 'tpl_head:1' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6808a336f05329_19292035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64060443164a9839c71c34206331731aaeeac788' => 
    array (
      0 => 'tpl_head:1',
      1 => '1745396530',
      2 => 'tpl_head',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6808a336f05329_19292035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),1=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),2=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),3=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
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
</head><?php }
}
