

<x-guest-layout>
   
<!--top-menu-->
<div class="cover-photo home-page"  id="scroll-up">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <!--page links-->
            @include('includes.links')
            <!--page links-->
        </div>
    </div>
    <div class="row">
            <div class="col-sm-8">
                <div class="login-box">
                    <h1 class="fw-bold">
                        Build and scale your business with <span style='color:#3B77DB;'>top 1% </span>
                        talents in Africa
                    </h1>                              
                </div>
                <!--login button-->
                <div class='d-flex mb-3'>
                    @if (Route::has('login'))
                    @auth
                    <div>
                        <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                    </div>
                    @else
                    <div >
                        <a href="{{ route('login') }}" class="btn edatsu-gradient-btn">Log in</a>
                    </div>
                    @if (Route::has('register'))
                    <div class='px-3'>
                        <a href="{{ route('register') }}" class="btn edatsu-gradient-btn">Register</a>
                        <a class="btn edatsu-gradient-btn" disabled>Google Login
                        <img class='ms-1 inline-block' height="18px" width="18px" src="data:image/png;base64,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"/>
                        </a>
                    </div>
                    @endif
                    @endauth
                    @endif
                </div>
                <!--login button-->
            </div>
            <div class="col-sm-4">
            </div> 
        </div>
    </div>
</div>
<!--//top-menu-->

<div class="container">
<div class="page-wrapper">
<!--services-->
<div class="row bg-white my-3 rounded light-shadow">
    <div class="col-sm-4 light-shadow">
        <div  class='service-main-1'>
            <div class="service-content service-content-1 text-right">
                <p class='small-font fw-bold'>Hire top 1% talents in Africa</p>
                 <a href='service' class='btn edatsu-gradient-btn'>Request Service</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 light-shadow">
    <div  class='service-main-2'>
            <div class="service-content service-content-2 text-right">
                <p class='small-font fw-bold'>Join our Partner Programme</p>
                <a href='#' class='btn  edatsu-gradient-btn'>Start Earning</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4  light-shadow">
    <div  class='service-main-3'>
        <div class="service-content service-content-3 text-right">
             <p class='small-font fw-bold'>Keep up with tech updates</p>
             <a href='https://media.edatsu.com' target="_blank" class='btn  edatsu-gradient-btn'>Edatsu Media</a>
        </div>
    </div>
    </div>

    <div class="col-sm-4  light-shadow">
    <div  class='service-main-4'>
        <div class="service-content service-content-4 text-right">
             <p class='small-font fw-bold'>Learn to code at D'Sandbox</p>
             <a href='{{url('academy.docs')}}' class='btn  edatsu-gradient-btn'>Edatsu Academy</a>
        </div>
    </div>
    </div>

    <div class="col-sm-4  light-shadow">
    <div  class='service-main-5'>
        <div class="service-content service-content-5 text-right">
             <p class='small-font fw-bold'>See Product we've Developed</p>
             <a href='products' target="_blank" class='btn  edatsu-gradient-btn'>See Our Products</a>
        </div>
    </div>
    </div>

    <div class="col-sm-4  light-shadow">
    <div  class='service-main-6'>
        <div class="service-content service-content-6 text-right">
             <p class='small-font fw-bold'>Join our Q and A Community</p>
             <a href='https://community.edatsu.com' target="_blank" class='btn  edatsu-gradient-btn'>Join Community</a>
        </div>
    </div>
    </div>

    <div class="col-sm-4  light-shadow">
    <div  class='service-main-7'>
        <div class="service-content service-content-7 text-right">
             <p class='small-font fw-bold'>Shop on Edatsu Market Place</p>
             <a href='marketplace' target="_blank" class='btn  edatsu-gradient-btn'>Shop Now</a>
        </div>
    </div>
    </div>
</div>
<!--services-->

<!--why choose us-->
<div class="row py-4 bg-white my-3 rounded light-shadow">
<div class="col-sm-6  d-none d-sm-block">
    <div class="choose-us-photo">
        <div class="choose-us-child-photo-one">
            <img src="{{asset('assets/minify/coders_3-min.jpg')}}" alt="edatsu_icon" class="img-fluid rounded">
        </div>
    </div>
</div>
<div class="col-sm-6">
<h1 class="fw-bold">
    Reasons to choose our <span style='color:#3B77DB;'>Solutions</span>
</h1>
<!--base info-->
<div class="d-flex mt-3">
    <div class="pe-3">
        <div class="choose-us-circle text-center">
            <img src="{{asset('assets/icons/developer.png')}}" alt="edatsu_icon" class="img-fluid pt-2 px-2">
        </div>
    </div>
    <div class="pl-3">
        <h5 class='fw-bold m-0'>ACCESS <span style='color:#EA4335;'>TOP 1% </span> TALENTS</h5>
        <p>Get unlimited access to the top 1% talents on the African continent</p>
    </div>
</div>
<!--base info-->
<!--base info-->
<div class="d-flex mt-3">
    <div class="pe-3">
        <div class="choose-us-circle">
                <img src="{{asset('assets/icons/low_cost.png')}}" alt="edatsu_icon" class="img-fluid pt-2 px-2">
        </div>
    </div>
    <div>
        <h5 class='fw-bold mb-0'>LOWER COST</h5>
        <p>Our packages are discounted to offer the best price for quality service</p>
    </div>
</div>
<!--base info-->
<!--base info-->
<div class="d-flex mt-3">
    <div class="pe-3">
        <div class="choose-us-circle">
        <img src="{{asset('assets/icons/statistics.png')}}" alt="edatsu_icon" class="img-fluid pt-2 px-2">
        </div>
    </div>
    <div class="pl-3">
        <h5 class='fw-bold m-0'>QUALITY PRODUCT DESIGN</h5>
        <p>
            From template mock-up to a complete design or redesign, we maintain the highest quality 
            in product design.
        </p>
    </div>
</div>
<!--base info-->
<!--base info-->
<div class="d-flex mt-3">
    <div  class="pe-3">
        <div class="choose-us-circle">
        <img src="{{asset('assets/icons/settings.png')}}" alt="edatsu_icon" class="img-fluid pt-2 px-2">
        </div>
    </div>
    <div class="pl-3">
        <h5 class='fw-bold mb-0'>24/7 SUPPORT</h5>
        <p>Our support teams are online 24hrs everyday offering realtime support to users on our platform </p>
    </div>
</div>
<!--base info-->
</div>
</div>
<!--why choose us-->

</div>
<!--include footer-->
@include('includes.footer')
<!--include footer-->
</div>
</div><!--closing container-div-->

<a href='{{ route('admin-login')}}' class='text-info'>Admin Login</a>
</x-guest-layout>