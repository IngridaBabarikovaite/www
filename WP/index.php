
<?php get_header(); ?>

      <div class="row">

        <div class="col-sm-8 blog-main">

        <?php while ( have_posts() ) {

        the_post();
        get_template_part( 'content', get_post_format() );

        } ?>
        
        <?php if ( have_posts() ) : ?> 
        <!-- jei : tada endif; tas pats kas { } -->
          <nav>
            <ul class="pager">
              <li><?php previous_posts_link( 'Naujesni' ); ?></li>
              <li><?php next_posts_link( 'Senesni' ); ?></li>
            </ul>
          </nav>
        <?php endif; ?>

        </div><!-- /.blog-main -->

        <?php get_sidebar(); ?>

      </div><!-- /.row -->

<?php get_footer(); ?>