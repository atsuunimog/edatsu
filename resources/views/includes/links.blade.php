<nav class="navbar navbar-expand-lg navbar-light bg-light ed-navbar align-middle">
<a class="navbar-brand" href="./">
    <img src="{{asset('assets/edatsu_logo/edatsu_trans.png')}}" class="img-fluid" alt="edatsu logo" width="80px" >
</a>
<button  class="border-0 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="icon ion-navicon"  id="mobile_menu" style='color:black; margin:auto;'></i>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav text-dark mr-auto mt-2">

<li class='nav-item'>
    <a id="Home" class='nav-link ed-slick-underline  <?php echo ($_SERVER['REQUEST_URI'] == "/")? 'active fw-bold' : ''; ?>' href='./'>Home</a>
</li>

<li class='nav-item'>
    <a class='nav-link ed-slick-underline   <?php echo ($_SERVER['REQUEST_URI']  == "/service")? 'active fw-bold' : ''; ?>' href='service'>Service</a>
</li>

<li class='nav-item active' id='menu-bloc'>
<a class='nav-link  ed-slick-underline'>Edatsu <i class='icon ion-arrow-down-b'></i> </a>
<div id='menu-bloc-content'  class='main-menu-bloc light-shadow small-font'>
   <div class="row">
        <div class="col-sm-6">
        <p class="ed-underline fw-bold"><strong>AVAILABLE FEATURES</strong></p>
            <ul>
                 <!-- <li class='mb-2'><a href="https://media.edatsu.com" target="_blank">Edatsu media</a></li> -->
                <li class='mb-2'><a target="_blank" href="https://www.hembarecruiter.com/post-freelance-jobs">Hire freelance talents in Nigeria</a></li>
                <!-- <li class='mb-2'><a target="_blank" href="https://www.hembarecruiter.com/freelance">Find jobs in Nigeria</a></li> -->
                <li class='mb-2'><a href="wait-list">Join Edatsu Partnership Programme</a></li>
                <!--<li><a href="wait-list">Join Edatsu Affiliate Programme </a></li> -->
            </ul>
        </div>
        <!-- <div class="col-sm-6">
        <p class="ed-underline fw-bold"><strong>DEVS</strong></p>
            <ul>
                <li><a href="docs/">Docs</a></li>
                <li><a href="#">Github</a></li>
            </ul>
        </div> -->
        <div class="col-sm-6">
        <p class="ed-underline fw-bold"><strong>LEGAL</strong></p>
            <ul>
                <!-- <li><a href="support">Help</a></li> -->
                <!-- <li><a href="feedback">Feedback</a></li> -->
                <!-- <li><a href="faq">About</a></li> -->
                <!-- <li><a href="faq">FAQ</a></li> -->
                <li><a href="terms">Terms</a></li>
                <li><a href="privacy">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</div>
</li> 

</ul>
</div>
</nav>