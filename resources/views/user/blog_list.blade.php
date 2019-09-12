@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')
    <div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Blog</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="#">Home </a></li>
                                <li>\ Blog</li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->

        <!-- Blog posts -->
        <section class="main-content blog-posts">
            <div class="container">
                <div class="row">
                    <div class="post-wrap">
                        <div class="col-md-9">
                            <div class="blog-listing">

                            @foreach($blogs as $blog)
                                <div class="blog-item">
                                    <div class="post-item blog-post-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="content-pad">
                                                    <div class="blog-thumbnail">
                                                        <div class="item-thumbnail-gallery">
                                                            <div class="item-thumbnail">
                                                                <a href="{{url('blogSingle/'.$blog->id)}}">
                                                                    <img src="{{$blog->photo_url}}" alt="image" style="width: 100%; height: 270px;">
                                                                    <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                    <div class="thumbnail-hoverlay-cross"></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div><!--/blog-thumbnail-->
                                                    <div class="thumbnail-overflow">
                                                        <div class="comment-block main-color-1-bg dark-div">
                                                            <a href="#">
                                                                <i class="fa fa-comment"></i>0</a>
                                                        </div>
                                                        <div class="date-block main-color-2-bg dark-div">
                                                            <div class="month">
                                                                @php
                                                                    $date = $blog->created_at;
                                                                        $year = substr($date,0,4);
                                                                             $month = substr($date,5,3);

                                                                             switch ($month) {
                                                                                 case '01-':
                                                                                     echo "Jan";
                                                                                     break;

                                                                                 case '02-':
                                                                                     echo "Feb";
                                                                                     break;

                                                                                 case '03-':
                                                                                     echo "Mar";
                                                                                     break;

                                                                                 case '04-':
                                                                                     echo "Apri";
                                                                                     break;

                                                                                 case '05-':
                                                                                     echo "May";
                                                                                     break;

                                                                                 case '06-':
                                                                                     echo "Jun";
                                                                                     break;

                                                                                 case '07-':
                                                                                     echo "Jul";
                                                                                     break;

                                                                                 case '08-':
                                                                                     echo "Aug";
                                                                                     break;

                                                                                 case '09-':
                                                                                     echo "Sep";
                                                                                     break;

                                                                                 case '10-':
                                                                                     echo "Oct";
                                                                                     break;

                                                                                 case '11-':
                                                                                     echo "Nov";
                                                                                     break;

                                                                                 case '12-':
                                                                                     echo "Dec";
                                                                                     break;

                                                                                 default:

                                                                                     break;
                                                                             }
                                                                @endphp
                                                            </div>
                                                            <div class="day">{{substr($blog->created_at,8,2)}}</div>
                                                        </div>
                                                    </div>
                                                </div><!--/blog-thumbnail-->
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="content-pad">
                                                    <div class="item-content">
                                                        <h3 class="title">
                                                            <a href="{{url('blogSingle/'.$blog->id)}}" class="main-color-1-hover">{{$blog->name}}</a>
                                                        </h3>
                                                        <div class="item-excerpt blog-item-excerpt">
                                                            <p>
                                                                {{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($blog->text)),70)}}
                                                            </p>
                                                        </div>
                                                        <div class="item-meta blog-item-meta">
                                                            <span>By<span class="sep">|</span> </span>
                                                            <span><a href="#">{{$blog->user_name}}</a> </span>
                                                        </div>
                                                        <a class="button" href="{{url('blogSingle/'.$blog->id)}}">DETAIL
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--/post-item-->
                                    </div>
                                </div><!-- /blog-item -->
                                @endforeach


