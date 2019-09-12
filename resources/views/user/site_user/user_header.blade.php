<div class="menu-hover">
            <div class="btn-menu">
                <span></span>
            </div><!-- //mobile menu button -->
        </div>

        <div class="header-inner-pages">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            

                            <div class="navbar-right topnav-sidebar">
                                <ul class="textwidget">
                                    <li>
                                        <a href="{{url('/portfolio')}}">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="#">Company</a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/greenhackersinstitute/?ref=br_rs" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- col-md-12 -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- Top -->    
        </div><!-- header-inner-pages -->

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-wrap">
                <div class="container">
                    <div class="header-wrap clearfix">
                        <div id="logo" class="logo">
                            <a href="{{url('/')}}" rel="home">
                                <img src="{{asset('images/ghi_logo.png')}}" alt="image">
                            </a>
                        </div><!-- /.logo -->


                        <div class="nav-wrap">

                            <nav id="mainnav" class="mainnav">
                                <ul class="menu"> 
                                    <li class="home">
                                        <a href="{{url('/')}}">Home <span class="menu-description">All Variations</span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('/courseList')}}">Courses <span class="menu-description">Research &amp; Study</span></a>
                                    </li>   
                                    <li>
                                        <a href="#">News <span class="menu-description">Our Activities</span></a>
                                        <ul class="submenu">
                                        <li><a href="{{url('/eventList')}}">Events</a></li>
                                            <li><a href="{{url('/blogList')}}">Blogs</a></li>
                                        </ul><!-- /.submenu -->
                                       
                                    </li>
                                    <li>
                                    <a href="{{url('/member')}}">Members <span class="menu-description">Our Activities</span></a>
                                       
                                    </li>
                                    <li class="has-mega-menu"><a href="{{url('/contact')}}">Contact <span class="menu-description">Simple &amp; Useful</span></a>
                                      
                                    </li>  
                                    <li>
                                        <a href="blog.html">Language <span class="menu-description">Our Language</span></a>
                                        <ul class="submenu"> 
                                            <li><a href="course-list.html"><img src="{{asset('images/client_logo/mm.png')}}"> &nbsp;Myanmar</a></li>
                                            <li><a href="course-single.html"><img src="{{asset('images/client_logo/um.png')}}"> &nbsp;English</a></li>  
                                            <li><a href="course-single.html"><img src="{{asset('images/client_logo/jp.png')}}"> &nbsp;Japanese</a></li>  
                                        </ul><!-- /.submenu -->
                                       
                                    </li> 
                                      
                                </ul><!-- /.menu -->
                            </nav><!-- /.mainnav -->
                        </div><!-- /.nav-wrap -->
                    </div><!-- /.header-wrap -->
                </div><!-- /.container-->
            </div><!-- /.header-wrap-->
        </header><!-- /.header -->