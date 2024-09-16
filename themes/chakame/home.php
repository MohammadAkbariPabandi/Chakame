<?php
/* Template Name: Home Page */
get_header();
?>

<section class="container homepageHeader">
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="homepageHeader__logo">
                <img class="w-100 h-100" src = "<?php echo get_template_directory_uri().'/assets/images/Mask-group.png';?>">
            </div>
        </div>
        <div class="col-md-6 col-12 homepageHeader__content">
            <h1>Empowering EB-5 Investors Globally To Grow & Thrive.</h1>
            <div class="pointer">
                <div></div>
                <p class="body-large">Informing, Educating, & Advocating</p>
             </div> 
            <p class="body-large homepageHeader__summary">Join a Community Committed to Supporting Investors Worldwide. Your Hub for Information, Education, and Advocacy. </p>
            <div class="homepageHeader__buttons">
                <button class="Button ZodiacButton">Learn More </button>
                <button class="Button LightZodiacButton">Donate Today </button>
            </div>
        </div>
    </div>
</section>

<section class="container homepageRecources">
        <div class="pointer">
            <div></div>
            <p class="body-large">For EB-5 Stakeholders</p>
        </div> 
    <div class="homepageRecources__title">
        <h2>Resources</h2>
        <a href="#" class="body-large"> See All Resources
            <span style="margin-left: 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                <path d="M12.0058 1.25923C12.0058 0.994012 11.9004 0.739658 11.7129 0.552122C11.5254 0.364585 11.271 0.259229 11.0058 0.259229L3.0058 0.209229C2.74058 0.209229 2.48623 0.314586 2.29869 0.502122C2.11116 0.689658 2.0058 0.944012 2.0058 1.20923C2.0058 1.47444 2.11116 1.7288 2.29869 1.91634C2.48623 2.10387 2.74058 2.20923 3.0058 2.20923H8.5658L0.295798 10.4992C0.20207 10.5922 0.127676 10.7028 0.0769072 10.8247C0.0261385 10.9465 0 11.0772 0 11.2092C0 11.3412 0.0261385 11.4719 0.0769072 11.5938C0.127676 11.7157 0.20207 11.8263 0.295798 11.9192C0.388761 12.013 0.499362 12.0874 0.621222 12.1381C0.743081 12.1889 0.873786 12.215 1.0058 12.215C1.13781 12.215 1.26852 12.1889 1.39038 12.1381C1.51223 12.0874 1.62284 12.013 1.7158 11.9192L10.0058 3.62923V9.20923C10.0058 9.47445 10.1112 9.7288 10.2987 9.91634C10.4862 10.1039 10.7406 10.2092 11.0058 10.2092C11.271 10.2092 11.5254 10.1039 11.7129 9.91634C11.9004 9.7288 12.0058 9.47445 12.0058 9.20923V1.25923Z" fill="#B73750"/>
                </svg>
            </span> 
        </a>
    </div>
    
    <div class="homepageRecources__tags">
        <button class="PillButton MerlotPillButton">All Resources</button>
        <button class="PillButton MerlotLightPillButton">For EB-5 Investors</button>
        <button class="PillButton MerlotLightPillButton">For Developers, Business Owners, and Governments</button>
        <button class="PillButton MerlotLightPillButton">For Developers</button>
        <button class="PillButton MerlotLightPillButton">For Governments</button>
    </div>
    <div class="homepageRecources__cards">
        <div class="row d-flex justify-content-between">
            <?php
            // Include WordPress core files
            require_once ('wp-load.php');

            // Get all published posts
            $posts = get_posts(
                array(
                    'post_type' => 'resource', 
                    'post_status' => 'publish',
                    'numberposts' => 8, 
                )
            );

            if ($posts) {
                foreach ($posts as $recentPost) {
                    $hero = get_field('hero', $recentPost->ID);
                    echo '<div class="card border-0 col-md-3 col-12 px-2 rounded-0 smallVerticalCards__card" style="width: 295px;">';
                    echo '<div style="height : 211px;" >';
                    if($hero) {
                        echo '<img class="w-100" src="' . $hero['url'] . '">';
                    }
                    echo '</div>';
                    echo '<div class="card-body pt-4 pb-3">';
                    if($recentPost->post_title) {
                        echo '<h5 class="smallVerticalCards__card_title">' . esc_html($recentPost->post_title) .'</h5>';
                    }
                    echo '<a class="text-decoration-none " href="'. get_permalink($recentPost).'" style="color:#1651A5">Learn More
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                fill="#1651A5" style="margin-left:8px; margin-bottom: 5px;">
                                <path
                                    d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                    fill="#1651A5" />
                            </svg>
                        </span>
                    </a>';
                    echo '</div>';
                    echo '</div>';
                }
            
            } 
            ?>
        </div>
    </div>
