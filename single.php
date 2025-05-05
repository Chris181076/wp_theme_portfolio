<?php get_header(); ?>
<div class="single-projet">
  <h1><?php the_title(); ?></h1>

  <p><strong>Développement :</strong> <?php the_field('front_back'); ?></p>
  <p><strong>Posté le :</strong> <?php echo get_the_date(); ?></p>
  <p><strong>Tags :</strong> <?php the_tags('', ', ', ''); ?> |
    <strong>Catégories :</strong> <?php the_category(', '); ?>
  </p>

  <?php if (has_post_thumbnail()) {
    the_post_thumbnail('medium', ['style' => 'width: 100%; margin: 20px 0;']);
  } ?>

  <!-- image -->
  <div id="images">
    <?php for ($i = 1; $i <= 3; $i++): ?>
      <?php $image = get_field('image' . $i); ?>
      <?php if ($image):
        $caption = $image['caption']; ?>
        <figure>
        <a href="<?php echo esc_url($image['url']); ?>" data-lightbox="galerie">
          <img class="img-uniforme" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </a>
        <?php if ($caption): ?>
          <p class="caption"><?php echo esc_html($caption); ?></p>
        <?php endif; ?>
        </figure>
      <?php endif; ?>
    <?php endfor; ?>
  </div>
  <!-- texte -->
  <div class="texte-explicatif">
    <?php (the_field('texte_explicatif')); ?>

  </div>

  <div class="html">
    <?php the_field('html'); ?>
  </div>

  <?php echo do_shortcode(get_field('shortcodes_custom')); ?>

  <a href="<?php echo get_permalink(get_page_by_path('project')); ?>">← Retour aux projets</a>

</div>
<?php get_footer(); ?>