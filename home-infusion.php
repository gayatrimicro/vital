<!DOCTYPE html>
<html data-html-server-rendered="true" lang="en" data-vue-tag="%7B%22lang%22:%7B%22ssr%22:%22en%22%7D%7D">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Home infusion | Vital Care</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link rel="stylesheet" href="assets/css/0.styles.1e9d37b3.css">
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/normalize.min.css"> -->
    <!-- <link rel='stylesheet' href='assets/css/slick.css'> -->
    <link rel='stylesheet' href='assets/css/modal.css'>
    <!-- <link rel='stylesheet' href='assets/css/animate.min.css'> -->
    <link rel="stylesheet" type="text/css" href="assets/css/newstyle.css">
    <!-- <link href="assets/css/aos.css" rel="stylesheet"> -->
  </head>
  <body >
      <script>
       $(document).ready(function(){
          $(".c-masthead__toggle").hover(function(){
            $(".c-masthead__menus").addClass("is-expanded");
          });
          $(".c-masthead__close").hover(function(){
            $(".c-masthead__menus").removeClass("is-expanded");
          });

          $(".blog").hover(function(){
            $(".c-masthead__sub-menu").toggleClass("is-expanded");
          });
        });
      </script>
      <style type="text/css">
        

        .down-move {
          margin-top: 80px;
            transition: 1s all;
        }
        .up-move
        {
          margin-top: -80px;
            transition: 1s all;
        }
        .c-start-columns__text, .c-start-columns__text button{
          text-align: center;
        }
        .section-box{
          padding: 2rem
        }
        .c-home-blocks__block {
          margin-bottom: 20px;
        }
        .gray-bg{
          background-color: #cbe7e7 !important;
        }
        .main-content h2{
          font-size: 32px !important;
        }
        .c-home__intro{
          margin: 70px auto;
        }
        .slide .slide__img img {
          height: auto !important;
        }
        @media (max-width: 600px){
          .c-home-blocks__block {
            margin-bottom: 0px;}
          }
          .slide .slide__img img {
          height: 100vh !important;
          object-fit: cover !important;
        }
        }
      </style>

<?php
include("header.php");
?>
<main>
 <!-- <div id="myModal" class="modal">

  <div class="req-modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 style="text-align: center;padding: 1rem;margin: 0px; ">
        <img src="assets/images/vital-logo.png" style="width: 16rem;">
      </h2>
    </div>
    <div class="modal-body">
      <p>Dear Friends, Partners & Associates,</p>

      <p>With current developments regarding the COVID-19 (coronavirus) crisis, we wanted to reassure you that we are strictly following the advice of World Health Organisation to make sure we continue to maintain the highest hygiene & safety standards.</p>

      <p>Please contact us today in regards to the availability of our programs and utilise the downtime to “reset your clock”. During these challenging times, Vital Care is continuing to offer VIP concierge service with discounts available via our “family & friends” promotions. Achieve lifelong health & wellbeing with the world leader in IV protocols.</p>

      <p>Call us today for your free advice and health assessment.</p>

    </div>

    <div class="modal-footer">
      <div class="ani-box" id="reqCallback3">
        <a href="javascript:void(0);">
        <div class="pos-rel">
          <img src="assets/images/static.svg" class="inner-image">
          <img src="assets/images/download.png" class="outer-ring">

        </div><br>
        
        <p class="line-one">Schedule</p>
        <p class="line-two">an appointment</p>
        </a>
      </div>
      <div class="ani-box">
        <a href="tel:832 487 9746">
        <div class="pos-rel">
          <img src="assets/images/mobile.svg" class="inner-image">
          <img src="assets/images/download.png" class="outer-ring">

        </div><br>
        <p class="line-one">Concierge</p>
        <p class="line-two">Call us: 832 487 9746</p>
        </a> 
      </div>
      <div class="ani-box">
        <a href="mailto:vitalcarenorthhouston@outlook.com">
        <div class="pos-rel">
          <img src="assets/images/email.svg" class="inner-image">
          <img src="assets/images/download.png" class="outer-ring">

        </div><br>
        <p class="line-one">Email</p>
        <p class="line-two">vitalcarenorthhouston@outlook.com</p>
        </a>
      </div>
    </div>
  </div>

</div> -->

