<?php get_header(); ?>

<div id="primary" class="site-content">
  <div id="content" role="main">
    <div class="readable-content row-fluid page as">
      <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
              <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
              </header>
              <!-- end .entry-header -->
              <div class="entry-meta">
                <? php>
                  $datecreated = esc_html(get_the_date());
                  $datemodifiedISO = esc_html(get_the_modified_time("c"));
                ?>
                <span class="post-date">
                  <a rel="bookmark" title="<?php echo $datecreated; ?>" href="<?php the_permalink(); ?>"><time class="entry-date updated" datetime="<?php echo $datemodifiedISO; ?>"><?php echo $datecreated; ?></time></a>
                </span>
                <!-- end .post-date -->
                <span class="by-author">
                  <span class="author vcard">
                    <a class="url fn n" rel="author" title="<?php echo __( 'View all posts by ', 'read' ) . get_the_author(); ?>" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                  </span>
                  <!-- end .author -->
                </span>
                <!-- end .by-author -->
              </div>
              <!-- end .entry-meta -->
              <div class="entry-content clearfix">
                <?php the_content(); ?>
                <?php
                  wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'read' ), 'after' => '</div>' ) );
                ?>
              </div>
              <!-- end .entry-content -->
            </article>
            <!-- end .hentry -->
      <?php
          endwhile;
        endif;
        wp_reset_query();
      ?>
      <?php comments_template( "", true ); ?>
    </div>
    <!-- end .readable-content -->
  </div>
  <!-- end #content -->
</div>
<!-- end #primary -->

<?php get_footer(); ?>
