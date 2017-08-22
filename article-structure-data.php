<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php the_permalink(); ?>"
  },
  "headline": "<?php the_title() ?>",
  "image": {
    "@type": "ImageObject",
    "url": "<?php the_post_thumbnail_url(); ?>",
    "height": 800,
    "width": 800
  },
  "datePublished": "<?php the_time('c') ?>",
  "dateModified": "<?php the_modified_date('c') ?>",
  "author": {
    "@type": "Person",
    "name": "<?php the_author_meta('display_name') ?>"
  },
   "publisher": {
    "@type": "Organization",
    "name": "<?php bloginfo('name') ?>",
    "logo": {
      "@type": "ImageObject",
      "url": "<?php bloginfo('url') ?>/logo.png",
      "width": 350,
      "height": 60
    }
  },
  "description": "<?php echo wp_strip_all_tags(get_the_excerpt()) ?>"
}
</script>