<div id="callbackModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="add-box">
      <!-- <span class="closeForm" id="mob-only">&times;</span> -->
      <img src="assets/images/vital-logo.png" style="width: 16rem;">
      <div class="form-content" style="padding: 2rem 2rem 2rem 0rem;">
        <p style="margin-bottom: 0px;">Email us</p>
        <p><a href="mailto:vitalcarenorthhouston@outlook.com">vitalcarenorthhouston@outlook.com</a></p>
        <br>
        <p style="margin-bottom: 0px;">Call us</p>
        <p><a href="tel:832 487 9746">832 487 9746</a></p>
        <br>
        <p style="margin-bottom: 0px;">Find us</p>
        <p>1125 Cypress Station Drive,Houston, TX 77090.</p>
      </div>
      
    </div>
    <div class="form-box">
      <form id="callback-form">
       <span class="closeForm">&times;</span>
       <h1 class="req-form-heading">Request A Call Back</h1>
       <div class="row">
         <div class="col-6">
           <input type="text" name="fName" id="fName" class="input-field" placeholder="First Name" required>
         </div>
         <div class="col-6">
           <input type="text" name="lName" id="lName" class="input-field" placeholder="Last Name" required>
         </div>
       </div>
       <div class="row">
         <div class="col-6">
           <input type="text" name="phone" id="phone" class="input-field" placeholder="Phone" name="bnumber" maxlength="10" pattern="[0-9]{10,10}$" title="Enter valid contact number." required>
         </div>
         <div class="col-6">
           <input type="text" name="email" id="email" class="input-field" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Enter valid E-mail address." required>
         </div>
       </div>
       <div class="row">
         
           <textarea placeholder="How can we help?" rows="2" name="message"  id="message" class="textarea-field"></textarea>
         
       </div>
       <div class="row">
         <div class="g-recaptcha" id="book-recaptcha" data-sitekey="6Lcm9tsUAAAAAAF3EAGaeuC2QMK0oRY7qTLLB4Qv"></div>
       </div>
       <div class="row">
         <style type="text/css">
            #successmessage{
              display: none;
              text-align: center;
              color: #040404;
              font-size: 1.225rem;
              margin-top: 1rem;
          }
            }
          </style>

         <h3 id="successmessage">Thank you for your enquiry</h3>
       </div>
       <div class="row" style="margin-top: 20px;">
         <div class="col-6">
           <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3"><button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" type="submit" id="submit">Submit</button></p>
         </div>
         <div class="col-6">
           <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3"><button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" type="button" id="chat-now">Chat Now</button></p>
         </div>
       </div>
       </form>
    </div>
    
    <script>

    $('#callback-form').submit(function(event) {
      event.preventDefault();
      var formdata = $('#callback-form').serialize();

      
        if ($('#fName').val() != "" && $('#lName').val() != "" && $('#phone').val() != "" && $('#email').val() != "" && $('#message').val() != "" && grecaptcha.getResponse() != "") {
          
          // alert(bookdate);
            // && grecaptcha.getResponse() != ""
             $.ajax({
                              url:'request.php',
                              type:'POST',
                              data:formdata,
                              success:function(result){
                                $("#successmessage").css("display", "block");
                                  $("#successmessage").html("Your enquiry has been sent successfully");
                                  $("#modal-success").css("display", "block");
                                  // alert("Your enquiry has been sent successfully");
                                  $("#fName, #lName, #phone, #email, #message").val("");
                                  
                                  grecaptcha.reset();
                              } 
                    });

        
    }
             else{
              alert("All fields are mandatory");
                  }
    });

</script>

    

    
  </div>

</div>
<div class="pos_rel">
    <div class="sec_slid">
