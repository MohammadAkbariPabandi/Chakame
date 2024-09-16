<?php
/*
Template Name: About Us
*/

get_header();
?>


    <section class=" container-fluid" style="padding-inline: 30px;">

        <div class="container aboutusHeader"> 
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="d-flex aboutusHeader__subject"> 
                        <p></p>  
                        <span>About Us</span>
                    </div> 
                    <h1 class="aboutusHeader__titel"><?php echo wp_title('', true, 'right'); ?></h1> 
                    <p class="body-large baboutusHeader__content"> 
                    <?php
                        $summary = get_field('summary'); // Get the value of the 'summary' custom field               
                        if (!empty($summary)) {
                         echo $summary;
                       }
                    ?>
                    </p>                
                </div>
            </div>

        </div>

    </section>

    <section class="container-fluid">
            <div class="row aboutusCategory">
                <div class="col-md-9 cole-12 aboutusCategory__Image">
                    <img src = "<?php echo get_template_directory_uri().'/assets/images/AboutUsCategory.jpg';?>">
                </div>
                <div id="aboutusCategory__Ditailes" class=" cole-12 container">
                        <div class="aboutusCategory__Ditailes_Card">
                                <div class="aboutusCategory_card">
                                <div class="mb-md-5 mb-3 aboutusCategory__Ditailes_Card_content">
                                    <h3>Advocating</h3>
                                    <p class="body-base">We empower immigrant investors, driving positive change in EB-5 policy and protecting their interests throughout the immigration process.</p>
                                </div>
                                <div class="mb-md-5 mb-3 aboutusCategory__Ditailes_Card_content">
                                    <h3>Educating</h3>
                                    <p class="body-base">AIIA provides tailored education, equipping investors to make informed decisions and navigate the EB-5 journey</p>
                                </div>
                                <div class="aboutusCategory__Ditailes_Card_content">
                                    <h3>Informing</h3>
                                    <p class="body-base">AIIA is a trusted source, keeping investors informed on industry updates, USCIS policies, and legislative developments</p>
                                </div>
                        </div>
                    
                </div>
            </div>
            </div>
            <div class="container aboutusCategory__Ditailes">
                <div class="aboutusCategory__Ditailes_Card">
                    <div class="aboutusCategory_card">
                        <div class="mb-5 aboutusCategory__Ditailes_Card_content">
                            <h3>Advocating</h3>
                            <p class="body-base">We empower immigrant investors, driving positive change in EB-5 policy and protecting their interests throughout the immigration process.</p>
                        </div>
                        <div class="mb-5 aboutusCategory__Ditailes_Card_content">
                            <h3>Educating</h3>
                            <p class="body-base">AIIA provides tailored education, equipping investors to make informed decisions and navigate the EB-5 journey</p>
                        </div>
                        <div class="aboutusCategory__Ditailes_Card_content">
                            <h3>Informing</h3>
                            <p class="body-base">AIIA is a trusted source, keeping investors informed on industry updates, USCIS policies, and legislative developments</p>
                        </div>
                    </div>
                    
                </div>
            </div>

    </section>


    <section class=" container meetThePeople">
        <h2 class="mb-2">Meet the People Behind AIIA</h2>
        <p class="body-large">These are the visionaries and advocates driving AIIA's mission forward.</p>
        <div class="row meetThePeople__Cards">
            <div class="row">
                    <?php
                         
                        $ImageNames = ['AboutUs_IshaanKhanna.png' , 'aboutUs_FullShawnGehani.png' , 'aboutUs_DavidYu.png' , 'aboutUs_RajvirBatra.png', 'aboutUs_MattGalati.png' , 'aboutUs_SuzanneLazicki.png' , 'aboutUs_IsabellaGetgey.png' , 'aboutUs_YiranCheng.png' ];
                        $Names = ['Ishaan Khanna' , 'Full Shawn Gehani' , 'David Yu' , 'Rajvir Batra' ,'Matt Galati' , 'Suzanne Lazicki' , 'Isabella Getgey' , 'Yiran Cheng'];
                        $Positions = ['President' , 'Dir. of Community Engagement' , 'Director of Operations' , 'Director of Policy' , 'Advisory Board Member' , 'Advisory Board Member' , 'Program Manager' , 'Head of Communications'];
                        $PositionDetailes = ['Originally from New Delhi, India, Ishaan was in his senior year of college majoring in Information Syste' , 'Shawn Gehani is based in Toronto, Canada where he serves as the Director of Community Engagement' , 'David Yu started volunteering for AIIA in June 2021 to share the vision of “grandfathering” with Chinese EB-' , 'Rajvir came to the US as an undergraduate student at Harvard University majoring in Economics an' , 'Matthew Galati has been an EB-5 attorney since early 2011, representing hundreds of EB-5 stake' , 'Suzanne offers business writing services through her firm Lucid Professional Writing, and runs the Lu' , 'Isabella assists the organization with content creation, member management, community outreach,' , 'As AIIA’s Head of Communications, Yiran helps the organization produce online content for public distribution'];
                        $ContactNames = ['Ishaan' , 'Full' , 'David' , 'Rajvir' ,'Matt' , 'Suzanne' , 'Isabella' , 'Yiran'];

                    
                        for ($i=0 ; $i < count($Names) ; $i++)
                        {
                            echo '<div class="col-md-3 col-12 meetThePeople__Card">';
                            echo  '<img src = "'. get_template_directory_uri() .'/assets/images/'.$ImageNames[$i] . '">';
                            echo  '<div class="meetThePeople__Card_Titel" >';
                            echo  '<h5 class="mt-md-4">' . $Names[$i] . '</h5>';
                            echo  '<p class="body-large">' . $Positions[$i] . '</p>';
                            echo  '<div class="meetThePeople__Card_Content">';
                            echo  '<p class="body-large">' . $PositionDetailes[$i] . '</p>';
                            echo    '<a class="text-decoration-none "  href="#" style="color:#1651A5">' . "Contact " . $ContactNames[$i]
                                        . '<span >
                                            <svg class="mb-0" xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="#1651A5" style="margin-left:8px; margin-bottom: 5px;">
                                            <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z" fill="#1651A5"/>
                                            </svg> 
                                        </span> 
                                    </a>';
                            echo    '</div>'; 
                            echo  '</div>';
                            echo '</div>';
                        }  
                    ?>
            </div>
        </div>

    </section>



    <section class="container-fluid description">
        <div class="container h-100">
            <div class="row description_Row">
                <div id="description__Image" class="col-md-6">
                    <img src = "<?php echo get_template_directory_uri().'/assets/images/Description.png';?>">
                </div> 
                <div class="col-md-6 description__content">
                    <p class="mb-4">
                      <?php
                         $post_id = get_the_ID(); // Get the current post ID
                         $content = get_post_field('post_content', $post_id); // Retrieve the raw content
                         $content = apply_filters('the_content', $content); // Apply the content filters to format it
                         echo $content; // Output the content
                      ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="description__Image">
            <img src = "<?php echo get_template_directory_uri().'/assets/images/Description.png';?>">
        </div>               
    </section>


    <section class="container bio" >
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-5 bio__Title">
                        <div class="bio__Title_Pinteraround"><div class="bio__Title_Pinter"></div></div>
                        <h2 class="text-end">2021</h2>
                        <h3 class="text-end">Empowering Immigrant Investors</h3>
                        <p class="text-end body-large">The Origins of AIIA and its Advocacy Mission</p>
                    </div>
                    <div class="col-7 bio__content">
                        <img src = "<?php echo get_template_directory_uri().'/assets/images/aboutus_bio_content2021.jpg';?>">
                        <p>The American Immigrant Investors Alliance is a Washington, D.C. based 501(c)(4) non-profit advocating for the interests of EB-5 investors from around the world. In April of 2021, anticipating the EB-5 Regional Center program lapse, four immigrant-investors met in online EB-5 investor forums, where they realized there was no advocacy organization dedicated to representing immigrant investors in the U.S. government. Where investment issuers and developers were able to lobby hundreds of thousands of dollars towards making EB-5 work for them, investors were cast aside and left to worry about how the lapse would impact their immigration process. Out of this need for a united, investor-facing advocacy organization, AIIA was born. </p>
                    </div>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-5 bio__Title">
                        <div class="bio__Title_Pinteraround"><div class="bio__Title_Pinter"></div></div>
                        <h2 class="text-end">2022</h2>
                        <h3 class="text-end">Advocacy to Action</h3>
                        <p class="text-end body-large">AIIA's Journey to Protect Immigrant Investors and Secure Legislative Success</p>
                    </div>
                    <div class="col-7 bio__content">
                        <img src = "<?php echo get_template_directory_uri().'/assets/images/aboutus_bio_content2022.png';?>">
                        <p>Following the lapse of the program, AIIA’s founders built up a small yet powerful community to lobby for their ‘grandfathering’ proposal, also known as the Foreign Investor Fairness Protection Act (FIFPA). This proposed bill text would ensure that any investor who filed an immigrant petition with USCIS before the program lapse would be able to complete the full immigration process. With the dedicated support of hundreds of EB-5 investors and some industry stakeholders, AIIA raised enough funds to hire a lobbyist, travel to Washington D.C., and meet with Senators on both sides of the aisle to advocate for the nearly 80,000 people impacted by the lapse. In March 2022, we succeeded and our legislative language was included in the Omnibus bill and signed into law by President Joe Biden thus ensuring that all existing and future EB-5 Regional Center investors would be grandfathered into the renewed program. This law allows for grandfathered investors to have their petitions processed and Green Cards issued even if the program lapses in the future.
                        Without AIIA, investors would have never had a platform to voice their concerns to a larger government authority, nor unite amongst themselves to counter exploitative parties within the EB-5 industry. We are the only organization made up of actual investors in the EB-5 program, a program Congress enacted to create jobs for Americans. Without the investors, there’s no program – and no American jobs would be created. If we could pass legislation to protect our community as an infant organization with a small but mighty base of support, imagine what we, as a united front of immigrant investors, will be able to do in the future.</p>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-5 bio__Title">
                        <div class="bio__Title_Pinteraround"><div class="bio__Title_Pinter"></div></div>
                        <h2 class="text-end">2023</h2>
                        <h3 class="text-end">Championing Immigrant Investors</h3>
                        <p class="text-end body-large">AIIA's Journey to Protect Immigrant Investors and Secure Legislative Success</p>
                    </div>
                    <div class="col-7 bio__content">
                        <img src = "<?php echo get_template_directory_uri().'/assets/images/aboutus_bio_content2023.jpg';?>">
                        <p>Following the lapse of the program, AIIA’s founders built up a small yet powerful community to lobby for their ‘grandfathering’ proposal, also known as the Foreign Investor Fairness Protection Act (FIFPA). This proposed bill text would ensure that any investor who filed an immigrant petition with USCIS before the program lapse would be able to complete the full immigration process. With the dedicated support of hundreds of EB-5 investors and some industry stakeholders, AIIA raised enough funds to hire a lobbyist, travel to Washington D.C., and meet with Senators on both sides of the aisle to advocate for the nearly 80,000 people impacted by the lapse. In March 2022, we succeeded and our legislative language was included in the Omnibus bill and signed into law by President Joe Biden thus ensuring that all existing and future EB-5 Regional Center investors would be grandfathered into the renewed program. This law allows for grandfathered investors to have their petitions processed and Green Cards issued even if the program lapses in the future.</p>
                    </div>
                </div>
            </div>
        </div>            

    </section>

    <section class="container bioSlider">  
            <div class="bioSlider__Cards">
            <input type="radio" name="switch" id="i_1">
            <input type="radio" name="switch" id="i_2">
            <input type="radio" name="switch" id="i_3" checked>

            <div class="bioSlider__controls">
                <label for="i_1">2021</label>
                <label for="i_2">2022</label>
                <label for="i_3">2023</label>
            </div>

            <div class="bioSlider__wrapper">
                <div class="bioSlider__slide">
                    <div class="bioSlider__content bioSlider__content1">
                        <h3 style="padding-inline: 30px;">Empowering Immigrant Investors</h3>
                        <p style="padding-inline: 30px;" class="body-large mb-4">The Origins of AIIA and its Advocacy Mission</p>
                        <img src = "<?php echo get_template_directory_uri().'/assets/images/aboutus_bio_content2021.jpg';?>">
                        <p style="padding-inline: 30px;">The American Immigrant Investors Alliance is a Washington, D.C. based 501(c)(4) non-profit advocating for the interests of EB-5 investors from around the world. In April of 2021, anticipating the EB-5 Regional Center program lapse, four immigrant-investors met in online EB-5 investor forums, where they realized there was no advocacy organization dedicated to representing immigrant investors in the U.S. government. Where investment issuers and developers were able to lobby hundreds of thousands of dollars towards making EB-5 work for them, investors were cast aside and left to worry about how the lapse would impact their immigration process. Out of this need for a united, investor-facing advocacy organization, AIIA was born. </p>
                    </div>   
                </div>
                <div class="bioSlider__slide">
                    <div class="bioSlider__content bioSlider__content2">
                        <h3 style="padding-inline: 30px;">Advocacy to Action</h3>
                        <p style="padding-inline: 30px;" class="body-large mb-4">AIIA's Journey to Protect Immigrant Investors and Secure Legislative Success</p>
                        <img src = "<?php echo get_template_directory_uri().'/assets/images/aboutus_bio_content2022.png';?>">
                        <p style="padding-inline: 30px;">Following the lapse of the program, AIIA’s founders built up a small yet powerful community to lobby for their ‘grandfathering’ proposal, also known as the Foreign Investor Fairness Protection Act (FIFPA). This proposed bill text would ensure that any investor who filed an immigrant petition with USCIS before the program lapse would be able to complete the full immigration process. With the dedicated support of hundreds of EB-5 investors and some industry stakeholders, AIIA raised enough funds to hire a lobbyist, travel to Washington D.C., and meet with Senators on both sides of the aisle to advocate for the nearly 80,000 people impacted by the lapse. In March 2022, we succeeded and our legislative language was included in the Omnibus bill and signed into law by President Joe Biden thus ensuring that all existing and future EB-5 Regional Center investors would be grandfathered into the renewed program. This law allows for grandfathered investors to have their petitions processed and Green Cards issued even if the program lapses in the future.
                        Without AIIA, investors would have never had a platform to voice their concerns to a larger government authority, nor unite amongst themselves to counter exploitative parties within the EB-5 industry. We are the only organization made up of actual investors in the EB-5 program, a program Congress enacted to create jobs for Americans. Without the investors, there’s no program – and no American jobs would be created. If we could pass legislation to protect our community as an infant organization with a small but mighty base of support, imagine what we, as a united front of immigrant investors, will be able to do in the future.</p>
                    </div>    
                </div>
                <div class="bioSlider__slide">
                    <div class="bioSlider__content bioSlider__content3">
                        <h3 style="padding-inline: 30px;">Championing Immigrant Investors</h3>
                        <p style="padding-inline: 30px;" class="body-large mb-4">AIIA's Journey to Protect Immigrant Investors and Secure Legislative Success</p>
                        <img src = "<?php echo get_template_directory_uri().'/assets/images/aboutus_bio_content2023.jpg';?>">
                        <p style="padding-inline: 30px;">Following the lapse of the program, AIIA’s founders built up a small yet powerful community to lobby for their ‘grandfathering’ proposal, also known as the Foreign Investor Fairness Protection Act (FIFPA). This proposed bill text would ensure that any investor who filed an immigrant petition with USCIS before the program lapse would be able to complete the full immigration process. With the dedicated support of hundreds of EB-5 investors and some industry stakeholders, AIIA raised enough funds to hire a lobbyist, travel to Washington D.C., and meet with Senators on both sides of the aisle to advocate for the nearly 80,000 people impacted by the lapse. In March 2022, we succeeded and our legislative language was included in the Omnibus bill and signed into law by President Joe Biden thus ensuring that all existing and future EB-5 Regional Center investors would be grandfathered into the renewed program. This law allows for grandfathered investors to have their petitions processed and Green Cards issued even if the program lapses in the future. </p>
                    </div>
                </div> 
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


    <section class="container unlock">
        <h2>Unlock New Opportunities with AIIA</h2>
        <p class="body-large">If you have any questions, inquiries, or collaboration proposals, please don’t hesitate to reach out for us. We are here to assist you.</p>                       
        <div class="row mx-0 unlock__cards">
            <div class="col-md-4 col-12 unlock__card">
                <div class="unlock__card_Image">
                    <img src = "<?php echo get_template_directory_uri().'/assets/images/Unlock01.png';?>">
                </div>
                <div class="unlockCardGradient"></div>  
                <div class="unlock__card_content">
                    <h4 class="mb-3 text-white">Become A Member Today</h4>
                    <p class="mb-4 text-white body-base">Tailored for EB-5 investors and allies, this membership offers exclusive benefits like immigration and investment assistance, sup</p>
                    <a class="text-white text-decoration-none "  href="#" style="color:#1651A5"> Become A Member
                        <span >
                            <svg class="mb-0" xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="#FFF" style="margin-left:8px; margin-bottom: 5px;">
                            <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z" fill="#FFF"/>
                            </svg> 
                        </span> 
                    </a>
                </div>      
            </div>  
            <div class="col-md-4 col-12 unlock__card">
                <div class="unlock__card_Image">
                    <img src = "<?php echo get_template_directory_uri().'/assets/images/Unlock02.jpg';?>">
                </div>
                <div class="unlockCardGradient"></div>  
                <div class="unlock__card_content">
                    <h4 class="mb-3 text-white">Donate & Support Us</h4>
                    <p class="mb-4 text-white body-base">Supporting AIIA's mission through a donation not only aids our advocacy efforts but also qualifies you for membership benefits, direct</p>
                    <a class="text-white text-decoration-none "  href="#" style="color:#1651A5"> Donate Today
                        <span >
                            <svg class="mb-0" xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="#FFF" style="margin-left:8px; margin-bottom: 5px;">
                            <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z" fill="#FFF"/>
                            </svg> 
                        </span> 
                    </a>
                </div>      
            </div>    
            <div class="col-md-4 col-12 unlock__card">
                <div class="unlock__card_Image">
                    <img src = "<?php echo get_template_directory_uri().'/assets/images/Unlock03.jpg';?>">
                </div>
                <div class="unlockCardGradient"></div>  
                <div class="unlock__card_content">
                    <h4 class="mb-3 text-white">Volunteer With Us</h4>
                    <p class="mb-4 text-white body-base">Volunteering with AIIA is crucial for actively contributing to our advocacy efforts, amplifying the voices of immigrant investor </p>
                    <a class="text-white text-decoration-none "  href="#" style="color:#1651A5">Volunteer With Us
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
        <img src="" alt="">
    </section> -->




<?php get_footer(); ?>