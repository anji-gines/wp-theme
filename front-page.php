<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body class="p-top">
  <?php
  ob_start();
  ?>

  <div>
    <?php get_template_part('template-parts/projects/topHero'); ?>
  </div>


  <?php
  $content = ob_get_clean();
  require locate_template('template-parts/layouts/layout.php'); ?>
  <?php get_footer(); ?>
</body>

</html>