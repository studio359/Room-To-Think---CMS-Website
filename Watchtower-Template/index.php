<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
  <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
<jdoc:include type="head" />
  <?php
// Remove Scripts
$doc = JFactory::getDocument();
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-more.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/modal.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
?>
  <script src='https://www.google.com/recaptcha/api.js'></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/custom.css" type="text/css" />
</head>
<body>
<jdoc:include type="modules" name="top" /> 
<jdoc:include type="component" />
<jdoc:include type="modules" name="bottom" />
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/easing.js"></script>
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scripts.js"></script>
</body>
</html>