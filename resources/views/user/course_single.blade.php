@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')
     <div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Information System</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="#">Home </a></li>
                                <li class="home"><a href="#">\ COURSE </a></li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->

        <section class="main-content course-single">
            <div class="container">
                <div class="content-course">
                    <div class="row">
                        <div class="col-md-9">
                            <article class="post-course">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="item-thumbnail">
                                            <img src="{{$course_detail->photo_url}}" alt="image">
                                        </div>

                                        {{-- <div class="course-description">
                                            <p class="course-text">Et harum quidem rerum facilis est et expedita distinctio.</p>
                                            <p class="course-dl">
                                                <a class="flat-button" href="#">See Course Brochure
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </p>
                                            <div class="course-meta">START:
                                            <div class="course-start">March 11, 2015</div>DURATION:
                                            <div class="course-start">2 weeks</div>ID:
                                            <div class="course-start">BA-039</div>
                                            </div>

                                            <div class="course-action">
                                                <div class="element-pad">
                                                    <a href="#" class="flat-button">ENROLL NOW</a>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <div class="col-md-8">
                                        <div class="content-pad single-course-detail">
                                            <div class="course-detail">
                                                <div class="course-speaker">
                                                <h4 class="text_name">{{$course_detail->name}}</h4>
                                                    {{-- <div class="row">   
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="media professor">
                                                                <div class="pull-left">
                                                                    <a href="#" class="main-color-2">
                                                                        <img src="images/about/index1/course/single/2.jpg" alt="image">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading main-color-2"><a class="main-color-2" href="#">Jacky Michaels</a></h6>
                                                                    <span>Senior Lecturer - Marketing</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                   
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="media professor">
                                                                <div class="pull-left">
                                                                    <a href="#" class="main-color-2">
                                                                        <img src="images/about/index1/course/single/3.jpg" alt="image">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading main-color-2"><a class="main-color-2" href="#">Anthony Lee</a></h6>
                                                                    <span>Junior Lecturer - Web Design</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div><!--/course-speaker-->

                                                {{-- <div class="course-info row content-pad">
                                                    <div class="col-md-6 col-sm-6">
                                                        <h4 class="text small-text">Address</h4>
                                                        Merc Campus, Melbourne, NSW                
                                                        <a href="#" class="map-link text">View map <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h4 class="text small-text">Categories</h4>
                                                        <a href="#" class="cat-link">Course</a> , <a href="#" class="cat-link">Study</a>
                                                    </div>
                                                </div><!--/course-info--> --}}

                                                <div class="content-content">
                                                    <div class="content-dropcap">
                                                        <p>
                                                            {!! $course_detail->description !!}
                                                        </p>
                                                    </div>

                                                    <div class="content-pad single-cours-social">
                                                        <ul class="list-inline social-light">
                                                            <li>
                                                                <a class="btn btn-default btn-lighter social-icon"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a class="btn btn-default btn-lighter social-icon"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                          
                                                            
                                                            <li>
                                                                <a class="btn btn-default btn-lighter social-icon"><i class="fa fa-vk"></i></a>
                                                            </li>
                                                            <li>
                                                                <a class="btn btn-default btn-lighter social-icon"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="course-cta">
                                                        {{-- <p>Et harum quidem rerum facilis est et expedita distinctio  </p> --}}
                                                        <a class="flat-button" href="#">ENROLL NOW </a>
                                                    </div>                              
                                                </div><!--/content-content-->
                                            </div><!--/course-detail-->
                                        </div><!--/single-content-detail-->         
                                    </div>
                                </div>
                            </article>
                        </div>
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