</section>
<section class="container my-5 find">
    <h3 class="text-white text-center">Can’t Find The Right Resource?</h3>
    <p class="text-white text-center body-large">Use this tool before to find the most applicable EB-5 resource for your needs.</p>
    <div class="find__form">
        <form class="row">
            <div  class="col-md-5 find__form-item">
                <select id="disabledSelect" class="w-100 h-100 px-3">
                    <option>I am...t</option>
                </select>
            </div>
            <div  class="col-md-5 find__form-item">
                <select id="disabledSelect" class="w-100 h-100 px-3">
                    <option>Looking for...</option>
                </select>
            </div>
            <button type="submit" class="col-md-2 Button ZodiacButton ">Go
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92624 1.71C3.48256 1.71 1.50156 3.69099 1.50156 6.13467C1.50156 8.57835 3.48256 10.5593 5.92624 10.5593C8.36992 10.5593 10.3509 8.57835 10.3509 6.13467C10.3509 3.69099 8.36992 1.71 5.92624 1.71ZM0.101562 6.13467C0.101562 2.91779 2.70936 0.309998 5.92624 0.309998C9.14312 0.309998 11.7509 2.91779 11.7509 6.13467C11.7509 9.35155 9.14312 11.9593 5.92624 11.9593C2.70936 11.9593 0.101562 9.35155 0.101562 6.13467Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.73774 9.52918C10.0033 9.26363 10.4339 9.26363 10.6994 9.52918L13.6994 12.5292C13.965 12.7947 13.965 13.2253 13.6994 13.4908C13.4339 13.7564 13.0033 13.7564 12.7377 13.4908L9.73774 10.4908C9.47219 10.2253 9.47219 9.79474 9.73774 9.52918Z" fill="white"/>
                </svg>
            </button>
        </form>
    </div>
</section>