<div class="slider stick-dots">
    <div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="assets/images/banner-home-infusion.jpg" class="full-image animated hiddenxs" data-animation-in="zoomInImage"/>
        <img src="" alt="" data-lazy="assets/images/banner-mob-home-infusion.jpg" class="full-image animated visiblexs" data-animation-in="zoomInImage" />
      </div>
      <div class="slide__content">
        <div class="slide__content--headings">
           <h2 class="animated" data-animation-in="fadeInUp" style="font-size: 35px;">Needing convenient infusion therapy?
          <br><br>Let's do it at home.</h2>
           <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3"><button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" id="reqCallback">Request Call Back </button></p>
        </div>
      </div>
    </div>
    <!-- <div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="assets/images/hero-02.jpg" class="full-image animated hiddenxs" data-animation-in="zoomInImage"/>
        <img src="" alt="" data-lazy="assets/images/Slide2-mob-dark.jpg" class="full-image animated visiblexs" data-animation-in="zoomInImage"/>
      </div>
      <div class="slide__content">
        <div class="slide__content--headings">
           <h2 class="animated" data-animation-in="fadeInRight">Emotional Distress ?</h2>
           <p class="animated" data-animation-in="fadeInRight" data-delay-in="0.2"><a href="tel:(888) 688-4161 " class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn">(888) 688-4161 </a></p>
        </div>
      </div>
    </div> -->
    <!-- <div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="assets/images/hero-03.jpg" class="full-image animated hiddenxs" data-animation-in="zoomInImage"/>
        <img src="" alt="" data-lazy="assets/images/Slide3-mob-dark.jpg" class="full-image animated visiblexs" data-animation-in="zoomInImage"/>
      </div>
      <div class="slide__content">
        <div class="slide__content--headings">
           <h2 class="animated" data-animation-in="fadeInRight">Anxiety ?</h2>
           <h3  class="animated" data-animation-in="fadeInRight">Get Professional Diagnosis & Treatment, Online!</h3>
           <p class="animated" data-animation-in="fadeInRight" data-delay-in="0.2"><a href="tel:(888) 688-4161 " class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn">(888) 688-4161 </a></p>
        </div>
      </div>
    </div> -->
  </div>
</div>
</div>
  






    <!-- Slider ends -->
<div id="more-info" class="c-home c-home--clinicians">
   <div class="l-max-width">
      <div class="l-container l-container--gutters">
         <div class="c-home__intro text-center">
            <h2>
               <div class="heading-inner">Why Vital Care</div>
            </h2>
            <!-- <p>Vital Care delivers a total spectrum of cost effective infusion therapy service and programs to medically stable patients in the comfort of their home.</p> -->
         </div>
         <div class="c-start-columns__grid">

               <div class="c-start-columns__column">
                  <!-- <div class="c-start-columns__image c-start-columns__image--1">
                     <div class="c-start-columns__image-wrapper" data-aos="fade-up" data-aos-duration="1000"><img width="240" height="400" src="assets/images/01-step-parent-image.png" class="lazyload c-start-columns__image-img"></div>
                  </div> -->
                  <div class="c-start-columns__text">
                     <h3>Same Day Start of Care</h3>
                     <p>We make the transition from hospital to home as smooth as possible. We accept most  <br>insurances and can coordinate same day home health services.</p>
                     <!-- <button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" style="display: inline-block;width: 240px;"> Learn More</button> -->
                  </div>

               </div>

               <div class="c-start-columns__column">
                  <!-- <div class="c-start-columns__image c-start-columns__image--2">
                     <div class="c-start-columns__image-wrapper" data-aos="fade-up" data-aos-duration="1500"><img width="240" height="400" src="assets/images/02-step-parent-image.png" class="lazyload c-start-columns__image-img"></div>
                  </div> -->
                  <div class="c-start-columns__text">
                     <h3>Easy-to-Learn Infusion Pumps</h3>
                     <p> We use infusion pumps that are small, <br> lightweight, and portable providing <br> patients with flexibility and mobility in the home setting.</p>
                     <!-- <button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" style="display: inline-block;width: 240px;"> Learn More</button> -->
                  </div>
               </div>
               <div class="c-start-columns__column">
                  <!-- <div class="c-start-columns__image c-start-columns__image--3">
                     <div class="c-start-columns__image-wrapper" data-aos="fade-up" data-aos-duration="2000"><img width="240" height="400" src="assets/images/03-step-image.png" class="lazyload c-start-columns__image-img"></div>
                  </div> -->
                  <div class="c-start-columns__text">
                     <h3>Adjustable Dosing Times</h3>
                     <p>We are able to customize the dosing times for medication in order to accommodate the patient's schedule ensuring rest, healing, and achievable draw times.</p>
                     <!-- <button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" style="display: inline-block;width: 240px;"> Learn More</button> -->
                  </div>
               </div>
            </div>
            <br class="desk-only"><br class="desk-only"><br class="desk-only"><br class="desk-only">
            <div class="c-start-columns__grid">

               <div class="c-start-columns__column">
                  <!-- <div class="c-start-columns__image c-start-columns__image--1">
                     <div class="c-start-columns__image-wrapper" data-aos="fade-up" data-aos-duration="1000"><img width="240" height="400" src="assets/images/01-step-parent-image.png" class="lazyload c-start-columns__image-img"></div>
                  </div> -->
                  <div class="c-start-columns__text">
                     <h3>Pharmacist On-call 24/7</h3>
                     <p>We know that urgent situations may arise any time which is why after hr calls are answered live clinical staff and our we have pharmacy staff on-call 24/7.</p>
                     <!-- <button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" style="display: inline-block;width: 240px;"> Learn More</button> -->
                  </div>
               </div>
               <div class="c-start-columns__column">
                  <!-- <div class="c-start-columns__image c-start-columns__image--2">
                     <div class="c-start-columns__image-wrapper" data-aos="fade-up" data-aos-duration="1500"><img width="240" height="400" src="assets/images/02-step-parent-image.png" class="lazyload c-start-columns__image-img"></div>
                  </div> -->
                  <div class="c-start-columns__text">
                     <h3>We Provide Patient Education</h3>
                     <p>Our team provides detailed patient education via telehealth methods or at the bedside when it is safe and acceptable to do so.</p>
                     <!-- <button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" style="display: inline-block;width: 240px;">Learn More</button> -->
                  </div>
               </div>
               <div class="c-start-columns__column">
                  <!-- <div class="c-start-columns__image c-start-columns__image--3">
                     <div class="c-start-columns__image-wrapper" data-aos="fade-up" data-aos-duration="2000"><img width="240" height="400" src="assets/images/03-step-image.png" class="lazyload c-start-columns__image-img"></div>
                  </div> -->
                  <div class="c-start-columns__text">
                     <h3> Shipping at No Extra Cost</h3>
                     <p>We ship ready-to-use medication and medical supplies overnight directly to the patient's doorstep so they have what they need when they need it.</p>
                     <!-- <button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" style="display: inline-block;width: 240px;"> Learn More</button> -->
                  </div>
               </div>
            </div>
