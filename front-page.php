<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body class="p-top">
  <?php
  ob_start();
  ?>
  <?php get_template_part('template-parts/object/project/topHero'); ?>
  <main class="p-top__main">
    <?php get_template_part('template-parts/object/project/topProjects'); ?>
  </main>
  <?php
  $content = ob_get_clean();
  require locate_template('template-parts/layout/layout.php'); ?>
  <?php get_footer(); ?>
</body>

</html>