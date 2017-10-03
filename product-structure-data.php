<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "<?php the_title() ?>",
  "image": [
    "<?php the_post_thumbnail_url(); ?>",
   ],
  "description": "<?php echo wp_strip_all_tags(get_the_excerpt()); ?>",
  "mpn": "<?php the_Id(); ?>",
  "brand": {
    "@type": "Thing",
    "name": "Easyfix"
  }
}
</script>
