@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')
   <div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Spark Of Genius</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="#">Home </a></li>
                                <li class="home"><a href="#">\ ACADEMIC </a></li>
                                <li> \</li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->

        <!-- Blog posts -->
        <section class="main-content blog-single">
            <div class="container">
                <div class="row">
                    <div class="post-wrap">
                        <div class="col-md-9">
                            <article class="post">
                                <div class="entry-wrapper">
                                    <div class="entry-box">
                                        <a href="blog-single.html">
                                            <img src="{{$blog_detail->photo_url}}" alt="images">
                                        </a>
                                    </div>

                                    <div class="post-content">
                                        <h2 class="title">{{$blog_detail->name}}</h2>
                                        <p>
                                            {!! $blog_detail->text !!}
                                        </p>
                                    </div>

{{--                                    <div class="content-pad">--}}
{{--                                        <div class="item-content">--}}
{{--                                            <div class="item-meta blog-item-meta">--}}
{{--                                                <span>By <span class="sep">|</span> </span>--}}
{{--                                                <span>JUNE 3, 2014 <span class="sep">|</span> </span>--}}
{{--                                                <span><a href="#">Academic</a> <span class="dot">.</span> <a href="#">Research</a><span class="sep">|</span></span>--}}
{{--                                                <span><a href="#"> 0 COMMENTS </a><span class="sep">|</span></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="list-inline item-content">--}}
{{--                                        <ul class="social-list">--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="btn btn-default social-icon">--}}
{{--                                                    <i class="fa fa-facebook"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="btn btn-default social-icon">--}}
{{--                                                    <i class="fa fa-twitter"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="btn btn-default social-icon">--}}
{{--                                                    <i class="fa fa-google-plus"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="btn btn-default social-icon">--}}
{{--                                                    <i class="fa fa-pinterest"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="btn btn-default social-icon">--}}
{{--                                                    <i class="fa fa-vk"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="btn btn-default social-icon">--}}
{{--                                                    <i class="fa fa-envelope"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}

{{--                                    <div class="about-author">--}}
{{--                                        <div class="author-avatar">--}}
{{--                                            <img src="images/member/1.png" alt="image">--}}
{{--                                        </div>--}}
{{--                                        <div class="author-info">--}}
{{--                                            <h4></h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="simple-navigation">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="simple-navigation-item col-md-6 col-sm-6 col-xs-6 main-color-1-bg-hover ">--}}
{{--                                                <a class="maincolor2hover">--}}
{{--                                                    <i class="fa fa-angle-left pull-left"></i>--}}
{{--                                                    <div class="simple-navigation-item-content">--}}
{{--                                                        <span>Previous</span>--}}
{{--                                                        <h4>University Ranking</h4>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            --}}
{{--                                            <div class="simple-navigation-item col-md-6 col-sm-6 col-xs-6 main-color-1-bg-hover ">--}}
{{--                                                <a class="maincolor2hover pull-right">--}}
{{--                                                    <i class="fa fa-angle-right pull-right"></i>--}}
{{--                                                    <div class="simple-navigation-item-content">--}}
{{--                                                        <span>Next</span>--}}
{{--                                                        <h4>Your Career Starts Here</h4>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="comments-area">--}}
{{--                                        <div class="comment-form-tm">--}}
{{--                                            <div class="comment-respond">--}}
{{--                                                <div class="author-current">--}}
{{--                                                    <img src="images/member/2.png" alt="image">--}}
{{--                                                </div>--}}

{{--                                                <form action="#" method="post" id="commentform" class="comment-form" novalidate="">--}}
{{--                                                    <fieldset class="style message">--}}
{{--                                                        <textarea id="comment-message" name="comment" rows="8" tabindex="4"></textarea>--}}
{{--                                                    </fieldset>--}}
{{--                                                                                --}}
{{--                                                    <fieldset class="style name-container">--}}
{{--                                                        <input type="text" id="author" placeholder="Your Name *" class="tb-my-input" name="author" tabindex="1" value="" size="32" aria-required="true">--}}
{{--                                                    </fieldset>--}}

{{--                                                    <fieldset class="style email-container">--}}
{{--                                                        <input type="text" id="email" placeholder="Your Email *" class="tb-my-input" name="email" tabindex="2" value="" size="32" aria-required="true">--}}
{{--                                                    </fieldset> --}}

{{--                                                    <fieldset class="style website-container">--}}
{{--                                                        <input type="text" id="website" placeholder="Your Website" class="tb-my-input" name="website" tabindex="2" value="" size="32" aria-required="true">--}}
{{--                                                    </fieldset>--}}

{{--                                                    <div class="submit-wrap">--}}
{{--                                                        <button class="flat-button button-style">SUBMIT</button>--}}
{{--                                                    </div>             --}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </article>
                        </div><!-- /col-md-9 -->

                        <div class="col-md-3">
                            <!-- sidebar -->
                            @include('user.site_user.user_sidebar')
                            <!-- /sidebar -->
                        </div><!-- /col-md-3 -->
                    </div>
                </div>
            </div>
        </section>
@endsection