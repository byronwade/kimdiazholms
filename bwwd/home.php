<?php
/*
 * Template Name: Home
 * description: >-
  Page template without sidebar
 */

get_header(); ?>

<div id="primary" class="site-content">
  <div id="content" role="main">
    <div class="background-color">
      <div class="container">
          <h1 class="is-size-1">Home</h1>
					<div><img src=<?php the_field( 'logo' ); ?> /></div>
          <p>fnvoewinvpoiernvpoiernvpoiwernvpoiwnevrpoiewrnvpowenv</p>
      </div>
    </div>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>