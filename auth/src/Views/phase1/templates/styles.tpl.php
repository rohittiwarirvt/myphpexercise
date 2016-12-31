<?php

?>
<?php if(is_array($styles)): ?>
  <?php foreach ($styles as $key => $style): ?>
    <link rel='stylesheet' href="/src/Assets/<?php print $style['data']; ?>"></link>
  <?php endforeach; ?>
<?php endif; ?>
