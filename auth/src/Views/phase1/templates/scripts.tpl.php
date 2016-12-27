
<?php if (is_array($scripts)): ?>
  <?php foreach ($scripts as $key => $script): ?>
    <script type="text/javascript" src="/src/Assets/<?php print $script['data']; ?> "></script>
  <?php endforeach ?>
<?php endif; ?>
