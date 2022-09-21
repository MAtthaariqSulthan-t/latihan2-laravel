{{-- halaman script --}}
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Style Blog a Blogging Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
{{-- pawang menu --}}
    @include('includes.menu')
{{-- pawang conten --}}
    @yield('content')
{{-- untuk footer hingga akhir--}}
<div class="footer">
    <div class="container">
        <div class="col-md-4 footer-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            <h4>About Me</h4>
            <p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
            <img src="images/t4.jpg" class="img-responsive" alt="">
                <div class="bht1">
                    <a href="singlepage.html">Read More</a>
                </div>
        </div>
        <div class="col-md-4 footer-middle wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
        <h4>Latest Tweet</h4>
        <div class="mid-btm">
            <p>Sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
            <a href="https://w3layouts.com/">https://w3layouts.com/</a>
        </div>

            <p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
            <a href="https://w3layouts.com/">https://w3layouts.com/</a>

        </div>
        <div class="col-md-4 footer-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            <h4>Newsletter</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <div class="name">
                        <form action="#" method="post">
                            <input type="text" placeholder="Your Name" required="">
                            <input type="text" placeholder="Your Email" required="">
                            <input type="submit" value="Subscribed Now">
                        </form>

                    </div>

                        <div class="clearfix"> </div>

        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            <div class="container">
                <p>© 2016 Style Blog. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
</body>
</html>
