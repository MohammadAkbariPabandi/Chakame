<?php
/*
Template Name: Diractory Of Professionals
*/

get_header();
?>

<header class="container-fluid dopHeader">
    <div class="container dopHeader__content">
        <div class="d-flex dopHeader__pointer">
            <span></span>
            <p class="text-white body-large">Resources For EB-5 Stakeholders</p>
        </div>
        <h1 class="text-white text-center" ><?php echo wp_title('', true, 'right'); ?></h1>
        <h3 class="text-white text-center mb-4">Find The Perfect Professional For Your Needs</h3>
        <p class="text-white text-center body-large">Seeking additional professional help when applying for an EB-5 visa can provide invaluable guidance through the intricate process, ensuring adherence to all requirements and regulations. AIIA has curated a list of the top professionals from attorneys, investment specialists, to business plan writers to support all all EB-5 stakeholders</p>
    </div>
</header>

<section class="container dopsearch">
    <div class="dopsearch__form">
        <form class="row">
            <div  class="col-md-5 dopsearch__form-item">
                <select id="disabledSelect" class="w-100 h-100 px-3">
                    <option>I am...t</option>
                </select>
            </div>
            <div  class="col-md-5 dopsearch__form-item">
                <select id="disabledSelect" class="w-100 h-100 px-3">
                    <option>Looking for...</option>
                </select>
            </div>
            <button type="submit" class="col-md-2 Button ZodiacButton ">Filter
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92624 1.71C3.48256 1.71 1.50156 3.69099 1.50156 6.13467C1.50156 8.57835 3.48256 10.5593 5.92624 10.5593C8.36992 10.5593 10.3509 8.57835 10.3509 6.13467C10.3509 3.69099 8.36992 1.71 5.92624 1.71ZM0.101562 6.13467C0.101562 2.91779 2.70936 0.309998 5.92624 0.309998C9.14312 0.309998 11.7509 2.91779 11.7509 6.13467C11.7509 9.35155 9.14312 11.9593 5.92624 11.9593C2.70936 11.9593 0.101562 9.35155 0.101562 6.13467Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.73774 9.52918C10.0033 9.26363 10.4339 9.26363 10.6994 9.52918L13.6994 12.5292C13.965 12.7947 13.965 13.2253 13.6994 13.4908C13.4339 13.7564 13.0033 13.7564 12.7377 13.4908L9.73774 10.4908C9.47219 10.2253 9.47219 9.79474 9.73774 9.52918Z" fill="white"/>
                </svg>
            </button>
        </form>
    </div>
</section>

<section class="container dopCards">
    <div class="row d-flex justify-content-between">
        <?php
        for ($i=0; $i < 8 ; $i++) { 
        ?>
            <div class="col-md-5">
                <div class="dopCard">
                    <div class="row">
                        <div class="col-12 dopCard__info">
                            <div class="row dopCard__info-body">
                                <div class="col-3">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/aboutus_comment_Slider04.jpg'; ?>">
                                </div>
                                <div class="col-8 dopCard__info-secondcolumn">
                                    <h4>Nicolai Hinrichsen</h4>
                                    <p class="body-large">Jazayerli Law LLC</p>
                                    <div class="dopCard__info-buttons">
                                        <button class="PillButton MerlotPillButton">Immigration Attorney</button>
                                        <button class="PillButton ToryPillButton">Immigration Attorney</button>
                                    </div>
                                </div>
                            </div>
                            <div class="dopCard__info-buttons-mobile">
                                <button class="PillButton MerlotPillButton">Immigration Attorney</button>
                                <button class="PillButton ToryPillButton">Immigration Attorney</button>
                            </div>
                        </div>
                        <div class="col-12 dopCard__content">
                            <p class="body-small">A graduate of Columbia Law School, Rana Jazayerli is a former litigator with more than fifteen years of experience as an EB-5 immigration attorney representing individuals seeking U.S. permanent residency through investment. She also represents EB-5 regional centers with applications for regional center designation, recertification under the recently passed EB-5 Reform and Integrity Act, annual reporting filings, and project exemplar filings. With her many years of experience as an EB-5 immigration attorney representing investors and regional centers and project developers, Ms. Jazayerli has developed a deep and extensive understanding of the complexities and ever-evolving rules of the EB-5 visa program, and is fluent in Arabic.</p>
                        </div>
                        <div class="col-12 dopCard__link">
                        <a class="text-decoration-none " href="#" style="color:#1651A5"> Contact Nicolai
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                    fill="#1651A5" style="margin-left:8px; margin-bottom: 5px;">
                                    <path
                                        d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                        fill="#1651A5" />
                                </svg>
                            </span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>     
    </div>
</section>


<section class="container find">
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