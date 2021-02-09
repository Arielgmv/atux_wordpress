<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">  
  <?php do_action( 'marketing_agency_before_slider' ); ?>

  <?php if( get_theme_mod('marketing_agency_slider_arrows') != ''){ ?>
    <section id="slider">
      <div class="slider-box"></div>
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <?php $marketing_agency_pages = array();
          for ( $count = 1; $count <= 3; $count++ ) {
            $mod = intval( get_theme_mod( 'marketing_agency_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $marketing_agency_pages[] = $mod;
            }
          }
          if( !empty($marketing_agency_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $marketing_agency_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <div class="container">
                <div class="row">
                  <div class="col-lg-7 col-md-7">
                    <div class="carousel-caption">
                      <h1 class="mb-0 pt-0"><?php the_title(); ?></h1>
                      <p><?php $excerpt = get_the_excerpt(); echo esc_html( marketing_agency_string_limit_words( $excerpt, esc_attr(get_theme_mod('marketing_agency_slider_excerpt_number','25')))); ?></p>
                      <div class="more-btn mt-4 mb-4">
                        <a class="px-4 px-lg-4 px-md-4 py-3 py-lg-3 py-md-3" href="<?php the_permalink(); ?>"><?php esc_html_e('GET STARTED','marketing-agency');?><span class="screen-reader-text"><?php esc_html_e('GET STARTED','marketing-agency'); ?></span></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-5">
                    <div class="slider-img"></div>
                    <?php the_post_thumbnail(); ?>                    
                  </div>
                </div>
              </div>              
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-caret-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e('Previous','marketing-agency'); ?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-caret-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e('Next','marketing-agency'); ?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action( 'marketing_agency_after_slider' ); ?>

  <section id="services-sec" class="text-center py-5">
    <div class="container">
      <div class="heading-text px-3 px-lg-5 px-md- mb-4">
        <?php if( get_theme_mod( 'marketing_agency_section_title') != '') { ?>
          <h2><?php echo esc_html(get_theme_mod('marketing_agency_section_title',''));?></h2>
        <?php } ?>
      </div>
      <div class="row">
        <?php
        $marketing_agency_catData=  get_theme_mod('marketing_agency_services_category');
        if($marketing_agency_catData){
          $page_query = new WP_Query(array( 'category_name' => esc_html( $marketing_agency_catData ,'marketing-agency')));?>
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
            <div class="col-lg-4 col-md-4">
              <div class="inner-box border p-3 mb-3">
                <h3><a href="<?php the_permalink();?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                <?php the_post_thumbnail(); ?>
                <p class="mt-3"><?php $excerpt = get_the_excerpt(); echo esc_html( marketing_agency_string_limit_words( $excerpt, esc_attr(get_theme_mod('marketing_agency_services_excerpt_number','20')))); ?></p>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        } ?>
      </div>
    </div>
  </section>

  <?php do_action( 'marketing_agency_after_service' ); ?>

  <div id="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>