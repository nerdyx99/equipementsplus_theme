<!--.page -->
<div role="document" class="page">

  <?php if (!empty($page['top'])): ?>
    <div class="top">
      <div class="row">
        <div class="large-12 columns ">
          <?php print render($page['top']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <!--.l-header region -->
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <div class="row">
        <div class="large-12 columns">
          
          <?php if ($top_bar_classes): ?>
          <div class="<?php print $top_bar_classes; ?>">
          <?php endif; ?>
            <nav class="top-bar" data-topbar <?php print $top_bar_options; ?>>
              <ul class="title-area">
                <li class="name"><h1><a href="<?php print $base_path ?><?php if($language->language == 'fr'){print $language->language;} ?>"><img src="<?php echo $base_path; ?><?php echo $path_to_ep; ?>/images/logo.png"></a></h1></li>
                <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
              </ul>
              <section class="top-bar-section">
                <?php if ($top_bar_main_menu) :?>
                  <?php print $top_bar_main_menu; ?>
                <?php endif; ?>
                <?php if (!empty($page['lang'])): ?>
                  <div class="language"><?php print render($page['lang']); ?></div>
                <?php endif; ?>
              </section>
            </nav>
            
          <?php if ($top_bar_classes): ?>
          </div>
          <?php endif; ?>    
        </div>
      </div>
      
      <!--/.top-bar -->
    <?php endif; ?>

    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
    <section class="row <?php print $alt_header_classes; ?>">

      <?php if ($linked_logo): print $linked_logo; endif; ?>

      <?php if ($site_name): ?>
        <?php if ($title): ?>
          <div id="site-name" class="element-invisible">
            <strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </strong>
          </div>
        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
      <?php endif; ?>

      <?php if ($alt_main_menu): ?>
        <nav id="main-menu" class="navigation" role="navigation">
          <?php print ($alt_main_menu); ?>
        </nav> <!-- /#main-menu -->
      <?php endif; ?>

      <?php if ($alt_secondary_menu): ?>
        <nav id="secondary-menu" class="navigation" role="navigation">
          <?php print $alt_secondary_menu; ?>
        </nav> <!-- /#secondary-menu -->
      <?php endif; ?>

    </section>
    <?php endif; ?>
    <!-- End title, slogan and menu -->

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="large-12 columns">
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--/.featured -->
    <section class="l-featured">
      <div class="row">
        <div class="large-12 columns">
          <?php print render($page['featured']); ?>
        </div>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if (!empty($page['featured_products_1'])): ?>
    <!--/.featured -->
    <section class="l-featuredProducts">
      <div class="row">
        <div class="medium-4 columns"><?php print render($page['featured_products_1']); ?></div>
        <div class="medium-4 columns"><?php print render($page['featured_products_2']); ?></div>
        <div class="medium-4 columns"><?php print render($page['featured_products_3']); ?></div>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if (!empty($page['recently_added'])): ?>
    <section class="l-recently-added">
      <div class="row">
        <div class="medium-12 columns">
          <?php if (!empty($page['shopping_cart'])): ?>
            <div class="shopping-cart"><?php print render($page['shopping_cart']); ?></div>
          <?php endif; ?>
          <?php print render($page['recently_added']); ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <main role="main" class="row l-main">
    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
      <!--/.l-messages -->
      <section class="l-messages">
        <div class="large-12 columns">
          <?php if ($messages): print $messages; endif; ?>
        </div>
      </section>
      <!--/.l-messages -->
    <?php endif; ?>

    

    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php //if ($breadcrumb): print $breadcrumb; endif; ?>
      <?php if(!$is_front):?>
        <?php if (!empty($page['shopping_cart'])): ?>
          <div class="shopping-cart"><?php print render($page['shopping_cart']); ?></div>
        <?php endif; ?>
      <?php endif;?>

      <?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>



      <?php if (!empty($page['pre_content'])): ?>
        <?php print render($page['pre_content']); ?>
      <?php endif; ?>

      <?php if(!$is_front): ?>
        <?php print render($page['content']); ?>
      <?php endif; ?>
    </div>
    <!--/.main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.main-->

  <!--.l-footer-->
  <footer class="l-footer" role="contentinfo">
    <!-- <div id="map"></div> -->
    <?php if (!empty($page['footer'])): ?>
      <div class="footer">
      <div class="row">
        <div class="medium-6 columns medium-push-2 panel">
          <?php print render($page['footer']); ?>  
        </div>
      </div>
      </div>
    <?php endif; ?>

    <?php if ($site_name) :?>
      <div class="footer-menu">
        <div class="row">
          <div class="copyright medium-4 columns">
            <p>&copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?></p>
          </div>
          <div class="medium-8 columns">
            <?php if ($main_menu): ?>
              <div id="footer-manu" class="navigation">
                <?php print theme('links__system_main_menu', array(
                  'links' => $main_menu,
                  'attributes' => array(
                    'id' => 'main-menu-links',
                    'class' => array('inline-list', 'clearfix'),
                  ),
                  'heading' => array(
                    'text' => t('Main menu'),
                    'level' => 'h2',
                    'class' => array('element-invisible'),
                  ),
                )); ?>
              </div> <!-- /#main-menu -->
            <?php endif; ?>
          </div>
        </div>
        <?php if (!empty($page['atomiq'])): ?>
          <div id="atomiq" class="row">
            <div class="large-12 columns">
              <?php print render($page['atomiq']); ?> 
            </div>
          </div>
        <?php endif;?>
      <?php endif; ?>
    </div>
  </footer>
  <!--/.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>


  <?php if (!empty($page['products_modals'])): ?>
    <div class="products-modals">
      <?php print render($page['products_modals']); ?>  
    </div>
  <?php endif; ?>


</div>
<!--/.page -->
