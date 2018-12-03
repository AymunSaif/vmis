<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 
  <title>DGME</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="#">

  {{-- Css for this dashboard --}}
    <link rel="icon" href="{{ asset('_monitoring/css/images/favicon.ico')}}" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('_monitoring/css/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('_monitoring/css/icon/themify-icons/themify-icons.css')}}"/>
    <link rel="stylesheet" href="{{ asset('_monitoring/css/icon/icofont/css/icofont.css')}}"/>
    <link rel="stylesheet" href="{{ asset('_monitoring/css/icon/feather/css/feather.css')}}"/>
    <link rel="stylesheet" href="{{ asset('_monitoring/css/css/style.css')}}"/>
    <link rel="stylesheet" href="{{ asset('_monitoring/css/css/jquery.mCustomScrollbar.css')}}"/>
    <link rel="stylesheet" href="{{ asset('_monitoring/css/css/pcoded-horizontal.min.css')}}"/>

    {{-- <link rel="stylesheet" href="{{ asset('_monitoring/css/icon/material-design/css/material-design-iconic-font.min.css')}}"/> --}}

@yield('styleTags')

</head>

<body>
    <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="ball-scale">
                <div class='contain'>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header nodisprint">
                    <div class="navbar-wrapper">
    
                        <div class="navbar-logo">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="feather icon-menu"></i>
                            </a>
                        <a href="{{url('/predashboard')}}">
                                {{-- <img class="img-fluid" src={{asset('_monitoring/css/images/logo.png')}} alt="Theme-Logo" /> --}}
                           <span style="font-size:20px; text-align:center;"><b>DG ( M & E)</b></span> 
                            </a>
                            <a onclick="javascript:toggleFullScreen()" style=" margin-left: 43px;">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </div>
    
                        <div class="navbar-container container-fluid">
                            <ul class="nav-left">
                                <li class="header-search">
                                   <a href="#">
                                    <b>Vehicle Management Information System - VMIS</b>
                                   </a>
                                </li>
                                {{-- <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="feather icon-maximize full-screen"></i>
                                    </a>
                                </li> --}}
                            </ul>
                            <ul class="nav-right">
                                <li class="header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="feather icon-bell"></i>
                                            <span class="badge bg-c-pink">0</span>
                                        </div>
                                <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src={{asset('_monitoring/css/images/avatar-4.jpg')}} alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Dummy</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-message-square"></i>
                                    <span class="badge bg-c-blue">3</span>
                                </div>
                            </div>
                        </li>
                    <li class="user-profile header-notification">
                        <div class="dropdown-primary dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <img src={{asset('_monitoring/css/images/avatar-0.jpg')}} class="img-radius" alt="User-Profile-Image">
                                <span>
                                    @auth
                                    {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                                    @endauth
                                </span>
                                <i class="feather icon-chevron-down"></i>
                            </div>
                            <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li>
                                    <a href="#!">
                                        <i class="feather icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.html">
                                        <i class="feather icon-user"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="email-inbox.html">
                                        <i class="feather icon-mail"></i> My Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen.html">
                                        <i class="feather icon-lock"></i> Lock Screen
                                    </a>
                                </li>
                                <li>
                                   
                                </li>
                            </ul>

                                </div>
                            </li>
                        </ul>
                    </div></div>
                </nav>
                @include('inc.fixedmenu')

        </div>      
    </div>

  
    
</body>
{{-- required --}}
<script data-cfasync="false" src="{{asset('_monitoring/js/email-decode.min.js')}}"></script>
<script src="{{asset('_monitoring/js/jquery/js/jquery.min.js')}}"></script>
<script src="{{asset('_monitoring/js/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('_monitoring/js/popper.js/js/popper.min.js')}}"></script>
<script src="{{asset('_monitoring/js/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('_monitoring/css/pages/dashboard/custom-dashboard.js')}}"></script>


{{-- slim scroll --}}
<script src="{{asset('_monitoring/js/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('_monitoring/js/modernizr/js/modernizr.js')}}"></script>
<script src="{{asset('_monitoring/js/modernizr/js/css-scrollbars.js')}}"></script>

{{-- scrollbar --}}
<script src="{{asset('_monitoring/css/js/SmoothScroll.js')}}"></script>
<script src="{{asset('_monitoring/css/js/pcoded.min.js')}}"></script>
<script src="{{asset('_monitoring/css/js/menu/menu-hori-fixed.js')}}"></script>
<script src="{{asset('_monitoring/css/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<script src="{{asset('_monitoring/css/js/script.min.js')}}"></script>
@yield("js_scripts")
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
      
        gtag('config', 'UA-23581568-13');
      </script>
</html>