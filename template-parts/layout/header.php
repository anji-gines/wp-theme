<header class="l-header is-scrolling">
  <div class="l-header__inner">
    <nav class="l-header__nav">
      <ul class="l-header__navList">
        <li class="l-header__navItem">
          <a href=""><span>はじめまして</span></a>
        </li>
        <li class="l-header__navItem <?php echo is_front_page() ? 'is-current' : ''; ?>">
          <a href=""><span>実績</span></a>
        </li>
        <li class="l-header__navItem <?php echo is_page('services') ? 'is-current' : ''; ?>">
          <a href=""><span>サービス</span></a>
        </li>
        <li class="l-header__navItem">
          <a href=""><span>メンバー</span></a>
        </li>
        <li class="l-header__navItem">
          <a href=""><span>採用情報</span></a>
        </li>
        <li class="l-header__navItem">
          <a href=""><span>会社情報</span></a>
        </li>
        <li class="l-header__navItem">
          <a href=""><span>NOTE</span></a>
        </li>
      </ul>
    </nav>
    <div class="l-header__logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-mo.svg" alt="THE MOLTS" width="204">
      </a>
    </div>
  </div>
</header>