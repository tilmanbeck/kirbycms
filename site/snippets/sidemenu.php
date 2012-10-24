<?php 
// find the open/active page on the first level
$visibleChildren = $dirname->visible(); 
?>
<?php if($visibleChildren && $visibleChildren->count()): ?>
<div class="sidemenu">
  <ul>
    <?php foreach($visibleChildren AS $item): ?>
    <a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></br>
    <?php endforeach ?>            
  </ul>
</div>
<?php endif ?>
