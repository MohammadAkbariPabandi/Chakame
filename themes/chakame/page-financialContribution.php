<?php
/*
Template Name: financial Contribution
*/

get_header();
?>
<section class="container-fluid fCHeader">
    <div class="container fCHeader__content">
        <h1 class="text-white"><?php echo wp_title('', true, 'right'); ?></h1>
        <p class="text-white text-center body-large">
        The best way to support AIIA and our mission is with a donation to the organization. Donating to AIIA also may also make you eligible for our membership benefits. Your donation helps us advocate for the issues that most impact our immigrant investor community.
        </p>
    </div>

</section>


<section class="container fCForm">
    <div class="fCForm__content">
        <form action="">
            <h3>Donation Amount</h3>
            <div class="fCForm__content-button"> 
                <button class="PillButton MerlotPillButton">$1000</button>
                <button class="PillButton MerlotLightPillButton">$500</button>
                <button class="PillButton MerlotLightPillButton">$200</button>
                <button class="PillButton MerlotLightPillButton">$100</button>
                <button class="PillButton MerlotLightPillButton">$20</button>
            </div>
            <div class="row d-flex">
                <div class="form-group pr-2 mb-3 col-md-12">
                    <input type="text" class="form-control" id="inputFirstName" placeholder="Custom Amount">
                </div>
            </div>

            <h3>Donor Information  </h3>
           
            <div class="row d-flex">
                <div class="form-group pr-2 mb-3 col-md-6">
                    <label class="mb-2" for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="Firs Name">
                </div>
                <div class="form-group pl-2 mb-3 col-md-6">
                    <label class="mb-2" for="inputLasttName">Last Name</label>
                    <input type="text" class="form-control" id="inputLasttName" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group  mb-3">
                <label class="mb-2" for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">   
            </div>
            <div class="form-group">
                <label class="mb-2" for="phonNumber">Phone number</label>
                <input type="tel" class="form-control" id="phonNumber" placeholder="(123) 456-7890">   
            </div>
            <h3>Select Payment Method</h3>
            <div class="fCForm__content-button"> 
                <button class="PillButton MerlotPillButton">Credit Card</button>
                <button class="PillButton MerlotLightPillButton">Bank Account</button>
            </div>
            <div class="row mb-3">
                <div class="form-group mb-3 col-md-6">
                    <label class="mb-2" for="inputCity">Routing Number</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="0000000">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="mb-2" for="inputState">Account Number</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="0000000">
                 
                </div>
                <div class="form-group mb-3 col-md-6">
                <label class="mb-2" for="inputState">Select Account Type</label>
                   <select id="inputState" class="form-control">
                        <option selected>Select...</option>
                        <option>...</option>
                    </select>
                 
                </div>

            </div>
          
            <button type="submit" class="Button ZodiacButton">Continue to Payment</button>
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