<?php
print_r($styles);
?>
<?php if(is_array($styles)): ?>
  <?php foreach ($styles as $key => $style): ?>
    <link rel='stylesheet' src="/src/Assets/<?php print $style['data']; ?> "></link>
  <?php endforeach; ?>
<?php endif; ?>
