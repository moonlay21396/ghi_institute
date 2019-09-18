@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')
    <div class="page-title full-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2 class="title">Events</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><a href="#">Home </a></li>
                            <li>\ EVENT</li>
                        </ul>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /page-title -->

    <section class="flat-row padding-v1">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="project-listing " style="display: block !important;height: 80px;">
                        <div class="filter-cat pull-right" style="border: 2px #eaeaea;">
                            <ul class="nav nav-pills">
                                <li class="active"><a data-toggle="tab" href="#all">All</a></li>
                                <li><a data-toggle="tab" href="#academics">Upcoming</a></li>
                                <li><a data-toggle="tab" href="#others">Past</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="all" class="tab-pane fade in active">
                            @foreach($events as $all_event)
                            <div class="event-listing event-listing-classic">
                                <article class="post-item row event-classic-item">
                                    <div class="col-md-4 col-sm-5">

                                        <div class="content-pad">
                                            <div class="item-thumbnail">
                                                <a href="{{url('/eventSingle/'.$all_event->id)}}">
                                                    <img src="{{$all_event->photo_url}}" alt="image" style="width: 100%; height: 270px;">
                                                    <div class="date-block">
                                                        <div class="month">
                                                            @php
                                                                $date = $all_event->date;
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
                                                        <div class="day">{{substr($all_event->date,8)}}</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-7">
                                        <div class="content-pad">
                                            <div class="item-content">
                                                <h3 class="item-title">
                                                    <a href="{{url('/eventSingle/'.$all_event->id)}}">{{$all_event->title}}</a>
                                                </h3>
                                                <div class="price main-color-1">{{$all_event->fee}}</div>
                                                <p>
                                                    {{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($all_event->detail)),150)}}
                                                </p>
                                                <div class="event-time">Time: {{$all_event->timing}}</div>
                                                <div class="event-address">Location: {{$all_event->location}}</div>
                                            </div>
                                            <div class="item-meta">
                                                <a class="flat-button" href="{{url('/eventSingle/'.$all_event->id)}}">DETAILS
                                                    <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div><!--/event-listing-->
                            @endforeach
                        </div>
                        {{ $paginate_event->links() }}

                        <div id="academics" class="tab-pane fade">
                            @foreach($academic_events as $academic_event)
                            <div class="event-listing event-listing-classic">
                                <article class="post-item row event-classic-item">
                                    <div class="col-md-4 col-sm-5">
                                        <div class="content-pad">
                                            <div class="item-thumbnail">
                                                <a href="{{url('/eventSingle/'.$academic_event->id)}}">
                                                    <img src="{{$academic_event->photo_url}}" alt="image" style="width: 100%; height: 270px;">
                                                    <div class="date-block">
                                                        <div class="month">
                                                            @php
                                                                $date = $academic_event->date;
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
                                                        <div class="day">{{substr($academic_event->date,8)}}</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-7">
                                        <div class="content-pad">
                                            <div class="item-content">
                                                <h3 class="item-title">
                                                    <a href="{{url('/eventSingle/'.$academic_event->id)}}">{{$academic_event->title}}</a>
                                                </h3>
                                                <div class="price main-color-1">{{$academic_event->fee}}</div>
                                                <p>
                                                    {{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($academic_event->detail)),150)}}
                                                </p>
                                                <div class="event-time">Time: {{$academic_event->timing}}</div>
                                                <div class="event-address">Location: {{$academic_event->location}}</div>
                                            </div>
                                            <div class="item-meta">
                                                <a class="flat-button" href="{{url('/eventSingle/'.$academic_event->id)}}">DETAILS
                                                    <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div><!--/event-listing-->
                            @endforeach
                        </div>
                        {{$paginate_academic_events->links()}}

                        <div id="others" class="tab-pane fade">
                            @foreach($other_events as $other_event)
                            <div class="event-listing event-listing-classic">
                                <article class="post-item row event-classic-item">
                                    <div class="col-md-4 col-sm-5">
                                        <div class="content-pad">
                                            <div class="item-thumbnail">
                                                <a href="{{url('/eventSingle/'.$other_event->id)}}">
                                                    <img src="{{$other_event->photo_url}}" alt="image" style="width: 100%; height: 270px;">
                                                    <div class="date-block">
                                                        <div class="month">
                                                            @php
                                                                $date = $other_event->date;
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
                                                        <div class="day">{{substr($other_event->date,8)}}</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-7">
                                        <div class="content-pad">
                                            <div class="item-content">
                                                <h3 class="item-title">
                                                    <a href="{{url('/eventSingle/'.$other_event->id)}}">{{$other_event->title}}</a>
                                                </h3>
                                                <div class="price main-color-1">{{$other_event->fee}}</div>
                                                <p>
                                                    {{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($other_event->detail)),150)}}
                                                </p>
                                                <div class="event-time">Time: {{$other_event->timing}}</div>
                                                <div class="event-address">Location: {{$other_event->location}}</div>
                                            </div>
                                            <div class="item-meta">
                                                <a class="flat-button" href="{{url('/eventSingle/'.$other_event->id)}}">DETAILS
                                                    <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div><!--/event-listing-->
                            @endforeach
                        </div>
                        {{$paginate_other_events->links()}}

                    </div>
                </div>

                <div class="col-md-3">
                    <!-- sidebar -->
                @include('user.site_user.user_sidebar')
                <!-- /sidebar -->
                </div><!-- /col-md-3 -->
            </div>
        </div>
    </section>
@endsection