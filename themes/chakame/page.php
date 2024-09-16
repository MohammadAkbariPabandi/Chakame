<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aiia
 */
get_header();
?>
<p>page.php</p>
<section class=" bgheader ">
    <div class=" containerr pcont">
        <div class=" row text-light pb-5">
            <div class="col-xl-12 col-xxl-12 col-sm-12 ">
                <div class=" padhdr contpad">

                    <div class="header-icon-container">
                        <i class="bi bi-square-fill headeri fs-4 rounded-0 "></i>
                        <span>News & Articles</span>
                    </div>

                    <h2 class="headerh1 py-sm-0 "><?php echo wp_title('', true, 'right'); ?></h2>
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
        <br>
    </div>
</section>

<script src="bootstrap/bootstrap.bundle.js"></script>