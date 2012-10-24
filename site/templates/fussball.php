<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>
<?php snippet('counter') ?>
<?php
$dirname = $page->children();
 snippet('sidemenu', array('dirname'=> $dirname));
?>

