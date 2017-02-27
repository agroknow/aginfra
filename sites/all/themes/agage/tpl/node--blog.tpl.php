<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root, $base_url;

?>

<?php if($page) { ?>

<?php print render($content['comments'])?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar-shrink">
                <ul class="pager">
                    <li class="previous text-uppercase"><?php print agage_prev_next($nid,'blog','p'); ?></li>
                    <li class="next text-uppercase"><?php print agage_prev_next($nid,'blog','n'); ?></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php } else { ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>

<?php } ?>