<section class="container homepageCivil">
    <div class="pointer">
            <div></div>
            <p class="body-large">Featured Issue</p>
        </div> 
    <div class="homepageCivil__title">
        <h2>Civil Liberties</h2>
        <a href="#" class="body-large"> See Civil Liberties
            <span style="margin-left: 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                <path d="M12.0058 1.25923C12.0058 0.994012 11.9004 0.739658 11.7129 0.552122C11.5254 0.364585 11.271 0.259229 11.0058 0.259229L3.0058 0.209229C2.74058 0.209229 2.48623 0.314586 2.29869 0.502122C2.11116 0.689658 2.0058 0.944012 2.0058 1.20923C2.0058 1.47444 2.11116 1.7288 2.29869 1.91634C2.48623 2.10387 2.74058 2.20923 3.0058 2.20923H8.5658L0.295798 10.4992C0.20207 10.5922 0.127676 10.7028 0.0769072 10.8247C0.0261385 10.9465 0 11.0772 0 11.2092C0 11.3412 0.0261385 11.4719 0.0769072 11.5938C0.127676 11.7157 0.20207 11.8263 0.295798 11.9192C0.388761 12.013 0.499362 12.0874 0.621222 12.1381C0.743081 12.1889 0.873786 12.215 1.0058 12.215C1.13781 12.215 1.26852 12.1889 1.39038 12.1381C1.51223 12.0874 1.62284 12.013 1.7158 11.9192L10.0058 3.62923V9.20923C10.0058 9.47445 10.1112 9.7288 10.2987 9.91634C10.4862 10.1039 10.7406 10.2092 11.0058 10.2092C11.271 10.2092 11.5254 10.1039 11.7129 9.91634C11.9004 9.7288 12.0058 9.47445 12.0058 9.20923V1.25923Z" fill="#B73750"/>
                </svg>
            </span> 
        </a>
    </div>
    <div class="homepageCivil__box">
        <div class="col-md-6 col-12 homepageCivil__box___img">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/homepageCivil.png'; ?>">
        </div>
        <div class="col-md-6 col-12 homepageCivil__box___card">
            <h6>Paragraph about civil liberties. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.</h6>
            <h5>Latest News & Resources</h5>
            <div class="homeCivilSlider">
                 <?php
                    require_once ('wp-load.php');
                    $posts = get_posts(
                        array(
                            'post_type' => 'issue', 
                            'post_status' => 'publish',
                            'numberposts' => -1, 
                        )
                        
                    );
                    if ($posts) {
                        foreach ($posts as $recentPost) {
                            $hero = get_field('hero', $recentPost->ID);
                            $summary = get_field('summary', $recentPost->ID);
                            echo '<div class="homeCivilSlider__card">';
                            echo '<div class="homeCivilSlider__card_image">';
                            if($hero){
                                echo '<img src="' . $hero['url'] . '">';
                            }
                            echo '</div>';
                            if($recentPost->post_title){
                                echo '<h5 class="text-dark my-3">' . esc_html($recentPost->post_title) .'</h5>';
                            }
                            if($summary){
                                echo '<p class="body-base">'.$summary.'</p>';
                            }
                            echo '</div>';
                        }
                       
                    } else {
                        echo 'No posts found.';
                    }
                ?>   
            </div>
        </div>
    </div>

</section>

<section class="homepagePressing">
    <div class="container homepagePressing__title">
        <h2>Pressing Issues & Resources</h2>
        <h6>Select any of the issues before to access resources, news articles, and blog posts about that issue.</h6>
    </div>
    <div class="container-fluid">
        <div class="HomePressing__Buttons">
        <?php
            require_once ('wp-load.php');
            $posts = get_posts(
                array(
                    'post_type' => array('issue' , 'blog' , 'resource' ), 
                    'post_status' => 'publish',
                    'numberposts' => 40, 
                    'orderby' => 'rand',
                    'order'   => 'ASC',
                )
                
            );
            if ($posts) {
                $index = 0;
                foreach ($posts as $recentPost) {
                    if($recentPost->post_title){
                        if ($index ==1 || $index == 6 || $index == 11 || $index == 16 || $index == 21 || $index == 26 || $index == 31 || $index == 36 || $index == 41 || $index == 46  || $index == 51 || $index == 56 || $index == 61  ) {
                            echo '<button  class=" PillButton ToryPillButton" onclick="window.location.href='. get_permalink($recentPost).'" >' . esc_html($recentPost->post_title) .'</button>';
                        }
                        else if ($index ==2 || $index == 7 || $index == 12 || $index == 17 || $index == 22 || $index == 27 || $index == 32 || $index == 37 || $index == 42 || $index == 47 || $index == 52 || $index == 57 || $index == 62 ) {
                            echo '<button  class=" PillButton PastelBluePillButton" onclick="window.location.href='. get_permalink($recentPost).'">' . esc_html($recentPost->post_title) .'</button>';
                        }
                        else if ($index ==3 || $index == 8 || $index == 13 || $index == 18 || $index == 23 || $index == 28 || $index == 33 || $index == 38 || $index == 43 || $index == 48 || $index == 43 || $index == 58 || $index == 63  ) {
                            echo '<button  class=" PillButton MaroonPillButton" onclick="window.location.href='. get_permalink($recentPost).'">' . esc_html($recentPost->post_title) .'</button>';
                        }
                        else if ($index ==4 || $index == 9 || $index == 14 || $index == 19 || $index == 24 || $index == 29 || $index == 34 || $index == 39 || $index == 44 || $index == 49 || $index == 54 || $index == 59 || $index == 64  ) {
                            echo '<button  class=" PillButton MerlotPillButton" onclick="window.location.href='. get_permalink($recentPost).'">' . esc_html($recentPost->post_title) .'</button>';
                        }
                        else if ($index ==5 || $index == 10 || $index == 15 || $index == 20 || $index == 25 || $index == 30 || $index == 35 || $index == 40 || $index == 45 || $index == 50 || $index == 55 || $index == 60 || $index == 65  ) {
                            echo '<button  class=" PillButton ZodiacPillButton" onclick="window.location.href='. get_permalink($recentPost).'">' . esc_html($recentPost->post_title) .'</button>';
                        }
                    }
                    $index++;
                }
            }
        ?>
        </div>
    </div>
