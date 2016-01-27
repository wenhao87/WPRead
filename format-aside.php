<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
  <header class="entry-header">
    <h1 class="entry-title">
      <?php
        $hide_post_title = get_option( $post->ID . 'hide_post_title', false );
        if ( $hide_post_title ) {
          $hide_post_title_out = 'style="display: none;"';
        } else {
          $hide_post_title_out = "";
        }
      ?>
      <a <?php echo $hide_post_title_out; ?> rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
    <!-- end .entry-title -->
  </header>
  <!-- end .entry-header -->
  <footer class="entry-meta">
    <span class="post-category">
      <?php the_category( ', ' ); ?>
    </span>
    <!-- end .post-category -->
    <span class="post-date">
      <a rel="bookmark" title="<?php echo get_the_date(); ?>" href="<?php the_permalink(); ?>"><time class="entry-date" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time></a>
    </span>
    <!-- end .post-date -->
    <span class="by-author">
      <span class="author vcard">
        <a class="url fn n" rel="author" title="<?php echo __( 'View all posts by ', 'read' ) . get_the_author(); ?>" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
      </span>
      <!-- end .author -->
    </span>
    <!-- end .by-author -->
    <span class="comments-link">
      <?php
        comments_popup_link( __( '0 Comment', 'read' ), __( '1 Comment', 'read' ), __( '% Comments', 'read' ) );
      ?>
    </span>
    <!-- end .comments-link -->
  </footer>
  <!-- end .entry-meta -->

  <?php
    if ( has_post_thumbnail() ) {
  ?>
      <div class="featured-image">
        <?php
          the_post_thumbnail( 'blog_feat_img', array( 'alt' => get_the_title(), 'title' => "" ) );
        ?>
      </div>
      <!-- end .featured-image -->
  <?php
    } // end if
  ?>
  <div class="entry-content clearfix">
    <?php
      $theme_excerpt = get_option( 'theme_excerpt', 'No' );
      if ( $theme_excerpt == 'Yes' ) {
        the_excerpt();
      } else {
        the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'read' ) );
      }
      // end if
    ?>
    <?php
      wp_link_pages( array( 'before' => '<div class="page-links clearfix">' . __( 'Pages:', 'read' ), 'after' => '</div>' ) );
    ?>
  </div>
  <!-- end .entry-content -->
</article>
<!-- end .post -->
