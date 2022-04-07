/**reusable ajax function */
function reusable_ajax(form_name, req_type, output, path){
    //if all conditions match, send value to the database using Ajax
    var xhttp = new XMLHttpRequest();
    var form_info = new FormData(form_name);
    xhttp.open(req_type, path, true);
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById(output).innerHTML = this.responseText;
        }
    };
    xhttp.send(form_info);
    document.getElementById(output).innerHTML = "Sending...";
}

/**
 * Get right side nav when scrolling
 */
$(document).ready(function(){
/**
 * custom navigation for slick.js
 */
$('.next_slide').click(function(){
    $('.slick-next').click();
});

$('.prev_slide').click(function(){
    $('.slick-prev').click();
});

/**
 * Add slick js carousel
 */
$('.home_banner_content').slick({
    autoplay:true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
});


/**
 * Add slick carousel for projects.
 */
$(document).ready(function(){
    $('.project-slides').slick({
        autoplay:true
    });
  });

/**
 * slick js for plugins
 */
$('.blog-slide').slick({
    autoplay:true,
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
 });

 $(".slide_elem").slick({
    dots:true,
    infinite:true,
    arrows:false,
    autoplay:true,
    mobileFirst:true
});
            
/**
 * Set cookie to true
 * when user clicks ok;
 */
var cookie_response = document.getElementById("cookie_response") || "";
/**handle error in pages where
script is not defined */
if(cookie_response !== ""){
    cookie_response.addEventListener("click", function(){
      this.parentNode.style.display = "none";
      var d = new Date();
      d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
      var expire = d.toUTCString();
      document.cookie = "ck=ed; expires='"+expire+"'; path=/;";
    })
}

/**
 * Calculate scroll height
 */
var scroll_btn = document.getElementsByClassName("smooth_scroll")[0];
scroll_btn.style.display= "none";
window.addEventListener("scroll", function(){
    cursor = window.pageYOffset;
    if(cursor > 200){
        scroll_btn.style.display = "block";
    }else{
        scroll_btn.style.display = "none";
    }
})

/**
 * Mobile smooth scroll nav
 */
if(window.screen.width <= 736){
    var scroll_nav  = document.getElementById("scroll_nav") || "";
    if(scroll_nav !== ""){
        window.addEventListener("scroll", function(){
            var cursor = window.pageYOffset;
            if(cursor > 143){
                scroll_nav.style.display = "block";
            }else{
                scroll_nav.style.display = "none";
            }
        });
    }
}


/**
 * Smooth Scrool Effect
 */
// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
// On-page links
if (
location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
&& 
location.hostname == this.hostname
) {
// Figure out element to scroll to
var target = $(this.hash);
target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
// Does a scroll target exist?
if (target.length) {
// Only prevent default if animation is actually gonna happen
event.preventDefault();
$('html, body').animate({
scrollTop: target.offset().top
}, 1000, function() {
// Callback after animation
// Must change focus!
var $target = $(target);

$target.focus();
if ($target.is(":focus")) { // Checking if the target was focused
return false;
} else {
$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
$target.focus(); // Set focus again
};
});
}
}
});

//Enabling subscription form
var submit_subs = document.getElementById("submit_subscribe");
var subs_form = document.getElementById("subscription_form");
var subs_email = document.getElementById("subs_email");
submit_subs.addEventListener("click", function(event){
    event.preventDefault();
    if(subs_email.value !== ""){
        var emailRegex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if(subs_email.value.match(emailRegex) == null){
        subs_output.innerHTML = "<span class='ajax_error'>Enter a valid email</span>";
        return false; 
        }
    }else{
        subs_output.innerHTML = "<span class='ajax_error'>Enter a valid email</span>";
        return false;
    }
    reusable_ajax(subs_form, "POST", "subs_output", "./router/post.router.php");
});


});//cls page load


//REUGULAR COOKIE -  POLICY AFFIRMATION.
//if exist, do nothing.
// if it does not exist, call user_affirm_cookie(); to display the cookie terms
window.addEventListener("load",function(){
    //when page loads, check if confirmation cookie exist.
    if(document.cookie.split(";").filter(function(val){
        if(val.trim().indexOf("ed_ck_cp") >= 0){
            return val;
        }
    }).length){
    //do nothing....
    }else{
       document.getElementsByClassName("fixed_cookie_alert")[0].style.display = "block";
    }
});

function User_Affirm_Cookie(obj){
   obj.parentNode.style.display = "none";
   var date = new Date();
   date.setTime(date.getTime() + (30*24*60*60*1000));
   var expires = "expires=" + date.toUTCString();
   //set user cookie... document.Cookie = [name, valu, expire, path, domain, secure];
   document.cookie = "ed_ck_cp=true"+ ";" + expires + ";path=/";
}