</section>

<section class="container-fluid peopelComents">
         <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-md-4 col-12 peopelComents_content">
                    <div class="peopelComents__Leftside">
                        <h2>What People Are Saying About AIIA</h2>
                        <p class="body-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla metus id augue rhoncus dapibus.</p>
                        <div class="peopelComents__Slider">
                            <img src = "<?php echo get_template_directory_uri().'/assets/icons/Comment_Logo.png';?>">  
                            <div class="center">
                                <div class="carousel-wrapper">
                                    <!-- abstract radio buttons for slides -->
                                    <input id="slide1" type="radio" name="controls" checked="checked" />
                                    <input id="slide2" type="radio" name="controls" />
                                    <input id="slide3" type="radio" name="controls" />
                                    <input id="slide4" type="radio" name="controls" />
                                    <!-- <input id="slide5" type="radio" name="controls" /> -->

                                    <!-- navigation dots -->
                                    <label for="slide1" class="nav-dot"><img src = "<?php echo get_template_directory_uri().'/assets/images/aboutus_comment_Slider01.jpg';?>"></label>
                                    <label for="slide2" class="nav-dot"><img src = "<?php echo get_template_directory_uri().'/assets/images/aboutus_comment_Slider02.jpg';?>"></label>
                                    <label for="slide3" class="nav-dot"><img src = "<?php echo get_template_directory_uri().'/assets/images/aboutus_comment_Slider03.jpg';?>"></label>
                                    <label for="slide4" class="nav-dot"><img src = "<?php echo get_template_directory_uri().'/assets/images/aboutus_comment_Slider04.jpg';?>"></label>
                                    <!-- <label for="slide5" class="nav-dot"><img src = "<?php echo get_template_directory_uri().'/assets/images/Ellipse 2.png';?>"></label> -->

                                    <!-- arrows -->
                                    <label for="slide1" class="left-arrow"> <span><</span> </label>
                                    <label for="slide2" class="left-arrow"> <span><</span> </label>
                                    <label for="slide3" class="left-arrow"> <span><</span> </label>
                                    <label for="slide4" class="left-arrow"> <span><</span> </label>
                                    <label for="slide5" class="left-arrow"> <span><</span> </label>

                                    <label for="slide1" class="right-arrow"> <span>></span> </label>
                                    <label for="slide2" class="right-arrow"> <span>></span> </label>
                                    <label for="slide3" class="right-arrow"> <span>></span> </label>
                                    <label for="slide4" class="right-arrow"> <span>></span> </label>
                                    <label for="slide5" class="right-arrow"> <span>></span> </label>

                                    <div class="carousel">
                                    <ul>
                                        <li>
                                            <p>1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla metus id augue rhoncus dapibus. Maecenas id neque pulvinar, ornare odio nec, ultricies</p>
                                            <h5>- Aria Zinanrio</h5>
                                        </li>
                                        <li>
                                            <p>2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla metus id augue rhoncus dapibus. Maecenas id neque pulvinar, ornare odio nec, ultricies</p>
                                            <h5>- Aria Zinanrio</h5>
                                        </li>
                                        <li>
                                            <p>3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla metus id augue rhoncus dapibus. Maecenas id neque pulvinar, ornare odio nec, ultricies</p>
                                            <h5>- Aria Zinanrio</h5>
                                        </li>
                                        <li>
                                            <p>4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla metus id augue rhoncus dapibus. Maecenas id neque pulvinar, ornare odio nec, ultricies</p>
                                            <h5>- Aria Zinanrio</h5>
                                        </li>
                                        <li>
                                            <p>5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla metus id augue rhoncus dapibus. Maecenas id neque pulvinar, ornare odio nec, ultricies</p>
                                            <h5>- Aria Zinanrio</h5>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
                <div class="col-md-6 col-12 peopelComents__Rightside">
                    <div class="peopelComents__Rightside_Card">
                        <div class="peopelComents__Rightside_Card_Title">
                            <img src = "<?php echo get_template_directory_uri().'/assets/icons/Logo.png';?>"> 
                            <p>Join our newsletter to stay up to date on what’s new in the EB-5 world</p>
                        </div>

                        <form role="subscribe">
                            <div>
                                <div class="mb-4">
                                    <label class="mb-3" for="">Email</label>
                                    <input class="form-control mb-3 p-3 border rounded-0 h-100" type="subscribe" placeholder="Enter your email here..." aria-label="subscribe">
                                </div> 
                                <div class="form-check mb-3 peopelComents__Rightside_Card_chackBox">
                                    <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label " for="flexCheckDefault">
                                        By subscribing you agree to with our <span class="text-decoration-underline" >Privacy Policy</span> and provide consent to receive updates from our company.
                                    </label>
                                </div> 
                                <div>
                                    <button class="mt-3 w-100 Button MaroonButton" type="submit">Subscribe To Our Mailing List</button>       
                                </div>      
                            </div> 
                        </form>  
                    </div> 
                </div>
            </div>
         </div>                   
        

