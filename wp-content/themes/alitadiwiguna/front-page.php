
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >

    <div class="list-top"></div><!-- list-top -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php $image = get_theme_mod( 'photo_profile', '' ); ?>
            <div class="photo-profile">    
              <img style="max-width:100%;" src="<?php echo $image ?>" alt="">
            </div>

          </div><!-- col-sm-12 -->
          
        </div><!-- row -->

        <div class="wrap-text">
            <h1><?php echo get_theme_mod( 'my_name' ); ?></h1>
            <h2><?php echo get_theme_mod( 'my_sub_name' ); ?></h2>  
        </div><!-- wrap-text -->
          
      </div><!-- container -->
      
    </div><!-- jumbotron -->

    <div class="container">

      <div class="row margin-bottom">
        <div class="col-md-12 about-title">
          <h3>ABOUT</h3>  
        </div><!-- col-md-12 -->

        <div class="col-md-4">

          <?php if( dynamic_sidebar('front-left') ); ?>

        </div>

        <div class="col-md-4">

          <?php if( dynamic_sidebar('front-center') ); ?>

        </div>

        <div class="col-md-4">

         <?php if( dynamic_sidebar('front-right') ); ?>

        </div>

      </div><!-- row -->
    </div><!-- container -->     

    <div class="container-fluid background-grey container-portfolio">
      <div class="container">

        <div class="row">
          <div class="col-md-12 about-title">
            <h3>PORTFOLIO</h3>  
          </div><!-- col-md-12 -->
        </div><!-- row -->

        <div class="row portfolio-filter text-center">
          
          <?php $terms = get_terms( array(
              'taxonomy' => 'portfolio-type',
          ) );
          ?> 

          <div class="btn-group btn-group-filter" role="group">
            <button type="button" class="btn btn-danger active" data-filter="*">Show All</button>
            <?php
              foreach($terms as $term) {
                   echo '<button type="button" class="btn btn-danger"  data-filter= ".' . $term->slug . '">' . $term->name . '</button>';
              }
            ?>
          </div>

        </div><!-- row -->

        <div class="row grid">
          <?php 

              $args = array( 'post_type'   => 'portfolio' );
              $query = new WP_Query( $args );

          ?>

          <?php if ( $query->have_posts() ) : 

            while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php $term_loops = get_the_terms( $post->id, 'portfolio-type' ); 

                    $terms = '';

                    foreach($term_loops as $term_loop) {
                         $terms .= $term_loop->slug . ' ';
                    }

                ?>

              <div class="col-sm-4 col-md-4 text-center portfolio-pieces <?php echo $terms; ?>">

                <?php 
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                ?>

                

                <p class="<?php ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"></p>

              </div>
                
                     <!-- <?php // $current_post = $query->current_post + 1; ?>
                     <?php // $portfolio_count = $current_post ?>
                     <?php //if ( $portfolio_count % 3 == 0 ) : ?>
                     
                      </div>
                     
                       <?php // if ( $query->post_count != $current_post) : ?>
                         <div class="row grid">
                       <?php // endif; ?>
                     
                     <?php // endif; ?> -->
              
            <?php endwhile; else : ?>

              <div class="col-md-12">

                <h3>No Portfolio</h3>

              </div>

            <?php endif; ?>

          </div><!-- row -->
        </div><!-- container -->  
      </div><!-- container-fluid -->

      <div class="container-fluid container-contact">

        <div class="container text-center">
          
          <h3>CONTACT</h3>

          <div class="col-md-4">

            <?php if( dynamic_sidebar('footer-left') ); ?>

          </div>

          <div class="col-md-4">

            <?php if( dynamic_sidebar('footer-center') ); ?>

          </div>

          <div class="col-md-4">

           <?php if( dynamic_sidebar('footer-right') ); ?>

          </div>  

          <div class="col-md-12 text-center">

            <footer>
              <p>&copy;<?php the_time('Y'); ?> <?php bloginfo('name'); ?>, Inc.</p>
            </footer>
            
          </div><!-- col-md-12 text-center -->

        </div><!-- container -->
        
      </div><!-- container-fluid -->
      
      <div class="container">      

    </div> <!-- /container -->

    <?php wp_footer(); ?>
  </body>
</html>