<br>
<br class="desk-only">
<br class="desk-only">
<br class="desk-only">
<br class="desk-only">
<br class="desk-only">


        
         


      </div>
   </div>
   
</div>

<div class="main-content">
            <section class="c-home-blocks__block section-box">
               <div class="c-home-blocks__image">
                  <div class="c-home-blocks__image-wrapper" style="transform:translateY(0%);">
                    <img src="assets/images/hit.png" class="lazyload hiddenxs">
                  <img src="assets/images/hit-mob.jpg" class="lazyload visiblexs"></div>
               </div>
               <br>
               <div class="c-home-blocks__content">
                  <div class="c-home-blocks__text mob-center">
                     <h2>Home Infusion Therapy (HIT)</h2>
                     
                  </div><br>
                  <p class="text-justify">Our Home Infusion Therapy (HIT) division brings to life the idea of “IV anywhere”. Whether you are at home, at work, or on the go, you can still receive the medication you need. Infusion therapy no longer requires hospitalization – oftentimes, it’s possible anywhere. Our team arranges home health services and we ship necessary supplies and medication directly to your doorstep, so you never even have to leave your house.</p>
                  <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3"><button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" id="reqCallback2">START HOME INFUSION</button></p>
                  <div class="c-home-blocks__quote">
                     <div class="c-home-blocks__quote-text">
                        <noscript><img src="assets/static/quote-mark.a577e4e.00348f1361ed1be08780b96b11cb0f23.svg" class="c-home-blocks__quote-mark g-image g-image--loaded" width="30" alt="&ldquo;"></noscript>
                        <div>
                          
                        </div>
                     </div>
                     
                  </div>
               </div>
            </section>

            <!-- <section class="c-home-blocks__block section-box gray-bg">
               <div class="c-home-blocks__image">
                  <div class="c-home-blocks__image-wrapper" style="transform:translateY(0%);"><img width="1584" height="2112" src="assets/images/benefit-02.jpg" class="lazyload"></div>
               </div>
               <div class="c-home-blocks__content">
                  <div class="c-home-blocks__text mob-center">
                     <h2>Home Cardiac Program</h2>
                     
                  </div>
                  <br>
                    <p class="text-justify">This program allows patients with congestive heart failure (CHF) and other cardiac complications to receive the medical care and support they need in the comfort of their own home in order to improve quality of life. Many patients in this program are in need of a heart transplant, LVAD implantation, palliative care, or hospice care. Our nurses provide customized one-on-one education for home inotrope infusion and dietary assistance.</p>
                     <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3"><button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" id="reqCallback2">Contact Vital Care</button></p>
                  <div class="c-home-blocks__quote">
                     <div class="c-home-blocks__quote-text">

                        <noscript><img src="assets/static/quote-mark.a577e4e.00348f1361ed1be08780b96b11cb0f23.svg" class="c-home-blocks__quote-mark g-image g-image--loaded" width="30" alt="&ldquo;"></noscript>
                        
                     </div>
                     
                  </div>
               </div>
            </section> -->


