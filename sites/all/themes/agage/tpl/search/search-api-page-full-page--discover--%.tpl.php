<?php

/**
 * @file
 * Default theme implementation for displaying a search page.
 *
 * This template renders a page containing a search form and, possibly, search
 * results.
 *
 * Available variables:
 * - $results: The renderable search results.
 * - $form: The search form.
 *
 * @see template_preprocess_search_api_page()
 */
global $base_url;
$params = drupal_get_query_parameters();
?>
<?php if(empty($results['#keys']) && !isset($params['showall']) && !isset($params['f'])) { ?>
<div class="mainBanner parallax" id="blog-header" data-background="<?php print $base_url . '/' . drupal_get_path('theme', 'agage'); ?>/images/banners/discovery.png">
  <div class="parallax-overlay bg-strip"></div>
    <div class="container">
        <div class="banner">
          <div class="center-content">
              <!-- <p class="text-uppercase"><?php //print t('Find Open Data'); ?></p> -->
              <h1 class="text-uppercase"><?php print t('Find Open Data'); ?></h1>
              <div class="discovery-search">
              <?php print render($form); ?>
              </div>
          </div>
        </div>
    </div>
</div>
<div class="row-padding-up">
<?php 
    print views_embed_view('search_page_blocks', 'block');
    //print views_embed_view('search_page_blocks', 'block_1');
    //print views_embed_view('search_page_blocks_content', 'block_2');
?>
</div>

<div class="container">
    <div class="row">
    <div class="blog-body marT12 clearfix">
    <div class="a-blog-grid">
      <div class="col-lg-3 pad10">
        <?php print theme('image_style', array('style_name' => '400x300crop', 'path' => 'public://content_types/organization.png')); ?>
        <?php $path = url('discover', array('query' => array('f' => array('type:organization')))); ?>
        <a href="<?php echo $path ?>" target="_blank" class="cbp-l-grid-blog-title">Organizations</a>
        <?php print views_embed_view('search_page_blocks_content', 'block_3', 'organization'); ?>
      </div>
      <div class="col-lg-3 pad10">
        <?php print theme('image_style', array('style_name' => '400x300crop', 'path' => 'public://content_types/initiative.jpg')); ?>
        <?php $path = url('discover', array('query' => array('f' => array('type:initiative')))); ?>
        <a href="<?php echo $path ?>" target="_blank" class="cbp-l-grid-blog-title">Initiatives</a>
        <?php print views_embed_view('search_page_blocks_content', 'block_3', 'initiative'); ?>
      </div>
      <div class="col-lg-3 pad10">
        <?php print theme('image_style', array('style_name' => '400x300crop', 'path' => 'public://content_types/data_point.jpg')); ?>
        <?php $path = url('discover', array('query' => array('f' => array('type:data_point')))); ?>
        <a href="<?php echo $path ?>" target="_blank" class="cbp-l-grid-blog-title">Data points</a>
        <?php print views_embed_view('search_page_blocks_content', 'block_3', 'data_point'); ?>
      </div>
      <div class="col-lg-3 pad10">
        <?php print theme('image_style', array('style_name' => '400x300crop', 'path' => 'public://content_types/facility.jpg')); ?>
        <?php $path = url('discover', array('query' => array('f' => array('type:facility')))); ?>
        <a href="<?php echo $path ?>" target="_blank" class="cbp-l-grid-blog-title">Facilities</a>
        <?php print views_embed_view('search_page_blocks_content', 'block_3', 'facility'); ?>
      </div>
    </div>    
    </div>    
    </div>    
</div>

<div class="row-padding-up">
<?php 
    //print views_embed_view('search_page_blocks', 'block');
    //print views_embed_view('search_page_blocks', 'block_1');
    print views_embed_view('search_page_blocks_content', 'block_2');
?>
</div>


<?php } else { ?>
<div class="text-center">
              <!-- <p class="text-uppercase"><?php //print t('Find Open Data'); ?></p> -->
              <h1 class="text-uppercase"><?php print t('Find Open Data'); ?></h1>
              <div class="discovery-search">
              <?php print render($form); ?>
              </div>
</div>
<?php print render($results); ?>
<?php } ?>


