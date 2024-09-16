<?php
/*
Template Name: Contact US
*/

get_header();
?>

<header class="container-fluid contactusHeader">
    <div class="container contactusHeader__content">
        <div>
            <span></span>
            <p class="body-large text-white"><?php
            $categories = get_the_category();
            if (count($categories) !== 0) {
                $category = $categories[0];
                if (!empty($category)) {
                    echo esc_html($category->name) . ' ';
                }
            }
            ?></p>
        </div>
        <h1 class="text-white "><?php echo wp_title('', true, 'right'); ?></h1>
        <p class="body-large text-white ">
            <?php
            $summary = get_field('summary'); // Get the value of the 'summary' custom field               
            if (!empty($summary)) {
                echo $summary;
            }
            ?>
        </p>
    </div>
</header>
<section class="container-fluid contactusConent">
    <div class="container contactuscontent__information">
        
        <div class="row">
            <div class="col-md-8 col-12 contactusConent__information_img">
                <img class="w-100"
                    src="<?php echo get_template_directory_uri() . '/assets/images/contactus-map.png'; ?>">
            </div>
            <div class="col-md-4 col-12 contactusConent__information_form">
                <form>
                    <div class="row">
                        <div class="col-md-6 contactusForm-item">
                            <label for="fname" class="body-large">First Name*</label>
                            <input type="text" id="fname" placeholder="Enter your first name here...">
                        </div>
                        <div class="col-md-6 contactusForm-item">
                            <label for="lname" class="body-large">Last Name*</label>
                            <input type="text" id="lname" placeholder="Enter your last name here...">
                        </div>
                        <div class="col-md-12 contactusForm-item">
                            <label for="Email" class="body-large">Primary Email*</label>
                            <input type="email" id="Email" placeholder="Enter your email here...">
                        </div>
                        <div class="col-md-12 contactusForm-item">
                            <label for="Phone number" class="body-large">Cell Phone</label>
                            <input type="tel" id="Phone number" placeholder="Enter your phone number here...">
                        </div>
                        <div class="col-md-12 contactusForm-item">
                            <label for="Contactus Opportunity" class="body-large">I am an...</label>
                            <select name="Contactus Opportunity" id="Volunteer Opportunity">
                                <option placeholder="EB-5 Investor (or family member/representative of)">
                                    EB-5 Investor (or family member/representative of)
                                </option>
                            </select>
                        </div>
                        <div class="col-md-12 contactusForm-item" id="message">
                            <label for="Message" class="body-large">Message</label>
                            <!-- <input type="textarea" id="message" placeholder="Write your message here..." rows="4"> -->
                            <textarea name="message" placeholder="Write your message here..." rows="4" cols="30" class=""></textarea>
                        </div>
                    </div>
                    <button class="Button ZodiacButton">Submit</button>
                </form>

            </div>
        </div>

    </div>

</section>
<section class="container-fluid contactusSchedule">
    <div class="container contactusSchedule__content">
    <div class="row">
        <div class="col-md-12 col-12">
            <h3>Schedule a Call with AIIA Team</h3>
            <p class="body-large">Schedule a quick catchup call with us at AIIA to explore what we offer and for general
                queries
                you have.</p>
            <img class="" src="<?php echo get_template_directory_uri() . '/assets/images/contactus-cal.png'; ?>">
        </div>
    </div>
