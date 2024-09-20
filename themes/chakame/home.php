<?php
/* Template Name: Home Page */
    get_header();
?>

<section class=" homeheader">

</section>

<section class="sectionSlider__slid_card" id="home-flex-container-desctop">
    <div class="container-fluid collection">

        <div class="container flex-slide_cardDetail">
            <div>
                <p class="flex-slide_card_category">طبقه بندی طراحی داخلی</p>
                <div class="flex-slide_card_content">
                    <strong class = "flex-slide_card_content_title">میکروسمنت</strong>
                    <p class="body-small">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-container" >
        <?php
        // Include WordPress core files
        require_once ('wp-load.php');

        // Get all published posts
        $posts = get_posts(
            array(
                'post_type' => 'resource', // Change to 'page' if you want pages instead
                'post_status' => 'publish',
                'post_parent' => 0, // This ensures only parent posts are retrieved
                'numberposts' => -1, // Retrieve 2 posts
            )
        );

        if ($posts) {
            foreach ($posts as $recentPost) {
                $hero = get_field('hero', $recentPost->ID);
                
                  echo '<div class="flex-slide js-collections-drawer-flex-slide " style="z-index: 1;">';
                  if($recentPost->post_title) {
                    echo '<div class="flex-title js-collections-drawer-flex-title"><h4>' . esc_html($recentPost->post_title) .'</h4></div>';
                  }
                  if($hero) {
                    echo '<a class="text-decoration-none " href="'. get_permalink($recentPost).'">';
                       echo '<img src="' . $hero['url'] . '">';
                    echo '</a>';
                  }
                  echo '</div>';
            } 
        } 
        ?>

        <!-- <div class="flex-slide js-collections-drawer-flex-slide " style="z-index: 1;">
           <div class="flex-title js-collections-drawer-flex-title"><h4>میکروسمنت</h4></div>
             <img src = "<?php echo get_template_directory_uri().'/assets/images/1.jpg';?>">
        </div>
        <div class="flex-slide js-collections-drawer-flex-slide" style="z-index: 2;">
          <div class="flex-title js-collections-drawer-flex-title"><h4>تکسچر</h4></div>
          <img src = "<?php echo get_template_directory_uri().'/assets/images/2.jpg';?>">
        </div>
        <div class="flex-slide js-collections-drawer-flex-slide" style="z-index: 3;">
          <div class="flex-title js-collections-drawer-flex-title"><h4>ورق فلزات</h4></div>
          <img src = "<?php echo get_template_directory_uri().'/assets/images/5.jpg';?>">
        </div>
        <div class="flex-slide js-collections-drawer-flex-slide" style="z-index: 4;">
          <div class="flex-title js-collections-drawer-flex-title"><h4>پتینه</h4></div>
          <img src = "<?php echo get_template_directory_uri().'/assets/images/3.jpg';?>">
        </div>
        <div class="flex-slide js-collections-drawer-flex-slide" style="z-index: 5;">
          <div class="flex-title js-collections-drawer-flex-title"><h4>دکوراتیو</h4></div>
          <img src = "<?php echo get_template_directory_uri().'/assets/images/4.jpg';?>">
        </div>
        <div class="flex-slide js-collections-drawer-flex-slide" style="z-index: 6;">
          <div class="flex-title js-collections-drawer-flex-title"><h4>سایر</h4></div>
          <img src = "<?php echo get_template_directory_uri().'/assets/images/6.jpg';?>">

        </div>  -->
    </div>
</section>

<section class="container-fluid homeprojects">
      <div class="container homeprojects__title">
          <h4>پروژه ها</h4>
      </div>
      <div class="photo__gallery">

          <div class="column">
            <div class="photo">
              <div class="photo__content">
                <img src = "<?php echo get_template_directory_uri().'/assets/images/6.jpg';?>">
                <h5>سلام</h5>
              </div>
            </div>
            <div class="photo">
              <div class="photo__content">
                <img src = "<?php echo get_template_directory_uri().'/assets/images/g2.jpg';?>">
              </div>
            </div>
            <div class="photo">
              <div class="photo__content">
                <img src = "<?php echo get_template_directory_uri().'/assets/images/1.jpg';?>">
              </div>
            </div>
          </div>  
           
          <div class="column">
            <div class="photo">
              <div class="photo__content">
                <img src = "<?php echo get_template_directory_uri().'/assets/images/g1.jpg';?>">
              </div>
            </div>
            <div class="photo">
              <div class="photo__content">
                <img src = "<?php echo get_template_directory_uri().'/assets/images/6.jpg';?>">
              </div>
            </div>
            <div class="photo">
              <div class="photo__content">
                <img src = "<?php echo get_template_directory_uri().'/assets/images/g3.jpg';?>">
              </div>
            </div>
          </div>  

          <div class="column">
            <div class="photo">
              <div class="photo__content">
                <img src = "<?php echo get_template_directory_uri().'/assets/images/2.jpg';?>">
              </div>
            </div>
            <div class="photo">
              <div class="photo__content">
                <img src = "<?php echo get_template_directory_uri().'/assets/images/5.jpg';?>">
              </div>
            </div>
            <div class="photo">
              <div class="photo__content">
                <img src = "<?php echo get_template_directory_uri().'/assets/images/2.jpg';?>">
              </div>
            </div>
          </div>  

      </div>
</section>






<?php get_footer(); ?>