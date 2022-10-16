<?php
global $alt_add_word;

?>
<a id="<?php echo $layout['lp_layout_anc']; ?>"></a>

<section class="otkr-custom_html otkr-animation">
  <?php if($layout['frame_use']):?>
  <div class="box01 boxeffect"></div>
  <div class="box02 boxeffect"></div>
  <div class="box03 boxeffect"></div>
  <div class="box04 boxeffect"></div>
  <?php endif;?>

  <div class="otkr-under-inner fadein">
    <?php echo $layout['html_content']; ?>
  </div>
</section>
<?php if($layout['frame_use']):?>
<div class="otkr-animation_line">
  <div class="lineanime"></div>
</div>
<?php endif;?>