
    <!-- old Html ----------------------------------------------------------------------------------- -->
    <section class=" bgheader ">
    <div class="blog-page-container pcont">
        <div class=" row text-light pb-5">
            <div class="col-xl-12 col-xxl-12 col-sm-12 ">
                <div class=" padhdr contpad">                 
                    <div class="header-icon-container">
                        <i class="bi bi-square-fill headeri fs-4 rounded-0 "></i>
                        <span>News & Articles</span>
                    </div>

                    <h1 class="headerh1 py-sm-0 "><?php echo wp_title('', true, 'right'); ?></h1>
                    <p class="fw-light headerp1 ">
                        <?php
                        $post_id = get_the_ID();
                        $publish_date = get_post_field('post_date', $post_id);
                        $timestamp = strtotime($publish_date);
                        $formatted_date = date('jS F, Y', $timestamp);
                        echo $formatted_date;
                        ?> | <?php
                         $post_id = get_the_ID(); // Get the current post ID
                         $author_id = get_post_field('post_author', $post_id); // Get the author ID
                         $author_name = get_the_author_meta('display_name', $author_id); // Get the author's display name
                         echo $author_name;
                         ?>
                    </p>
                    <p class="px-3 headerp2 ">
                        <?php
                        $summary = get_field('summary'); // Get the value of the 'summary' custom field
                        
                        if (!empty($summary)) {
                            echo $summary;
                        }
                        ?>
                    </p>
                </div>
                <div class="row">
                    <!-- <img src="<?php echo get_field("hero")[0] ?>" alt="" class=" himg pb-4" style="object-fit: cover;"> -->
                    <?php
                    $image = get_field('hero'); //acf field name
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>


        <section class=" pb-5 pt-0 contpad">
            <div class="row grid gx-5 borderbtxt pb-5">
                <div class="col-lg-8 col-sm-12 maintxt">
                    <?php
                    $post_id = get_the_ID(); // Get the current post ID
                    $content = get_post_field('post_content', $post_id); // Retrieve the raw content
                    $content = apply_filters('the_content', $content); // Apply the content filters to format it
                    echo $content; // Output the content
                    ?>
                </div>

                <div class="col-lg-4 col-sm-0 sidebar" style=" padding-left: 4rem;">
                    <div class="pb-4">
                        <div class="mb-4">
                            <h4 class="mb-3"> Subscribe To Our Newsletter</h4>
                            <p>Join our newsletter to stay up to date on what’s new in the EB-5 world</p>
                        </div>
                        <form class="mb-3">
                            <input type="email" placeholder="Enter your email..." class="forminput1 ">
                            <button class="formbtn1"> Subscribe </button>
                        </form>
                        <p style="color: #132554; font-size: small; letter-spacing: 1; ">By subscribing you agree to
                            with our <u> <a href="#">Privacy Policy</a> </u> and provide consent to receive updates from
                            our company.</p>

                        <div class="pt-5">
                            <div>
                                <h4 style="color: #132554;" class="pb-3">Directory of Professionals </h4>
                            </div>
                            <div>
                                <img src="image2.png" alt="" class="img-fluid mb-3"
                                    style="width: 350px; height: 150px; object-fit: cover;">
                            </div>
                            <div>
                                <p class=" fw-semibold">AIIA has curated a list of the top professionals from attorneys,
                                    investment specialists, to business plan writers to support all all EB-5
                                    stakeholders</p>
                            </div>
                            <div class="mb-5 pb-3">
                                <a class=" fw-bold icon-link icon-link-hover" href="#" style="text-decoration: none;">
                                    View Directory of Professionals <i class="bi bi-arrow-right "
                                        aria-hidden="true"></i> </a>
                            </div>
                        </div>
                        <div class="stickycl">
                            <h3>Related Posts</h3>
                            <ul class="list-unstyled ">
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="image3.png " alt="" class="d-flex" width="110px" height="89px"
                                                style="object-fit: cover;">
                                        </div>
                                        <div class="col-lg-8">
                                            <h6>Preparing a Project for EB-5: Developers, Business Owners & Governments
                                            </h6>
                                            <a class=" fw-bold icon-link icon-link-hover" href="#"> View Post <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="image5.png " alt="" class="d-flex" width="110px" height="89px"
                                                style="object-fit: cover;">
                                        </div>
                                        <div class="col-lg-8">
                                            <h6>Preparing a Project for EB-5: Developers, Business Owners & Governments
                                            </h6>
                                            <a class=" fw-bold icon-link icon-link-hover" href="#"> View Post <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="image4.png " alt="" class="d-flex" width="110px" height="89px"
                                                style="object-fit: cover;">
                                        </div>
                                        <div class="col-lg-8">
                                            <h6>Preparing a Project for EB-5: Developers, Business Owners & Governments
                                            </h6>
                                            <a class=" fw-bold icon-link icon-link-hover" href="#"> View Post <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="footertext row text-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
                $avatar = get_avatar($author_id); // Get the avatar image for the author
                
                if ($avatar) {
                    echo $avatar;
                } else {
                    echo "No avatar available for this author.";
                }
                ?>
                <h2 class="p-4" style="color: #132554;"><?php echo $author_name; ?></h2>
                <h5 class=" " style="color: #132554; ">
                    <?php
                    $author_bio = get_the_author_meta('description', $author_id); // Get the author's bio
                    if (
                        !empty($author_bio)
                    ) {
                        echo $author_bio;
                    }
                    ?>
                </h5>
            </div>
            <div class="col-md-3"></div>
        </section>
        </section>
