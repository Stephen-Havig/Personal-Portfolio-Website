<?php get_header(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">All Projects</h1>
        <div class="page-banner__intro">
          <p></p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?php echo site_url('/projects'); ?>"><i class="fa" aria-hidden="true"></i> Back to Projects </a>
            </p>
        </div>
        <?php
        while(have_posts()) {
            the_post(); ?>
            <div class="post-item">
                <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="metabox">
                    <p>Posted on <?php the_time('n/j/y'); ?> on <?php echo get_the_category_list(', ');  ?></p>
                </div>
                <div class="generic-content">
                    <?php the_excerpt(); ?>
                    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>"><?php echo in_category('Youtube') ? 'Watch it here ': 'Continue reading ' ?>&raquo;</a></p>
                </div>
            </div>
        <?php }
        echo paginate_links();
        ?>
    </div>


<?php get_footer(); ?>