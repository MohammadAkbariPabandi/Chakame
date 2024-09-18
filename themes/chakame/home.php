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
        <div class="flex-slide js-collections-drawer-flex-slide " style="z-index: 1;">
           <div class="flex-title js-collections-drawer-flex-title"><h4>میکروسمنت</h4></div>
             <img src = "<?php echo get_template_directory_uri().'/assets/images/1.jpg';?>">
        </div>
        <div class="flex-slide js-collections-drawer-flex-slide" style="z-index: 2;">
          <div class="flex-title js-collections-drawer-flex-title"><h4>تکچر</h4></div>
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

        </div> 
    </div>
</section>








<?php get_footer(); ?>