<div class="news-letter-section-container">

    <div class="news-letter-section">
        <div class="news-letter-section-img"><img></div>
        <div class="news-letter-section-newsletter">
            <p class="newsletter-heading">Stay Up To Date With AIIA</p>
            <p class="newsletter-description">Join our newsletter to stay up to date on EB-5 updates.
            </p>
            <form class="news-letter-section-form">
                <input placeholder="Enter your email" />
                <button class="aiia-btn">
                    Subscribe
                </button>
            </form>

            <span class="newsletter-disclaimer">By subscribing you agree to with our Privacy Policy and
                provide
                consent
                to receive updates from our company.</span>
        </div>
    </div>
</div>
<br>

<!--comments-section-->
<div class="comments-section-container">
    <div class="comments-section">
        <input class="comments-txt" placeholder="What are your thoughts?">
    </div>
</div>
<!--Responses-->
<div class="responses-section-container">
    <div class="responses-section">
        <p class="responses-section-title">Responses (3)</p>
        <!--3853-->
        <div class="responses-section-1">
            <div class="section-1-2">
                <div class="section-1-2-img"><img src="1-2.svg"></div>
                <div class="section-1-2-txt">
                    <p class="section-1-2-txt-header">Ishaan Khanna</p>
                    <p class="section-1-2-txt-description">3 days ago</p>
                </div>
            </div>
            <p class="section-1-2-description">Lorem ipsum dolor sit amet consectetur. Diam diam ut posuere
                amet. Commodo ut ipsum enim auctor amet cras. Ullamcorper accumsan risus eget commodo quis non
                nulla nibh scelerisque. Sed in eget posuere proin sapien tristique morbi nunc. Donec aliquam
                faucibus massa lectus feugiat habitant. Ac tincidunt aliquam eget sit. Aenean eu et a ultrices.
                Nec sed donec id facilisis vitae pharetra.</p>
        </div>
        <!--3851-->
        <div class="responses-section-1">
            <div class="section-1-2">
                <div class="section-1-2-img"><img src="1-3.svg"></div>
                <div class="section-1-2-txt">
                    <p class="section-1-2-txt-header">Nivit Kochhar</p>
                    <p class="section-1-2-txt-description">about 18 hours ago</p>
                </div>
            </div>
            <p class="section-1-2-description">Lorem ipsum dolor sit amet consectetur. Diam diam ut posuere
                amet. Commodo ut ipsum enim auctor amet cras. Ullamcorper accumsan risus eget commodo quis non
                nulla nibh scelerisque. Sed in eget posuere proin sapien tristique morbi nunc. Donec aliquam
                faucibus massa lectus feugiat habitant. Ac tincidunt aliquam eget sit. Aenean eu et a ultrices.
                Nec sed donec id facilisis vitae pharetra.</p>
        </div>
        <!--3852-->
        <div class="responses-section-1">
            <div class="section-1-2">
                <div class="section-1-2-img"><img src="1-2.svg"></div>
                <div class="section-1-2-txt">
                    <p class="section-1-2-txt-header">Ishaan Khanna</p>
                    <p class="section-1-2-txt-description">3 days ago</p>
                </div>
            </div>
            <p class="section-1-2-description">Lorem ipsum dolor sit amet consectetur. Diam diam ut posuere
                amet. Commodo ut ipsum enim auctor amet cras. Ullamcorper accumsan risus eget commodo quis non
                nulla nibh scelerisque. Sed in eget posuere proin sapien tristique morbi nunc. Donec aliquam
                faucibus massa lectus feugiat habitant. Ac tincidunt aliquam eget sit. Aenean eu et a ultrices.
                Nec sed donec id facilisis vitae pharetra.</p>
        </div>
        <button class="aiia-btn-1">See All Comments</button>
    </div>
</div>
</div>
<script src="bootstrap/bootstrap.bundle.js"></script>