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
      "url": "http://www.theculinaryfoodgroup.com/wp-content/uploads/2016/03/logo.png",
      "width": 350,
      "height": 60
    }
  },
  "description": "<?php the_excerpt() ?>"
}
</script>