</section>
<section class="container-fluid contactusWays">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 col-12 contactusWays__card">
                <div class="contactusWays__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <g clip-path="url(#clip0_2_7662)">
                            <path
                                d="M9.33333 18.6667C9.33333 19.0203 9.19286 19.3594 8.94281 19.6095C8.69276 19.8595 8.35362 20 8 20H6.66667C6.31305 20 5.97391 19.8595 5.72386 19.6095C5.47381 19.3594 5.33333 19.0203 5.33333 18.6667C5.33333 18.313 5.47381 17.9739 5.72386 17.7239C5.97391 17.4738 6.31305 17.3333 6.66667 17.3333H8C8.35362 17.3333 8.69276 17.4738 8.94281 17.7239C9.19286 17.9739 9.33333 18.313 9.33333 18.6667ZM14.6667 17.3333H13.3333C12.9797 17.3333 12.6406 17.4738 12.3905 17.7239C12.1405 17.9739 12 18.313 12 18.6667C12 19.0203 12.1405 19.3594 12.3905 19.6095C12.6406 19.8595 12.9797 20 13.3333 20H14.6667C15.0203 20 15.3594 19.8595 15.6095 19.6095C15.8595 19.3594 16 19.0203 16 18.6667C16 18.313 15.8595 17.9739 15.6095 17.7239C15.3594 17.4738 15.0203 17.3333 14.6667 17.3333ZM8 22.6667H6.66667C6.31305 22.6667 5.97391 22.8071 5.72386 23.0572C5.47381 23.3072 5.33333 23.6464 5.33333 24C5.33333 24.3536 5.47381 24.6928 5.72386 24.9428C5.97391 25.1929 6.31305 25.3333 6.66667 25.3333H8C8.35362 25.3333 8.69276 25.1929 8.94281 24.9428C9.19286 24.6928 9.33333 24.3536 9.33333 24C9.33333 23.6464 9.19286 23.3072 8.94281 23.0572C8.69276 22.8071 8.35362 22.6667 8 22.6667ZM14.6667 22.6667H13.3333C12.9797 22.6667 12.6406 22.8071 12.3905 23.0572C12.1405 23.3072 12 23.6464 12 24C12 24.3536 12.1405 24.6928 12.3905 24.9428C12.6406 25.1929 12.9797 25.3333 13.3333 25.3333H14.6667C15.0203 25.3333 15.3594 25.1929 15.6095 24.9428C15.8595 24.6928 16 24.3536 16 24C16 23.6464 15.8595 23.3072 15.6095 23.0572C15.3594 22.8071 15.0203 22.6667 14.6667 22.6667ZM8 6.66667H6.66667C6.31305 6.66667 5.97391 6.80714 5.72386 7.05719C5.47381 7.30724 5.33333 7.64638 5.33333 8C5.33333 8.35362 5.47381 8.69276 5.72386 8.94281C5.97391 9.19286 6.31305 9.33333 6.66667 9.33333H8C8.35362 9.33333 8.69276 9.19286 8.94281 8.94281C9.19286 8.69276 9.33333 8.35362 9.33333 8C9.33333 7.64638 9.19286 7.30724 8.94281 7.05719C8.69276 6.80714 8.35362 6.66667 8 6.66667ZM14.6667 6.66667H13.3333C12.9797 6.66667 12.6406 6.80714 12.3905 7.05719C12.1405 7.30724 12 7.64638 12 8C12 8.35362 12.1405 8.69276 12.3905 8.94281C12.6406 9.19286 12.9797 9.33333 13.3333 9.33333H14.6667C15.0203 9.33333 15.3594 9.19286 15.6095 8.94281C15.8595 8.69276 16 8.35362 16 8C16 7.64638 15.8595 7.30724 15.6095 7.05719C15.3594 6.80714 15.0203 6.66667 14.6667 6.66667ZM8 12H6.66667C6.31305 12 5.97391 12.1405 5.72386 12.3905C5.47381 12.6406 5.33333 12.9797 5.33333 13.3333C5.33333 13.687 5.47381 14.0261 5.72386 14.2761C5.97391 14.5262 6.31305 14.6667 6.66667 14.6667H8C8.35362 14.6667 8.69276 14.5262 8.94281 14.2761C9.19286 14.0261 9.33333 13.687 9.33333 13.3333C9.33333 12.9797 9.19286 12.6406 8.94281 12.3905C8.69276 12.1405 8.35362 12 8 12ZM14.6667 12H13.3333C12.9797 12 12.6406 12.1405 12.3905 12.3905C12.1405 12.6406 12 12.9797 12 13.3333C12 13.687 12.1405 14.0261 12.3905 14.2761C12.6406 14.5262 12.9797 14.6667 13.3333 14.6667H14.6667C15.0203 14.6667 15.3594 14.5262 15.6095 14.2761C15.8595 14.0261 16 13.687 16 13.3333C16 12.9797 15.8595 12.6406 15.6095 12.3905C15.3594 12.1405 15.0203 12 14.6667 12ZM32 13.3333V25.3333C31.9979 27.1008 31.2948 28.7953 30.045 30.045C28.7953 31.2948 27.1008 31.9979 25.3333 32H6.66667C4.89921 31.9979 3.20474 31.2948 1.95496 30.045C0.705176 28.7953 0.00211714 27.1008 0 25.3333L0 6.66667C0.00211714 4.89921 0.705176 3.20474 1.95496 1.95496C3.20474 0.705176 4.89921 0.00211714 6.66667 0L14.6667 0C16.4341 0.00211714 18.1286 0.705176 19.3784 1.95496C20.6282 3.20474 21.3312 4.89921 21.3333 6.66667H25.3333C27.1008 6.66878 28.7953 7.37184 30.045 8.62163C31.2948 9.87141 31.9979 11.5659 32 13.3333ZM6.66667 29.3333H18.6667V6.66667C18.6667 5.6058 18.2452 4.58839 17.4951 3.83824C16.7449 3.08809 15.7275 2.66667 14.6667 2.66667H6.66667C5.6058 2.66667 4.58839 3.08809 3.83824 3.83824C3.08809 4.58839 2.66667 5.6058 2.66667 6.66667V25.3333C2.66667 26.3942 3.08809 27.4116 3.83824 28.1618C4.58839 28.9119 5.6058 29.3333 6.66667 29.3333ZM29.3333 13.3333C29.3333 12.2725 28.9119 11.2551 28.1618 10.5049C27.4116 9.75476 26.3942 9.33333 25.3333 9.33333H21.3333V29.3333H25.3333C26.3942 29.3333 27.4116 28.9119 28.1618 28.1618C28.9119 27.4116 29.3333 26.3942 29.3333 25.3333V13.3333ZM25.3333 17.3333C25.0696 17.3333 24.8118 17.4115 24.5926 17.558C24.3733 17.7045 24.2024 17.9128 24.1015 18.1564C24.0006 18.4001 23.9742 18.6681 24.0256 18.9268C24.0771 19.1854 24.2041 19.423 24.3905 19.6095C24.577 19.7959 24.8146 19.9229 25.0732 19.9744C25.3319 20.0258 25.5999 19.9994 25.8436 19.8985C26.0872 19.7976 26.2955 19.6267 26.442 19.4074C26.5885 19.1882 26.6667 18.9304 26.6667 18.6667C26.6667 18.313 26.5262 17.9739 26.2761 17.7239C26.0261 17.4738 25.687 17.3333 25.3333 17.3333ZM25.3333 22.6667C25.0696 22.6667 24.8118 22.7449 24.5926 22.8914C24.3733 23.0379 24.2024 23.2461 24.1015 23.4898C24.0006 23.7334 23.9742 24.0015 24.0256 24.2601C24.0771 24.5188 24.2041 24.7563 24.3905 24.9428C24.577 25.1293 24.8146 25.2563 25.0732 25.3077C25.3319 25.3592 25.5999 25.3328 25.8436 25.2318C26.0872 25.1309 26.2955 24.96 26.442 24.7408C26.5885 24.5215 26.6667 24.2637 26.6667 24C26.6667 23.6464 26.5262 23.3072 26.2761 23.0572C26.0261 22.8071 25.687 22.6667 25.3333 22.6667ZM25.3333 12C25.0696 12 24.8118 12.0782 24.5926 12.2247C24.3733 12.3712 24.2024 12.5795 24.1015 12.8231C24.0006 13.0667 23.9742 13.3348 24.0256 13.5935C24.0771 13.8521 24.2041 14.0897 24.3905 14.2761C24.577 14.4626 24.8146 14.5896 25.0732 14.641C25.3319 14.6925 25.5999 14.6661 25.8436 14.5652C26.0872 14.4643 26.2955 14.2934 26.442 14.0741C26.5885 13.8548 26.6667 13.597 26.6667 13.3333C26.6667 12.9797 26.5262 12.6406 26.2761 12.3905C26.0261 12.1405 25.687 12 25.3333 12Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2_7662">
                                <rect width="32" height="32" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <h4>Office</h4>
                <p class="body-large">Find us using the below directions.</p>
                <p class="body-large" id="contactusWays__card_p">1025 Connecticut Ave NW, Suite 615, Washington, DC
                    20036</p>
            </div>
            <div class="col-md-4 col-12 contactusWays__card">

                <div class="contactusWays__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                        <g clip-path="url(#clip0_2_7669)">
                            <path
                                d="M20.14 10.2667C20.0174 10.1415 19.9207 9.99336 19.8554 9.8308C19.7901 9.66823 19.7574 9.49438 19.7593 9.31919C19.7611 9.144 19.7975 8.97089 19.8662 8.80974C19.935 8.64859 20.0348 8.50257 20.16 8.38C20.2852 8.25743 20.4333 8.16072 20.5959 8.0954C20.7584 8.03007 20.9323 7.9974 21.1075 7.99926C21.2827 8.00112 21.4558 8.03746 21.6169 8.10622C21.7781 8.17498 21.9241 8.27481 22.0467 8.4L24.5 10.908V1.33333C24.5 0.979711 24.6405 0.640573 24.8905 0.390524C25.1406 0.140476 25.4797 0 25.8333 0C26.187 0 26.5261 0.140476 26.7761 0.390524C27.0262 0.640573 27.1667 0.979711 27.1667 1.33333V10.908L29.62 8.4C29.8675 8.14716 30.2054 8.00301 30.5592 7.99926C30.913 7.99551 31.2538 8.13246 31.5067 8.38C31.7595 8.62754 31.9037 8.96537 31.9074 9.31919C31.9112 9.67301 31.7742 10.0138 31.5267 10.2667L28.1733 13.6933C27.5576 14.312 26.7222 14.6619 25.8493 14.6667C25.841 14.6687 25.8323 14.6687 25.824 14.6667C25.393 14.6668 24.9662 14.5818 24.568 14.4166C24.1699 14.2514 23.8083 14.0093 23.504 13.704L20.14 10.2667ZM31.1667 14.6667C30.813 14.6667 30.4739 14.8071 30.2239 15.0572C29.9738 15.3072 29.8333 15.6464 29.8333 16V25.3333C29.8333 26.3942 29.4119 27.4116 28.6618 28.1618C27.9116 28.9119 26.8942 29.3333 25.8333 29.3333H7.16667C6.1058 29.3333 5.08839 28.9119 4.33824 28.1618C3.58809 27.4116 3.16667 26.3942 3.16667 25.3333V12.0947L11.7867 20.7147C13.0388 21.9541 14.7288 22.6505 16.4906 22.653C18.2524 22.6555 19.9444 21.9639 21.2 20.728L23.7093 18.2893C23.8369 18.1678 23.9392 18.0221 24.0101 17.8608C24.0811 17.6995 24.1194 17.5257 24.1227 17.3495C24.1261 17.1733 24.0945 16.9982 24.0298 16.8343C23.9651 16.6704 23.8685 16.5209 23.7457 16.3946C23.6229 16.2682 23.4762 16.1674 23.3142 16.0981C23.1522 16.0288 22.978 15.9923 22.8018 15.9907C22.6256 15.9891 22.4508 16.0224 22.2875 16.0888C22.1243 16.1552 21.9758 16.2532 21.8507 16.3773L19.328 18.8293C18.5658 19.5559 17.5531 19.9613 16.5 19.9613C15.4469 19.9613 14.4342 19.5559 13.672 18.8293L3.648 8.8C3.98506 8.15805 4.49082 7.62018 5.11082 7.24428C5.73083 6.86837 6.44161 6.66867 7.16667 6.66667H16.5C16.8536 6.66667 17.1928 6.52619 17.4428 6.27614C17.6929 6.02609 17.8333 5.68696 17.8333 5.33333C17.8333 4.97971 17.6929 4.64057 17.4428 4.39052C17.1928 4.14048 16.8536 4 16.5 4H7.16667C5.39921 4.00212 3.70474 4.70518 2.45496 5.95496C1.20518 7.20474 0.502117 8.89921 0.5 10.6667L0.5 25.3333C0.502117 27.1008 1.20518 28.7953 2.45496 30.045C3.70474 31.2948 5.39921 31.9979 7.16667 32H25.8333C27.6008 31.9979 29.2953 31.2948 30.545 30.045C31.7948 28.7953 32.4979 27.1008 32.5 25.3333V16C32.5 15.6464 32.3595 15.3072 32.1095 15.0572C31.8594 14.8071 31.5203 14.6667 31.1667 14.6667Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2_7669">
                                <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <h4>Email</h4>
                <p class="body-large">We strive to respond to all email inquiries within 24 hours.</p>
                <p class="body-large" id="contactusWays__card_p">hello@aiia.com</p>

            </div>
            <div class="col-md-4 col-12 contactusWays__card">

                <div class="contactusWays__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <g clip-path="url(#clip0_2_7676)">
                            <path
                                d="M17.333 1.33327C17.333 0.979643 17.4735 0.640505 17.7235 0.390456C17.9736 0.140408 18.3127 -6.79754e-05 18.6663 -6.79754e-05C22.2014 0.00381415 25.5905 1.40982 28.0901 3.90946C30.5898 6.40911 31.9958 9.79824 31.9997 13.3333C31.9997 13.6869 31.8592 14.026 31.6091 14.2761C31.3591 14.5261 31.0199 14.6666 30.6663 14.6666C30.3127 14.6666 29.9736 14.5261 29.7235 14.2761C29.4735 14.026 29.333 13.6869 29.333 13.3333C29.3298 10.5053 28.205 7.794 26.2053 5.7943C24.2056 3.7946 21.4943 2.66977 18.6663 2.6666C18.3127 2.6666 17.9736 2.52612 17.7235 2.27607C17.4735 2.02603 17.333 1.68689 17.333 1.33327ZM18.6663 7.99993C20.0808 7.99993 21.4374 8.56184 22.4376 9.56203C23.4377 10.5622 23.9997 11.9188 23.9997 13.3333C23.9997 13.6869 24.1401 14.026 24.3902 14.2761C24.6402 14.5261 24.9794 14.6666 25.333 14.6666C25.6866 14.6666 26.0257 14.5261 26.2758 14.2761C26.5258 14.026 26.6663 13.6869 26.6663 13.3333C26.6642 11.2122 25.8207 9.17858 24.3208 7.67875C22.821 6.17892 20.7874 5.33538 18.6663 5.33327C18.3127 5.33327 17.9736 5.47374 17.7235 5.72379C17.4735 5.97384 17.333 6.31298 17.333 6.6666C17.333 7.02022 17.4735 7.35936 17.7235 7.60941C17.9736 7.85946 18.3127 7.99993 18.6663 7.99993ZM30.7903 22.3186C31.563 23.0934 31.9969 24.143 31.9969 25.2373C31.9969 26.3315 31.563 27.3811 30.7903 28.1559L29.577 29.5546C18.657 40.0093 -7.91634 13.4426 2.37699 2.48793L3.91032 1.1546C4.68601 0.403502 5.72623 -0.0120025 6.80593 -0.00202152C7.88562 0.0079595 8.91798 0.442623 9.67966 1.20793C9.72099 1.24927 12.1917 4.4586 12.1917 4.4586C12.9248 5.22877 13.3329 6.25184 13.3311 7.31514C13.3294 8.37843 12.9179 9.40016 12.1823 10.1679L10.6383 12.1093C11.4928 14.1854 12.7491 16.0723 14.335 17.6614C15.9209 19.2505 17.8052 20.5106 19.8797 21.3693L21.833 19.8159C22.6009 19.0809 23.6224 18.6699 24.6854 18.6684C25.7484 18.6669 26.7711 19.075 27.541 19.8079C27.541 19.8079 30.749 22.2773 30.7903 22.3186ZM28.9557 24.2573C28.9557 24.2573 25.765 21.8026 25.7237 21.7613C25.449 21.4889 25.0778 21.3361 24.691 21.3361C24.3042 21.3361 23.933 21.4889 23.6583 21.7613C23.6223 21.7986 20.933 23.9413 20.933 23.9413C20.7518 24.0855 20.5361 24.1801 20.3072 24.2156C20.0783 24.2512 19.8441 24.2264 19.6277 24.1439C16.9403 23.1434 14.4993 21.5769 12.4701 19.5507C10.4409 17.5245 8.87086 15.0858 7.86632 12.3999C7.77725 12.1805 7.74822 11.9414 7.78219 11.7071C7.81617 11.4727 7.91194 11.2517 8.05966 11.0666C8.05966 11.0666 10.2023 8.37593 10.2383 8.34127C10.5107 8.06658 10.6635 7.69542 10.6635 7.3086C10.6635 6.92178 10.5107 6.55062 10.2383 6.27593C10.197 6.23593 7.74232 3.0426 7.74232 3.0426C7.46352 2.79261 7.09966 2.65873 6.72532 2.66839C6.35098 2.67806 5.99451 2.83055 5.72899 3.0946L4.19566 4.42793C-3.32701 13.4733 19.701 35.2239 27.6277 27.7333L28.8423 26.3333C29.127 26.0696 29.2979 25.7056 29.3191 25.3182C29.3402 24.9308 29.2099 24.5503 28.9557 24.2573Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2_7676">
                                <rect width="32" height="32" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <h4>Zoom Call</h4>
                <p class="body-large">If you have any further inquiries please schedule a zoom call with us.</p>
                <p class="body-large" id="contactusWays__card_p">Schedule a Zoom Call</p>
            </div>
        </div>
        </div>
</section>

<section class="container unlock">
    <h2>Unlock New Opportunities with AIIA</h2>
    <p class="body-large">If you have any questions, inquiries, or collaboration proposals, please don’t hesitate to
        reach out for us. We are here to assist you.</p>
    <div class="row mx-0 unlock__cards">
        <div class="col-md-4 col-12 unlock__card">
            <div class="unlock__card_Image">
                <img src="<?php echo get_template_directory_uri().'/assets/images/Unlock01.png';?>">
            </div>
            <div class="unlockCardGradient"></div>
            <div class="unlock__card_content">
                <h4 class="mb-3 text-white">Become A Member Today</h4>
                <p class="mb-4 text-white body-base">Tailored for EB-5 investors and allies, this membership offers
                    exclusive benefits like immigration and investment assistance, sup</p>
                <a class="text-white text-decoration-none " href="#" style="color:#1651A5"> Become A Member
                    <span>
                        <svg class="mb-0" xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                            fill="#FFF" style="margin-left:8px; margin-bottom: 5px;">
                            <path
                                d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                fill="#FFF" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-12 unlock__card">
            <div class="unlock__card_Image">
                <img src="<?php echo get_template_directory_uri().'/assets/images/Unlock02.jpg';?>">
            </div>
            <div class="unlockCardGradient"></div>
            <div class="unlock__card_content">
                <h4 class="mb-3 text-white">Donate & Support Us</h4>
                <p class="mb-4 text-white body-base">Supporting AIIA's mission through a donation not only aids our
                    advocacy efforts but also qualifies you for membership benefits, direct</p>
                <a class="text-white text-decoration-none " href="#" style="color:#1651A5"> Donate Today
                    <span>
                        <svg class="mb-0" xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                            fill="#FFF" style="margin-left:8px; margin-bottom: 5px;">
                            <path
                                d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                fill="#FFF" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-12 unlock__card">
            <div class="unlock__card_Image">
                <img src="<?php echo get_template_directory_uri().'/assets/images/Unlock03.jpg';?>">
            </div>
            <div class="unlockCardGradient"></div>
            <div class="unlock__card_content">
                <h4 class="mb-3 text-white">Volunteer With Us</h4>
                <p class="mb-4 text-white body-base">Volunteering with AIIA is crucial for actively contributing to our
                    advocacy efforts, amplifying the voices of immigrant investor </p>
                <a class="text-white text-decoration-none " href="#" style="color:#1651A5">Volunteer With Us
                    <span>
                        <svg class="mb-0" xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                            fill="#FFF" style="margin-left:8px; margin-bottom: 5px;">
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


<?php
get_footer();
?>