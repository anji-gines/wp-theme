<div class="p-topHero">
  <div class="p-topHero__inner">
    <div class="l-container">
      <div>
        <div class="p-topHero__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-result.svg" alt="RESULT DRIVEN" width="486" height="58">
        </div>
        <p class="p-topHero__description">
          <span>事業成長のために、</span><span>あらゆるプロが集いました。</span><br />
          <span>THE MOLTSはどこまでも成果にこだわる、</span><span>デジタルマーケティングカンパニーです。</span>
        </p>
        <div class="p-topHero__achievement">
          <ul class="p-topHero__achievementList">
            <li class="p-topHero__achievementItem">
              累計支援企業数<span class="p-topHero__achievementItemNumber">100</span>社以上
            </li>
            <li class="p-topHero__achievementItem">
              累計プロジェクト数 <span class="p-topHero__achievementItemNumber">800</span>以上
            </li>
            <li class="p-topHero__achievementItem">
              累計売上貢献額<span class="p-topHero__achievementItemNumber">5500</span>億以上
            </li>
          </ul>
          <p class="p-topHero__achievementSince">
            Since 2016.3 – 2024.12
          </p>
        </div>
      </div>
      <!-- cta -->
      <div class="p-topHero__cta">
        <?php get_template_part('template-parts/object/component/buttonWithIcon', null, [
          'href' => '/contact',
          'text' => 'お問い合わせ・ご相談',
          'icon' => get_template_directory_uri() . '/assets/images/common/icon-message.svg',
          'class' => 'p-topHero__ctaButton',
        ]); ?>
        <?php get_template_part('template-parts/object/component/buttonWithIcon', null, [
          'href' => '/contact',
          'text' => '会社案内ダウンロード',
          'icon' => get_template_directory_uri() . '/assets/images/common/icon-download.svg',
          'class' => 'p-topHero__ctaButton',
        ]); ?>
      </div>
    </div>
  </div>
</div>