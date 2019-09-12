<div class="sidebar">
    <div class="widget widget-nav-menu">
        <div class=" widget-inner">
            <h2 class="widget-title maincolor2">Main Menu</h2>
            <div class="menu-main-navigation-container">
                <ul id="menu-main-navigation-1" class="menu">
                    <li class="menu-item">
                        <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                    </li>

                    <li class="menu-item"><a href="{{url('member')}}"><i class="fa fa-users"></i> Members</a>
                    </li>
                    <li class="sub-menu-left menu-item"><a href="{{url('eventList')}}"><i class="fa fa-bookmark"></i> Events</a>
                    </li>
                    <li class="menu-item"><a href="{{url('courseList')}}"><i class="fa fa-graduation-cap"></i> Courses</a>
                    </li>

                    <li class="multi-column menu-item"><a href="{{url('blogList')}}"><i class="
                                            fa fa-file"></i> Blogs</a>
                    </li>
                    <li class="menu-item"><a href="{{url('contact')}}"><i class="fa fa-phone"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="widget widget-search">
        <h2 class="widget-title">COURSE SEARCH</h2>
        <form method="post" id="searchform" class="u-course-search-form" action="{{url('search_course')}}">
            {{ csrf_field() }}
            <div class="input-group">
{{--                <div class="input-group-btn u-course-search-dropdown">--}}
{{--                    <button class="btn btn-default dropdown-toggle u-course-search-dropdown-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="button-label">All</span> <span class="fa fa-angle-down"></span></button>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li>--}}
{{--                            <a href="#" data-value="">All</a></li>--}}
{{--                        <li>--}}
{{--                            <a href="#" data-value="course-autumn-2014">Autumn Courses 2014</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" data-value="bachelor">Bachelor</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" data-value="course">Course</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" data-value="study-2">Study</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div><!-- /btn-group -->--}}

                <input type="text" value="" name="search" id="s" placeholder="SEARCH" class="form-control">
                <input type="hidden" name="post_type" value="u_course">
                <input type="hidden" name="u_course_cat" class="u-course-search-cat" value="">
                <span class="input-group-btn">
                    <button type="submit" id="searchsubmit" class="btn btn-default u-course-search-submit"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
    </div><!-- /widget-search -->

    <div class="widget widget-posts">
        <div class="blog-box">
            <h2 class="widget-title">LATEST BLOG</h2>
            <ul class="recent-posts clearfix">
                @foreach($latest_blogs as $latest_blog)
                <li>
                    <div class="thumb item-thumbnail">
                        <a href="{{url('blogSingle/'.$latest_blog->id)}}">
                            <img src="{{$latest_blog->photo_url}}" alt="image" style="width: 100px; height: 80px;">
                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                            <div class="thumbnail-hoverlay-cross"></div>
                        </a>
                    </div>
                    <div class="text">
                        <a href="{{url('blogSingle/'.$latest_blog->id)}}">{{$latest_blog->name}}</a>
                        <p>
                            {{substr($latest_blog->created_at,0,10)}}
                        </p>
                    </div>
                </li>
                    @endforeach
            </ul><!-- /popular-news clearfix -->
        </div>
    </div><!-- /widget-posts -->

    <div class="widget widget-courses">
        <h2 class="widget-title">COURSES LIST</h2>
        <ul class="recent-posts clearfix">
            @foreach($latest_courses as $latest_course)
            <li>
                <div class="thumb item-thumbnail">
                    <a href="{{url('/courseSingle/'.$latest_course->id)}}">
                        <img src="{{$latest_course->photo_url}}" alt="image" style="width: 100px; height: 80px;">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="{{url('/courseSingle/'.$latest_course->id)}}">{{$latest_course->name}}</a>
                    <p>{{$latest_course->start_date}}</p>
                </div>
            </li>
            @endforeach
        </ul><!-- /popular-news clearfix -->
    </div><!-- /widget-posts -->

    <div class="widget widget-posts">
        <h2 class="widget-title">EVENTS LIST</h2>
        <ul class="recent-posts clearfix">
            @foreach($latest_events as $latest_event)
            <li>
                <div class="thumb item-thumbnail">
                    <a href="{{url('/eventSingle/'.$latest_event->id)}}">
                        <img src="{{$latest_event->photo_url}}" alt="image" style="width: 100px; height: 80px;">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="{{url('/eventSingle/'.$latest_event->id)}}">{{$latest_event->title}}</a>
                    <p>{{$latest_event->date}}</p>
                </div>
            </li>
                @endforeach
        </ul><!-- /popular-news clearfix -->
    </div><!-- /widget-posts -->
</div><!-- sidebar -->