<!-- <section class="c-home-blocks__block section-box">
               <div class="c-home-blocks__image">
                  <div class="c-home-blocks__image-wrapper" style="transform:translateY(0%);"><img src="assets/images/tele-doc.png" class="lazyload"></div>
               </div>
               <br>
               <div class="c-home-blocks__content">
                  <div class="c-home-blocks__text mob-center">
                     <h2>Home Cystic Fibrosis Program</h2>
                     
                  </div><br>
                  <p class="text-justify">This program is tailored to patients with chronic progressive pulmonary symptoms like difficulty breathing, infections, inflammation, and respiratory failure to receive the medical support they need in the home setting. Patients in this program may be in need of a lung transplant, respiratory therapy, palliative care, or hospice care. Our nurses are experienced in cystic fibrosis management and trained to maximize therapy outcomes.</p>
                  <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3"><button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" id="reqCallback2">Contact Vital Care</button></p>
                  <div class="c-home-blocks__quote">
                     <div class="c-home-blocks__quote-text">
                        <noscript><img src="assets/static/quote-mark.a577e4e.00348f1361ed1be08780b96b11cb0f23.svg" class="c-home-blocks__quote-mark g-image g-image--loaded" width="30" alt="&ldquo;"></noscript>
                        <div>
                          
                        </div>
                     </div>
                     
                  </div>
               </div>
            </section> -->

            <section class="c-home-blocks__block section-box gray-bg">
               <div class="c-home-blocks__image">
                  <div class="c-home-blocks__image-wrapper" style="transform:translateY(0%);">
                    <img width="1584" height="2112" src="assets/images/hatp.png" class="lazyload hiddenxs">
                    <img width="1584" height="2112" src="assets/images/hatp-mob.jpg" class="lazyload visiblexs">
                  </div>
               </div>
               <div class="c-home-blocks__content">
                  <div class="c-home-blocks__text mob-center">
                     <h2>Home Antibiotic Therapy Program</h2>
                     
                  </div>
                  <br>
                    <p class="text-justify">There are many different diagnoses that require anti-infective infusions including cellulitis, orthopedic and joint infections, sepsis, complicated UTIs, pneumonia, viral or fungal infections, gastro-intestinal infections, abscesses, endocarditis, and more. We are committed to preventing hospitalizations through physician consultation with our pharmacists. Our team can help with the selection of an individualized anti-infective that will best meet the patient’s needs. We also manage each new referral and are available to assist in gathering necessary documentation for processing patient's care and can oftentimes start home health services the same day.</p>
                     <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3"><button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" id="reqCallback3">Contact Vital Care</button></p>
                  <div class="c-home-blocks__quote">
                     <div class="c-home-blocks__quote-text">

                        <noscript><img src="assets/static/quote-mark.a577e4e.00348f1361ed1be08780b96b11cb0f23.svg" class="c-home-blocks__quote-mark g-image g-image--loaded" width="30" alt="&ldquo;"></noscript>
                        
                     </div>
                     
                  </div>
               </div>
            </section>


            <section class="c-home-blocks__block section-box">
               <div class="c-home-blocks__image">
                  <div class="c-home-blocks__image-wrapper" style="transform:translateY(0%);">
                    <img src="assets/images/hnsp.png" class="lazyload hiddenxs">
                    <img src="assets/images/hnsp-mob.jpg" class="lazyload visiblexs">
                </div>
               </div>
               <br>
               <div class="c-home-blocks__content">
                  <div class="c-home-blocks__text mob-center">
                     <h2>Home Nutrition Support Program</h2>
                     
                  </div><br>
                  <p class="text-justify">This program’s focus is the provision of exemplary, customized care for patients at home receiving enteral (EN) or parenteral nutrition (PN) support therapy. Every patient is followed by a specialized nutrition support team including a pharmacist, dietitian, nurse, and IV technician the entire time he or she is on service.  A tailored care plan is designed for each patient including comprehensive assessment and follow-up by a Board-Certified Nutrition Support Dietitian. Our team collaborates with the patient’s physician, hospital and/or outpatient clinic to bridge a smooth transition to home. Our goal is to keep our patients safe with meticulous attention paid to the patient’s quality of life while on these life-saving therapies.</p>
                  <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3"><button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" id="reqCallback4">Contact Vital Care</button></p>
                  <div class="c-home-blocks__quote">
                     <div class="c-home-blocks__quote-text">
                        <noscript><img src="assets/static/quote-mark.a577e4e.00348f1361ed1be08780b96b11cb0f23.svg" class="c-home-blocks__quote-mark g-image g-image--loaded" width="30" alt="&ldquo;"></noscript>
                        <div>
                          
                        </div>
                     </div>
                     
                  </div>
               </div>
            </section>

            <section class="c-home-blocks__block section-box gray-bg">
               <div class="c-home-blocks__image">
                  <div class="c-home-blocks__image-wrapper" style="transform:translateY(0%);">
                    <img width="1584" height="2112" src="assets/images/ivig.png" class="lazyload hiddenxs">
                    <img width="1584" height="2112" src="assets/images/ivig-mob.jpg" class="lazyload visiblexs">
                </div>
               </div>
               <div class="c-home-blocks__content">
                  <div class="c-home-blocks__text mob-center">
                     <h2>Home Immunoglobulin (IVIG) (SCIG) Therapy Program</h2>
                     
                  </div>
                  <br>
                    <p class="text-justify">Immune globulin (Ig) is a tested and safe solution made from human plasma containing antibodies and can be given intravenously (IVIG) meaning through a vein or subcutaneously (SCIG or SubQ) meaning under the skin. This therapy is used to protect patients that are unable to fight infections due to a low production of antibodies, or someone whose immune system is attacking their body’s healthy cells. Ig is prepared from blood donated by thousands of people, creating a super-concentrated collection of antibodies capable of warding off viruses and/or bacteria. We offer multiple care options for IVIG and SCIG infusions. Care options for our patients include home infusion, medical suite infusion, and infusion centers (IVCs).</p>
                     <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3"><button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" id="reqCallback5">Contact Vital Care</button></p>
                  <div class="c-home-blocks__quote">
                     <div class="c-home-blocks__quote-text">

                        <noscript><img src="assets/static/quote-mark.a577e4e.00348f1361ed1be08780b96b11cb0f23.svg" class="c-home-blocks__quote-mark g-image g-image--loaded" width="30" alt="&ldquo;"></noscript>
                        
                     </div>
                     
                  </div>
               </div>
            </section>

            <section class="c-home-blocks__block section-box">
               <div class="c-home-blocks__image">
                  <div class="c-home-blocks__image-wrapper" style="transform:translateY(0%);">
                    <img src="assets/images/hhpm.png" class="lazyload hiddenxs">
                    <img src="assets/images/hhpm-mob.jpg" class="lazyload visiblexs">
                  </div>
               </div>
               <br>
               <div class="c-home-blocks__content">
                  <div class="c-home-blocks__text mob-center">
                     <h2>Home Hospice & Pain Management</h2>
                     
                  </div><br>
                  <p class="text-justify">Our commitment to our patients with pain and other related symptoms is to maximize their comfort and improve their quality of life. We focus on controlling our patient’s pain symptoms while maintaining their awareness and cognitive function. Our pharmacists are trained to provide equal analgesic dosing to provide a smooth transition from oral or transdermal pain medications to IV or SubQ pain management. Hospice patients take immediate priority in the pharmacy. Their medications are prepared immediately and delivered to the bedside as soon as possible to provide pain relief.</p>
                  <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3"><button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" id="reqCallback6">Contact Vital Care</button></p>
                  <div class="c-home-blocks__quote">
                     <div class="c-home-blocks__quote-text">
                        <noscript><img src="assets/static/quote-mark.a577e4e.00348f1361ed1be08780b96b11cb0f23.svg" class="c-home-blocks__quote-mark g-image g-image--loaded" width="30" alt="&ldquo;"></noscript>
                        <div>
                          
                        </div>
                     </div>
                     
                  </div>
               </div>
            </section>


</div>




  <div class="l-max-width" style="background-color: #fff;text-align: center;padding: 2rem 0rem;">
      <div class="l-container l-container--gutters">
         <div>
            <h2>
               <div class="heading-inner">INFUSION CENTER ORDER FORMS</div>
            </h2>
            
         </div>
         <div class="c-home-blocks c-home__intro">
            <button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn " style="display: inline-block;width: 240px;text-align: center;" onclick="window.open('assets/pdf/ACTEMRA-(TOCILIZUMAB)-INFUSION-ORDERS.pdf')" target="_blank"> IVIG</button>

            <button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" style="display: inline-block;width: 240px;text-align: center;" onclick="window.open('assets/pdf/Oncology-Patient-Ref-Form-Vital-Care.pdf')" target="_blank"> Oncology</button>

            
            
            
         </div>
         
         


      </div>
   </div>


    
</main>

<?php
include("footer.php")
?>
    <!-- <script src="assets/js/app.faaccc82.js" defer></script> --><!-- <script src="assets/js/page--src--pages--index-vue.5bdbb0dc.js" defer></script> --><!-- <script src="assets/js/page--src--pages--covid-19-vue_page--src--pages--for-companies-vue_page--src--pages--index-vue.d162b93a.js" defer></script> -->
    <script src='assets/js/slick.min.js'></script>
    <script src='assets/js/slick-animation.min.js'></script>
    <script src="assets/js/aos.js"></script>
    <script type="text/javascript">
      $('.slider').slick({
          autoplay: true,
          speed: 1500,
          lazyLoad: 'progressive',
          arrows: false,
          dots: true,
        }).slickAnimation();
            </script>
            <script>
          AOS.init();
    </script>
  

<!-- 
  <script type="text/javascript">
  $('#elem').on('DOMMouseScroll mousewheel', function (e) {
  if(e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) { //alternative options for wheelData: wheelDeltaX & wheelDeltaY
    //scroll down
    $(".c-home-blocks__shape").addClass("down-move");
    $(".c-home-blocks__shape").removeClass("up-move");
    console.log('Down');
  } else {
    //scroll up
    $(".c-home-blocks__shape").addClass("up-move");
    $(".c-home-blocks__shape").removeClass("down-move");
    console.log('Up');
  }
});
</script> -->
<script src="//code.tidio.co/khpu65xbhojkuultudavqckcnyozdc8u.js" async></script>
<script src='https://www.google.com/recaptcha/api.js'></script>



<!-- <script>
var modal1 = document.getElementById("myModal");


var span1 = document.getElementsByClassName("close")[0];

$(document).ready(function() {
  modal1.style.display = "block";
});

span1.onclick = function() {
  modal1.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script> -->
<script>
// Get the modal
var modal = document.getElementById("callbackModal");

// Get the button that opens the modal
var online = document.getElementById("online");
var btn = document.getElementById("reqCallback");
var btn2 = document.getElementById("reqCallback2");
var btn3 = document.getElementById("reqCallback3");
var btn4 = document.getElementById("reqCallback4");
var btn5 = document.getElementById("reqCallback5");
var btn6 = document.getElementById("reqCallback6");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeForm")[0];

// When the user clicks the button, open the modal 
online.onclick = function() {
  modal.style.display = "block";
}
btn.onclick = function() {
  modal.style.display = "block";
}

btn2.onclick = function() {
  modal.style.display = "block";
}
btn3.onclick = function() {
  modal.style.display = "block";
}
btn4.onclick = function() {
  modal.style.display = "block";
}
btn5.onclick = function() {
  modal.style.display = "block";
}
btn6.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<script type="text/javascript">
  var lastScrollTop = 20000;
$(window).scroll(function(event){
  var wid = $(window).width();
   var st = $(this).scrollTop();
   var numstr = st.toString();
    numstr = numstr.substring(0, 2);
   var strg=numstr.trim();
   var mart=parseInt(strg);
   console.log('st='+st+', mart='+mart+', wid='+wid);   
    if (st > lastScrollTop){
    
    if(st >1000 && st<3000 && wid>768){
        $(".c-home-blocks__shape").css("margin-top",mart+"rem");
        }
        else
        {
          return false;
        }
   } 
   else {
    
    if(st >1000 && st<3000 && wid>768)
    {
      $(".c-home-blocks__shape").css("margin-top",mart+"rem");
    }
   else
    {
      return false;
    }  
   }
   lastScrollTop = st;
});
</script>
<script type="text/javascript">
      $(document).on('click', '#chat-now', function() {

            $(".closeForm").click();
           tidioChatApi.open();
        });
    </script>
  </body>

</html>
