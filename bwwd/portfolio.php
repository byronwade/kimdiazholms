<?php
/*
 * Template Name: Portfolio
 * description: >-
  Page template without sidebar
 */

get_header(); ?>

<style>
/* Box-sizing reset: //w3bits.com/?p=3225 */
html {
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

/* The Masonry Container */
.masonry {
  margin: 1.5em auto;
  column-gap: 1.5em;
}

/* The Masonry Brick */
.masonry-item {
  background: #333;
  color: #fff;
  padding: 1em;
  margin: 0 0 1.5em;
  -webkit-column-break-inside: avoid;
  page-break-inside: avoid;
  break-inside: avoid;
  overflow-wrap: break-word;
}

/* Masonry on large screens */
@media only screen and (min-width: 1024px) {
  .masonry {
    column-count: 4;
  }
}

/* Masonry on medium-sized screens */
@media only screen and (max-width: 1023px) and (min-width: 768px) {
  .masonry {
    column-count: 3;
  }
}

/* Masonry on small screens */
@media only screen and (max-width: 767px) and (min-width: 540px) {
  .masonry {
    column-count: 2;
  }
}
</style>

<div id="primary" class="site-content">
  <div id="content" role="main">
    <div class="container">
        <h1 class="is-size-1">Portfolio</h1>
        <p>fnvoewinvpoiernvpoiernvpoiwernvpoiwnevrpoiewrnvpowenv</p>

        <div class="masonry">
          <div class="masonry-item">
            test eqwfwfeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
          </div>
          <div class="masonry-item">
            test qwe f wef weq f  we fe qw
          </div>
          <div class="masonry-item">
            test
          </div>
          <div class="masonry-item">
            test qwef wef wef  wqe f qwe f qwe f qwef q wef qwef qw ef q wef 
          </div>
          <div class="masonry-item">
            test
          </div>
          <div class="masonry-item">
            testq  q wef q f qwe f qwef fqwf
          </div>
          <div class="masonry-item">
            test
          </div>
          <div class="masonry-item">
            test q f wqe f q wef  qwe f qwe f q we fqw ef wef q wef qw ef wq ef  wef wqe f q wef q wef  wef  weqf wqe  fqw ee wfq w f  e q f q ew f qwe f wqe f qwe f qw ef q wef q we f qwe f qw ef  qwe f wef qw e f  qwe f
          </div>
          <div class="masonry-item">
            test
          </div>
          <div class="masonry-item">
            test
          </div>
        </div>

    </div>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>