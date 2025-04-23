<?php
/* Smarty version 4.5.2, created on 2025-04-23 10:24:52
  from 'cms_template:14' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6808a3d42675b0_83425434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba91d3539a9fdecb1ac7b80c4819c93c03e1bed' => 
    array (
      0 => 'cms_template:14',
      1 => '1745396544',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6808a3d42675b0_83425434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),3=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),4=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),5=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),6=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\plugins\\function.cms_selflink.php','function'=>'smarty_function_cms_selflink',),7=>array('file'=>'C:\\xampp\\htdocs\\cms\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
  <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

  <?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

  <style>

/* Stylizacja kontenera dla aktualności */
.NewsSummary {
    margin: 20px auto;
    max-width: 1200px;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Nagłówek dla listy aktualności */
.NewsSummary h2 {
    font-size: 28px;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
    font-family: 'Arial', sans-serif;
}

/* Stylizacja pojedynczej aktualności */
.NewsSummary .news-item {
    padding: 15px;
    border-bottom: 1px solid #ddd;
    margin-bottom: 15px;
}

.NewsSummary .news-item:last-child {
    border-bottom: none; /* Usunięcie linii na końcu */
}

/* Tytuł aktualności */
.NewsSummary .news-item h3 {
    font-size: 24px;
    color: #0056b3;
    margin-bottom: 10px;
    font-weight: bold;
}

/* Data publikacji */
.NewsSummary .news-item .news-date {
    font-size: 14px;
    color: #888;
    margin-bottom: 10px;
}

/* Treść aktualności */
.NewsSummary .news-item p {
    font-size: 16px;
    color: #444;
    line-height: 1.6;
}

/* Przycisk lub link do pełnej treści */
.NewsSummary .news-item a.read-more {
    display: inline-block;
    padding: 10px 15px;
    background-color: #0056b3;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    margin-top: 10px;
    transition: background-color 0.3s ease;
}

.NewsSummary .news-item a.read-more:hover {
    background-color: #003366;
}

/* Responsywność */
@media screen and (max-width: 768px) {
    .NewsSummary {
        padding: 15px;
    }
    
    .NewsSummary .news-item h3 {
        font-size: 20px;
    }

    .NewsSummary .news-item p {
        font-size: 14px;
    }

    .NewsSummary .news-item a.read-more {
        padding: 8px 12px;
    }
}

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
