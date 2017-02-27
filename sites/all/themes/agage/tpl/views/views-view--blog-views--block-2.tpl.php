<?php  global $base_url; ?>
<?php print render($title_prefix); ?>
<?php if ($rows): ?>
<?php $sidebar = block_get_blocks_by_region('sidebar'); ?>
<div class="mainBanner parallax" id="blog-header" data-background="<?php print $base_url.'/'.path_to_theme();?>/images/blog/hero.jpg">
	<div class="parallax-overlay bg-strip"></div>
    <div class="container">
      	<div class="banner">
        	<div class="center-content">
          		<p class="text-uppercase"><?php print t('Welcome to our');?></p>
          		<h1 class="text-uppercase"><?php print drupal_get_title(); ?></h1>
        	</div>
      	</div>
    </div>
    <?php if(FALSE) { ?>
    <div class="tool-panel">
     	<div class="container">
        	<div class="top-search-form">
            	<?php
					$block = module_invoke('search', 'block_view', 'search');
				 	print render($block); 
				?>
            </div>
            <div id="blog-filters-container" class="cbp-l-filters-dropdown">
              	<div class="cbp-l-filters-dropdownWrap">
                	<div class="cbp-l-filters-dropdownHeader text-uppercase">Sort Gallery</div>
                	<div class="cbp-l-filters-dropdownList">
                  		<div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
                        <?php print $header; ?>
                  	</div>
              	</div>
           	</div>
        </div>
   	</div>
    <?php } ?>
</div>
<div class="blog-body clearfix">
    <div class="container">
        <div class="row row-padding">
            <div id="blog-grid-container" class="cbp-l-grid-blog blog-2 col-lg-9" data-caption="zoom" data-animation="fadeOut" data-gaphorizontal="50" data-gapvertical="60">
				<?php print $rows; ?>
           	</div>
            <div class="col-lg-3">
              <?php print render($sidebar); ?>
              <?php 
              if ($plugin = context_get_plugin('reaction', 'block')) { 
                $bl = $plugin->block_get_blocks_by_region('sidebar');
                print render($bl);
              } 
              ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
