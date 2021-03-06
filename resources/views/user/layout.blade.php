<!DOCTYPE html>
<html>
<head>
<title>NewsFeed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{url('public/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/assets/css/font.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/assets/css/li-scroller.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/assets/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/assets/css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/assets/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/assets/css/style.css')}}">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="{{url('contact_us')}}">Contact</a></li>
               
            </ul>
          </div>
          <div class="header_top_right">
            <p>{{$today_date}}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href=""><img src="{{url($add->giffile)}}" alt="" width="728px" height="90px"></a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          @foreach($menus as $menu)
          <li><a href="{{url('category-archive')}}/{{$menu->id}}">{{$menu->category}}</a></li>
          @endforeach
   
           <li class="dropdown"> <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others</a>
            <ul class="dropdown-menu" role="menu">
            @foreach($dropdowns as $dropdown)
            
              <li><a href="{{url('category-archive')}}/{{$dropdown->id}}">{{$dropdown->category}}</a></li>
              
              @endforeach
             
            </ul>
          </li>

          
          <li><a href="{{url('contact_us')}}">Contact Us</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
          @foreach($recentnews as $niraj)
            <li><a href="{{url('onlinenews')}}/{{$niraj->id}}"><img src="{{url($niraj->image)}}" alt="">{{$niraj->title}}</a></li>
           
            @endforeach
            </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="http"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
 @yield('slider')
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
        @yield('national')
          <div class="fashion_technology_area">
           @yield('world')
            <div class="technology">
             @yield('politics')
            </div>
          </div>
         @yield('economy')
        @yield('sports')
        </div>
      </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
         @yield('popularpost')
         @yield('categorylinks')
          @yield('sponsor')
          @yield('categprymenu')
        @yield('links')
        </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="left_content">
          <div class="contact_area">
            <h2>Subscribe Us</h2>
           <p>"Subscribe here to get our newsletter, it is safe just Put your Email and click subscribe"</p>
            <form action="{{url('subscribe')}}" class="contact_form">
           
              <input class="form-control" type="email" placeholder="Email*" name="email" width="100ox"">{{$errors->first('email')}}<br>
             
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Links</h2>
            <ul class="tag_nav">
            @foreach($tag as $t)
              <li><a href="{{url('category-archive')}}/{{$t->id}}">{{$t->category}}</a></li>
              @endforeach
         
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <address>
            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2045 <a href="index.html">NewsFeed</a></p>
      <p class="developer">Developed By Wpfreeware</p>
    </div>
  </footer>
</div>
<script src="{{url('public/assets/js/jquery.min.js')}}"></script> 
<script src="{{url('public/assets/js/wow.min.js')}}"></script> 
<script src="{{url('public/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{url('public/assets/js/slick.min.js')}}"></script> 
<script src="{{url('public/assets/js/jquery.li-scroller.1.0.js')}}"></script> 
<script src="{{url('public/assets/js/jquery.newsTicker.min.js')}}"></script> 
<script src="{{url('public/assets/js/jquery.fancybox.pack.js')}}"></script> 
<script src="{{url('public/assets/js/custom.js')}}"></script>
</body>
</html>