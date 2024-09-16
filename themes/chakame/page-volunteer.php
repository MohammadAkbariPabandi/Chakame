<?php
/*
Template Name: volunteer
*/

get_header();
?>
<section class="container-fluid volunteerHeader">
    <div class="container volunteerHeader-content">
        <div>
            <span></span>
            <p class="body-large text-white">Get Involved With AIIA</p>
        </div>
        <h1 class="text-white "><?php echo wp_title('', true, 'right'); ?></h1>
        <p class="body-large text-white "><?php
                            $summary = get_field('summary');
                            if (!empty($summary)) {
                                echo $summary;
                            }
                            ?></p>
    </div>
</section>
<section class="container px-0">
    <div class="volunteerContent">
        <form class="volunteerForm">
            <h3>Volunteer Information</h3>
            <div class="row">
                <div class="col-md-6 volunteerForm-item">
                    <label for="fname">first name</label>
                    <input type="text" id="fname" placeholder="Ishaan">
                </div>
                <div class="col-md-6 volunteerForm-item">
                    <label for="lname">last name</label>
                    <input type="text" id="lname" placeholder="e.g Khanna">
                </div>
                <div class="col-12 volunteerForm-item">
                    <label for="Email">Email</label>
                    <input type="email" id="Email" placeholder="e.g. johndoe@goaiia.com">
                </div>
                <div class="col-12 volunteerForm-item">
                    <label for="Phone number">Phone number</label>
                    <input type="tel" id="Phone number" placeholder="(123) 456-7890">
                </div>
                <div class="col-12 volunteerForm-item">
                    <label for="Volunteer Opportunity">Volunteer Opportunity</label>
                    <select name="Volunteer Opportunity" id="Volunteer Opportunity">
                        <option placeholder="Select...">Select...</option>
                    </select>
                </div>
                <div class="col-md-6 volunteerForm-item">
                    <label for="Current City">Current City</label>
                    <input type="text" id="Current City" placeholder="e.g New York ">
                </div>
                <div class="col-md-6 volunteerForm-item">
                    <label for="Current Country">Current Country</label>
                    <select name="cars" id="cars">
                        <option value="United States">United States</option>
                    </select>
                </div>
                <div class="col-md-6 volunteerForm-item">
                    <label for="Country of Chargeability">Country of Chargeability</label>
                    <input type="text" id="Country of Chargeability" placeholder="e.g India">
                </div>
                <div class="col-md-6 volunteerForm-item">
                    <label for="EB-5 Project">EB-5 Project</label>
                    <input type="text" id="EB-5 Project" placeholder="e.g">
                </div>
                <div class="col-12 volunteerForm-item">
                    <label for="I-526 Priority Date">I-526 Priority Date</label>
                    <input type="text" id="I-526 Priority Date" placeholder="e.g.">
                </div>
            </div>
            <button class="Button ZodiacButton">Submit</button>
        </form>
    </div>
</section>
<section class="container-fluid VolunteerUnlock">
    <div class="container unlock">
        <h2>Unlock New Opportunities with AIIA</h2>
        <p class="body-large">If you have any questions, inquiries, or collaboration proposals, please don’t hesitate to
            reach out for us. We are here to assist you.</p>
        <div class="row mx-0 unlock__cards">
            <div class="col-md-6 col-12 unlock__card">
                <div class="unlock__card_Image">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/Unlock01.png';?>">
                </div>
                <div class="unlockCardGradient"></div>
                <div class="unlock__card_content">
                    <h4 class="mb-3 text-white">Donate & Support Us</h4>
                    <p class="mb-4 text-white body-base">Supporting AIIA's mission through a donation not only aids our
                        advocacy efforts but also qualifies you for membership benefits, direct</p>
                    <a class="text-white text-decoration-none " href="#" style="color:#1651A5"> Donate Today
                        <span>
                            <svg class="mb-0" xmlns="http://www.w3.org/2000/svg" width="17" height="12"
                                viewBox="0 0 17 12" fill="#FFF" style="margin-left:8px; margin-bottom: 5px;">
                                <path
                                    d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                    fill="#FFF" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-12 unlock__card">
                <div class="unlock__card_Image">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/bamUnlock01.jpg';?>">
                </div>
                <div class="unlockCardGradient"></div>
                <div class="unlock__card_content">
                    <h4 class="mb-3 text-white">Volunteer With Us</h4>
                    <p class="mb-4 text-white body-base">Volunteering with AIIA is crucial for actively contributing to
                        our advocacy efforts, amplifying the voices of immigrant investor </p>
                    <a class="text-white text-decoration-none " href="#" style="color:#1651A5">Volunteer With Us
                        <span>
                            <svg class="mb-0" xmlns="http://www.w3.org/2000/svg" width="17" height="12"
                                viewBox="0 0 17 12" fill="#FFF" style="margin-left:8px; margin-bottom: 5px;">
                                <path
                                    d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                    fill="#FFF" />
                            </svg>
                        </span>
                    </a>
                </div>
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
<?php
get_footer();
?>