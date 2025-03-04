<?php
$size = $args['size'] ?? 'is-base';
$class = $args['class'] ?? '';
?>

<a
  href="<?php echo $args['href']; ?>"
  class="c-buttonWithIcon <?php echo $size; ?> <?php echo $class ?>"
  <?php if (!empty($args['target'])) echo 'target="' . $args['target'] . '"' ?>>
  <span class="c-buttonWithIcon__text"><?php echo $args['text']; ?></span>
  <img src="<?php echo $args['icon']; ?>" alt="" loading="lazy" width="24" height="24" class="c-buttonWithIcon__icon">
</a>