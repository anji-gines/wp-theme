<div class="l-layout">
  <?php get_template_part('template-parts/layout/header'); ?>
  <div class="l-layout__topBg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/bg-logo-mo.svg" alt="" loading="lazy" width="831" height="544">
  </div>
  <main class="l-layout__main">
    <?php echo isset($content) ? $content : ''; ?>
  </main>
  <?php get_template_part('template-parts/layout/bottomCta'); ?>
  <?php get_template_part('template-parts/layout/footer'); ?>
</div>