@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')
    <div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
{{--                            <h2 class="title">Danny Awesome</h2>--}}
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="#">Home </a></li>
                                <li> \ MEMBER</li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->

        <!-- Blog posts -->
        <section class="flat-row flat-member-single padding-v1">
            <div class="container">
                <div class="row">
                    <div class="member-single">
                        <div class="col-md-9">
                            <div class="member-single-post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="item-thumbnail">
                                            <a href="#"><img src="{{$member_detail->photo_url}}" alt="image" style="width: 100%; height: 275px;"></a>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="content-pad">
                                            <div class="item-content">
                                                <h3 class="item-title">{{$member_detail->name}}</h3>
                                                <h4 class="pop_name">{{$member_detail->position}}</h4>
                                                <div class="member-tax small-text">
                                                    <h1 class="education"><i class="fa fa-graduation-cap"></i> Education</h1>
                                                    <a href="#" class="cat-link">University : {{$member_detail->university}}</a>
                                                    <a href="#" class="cat-link">Degree : {{$member_detail->degree}}</a>
                                                </div>

                                                <ul class="list-inline social-light">
                                                    <li><a class="btn btn-default social-icon" href="{{$member_detail->fb_link}}"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="btn btn-default social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="btn btn-default social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div><!--/content-pad-->
                                    </div><!--/col-md-8-->
                                </div><!--/row-->
                            </div><!--/member-single-post-->

                            <div class="pure-content">
                                <div class="content-pad">
                                    <p>{!! $member_detail->description !!}</p>
                                </div>
                            </div>

                            <div class="course-list-table">
                                <div class="flat-all-course">
                                    <div class="title-list v1">
                                        <h2 class="title">Events</h2>
                                    </div><!-- /title-list -->

                                    <div class="courses-list">
                                        <table class="table course-list-table">
                                            <thead class="main-color-1-bg dark-div">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Course Name</th>
                                                    <th>Duration</th>
                                                    <th>Start Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>                          
                                                <tr>
                                                    <td><a href="#">UE-001</a></td>
                                                    <td><a href="#">Science In The New Era</a></td>
                                                    <td>-4 Hours</td>
                                                    <td>June 20, 2016</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">UE-005</a></td>
                                                    <td><a href="#">How To Sell Anything</a></td>
                                                    <td>2.5 Hours</td>
                                                    <td>June 19, 2016</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /flat-list-table -->

                                <div class="flat-all-course v1 v2">
                                    <div class="title-list v1">
                                        <h2 class="title">Courses</h2>
                                    </div><!-- /title-list -->

                                    <div class="courses-list">
                                        <table class="table course-list-table">
                                            <thead class="main-color-1-bg dark-div">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Course Name</th>
                                                    <th>Duration</th>
                                                    <th>Start Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>                          
                                                <tr>
                                                    <td><a href="#">MD 5</a></td>
                                                    <td><a href="#">Master Of Gamification</a></td>
                                                    <td>4 Weeks</td>
                                                    <td>May 29, 2016</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /flat-list-table -->
                            </div>
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