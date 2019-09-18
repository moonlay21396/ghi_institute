@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5d78eb4dab6f1000123c8846&product=inline-share-buttons" async="async"></script>
@endsection

@section('content')
   <div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Event Single</h2>
                        </div>
                        <div class="breadcrumbs v1">
                            <ul>
                                <li class="home"><a href="#">Home </a></li>
                                <li class="home"><a href="#">\ EVENT </a></li>
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
                                    <div class="col-md-4 col-sm-5">
                                        <div class="content-pad single-event-meta">
                                            <div class="item-thumbnail">
                                                <img src="{{$event_detail->photo_url}}" alt="image" style="width: 100%; height: 270px;">
                                            </div><!--/item-thumbnail-->
{{--                                            <div class="event-description">--}}
{{--                                                Business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds.                --}}
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="content-pad single-course-detail">
                                            <div class="course-detail">
                                                <div class="course-speaker">
                                                    <h4 class="text_name">{{$event_detail->title}}</h4>
                                                    <br>
                                                    {{-- <div class="row">   
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="media professor">
                                                                <div class="pull-left v1">
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
                                                                <div class="pull-left v1">
                                                                    <a href="#" class="main-color-2">
                                                                        <img src="images/about/index1/event/single/3.jpg" alt="image">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading main-color-2"><a class="main-color-2" href="#">John Doe</a></h6>
                                                                    <span>PROFESSOR OF ECONOMICS</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>

                                                <div class="course-info row content-pad">
                                                    <div class="col-md-6 col-sm-6 v1">
                                                        <h4 class="text small-text">START</h4>
                                                        <p>{{$event_detail->date}} / {{$event_detail->timing}}</p>
{{--                                                        <h4 class="text small-text">END</h4>--}}
{{--                                                        <p>June 23, 2016 - 8:00 pm</p>--}}
                                                    </div>

                                                    <div class="col-md-6 col-sm-6">
                                                        <h4 class="text small-text">Address</h4>
                                                        {{$event_detail->location}}
                                                        <a href="#" class="map-link text">View map <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div><!--/course-info-->

                                                <div class="content-content">
                                                    <div class="content-dropcap v1">
                                                        <p>
                                                            {!! $event_detail->detail !!}
                                                        </p>
                                                    </div>



                                                    {{-- <div class="content-pad v1">
                                                        <ul class="list-inline social-light">
                                                            <li>
                                                                <a class="btn btn-default btn-lighter social-icon"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a class="btn btn-default btn-lighter social-icon"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a class="btn btn-default btn-lighter social-icon"><i class="fa fa-instagram"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div> --}}

                                                    <div class="sharethis-inline-share-buttons" data-url="www.greenhackersinstitute.com" data-title="Sharing is great!"></div>

                                                    <div class="event-more-detail">
                                                        <h4>MORE DETAIL</h4>
                                                        <h6 class="text">Phone</h6>
                                                        <p><a href="#">098-765-4321</a></p>
                                                        <h6 class="text">Email</h6>
                                                        <p><a href="#">example@email.com</a></p>
                                                    </div>

                                                    <div class="course-cta">
                                                        <p>Buy ticket to this event every pleasure is to be welcomed and every pain avoided.  </p>
                                                        <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#myModal">
                                                          JOIN THIS EVENT
                                                        </button>
                                                    </div>
                                                    
                                                    {{-- <div class="related-course">
                                                        <h3>Related Events</h3>
                                                        <div class="cr-content">
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-6 related-item">
                                                                    <div class="thumb">
                                                                        <a href="#">
                                                                            <img src="images/about/index1/event/single/4.jpg" alt="image">
                                                                            <div class="overlay"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="cr-title">
                                                                        <a href="#" class="related-cr-title main-color-1-hover">How To Sell Anything</a>
                                                                    </div>
                                                                    <div class="cr-start small-text v1">JUNE 19, 2016 9:30 AM</div>
                                                                    <div class="clear"></div>
                                                                </div>

                                                                <div class="col-md-6 col-sm-6 related-item">
                                                                    <div class="thumb">
                                                                        <a href="#">
                                                                            <img src="images/about/index1/event/single/5.jpg" alt="image">
                                                                            <div class="overlay"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="cr-title">
                                                                        <a href="#" class="related-cr-title main-color-1-hover">Science In The New Era</a>
                                                                    </div>
                                                                    <div class="cr-start small-text v1">UNE 20, 2016 4:00 PM</div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                       </div>
                                                    </div>                                  --}}
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

                <!-- The Modal -->
                <div class="modal" id="myModal" style="z-index: 99999;">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Admin Interface</h4>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form id="insert_enroll">
                                    {{csrf_field()}}
                                    <input type="hidden" name="event_id" value="{{$event_detail->id}}">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name*" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email*" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Phone*" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="job" placeholder="Job title*" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="education" placeholder="Education" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Address" name="address"></textarea>
                                    </div>
                                    <div >
                                        <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
@endsection

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {

            function reset(){
                $('#update_data')[0].reset();
            }

            $('#insert_enroll').on('submit',function (e)
            {
                e.preventDefault();
                var alldata = new FormData(this);
                $.ajax
                ({
                    type: "POST",
                    url: "{{url('insert/event_enroll')}}",
                    data:alldata,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        //alert(data);
                        console.log(data);
                        $('#myModal').modal('hide');
                        toastr.success('Insert project data successful');
                        $("#insert_enroll")[0].reset();
                    }
                });
                return false;
            });

        });
    </script>
    @endsection