{{--                                <div class="blog-item">--}}
{{--                                    <div class="post-item blog-post-item">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6 col-sm-12">--}}
{{--                                                <div class="content-pad">--}}
{{--                                                    <div class="blog-thumbnail">--}}
{{--                                                        <div class="item-thumbnail-gallery">--}}
{{--                                                            <div class="featured-causes" data-item="3" data-nav="false" data-dots="false" data-auto="false">--}}
{{--                                                                <div class="item">--}}
{{--                                                                    <a href="#">--}}
{{--                                                                        <div class="item-thumbnail">--}}
{{--                                                                            <img src="images/blog/3.jpg" alt="image">--}}
{{--                                                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>--}}
{{--                                                                            <div class="thumbnail-hoverlay-cross"></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}

{{--                                                                <div class="item">--}}
{{--                                                                    <a href="#">--}}
{{--                                                                        <div class="item-thumbnail">--}}
{{--                                                                            <img src="images/blog/4.jpg" alt="image">--}}
{{--                                                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>--}}
{{--                                                                            <div class="thumbnail-hoverlay-cross"></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}

{{--                                                                <div class="item">--}}
{{--                                                                    <a href="#">--}}
{{--                                                                        <div class="item-thumbnail">--}}
{{--                                                                            <img src="images/blog/5.jpg" alt="image">--}}
{{--                                                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>--}}
{{--                                                                            <div class="thumbnail-hoverlay-cross"></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}

{{--                                                                <div class="item">--}}
{{--                                                                    <a href="#">--}}
{{--                                                                        <div class="item-thumbnail">--}}
{{--                                                                            <img src="images/blog/6.jpg" alt="image">--}}
{{--                                                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>--}}
{{--                                                                            <div class="thumbnail-hoverlay-cross"></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="thumbnail-overflow">--}}
{{--                                                        <div class="comment-block main-color-1-bg dark-div">       --}}
{{--                                                            <a href="#">--}}
{{--                                                                <i class="fa fa-comment"></i>0--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="date-block main-color-2-bg dark-div">--}}
{{--                                                            <div class="month">May</div>--}}
{{--                                                            <div class="day">28</div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-md-6 col-sm-12">--}}
{{--                                                <div class="content-pad">--}}
{{--                                                    <div class="item-content">--}}
{{--                                                        <h3 class="title"><a href="blog-single.html" class="main-color-1-hover">Our New Campus</a></h3>--}}
{{--                                                        <div class="item-excerpt blog-item-excerpt">--}}
{{--                                                            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself but because occasionally circumstances.</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="item-meta blog-item-meta">--}}
{{--                                                            <span>By<span class="sep">|</span> </span>--}}
{{--                                                            <span><a href="#">BLOG</a> <span class="dot">.</span> <a href="#"> RESEARCH</a></span>--}}
{{--                                                        </div>--}}
{{--                                                        <a class="button" href="#">DETAIL<i class="fa fa-angle-right"></i></a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- /blog-item -->--}}

{{--                                <div class="blog-item">--}}
{{--                                    <div class="post-item blog-post-item">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6 col-sm-12">--}}
{{--                                                <div class="content-pad">--}}
{{--                                                    <div class="blog-thumbnail">--}}
{{--                                                        <div class="item-thumbnail-gallery">--}}
{{--                                                            <div class="item-thumbnail">--}}
{{--                                                                 <a href="#">--}}
{{--                                                                <img src="images/blog/7.jpg" alt="image">--}}
{{--                                                                <div class="thumbnail-hoverlay main-color-1-bg"></div>--}}
{{--                                                                <div class="thumbnail-hoverlay-cross"></div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>            --}}
{{--                                                    </div><!--/blog-thumbnail-->--}}
{{--                                                    <div class="thumbnail-overflow">--}}
{{--                                                        <div class="comment-block main-color-1-bg dark-div">--}}
{{--                                                        <a href="#">--}}
{{--                                                            <i class="fa fa-comment"></i>0</a>--}}
{{--                                                        </div>--}}
{{--                                                            <div class="date-block main-color-2-bg dark-div">--}}
{{--                                                            <div class="month">May</div>--}}
{{--                                                            <div class="day">28</div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!--/blog-thumbnail-->--}}
{{--                                            </div>--}}

{{--                                            <div class="col-md-6 col-sm-12">--}}
{{--                                                <div class="content-pad">--}}
{{--                                                    <div class="item-content">--}}
{{--                                                        <h3 class="title"><a href="blog-single.html" class="main-color-1-hover">Education Organization Theme</a></h3>--}}
{{--                                                        <div class="item-excerpt blog-item-excerpt">--}}
{{--                                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum equal blame belongs.</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="item-meta blog-item-meta">--}}
{{--                                                            <span>By<span class="sep">|</span> </span>--}}
{{--                                                            <span><a href="#">Academic</a> <span class="dot">.</span><a href="#">Blog</a> <span class="dot">.</span> <a href="#">Research</a></span>--}}
{{--                                                        </div>--}}
{{--                                                        <a class="button" href="#">DETAIL<i class="fa fa-angle-right"></i></a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div><!--/post-item-->--}}
{{--                                    </div>--}}
{{--                                </div><!-- /blog-item -->--}}

                            </div><!-- /blog-listing -->
                            {{$paginate->links()}}
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