</section>


<section class="container homepageNewsroom">
    <div class="homepageNewsroom__subject">
        <p style="margin-right: 12px;"></p>
        <span>Newsroom</span>
    </div>
    <div class="homepageNewsroom__title">
        <h2>Latest Articles & Blog Post</h2>
        <a href="#"> Visit The Newsroom
            <span style="margin-left: 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                <path d="M12.0058 1.78975C12.0058 1.52453 11.9004 1.27018 11.7129 1.08264C11.5254 0.895103 11.271 0.789746 11.0058 0.789746L3.0058 0.739746C2.74058 0.739746 2.48623 0.845103 2.29869 1.03264C2.11116 1.22018 2.0058 1.47453 2.0058 1.73975C2.0058 2.00496 2.11116 2.25932 2.29869 2.44685C2.48623 2.63439 2.74058 2.73975 3.0058 2.73975H8.5658L0.295798 11.0297C0.20207 11.1227 0.127676 11.2333 0.0769072 11.3552C0.0261385 11.477 0 11.6077 0 11.7397C0 11.8718 0.0261385 12.0025 0.0769072 12.1243C0.127676 12.2462 0.20207 12.3568 0.295798 12.4497C0.388761 12.5435 0.499362 12.6179 0.621222 12.6686C0.743081 12.7194 0.873786 12.7455 1.0058 12.7455C1.13781 12.7455 1.26852 12.7194 1.39038 12.6686C1.51223 12.6179 1.62284 12.5435 1.7158 12.4497L10.0058 4.15975V9.73975C10.0058 10.005 10.1112 10.2593 10.2987 10.4469C10.4862 10.6344 10.7406 10.7397 11.0058 10.7397C11.271 10.7397 11.5254 10.6344 11.7129 10.4469C11.9004 10.2593 12.0058 10.005 12.0058 9.73975V1.78975Z" fill="#1651A5"/>
                </svg>
            </span> 
        </a>
    </div>
    <div class="row mb-5">
        <?php
        // Include WordPress core files
        require_once ('wp-load.php');

        // Get all published posts
        $posts = get_posts(
            array(
                'post_type' => 'blog', // Change to 'page' if you want pages instead
                'post_status' => 'publish',
                'numberposts' => 1, // Retrieve 3 posts
            )
        );
        
        if ($posts) {
            foreach ($posts as $recentPost) {
                $hero = get_field('hero', $recentPost->ID);
                $summary = get_field('summary', $recentPost->ID);
                echo '<div class="col-md-6 col-12 largeHorizontalcard__img">';
                if($hero){
                    echo '<img src="' . $hero['url'] . '">';
                }
                echo '</div>';
                echo '<div class="col-md-6 col-12 largeHorizontalcard__content">';
                if($recentPost->post_title){
                    echo '<h3>' . esc_html($recentPost->post_title) .'</h3>';
                }
                if($summary){
                    echo '<p class="body-large">'.$summary.'</p>';
                }
                echo '<a class="text-decoration-none " href="'. get_permalink($recentPost).'" style="color:#1651A5">Learn More
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                            fill="#1651A5" style="margin-left:8px; margin-bottom: 5px;">
                            <path
                                d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                fill="#1651A5" />
                        </svg>
                    </span>
                </a>';
                echo '</div>';
            }
           
        } else {
            echo 'No posts found.';
        }
        ?>

    </div>

    <!-- in default position this show when click on js-BlogsLoadMore_btn get hide -->
    <div class="row">  
        <?php
        // Include WordPress core files
        require_once ('wp-load.php');

        // Get all published posts
        $posts = get_posts(
            array(
                'post_type' => 'blog', // Change to 'page' if you want pages instead
                'post_status' => 'publish',
                'numberposts' => 5, // Retrieve 3 posts
            )
        );

        if ($posts) {
            unset($posts[0]);
            foreach ($posts as $recentPost) {
                $hero = get_field('hero', $recentPost->ID);
                $summary = get_field('summary', $recentPost->ID);
                echo '<div class="col-md-6 mb-5">';
                echo '<div class="row">';
                echo '<div class="col-md-6 mediumHorizontalcard__img">';
                if($hero){
                    echo '<img class="w-100 h-100" src="' . $hero['url'] . '">';
                }
                echo '</div>';
                echo '<div class="col-md-6 mediumHorizontalcard__content">';
                if($recentPost->post_title){
                    echo '<p class="body-large">' . esc_html($recentPost->post_title) .'</p>';
                }
                if($summary){
                    echo '<p class="body-base">'.$summary.'</p>';
                }
                echo '<a class="text-decoration-none " href="'. get_permalink($recentPost).'" style="color:#1651A5">Learn More
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                    fill="#1651A5" style="margin-left:8px; margin-bottom: 5px;">
                                    <path
                                        d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                        fill="#1651A5" />
                                </svg>
                            </span>
                    </a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        
        } else {
            echo 'No posts found.';
        }
        ?>
    </div>
</section>


<section class="homepageVideo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-12 homepageVideo__background_left">

            </div>
            <div class="col-md-7 col-12 homepageVideo__background_right">

            </div>
        </div>
    </div>
    <div class="container homepageVideo__detail">
        <div class="col-md-6 homepageVideo__video">
             <img src="<?php echo get_template_directory_uri() . '/assets/images/Video.png'; ?>">
        </div>
        <div class="col-md-6 homepageVideo__text">
            <div class="homepageVideo__subject">
                <p></p>
                <span class="body-large">Featured Video</span>
            </div>
            <div class="homepageVideo__title">
                <h1>Solving the Visa Backlog Problem</h1>
                <h6>The visa backlog is a problem which has caused thousands of prospective immigrants extreme duress and an inability to properly plan for their future.</h6>
                <button class="Button ZodiacButton" type="submit">Get In Touch</button> 
            </div>
        </div>
    </div>
</section>

<section class="container homepageMember">
    <div class="homepageMember__subject">
        <p></p>
        <span class="body-large">Join AIIA Today</span>
    </div>
    <div class="homepageMember__title">
        <h2>Become A Member</h2>
        <a class="body-large" href="#"> Become A Member <i class="bi bi-arrow-right"></i> </a>
    </div>
    <div class="col-12 homepageMember__">
        <div class="homepageMember__background">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/Rectangle13.png'; ?>">
        </div>
        <div class="homepageMember__box">
            <div class="homepageMember__box_white1">
                <h5>Reason #1</h5>
                <h6>Support us with a donation to keep us running</h6>
            </div>
            <div class="homepageMember__box_white2">
                <h5>Reason #1</h5>
                <h6>Support us with a donation to keep us running</h6>
            </div>
            <div class="homepageMember__box_white3">
                <h5>Reason #1</h5>
                <h6>Support us with a donation to keep us running</h6>
            </div>
            <div class="homepageMember__box_blue">
                <h6>Become A Member Today <i class="bi bi-arrow-right"></i> </h6>
            </div>
        </div>
    </div>
</section>

    <section class="container homepageOther">
        <h2>Other Ways To Get Involved</h2>                       
        <div class="row mx-0 homepageOther__cards">  
            <div class="col-md-6 col-12 homepageOther__card1">
                <div class="homepageOther__card_Image"></div>
                <div class="homepageOtherCardGradient"></div>  
                <div class="homepageOther__card_content">
                    <h4 class="mb-3 text-white">Donate & Support Us</h4>
                    <p class="mb-4 text-white body-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla metus id augue rhoncus dapibus. Maecenas id neque pulvinar, ornare odio nec, ultricies quam. Vivamus ultricies diam massa, ut bibendum eros venenatis ullamcorper. Praesent bibendum tempus odio ac bibendum.</p>
                    <a class="text-white text-decoration-none "  href="#" style="color:#1651A5"> Donate Today
                        <span >
                            <svg class="mb-0" xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="#FFF" style="margin-left:8px; margin-bottom: 5px;">
                            <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z" fill="#FFF"/>
                            </svg> 
                        </span> 
                    </a>
                </div>      
            </div>
            <div class="col-md-6 col-12 homepageOther__card2">
                <div class="homepageOther__card_Image"></div>
                <div class="homepageOther__CardGradient"></div>  
                <div class="homepageOther__card_content">
                    <h4 class="mb-3 text-white">Volunteer & Get Hands on</h4>
                    <p class="mb-4 text-white body-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla metus id augue rhoncus dapibus. Maecenas id neque pulvinar, ornare odio nec, ultricies quam. Vivamus ultricies diam massa, ut bibendum eros venenatis ullamcorper. Praesent bibendum tempus odio ac bibendum.</p>
                    <a class="text-white text-decoration-none "  href="#" style="color:#1651A5"> Volunteer With Us
                        <span >
                            <svg class="mb-0" xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="#FFF" style="margin-left:8px; margin-bottom: 5px;">
                            <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z" fill="#FFF"/>
                            </svg> 
                        </span> 
                    </a>
                </div>      
            </div>                  
        </div>               
    </section>
    
    <!-- <section class="container-fluid getInTouch">
        <div class="row h-100 justify-content-between">
            <div class="col-md-5 getInTouch__image">            
            </div>
            <div class="col-md-5 col-12 m-auto getInTouch__content">
                <h2 class="text-white">Get In Touch With Us</h2>
                <p class="body-base text-white my-4">If you have any questions, inquiries, or collaboration proposals,
                    please don’t hesitate to reach out to us.</p>
                <div>
                    <form class="d-flex my-4" role="subscribe">
                        <button class="Button WhiteButton" type="submit">Get In Touch</button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->






<script>
    $('.homeCivilSlider').slick({
    speed: 300,
    slidesToShow: 1.5,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 2000,
    });

    $(document).ready(function() {
        $('.PillButton').each(function() {
            var text = $(this).text();
            if (text.length > 15) { // Adjust the number of characters as needed
                $(this).text(text.substring(0, 15) + ' ...');
            }
        });
    });

</script>








<?php get_footer(); ?>