<!DOCTYPE html>
<html data-html-server-rendered="true" lang="en" data-vue-tag="%7B%22lang%22:%7B%22ssr%22:%22en%22%7D%7D">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Download form | Vital Care</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link rel="stylesheet" href="assets/css/0.styles.1e9d37b3.css">
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/normalize.min.css">
    <link rel='stylesheet' href='assets/css/slick.css'>
    <link rel='stylesheet' href='assets/css/modal.css'>
    <link rel='stylesheet' href='assets/css/animate.min.css'>
    <link rel="stylesheet" type="text/css" href="assets/css/newstyle.css">
    <link href="assets/css/aos.css" rel="stylesheet">
  </head>
  <body >
    <div data-server-rendered="true" class="layout">
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
        @media screen and (min-width:52.5em) {
  .c-home__intro {
    margin: 80px auto;
    width: 83%
  }
  


}

@media (max-width: 600px){
  .mob-banner{
    width: 100%;
    height: 50vh;
    object-fit: cover;
  }
}
      </style>
 
<?php
include("header.php");
?>
<main>
 <div id="myModal" class="modal">

  <!-- Modal content -->
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
      <div class="ani-box">
        <div class="pos-rel">
          <img src="assets/images/static.svg" class="inner-image">
          <img src="assets/images/download.png" class="outer-ring">

        </div><br>
        
        <p class="line-one">Schedule</p>
        <p class="line-two">an appointment</p>
      </div>
      <div class="ani-box">
        <div class="pos-rel">
          <img src="assets/images/mobile.svg" class="inner-image">
          <img src="assets/images/download.png" class="outer-ring">

        </div><br>
        <p class="line-one">Concierge</p>
        <p class="line-two">Call us: <a href="tel:832 487 9746">832 487 9746</a> </p>
        
      </div>
      <div class="ani-box">
        <div class="pos-rel">
          <img src="assets/images/email.svg" class="inner-image">
          <img src="assets/images/download.png" class="outer-ring">

        </div><br>
        <p class="line-one">Email</p>
        <p class="line-two"><a href="mailto:vitalcarenorthhouston@outlook.com">vitalcarenorthhouston@outlook.com</a></p>
        
      </div>
    </div>
  </div>

</div>

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
    <div >
        <img src="assets/images/form.jpg" class="mob-banner" style="width: 100%;">
     
</div>
</div>
  






    <!-- Slider ends -->
<div id="more-info" class="c-home c-home--clinicians">
   <div class="l-max-width">
      <div class="l-container l-container--gutters" style="text-align: center;">
         <div class="c-home__intro">
            <h2>
               <div class="heading-inner">INFUSION CENTER ORDER FORMS</div>
            </h2>
            
         </div>
         <div class="c-home-blocks c-home__intro">
            <button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn " style="display: inline-block;width: 240px;text-align: center;" onclick="window.open('assets/pdf/ACTEMRA-(TOCILIZUMAB)-INFUSION-ORDERS.pdf')" target="_blank"> IVIG</button>

            <button class="c-button__inner c-button__inner--solid c-button__inner--solid-green c-button__inner--square-arrow c-button__inner--ne-arrow c-button__inner--ne-arrow-white join_btn" style="display: inline-block;width: 240px;text-align: center;" onclick="window.open('assets/pdf/Oncology-Patient-Ref-Form-Vital-Care.pdf.pdf')" target="_blank"> Oncology</button>

            
            
            
         </div>
         
         
<br>
<br>
<br>
<br>

      </div>
   </div>
   <style type="text/css">
     .str-life{
      background-image: url(assets/images/banner-footer.jpg) !important;
      background-position: 50% !important;
     
     }
     .c-home-blocks__block{
      margin-bottom: 0px !important;
     }
     /*.str-life:before{
      position: absolute;
      top: 0;
      width: 100%;
      height: 100%;
      content: "";
      background: rgba(0,0,0,.4);
     }*/
     
   </style>
</div>



</main>

<?php
include("footer.php")
?>
</div>
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



<script>
// Get the modal
var modal1 = document.getElementById("myModal");


// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
$(document).ready(function() {
  modal1.style.display = "block";
});

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal = document.getElementById("callbackModal");

// Get the button that opens the modal
var btn = document.getElementById("reqCallback");
var btn2 = document.getElementById("reqCallback2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeForm")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
btn2.onclick = function() {
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
