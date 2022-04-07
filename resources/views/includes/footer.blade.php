<!--subscription-box-->
<div class="row   subscription_box">
<div class="col-sm-12  text-center">
<div class="subscription_box_info py-3">
        <p class="m-0 small-font">
        Subscribe to our newsletter to get weekly
        updates on our services, special offers 
        and exclusives from our subsidiaries
        </p>
</div>
<!-- <p>Get exclusive updates.</p> -->
<form id="subscription_form">
        <small id="subs_output" style="display:block; margin-bottom:5px;"></small>
        <input type="text" class="form-control border-0" placeholder="Email" name="subs_email" id="subs_email">
        <input type="hidden" name="subscribe_form"  >
        <input type="hidden" id="user_token" name="token">
        <input type="submit" class="btn ed-btn-custom-white fw-bold" id="submit_subscribe" value="Subscribe">
</form>
<br>
</div>
</div>
<!--//subscription-box-->
<!--footer-info-->
<div class="row   footer_contact_box">
<div class="col-sm-3">
        <div class="subs_content">
                <img src="{{asset('assets/edatsu_logo/edatsu_trans.png')}}" class="img-fluid d-block mb-2" alt="edatsu logo" width="100px" >
                <span style='font-size:.9em;'>
                Site design and logo are copy right property of Edatsu Technology Limited<br>
                <strong> RC 1515280</strong>
                </span>
        </div>
</div>
<div class="col-sm-3 ">
<div class="subs_content">
        <p class="ed-underline add-poppins"><strong>OFFICE INFORMATION</strong></p>
        <ul>
                <li><i class='icon ion-email'></i> info@edatsu.com</li>
                <li><i class="icon ion-android-call"></i> +234 9018355951</li>
                <li>Mon-Fri: 9:30 AM - 9:00 PM</li>
        </ul>
</div>
</div>
<div class="col-sm-6 ">
        <div class="subs_content">
        <p class="ed-underline add-poppins"><strong>EDATSU MEDIA</strong></p>
                <div class="home_banner">
                <div class="slide-holder">
                <div class="prev_slide"><i class="icon ion-chevron-left"></i></div>
                <div class="next_slide"><i class="icon ion-chevron-right"></i></div>
                <div class="home_banner_content  animated slideInLeft">

                 @include('includes.feeds')
                 
                </div>
                </div>
                </div>
        </div>
</div>
</div>
<footer class="row">
        <div class="col-sm-12  text-center text-secondary" style='border-top:1px solid #ddd; padding:15px'>
                <p style='font-size:.9em;' ><?php echo "Edatsu techonology &copy; ".date("Y"); ?></p>
        </div>
</footer>
<!--fixed cookie alert-->
<div class="fixed_cookie_alert animated slideInUp py-4 px-3">        
        <!-- <img src="./public/assets/cookie_icon.png" width="30" height="30" alt="cookie_icon"> -->
        <span class="small-font d-block">
        We use cookies and similar technologies to collect information and to personalize the site. By continuing to use this site, you consent to the placement of these cookies and similar technologies and to our privacy practices. 
        See our <a href="privacy" class='text-warning text-decoration-none'>Privacy & Cookie policy</a></span>
         <button 
         onclick="User_Affirm_Cookie(this)";
         class='btn bg-white mt-3 small-font px-3'>ok 
        </button>
</div>
<!--fixed cookie alert-->

<!--smooth-scroll-->
<a href="#scroll-up"> 
<div class="smooth_scroll light-shadow text-center rounded-circle d-flex align-items-center justify-content-center">
         <i class="icon ion-chevron-up"></i>
</div>
</a>
<!--//smoothscroll-->

<!--whats app click to chat-->
<div class="wa_click_to_chat">
        <div>
        <span class="wa_live_indicator  text-center">
        <span style=" line-height:18px; display:block;">1</span>
        </span>
        <a href="https://wa.me/2349018355951?text=<?php echo urlencode("Hello! Edatsu"); ?>" target="_blank">
        <img src="{{asset('assets/whats_app.png')}}" class="img-fluid" alt="chat_icon">
        </a>
        </div>
</div>
<!--whats app click to chat-->

<!--mobile nav-->
<div class="smooth_navigation" id="scroll_nav">
    <div class='row'>
        <div class="col-sm-12 d-flex">
        <div class='align-middle py-3 px-3'>
            <a href='#Home'>
                <img src="./public/assets/edatsu_logo/edatsu_trans_wht.png" alt="edatsu_logo" class="img-fluid" style="width:100px;">
            </a>
        </div>
        <div class='align-middle py-3 px-3'>
        <!-- no data -->
        </div>
        </div>
    </div>
</div>
<!--mobile nav-->
<script src="https://www.google.com/recaptcha/api.js?render=6LeW2skUAAAAAMr7QNjaMVrMU5dImySvtKwgkhQD"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LeW2skUAAAAAMr7QNjaMVrMU5dImySvtKwgkhQD', {action: 'subscription'}).then(function(token) {
       //send token to the backend with a request to verify.
       document.getElementById("user_token").value = token;
    });
});
</script>
<noscript>
        <div class="no-script-warning">
        <p class="lead">Sorry, javascript is turned off.
        turn on javascript to use this site.</p>
        </div>
</noscript>


