
<?php
$image = get_field('image', $acfw);
$medium = $image['sizes']['medium'];
$mediumlg = $image['sizes']['medium_large'];
$large = $image['sizes']['large'];
$thumbnail = $image['sizes']['thumbnail'];

?>
<!--
<picture>
   <source media="(min-width: 6em)"
      srcset="<?php //echo $large ?>  1024w,
         <?php //echo $medium ?> 640w,
         <?php //echo $small ?>"
      sizes="33.3vw" />

      <img src="<?php //echo $large ?>" alt="A rad wolf" />
</picture>

-->
<img src="<?php echo $large ?>" />
