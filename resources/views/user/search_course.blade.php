@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')

    <div class="page-title full-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2 class="title">Course</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><a href="#">Home </a></li>
                            <li>\COURSE</li>
                        </ul>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /page-title -->

    <section class="flat-row padding-big">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-blog">
                        <div class="section-body">
                            <div class="row">
                                <div class="col-md-12 shortcode-blog-item">
                                    <div class="content-pad">
                                        <div class="post-item row">


                                        </div><!--/post-item-->
                                    </div>
                                </div><!--/shortcode-blog-item-->
                            </div><!--/row-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-blog">
                        <div class="section-body">
                            <div class="row">
                            @if(count($search) > 0)
                                    @foreach($search as $search_data)
                                        <div class="col-md-6 shortcode-blog-item">
                                            <div class="content-pad">
                                                <div class="post-item row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="content-pad">
                                                            <div class="item-thumbnail">
                                                                <a href="{{url('/courseSingle/'.$search_data->id)}}">
                                                                    <img src="{{$search_data->photo_url}}" alt="image" style="width: 100%; height: 300px;">
                                                                    <span class="thumbnail-overlay">
                                                                @php
                                                                    $date = $search_data->start_date;
                                                                        $year = substr($date,0,4);
                                                                             $month = substr($date,5,3);
                                                                             $day = substr($date,8,2);

                                                                             switch ($month) {
                                                                                 case '01-':
                                                                                     echo "January ".$day.', '.$year;
                                                                                     break;

                                                                                 case '02-':
                                                                                     echo "Febuary ".$day.', '.$year;
                                                                                     break;

                                                                                 case '03-':
                                                                                     echo "March ".$day.', '.$year;
                                                                                     break;

                                                                                 case '04-':
                                                                                     echo "April ".$day.','.$year;
                                                                                     break;

                                                                                 case '05-':
                                                                                     echo "May ".$day.', '.$year;
                                                                                     break;

                                                                                 case '06-':
                                                                                     echo "June ".$day.', '.$year;
                                                                                     break;

                                                                                 case '07-':
                                                                                     echo "July ".$day.', '.$year;
                                                                                     break;

                                                                                 case '08-':
                                                                                     echo "August ".$day.', '.$year;
                                                                                     break;

                                                                                 case '09-':
                                                                                     echo "September ".$day.', '.$year;
                                                                                     break;

                                                                                 case '10-':
                                                                                     echo "October ".$day.', '.$year;
                                                                                     break;

                                                                                 case '11-':
                                                                                     echo "Novenber ".$day.', '.$year;
                                                                                     break;

                                                                                 case '12-':
                                                                                     echo "December ".$day.', '.$year;
                                                                                     break;

                                                                                 default:

                                                                                     break;
                                                                             }
                                                                @endphp
                                                            </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="content-pad">
                                                            <div class="item-content">
                                                                <h3 class="item-title">
                                                                    <a href="{{url('/courseSingle/'.$search_data->id)}}" title="Your Career Starts Here" class="main-color-1-hover">{{$search_data->name}}</a>
                                                                </h3>
                                                                <div class="shortcode-blog-excerpt">
                                                                    {{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($search_data->description)),150)}}
                                                                </div>
                                                                <div class="item-meta">
                                                                    <a class="flat-button" href="{{url('/courseSingle/'.$search_data->id)}}" title="Your Career Starts Here">DETAILS <i class="fa fa-angle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--/post-item-->
                                            </div>
                                        </div><!--/shortcode-blog-item-->
                                    @endforeach
                                @else
                                    <h1>Result Not Found !</h1>
                                @endif
                            </div><!--/row-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection