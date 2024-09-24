<?php
/* Template Name: Home Page */
    get_header();
?>

<section class=" homeheader">
<img src = "<?php echo get_template_directory_uri().'/assets/images/h.png';?>">
</section>

<section class="sectionSlider__slid_card" id="home-flex-container-desctop">
    <div class="container-fluid collection">

        <div class="container flex-slide_cardDetail">
            <div>
                <p class="flex-slide_card_category">طبقه بندی طراحی داخلی</p>
                <div class="flex-slide_card_content">
                    <strong class = "flex-slide_card_content_title">پتینه</strong>
                    <p class="body-small js-flex-slide_card_content_body"> .. </p>
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
                       $summary = get_field('resourcesummary' , $recentPost->ID); // Get the value of the 'summary' custom field               
                       if (!empty($summary)) {
                           echo '<p class="js_summary_body">'.$summary.'</p>';
                       }
                    echo '</a>';
                  }

                  echo '</div>';
            } 
        } 
        ?>

    </div>
</section>


<section class="sectionSlider__slid_card" id="home-flex-container-mobile">

    <div class="flex-container-mobile" >
      
    <?php
      if ($posts) {
        $index = 9;
        foreach ($posts as $recentPost) {
            $hero = get_field('hero', $recentPost->ID);
              $index--;
              echo '<div class="flex-slide-mobile js-collections-drawer-flex-slide-mobile" style="z-index:'.$index.';">';
              echo '<div class="flex-title-mobile ">';
              echo '<div class="flex-title-mobile-subject">';
              if($recentPost->post_title) {
                echo '<h4>' . esc_html($recentPost->post_title) .'</h4>';
              }
              echo '</div>';
              echo '<div class="flex-title-mobile-description" >';
              $summary = get_field('resourcesummary' , $recentPost->ID); // Get the value of the 'summary' custom field               
              if (!empty($summary)) {
                  echo '<p>'.$summary.'</p>';
              }
              echo '</div>';
              echo '</div>';
              if($hero) {
                echo '<a class="text-decoration-none " href="'. get_permalink($recentPost).'">';
                  echo '<div class="flex-title-mobile-image">';
                  echo '<img src="' . $hero['url'] . '">';
                  echo '</div>';
                echo '</a>';
              }

              echo '</div>';
        } 
      } 
    ?>
      
       <!-- <div class="flex-slide-mobile js-collections-drawer-flex-slide-mobile" style="z-index: 9;"> -->
            <!-- <div class="flex-title-mobile "> -->
              <!-- <div class="flex-title-mobile-subject"> -->
                 <!-- <h4>Ark</h4> -->
              <!-- </div> -->
              <!-- <div class="flex-title-mobile-description" >
                <p>A Tribute To The Twin Towers And — The Architecture Of Our Home City</p>
              </div> -->
            <!-- </div>   -->
            <!-- <div class="flex-title-mobile-image"> -->
              <!-- <img src="{{ 'keepintouch04.jpg' | asset_url }}" alt="">
            </div> -->
        <!-- </div> -->

        <!--  <div class="flex-slide-mobile js-collections-drawer-flex-slide-mobile" style="z-index: 8;">
            <div class="flex-title-mobile">
              <div class="flex-title-mobile-subject">
                 <h4>Manhattan</h4>
              </div>
             <div class="flex-title-mobile-description" >
                <p >A Tribute To The Twin Towers And — The Architecture Of Our Home City</p>
              </div>
            </div>          
            <div class="flex-title-mobile-image">
              <img src="{{ '2.webp' | asset_url }}" alt="">
            </div>
        </div>
      
        <div class="flex-slide-mobile js-collections-drawer-flex-slide-mobile" style="z-index: 7;">
            <div class="flex-title-mobile ">
              <div class="flex-title-mobile-subject">
                 <h4>Mélange</h4>
              </div>
              <div class="flex-title-mobile-description" >
                <p >A Tribute To The Twin Towers And — The Architecture Of Our Home City</p>
              </div>
            </div>          
            <div class="flex-title-mobile-image">
              <img src="{{ 'collection01.png' | asset_url }}" alt="">
            </div>
        </div>
      
        <div class="flex-slide-mobile js-collections-drawer-flex-slide-mobile" style="z-index: 6;">
            <div class="flex-title-mobile ">
              <div class="flex-title-mobile-subject">
                 <h4>Gossip</h4>
              </div>
              <div class="flex-title-mobile-description" >
                <p >A Tribute To The Twin Towers And — The Architecture Of Our Home City</p>
              </div>
            </div>          
            <div class="flex-title-mobile-image">
              <img src="{{ '8.webp' | asset_url }}" alt="">
            </div>
        </div>
      
        <div class="flex-slide-mobile js-collections-drawer-flex-slide-mobile" style="z-index: 5;">
            <div class="flex-title-mobile ">
              <div class="flex-title-mobile-subject" >
                 <h4>Rock N Roll</h4>
              </div>
              <div class="flex-title-mobile-description" >
                <p >A Tribute To The Twin Towers And — The Architecture Of Our Home City</p>
              </div>
            </div>          
            <div class="flex-title-mobile-image">
              <img src="{{ '1.webp' | asset_url }}" alt="">
            </div>
        </div>
      
        <div class="flex-slide-mobile js-collections-drawer-flex-slide-mobile" style="z-index: 4;">
            <div class="flex-title-mobile ">
              <div class="flex-title-mobile-subject">
                 <h4>Rainforest</h4>
              </div>
              <div class="flex-title-mobile-description" >
                <p >A Tribute To The Twin Towers And — The Architecture Of Our Home City</p>
              </div>
            </div>          
            <div class="flex-title-mobile-image">
              <img src="{{ '5.webp' | asset_url }}" alt="">
            </div>
        </div> -->
      
        <!-- <div class="flex-slide-mobile js-collections-drawer-flex-slide-mobile" style="z-index: 3;">
            <div class="flex-title-mobile ">
              <div class="flex-title-mobile-subject">
                 <h4>Mischief</h4>
              </div>
              <div class="flex-title-mobile-description" >
                <p >A Tribute To The Twin Towers And — The Architecture Of Our Home City</p>
              </div>
            </div>          
            <div class="flex-title-mobile-image">
              <img src="{{ 'face.png' | asset_url }}" alt="">
            </div>
        </div> -->
      
    </div>
  
</section>







<section class="container-fluid homeprojects">
      <div class="container homeprojects__title">
          <h4>پروژه ها</h4>
      </div>
      <div class="container">
        <div class="row">
            <?php
            // Include WordPress core files
            require_once ('wp-load.php');

            // Get all published posts
            $Projects = get_posts(
                array(
                    'post_type' => 'resource', // Change to 'page' if you want pages instead
                    'post_status' => 'publish',
                    'numberposts' => -1, // Retrieve 2 posts
                )
            );

            if ($Projects) {
                foreach ($Projects as $recentPost) {
                     $hero = get_field('hero', $recentPost->ID);
                      echo '<div class="card col-md-4 ">';
                      echo '<div class="homeproject__card">';
                      if($hero) {
                          echo '<img src="' . $hero['url'] . '">';
                      }
                      echo '<div class="card-body">';
                      if($recentPost->post_title) {
                        echo '<h5 class="card-title">'. esc_html($recentPost->post_title) .'</h5>';
                      }
                    
                      $Projectsummary = get_field('summary' , $recentPost->ID); // Get the value of the 'summary' custom field               
                      if (!empty($Projectsummary)) {
                          echo '<p class="card-text">'.$Projectsummary.'</p>';
                      }

                      echo '<a href="'. get_permalink($recentPost).'" class="btn btn-primary">اطلاعات بیشتر</a>';
                      echo '</div>';
                      echo '</div>';
                      echo '</div>';
                } 
            } 
            ?>
            <!-- <div class="card col-md-4 ">
              <div class="homeproject__card"> -->
                <!-- <img src = "<?php echo get_template_directory_uri().'/assets/images/h.png';?>"> -->
                <!-- <div class="card-body"> -->
<!--                   
                  <p class="card-text">.فندک کو، فندک نیست، دستت بود، دستت نیست . چطوری گل و روشن کری؟ مغزم رید</p>
                  <a href="#" class="btn btn-primary">اطلاعات بیشتر</a>
                </div>
              </div>
            </div> -->
           
        </div>
        
      </div>









      <!-- <div class="photo__gallery">

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

      </div> -->
</section>


<script>
  $(".js-collections-drawer-flex-slide").each(function(){
        $(this).hover(function(){ 
            $('.flex-slide_card_content strong').text($(this).find('.flex-title h4').text());
            $('.js-flex-slide_card_content_body').text($(this).find('.js_summary_body').text());
        }, function(){
          
        })
  });

</script>



<?php get_footer(); ?>