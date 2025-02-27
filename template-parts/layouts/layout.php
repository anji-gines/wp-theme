<div class="l-layout">
  <?php get_template_part('template-parts/layouts/header'); ?>
  <main class="l-layout__main">
    <?php echo isset($content) ? $content : ''; ?>
  </main>
  <?php get_template_part('template-parts/layouts/footer'); ?>
  <div>
    <p>footer</p>
  </div>
</div>