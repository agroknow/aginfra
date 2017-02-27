<?php require_once(drupal_get_path('theme','agage').'/tpl/header.tpl.php'); 

global $base_url;

if(!empty($_REQUEST["blog"])){
	$blog = $_REQUEST["blog"];
} else {
	$blog = theme_get_setting('blog_style', 'agage'); 
}
if(empty($blog)) $blog = 'normal';

$blog_class = '';
if($blog == 'minimal'){
	$blog_class = 'minimal';
}
?>
<div id="pageWrapper" class="clearfix">
	<div class="contentWrapper">
    <section id="blog-featured" class="clearfix">
        <div class="container-fluid">
            <div class="row">
                <?php print render($page['top_content']); ?>
            </div>
        </div>
    </section>
    	<section id="blog-main" class="clearfix bgColor2">
        	<div class="blog-body blog-inner clearfix">
            	<div class="container">
                	<div class="row row-padding">
            			<article class="posts clearfix">
                        	<div class="col-md-9"><?php print render($page['content']); ?></div>
                            <aside>
                				<div class="col-md-3">
                  					<div class="blog-siderbar">
                        				<?php print render($page['sidebar']); ?>
                                    </div>
                                </div>
                            </aside>
                        </article>
                   	</div>
                </div>
                
            </div>
        </section>
    </div>
</div>



<?php require_once(drupal_get_path('theme','agage').'/tpl/footer.tpl.php'); ?>