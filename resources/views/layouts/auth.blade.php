<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themified.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jan 2022 23:00:37 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Friend Finder | A Complete Social Network Template</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('css/style.css')}}" />
		<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/fav.png')}}"/>
	</head>
	<body>

    <!-- Header
    ================================================= -->
    <!-- <header id="header-inverse">
        <nav class="navbar navbar-default navbar-fixed-top menu">
          <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index-register.html"><img src="{{asset('images/logo.png')}}" alt="logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right main-menu">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="{{asset('images/down-arrow.png')}}" alt="" /></span></a>
                    <ul class="dropdown-menu newsfeed-home">
                      <li><a href="index.html">Landing Page 1</a></li>
                      <li><a href="index-register.html">Landing Page 2</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="{{asset('images/down-arrow.png')}}" alt="" /></span></a>
                    <ul class="dropdown-menu newsfeed-home">
                      <li><a href="newsfeed.html">Newsfeed</a></li>
                      <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                      <li><a href="newsfeed-friends.html">My friends</a></li>
                      <li><a href="newsfeed-messages.html">Chatroom</a></li>
                      <li><a href="newsfeed-images.html">Images</a></li>
                      <li><a href="newsfeed-videos.html">Videos</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="{{asset('images/down-arrow.png')}}" alt="" /></span></a>
                  <ul class="dropdown-menu login">
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="timeline-about.html">Timeline About</a></li>
                    <li><a href="timeline-album.html">Timeline Album</a></li>
                    <li><a href="timeline-friends.html">Timeline Friends</a></li>
                    <li><a href="edit-profile-basic.html">Edit: Basic Info</a></li>
                    <li><a href="edit-profile-work-edu.html">Edit: Work</a></li>
                    <li><a href="edit-profile-interests.html">Edit: Interests</a></li>
                    <li><a href="edit-profile-settings.html">Account Settings</a></li>
                    <li><a href="edit-profile-password.html">Change Password</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="{{asset('images/down-arrow.png')}}" alt="" /></span></a>
                  <ul class="dropdown-menu page-list">
                    <li><a href="index.html">Landing Page 1</a></li>
                    <li><a href="index-register.html">Landing Page 2</a></li>
                    <li><a href="newsfeed.html">Newsfeed</a></li>
                    <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                    <li><a href="newsfeed-friends.html">My friends</a></li>
                    <li><a href="newsfeed-messages.html">Chatroom</a></li>
                    <li><a href="newsfeed-images.html">Images</a></li>
                    <li><a href="newsfeed-videos.html">Videos</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="timeline-about.html">Timeline About</a></li>
                    <li><a href="timeline-album.html">Timeline Album</a></li>
                    <li><a href="timeline-friends.html">Timeline Friends</a></li>
                    <li><a href="edit-profile-basic.html">Edit Profile</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="faq.html">FAQ Page</a></li>
                    <li><a href="404.html">404 Not Found</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="contact.html">Contact</a></li>
              </ul>
              <form class="navbar-form navbar-right hidden-sm">
                <div class="form-group">
                  <i class="icon ion-android-search"></i>
                  <input type="text" class="form-control" placeholder="Search friends, photos, videos">
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        <!-- </nav>
    </header> --> 
    @include('layouts.header')
    <!--Header End--> 
    
    <!-- Landing Page Contents
    ================================================= -->
    @yield('content') 

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
    <!--Buy button-->
    {{--<a href="https://themeforest.net/cart/add_items?item_ids=18711273&amp;ref=thunder-team" target="_blank" class="btn btn-buy"><span class="italy">Buy with:</span>
    <img src="{{asset('images/envato_logo.png')}}" alt="" /><span class="price">Only $20!</span></a>--}}

    <!-- Scripts
    ================================================= -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.appear.min.js')}}"></script>
		<script src="{{asset('js/jquery.incremental-counter.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    
	</body>

<!-- Mirrored from themified.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jan 2022 23:00:47 GMT -->
</html>
