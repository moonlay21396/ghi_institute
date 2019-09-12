@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')
<style>
        
        @media(min-width: 991px){
            .flat-events .grid-item2 {
                display: inline-block;
                float: left;
                width: 75%;
            }    
        }
        @media only screen and (max-width: 991px){
            .flat-events .grid-item2 {
                display: inline-block;
                float: left;
                width: 100%!important;
            }
        }
        #myCarousel h1{
            font-size: 20px;
        }
        @media(min-width: 991px){
            #myCarousel h1{
                font-size: 60px;
            }
            .btn-ss{
                border: 1px solid #fff;
                padding: 10px 30px;
                background-color: #000;
                color: #fff;
                font-size: 20px;
                border-radius: 2px;
            }
            .btn-ss2{
                border: 1px solid #21a75d;
                padding: 10px 30px;
                background-color: #21a75d;
                color: #fff;
                font-size: 20px;
                border-radius: 2px;
            }
            .btn-ss:hover{
                background-color: rgba(0, 0, 0, 0.5);
                color: #fff;
            }
            .btn-ss2:hover{
                background-color: rgba(0, 0, 0, 0.5);
                color: #fff;
            }
        }
        .pill-right{
            border-right: 1px solid #777;
        }
        @media(max-width: 991px){
            .pill-right{
                border-right: 1px solid transparent;
            }
            #myCarousel h1{
                font-size: 40px;
            }
            .carousel-caption p,
            .carousel-caption a{
                display: none;
            }
        }    
        @media(max-width: 767px){
            .carousel-caption{
                display: none;
            }
        }    
</style>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
        
              <div class="item active">
                <img src="{{url('images/1st_Banner.png')}}" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <h1 class="main_class">Change By Creativity</h1>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque vel, distinctio veniam dignissimos fugiat eius facilis sed illum. Nostrum necessitatibus itaque tenetur ea iusto voluptatibus fugit quidem suscipit blanditiis illum?</p>
                  <br>
                  <a href="#" class="btn-ss">Online Course</a>
                  <a href="#" class="btn-ss2">Academics Course</a>
                  <br><br>
                </div>
              </div>
        
              <div class="item">
                <img src="{{url('images/2nd_Banner.png')}}" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                  <h1 class="main_class">Change By Creativy</h1>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque vel, distinctio veniam dignissimos fugiat eius facilis sed illum. Nostrum necessitatibus itaque tenetur ea iusto voluptatibus fugit quidem suscipit blanditiis illum?</p>
                  <br>
                  <a href="#" class="btn-ss">Online Course</a>
                  <a href="#" class="btn-ss2">Academics Course</a>
                  <br><br>
                </div>
              </div>
            
              <div class="item">
                <img src="{{url('images/3rd_Banner.png')}}" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                  <h1 class="main_class">Change By Creativy</h1>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque vel, distinctio veniam dignissimos fugiat eius facilis sed illum. Nostrum necessitatibus itaque tenetur ea iusto voluptatibus fugit quidem suscipit blanditiis illum?</p>
                  <br>
                  <a href="#" class="btn-ss">Online Course</a>
                  <a href="#" class="btn-ss2">Academics Course</a>
                  <br><br>
                </div>
              </div>
          
            </div>
        
          </div><!-- /.tp-banner-container -->
        
        <br><br>
        <section class="clearfix history">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 style="font-size: 30px; text-align: center;">Green Hackers Institute(GHI Myanmar)</h1>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 16px; text-align: center;" class="text-muted">
                                The Green Hackers Institute(GHI Myanmar)was established in 2019 to teach information technology and engineering with global standards.GHI Myanmar generates the knowledge to our student that to be competitive globally and to apply and stand that in their work with dignity.GHI Myanmar is committede to offering our students to ensure that their qualifications are competitive worldwide and that their work is dignified,with a focus on educational performance and results.</p>
                            <div class="sign text-center">
                                <img src="{{asset('images/welcom_sign.png')}}" class="img-fluid" alt="welcom-img">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="font-size: 20px; font-weight: bold;" >
                        <div class="name">
                            <h1 class="dr_name text-center">Dr. Aung Win Htut</h1>
                        </div>
                        <div class="name">
                            <h1 class="dr_name text-center">Ph.D (Electrical Power) (MPEI)</h1>
                        </div>
                    </div>
                    
                  </div>
        </section>
       
        <section style="background-color: #ececec;padding-top: 50px;padding-bottom: 50px;margin-top: 50px;">
            <div class="container">
                <div class="col-md-6 pill-right">
                    <h3 class="h4">
                        History
                    </h3>
                    <p class="text" style="text-align: justify;">
                        Green Hackers Institute is an information technology and engineering institute. A decade ago, Dr. Aung Win Htut and other technology specialists established Green Hacker to deliver technologies. They also provided technology seminars, workshops, and training programs in cooperation with government technological universities and computer universities. Green Hackers has been a determined initiator of the Technology Institute until today. In 2019, we compactly restructured the Green Hacker Institute under Myanmar Company Law 2017 to promote the development of Myanmar Science and Technology Industries.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3 class="h4">
                        Mission
                    </h3>
                    <ul>
                        <li><i class="fa fa-angle-right"></i> Encourage the grouwth of human resources as an innovative, skilled and ethical engineer and techincian.Promote eduction in Myanmar.</li>
                    
                    </ul>
                    <h3 class="h4">
                        Vision
                    </h3>
                    <ul>
                        <li><i class="fa fa-angle-right"></i> To generate human resources that use their capacity to operate industries from an effective practice based on the understanding of theories.</li>
                        <li><i class="fa fa-angle-right"></i> To encourage education in Myanmar with our education partner.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="flat-row padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-icon">
                            <div class="iconbox left v1">                    
                                <div class="box-header v1">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="icon-post">
                                    <div class="box-title">
                                        <a href="#">Education Organization</a>
                                    </div>
                                    <div class="box-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt lorem ipsum</p>
                                    </div>
                                </div>
                            </div><!-- /.iconbox -->

                            <div class="iconbox left v1">                    
                                <div class="box-header v2">
                                    <i class="fa fa-paper-plane"></i>
                                </div>
                                <div class="icon-post">
                                    <div class="box-title">
                                        <a href="#">Training Center</a>
                                    </div>
                                    <div class="box-content">
                                        <p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    </div>
                                </div>
                            </div><!-- /.iconbox -->

                            <div class="iconbox left v1">                    
                                <div class="box-header v3">
                                    <i class="fa fa-ticket"></i>
                                </div>
                                <div class="icon-post">
                                    <div class="box-title">
                                        <a href="#">Event</a>
                                    </div>
                                    <div class="box-content">
                                        <p>You can use this theme for university, training center, non-profit organization. There is no limits to University.</p>
                                    </div>
                                </div>
                            </div><!-- /.iconbox -->

                            <div class="iconbox left">                    
                                <div class="box-header v4">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="icon-post">
                                    <div class="box-title">
                                        <a href="#">Online Training</a>
                                    </div>
                                    <div class="box-content">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                    </div>
                                </div>
                            </div><!-- /.iconbox -->

                            <div class="iconbox left">                    
                                <div class="box-header v5">
                                    <i class="fa fa-cubes"></i>
                                </div>
                                <div class="icon-post">
                                    <div class="box-title">
                                        <a href="#">Blog</a>
                                    </div>
                                    <div class="box-content">
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur dignissimos</p>
                                    </div>
                                </div>
                            </div><!-- /.iconbox -->

                            <div class="iconbox left">                    
                                <div class="box-header v6">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="icon-post">
                                    <div class="box-title">
                                        <a href="#">Contact</a>
                                    </div>
                                    <div class="box-content">
                                        <p>We provide free support for customers from Monday to Friday. Contact us for any issues you have</p>
                                    </div>
                                </div>
                            </div><!-- /.iconbox -->
                        </div><!-- /flat-icon -->
                    </div>
                </div>
            </div><!-- /.container -->   
        </section><!--/flat-row -->

        <section class="flat-row padding-v2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-events">
                            <div class="grid-item color-full">
                                <div class="event-item">
                                    <div class="grid-item-content">
                                        <h1 class="title">Our Courses</h1>
                                        <p>Cras site amet nibh libero, in gravida nulla dignissimos</p>
                                        <a class="flat-button" href="{{url('courseList')}}">VIEW COURSE <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item2">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <a href="#"><img src="{{$academic_course['0']['photo_url']}}" alt="image" style="width: 100%; height: 345px;">
                                            </a>
                                        </div><!-- /event-thumbnail -->

                                        <div class="date-block">
                                            <div class="month">OCT</div>
                                            <div class="day">1</div>
                                        </div><!-- /date-block -->

                                        <div class="event-overlay">
                                            <div class="cs-post-header">
                                                <div class="cs-category-links">
                                                    <a class="overlay-top" href="#">
                                                        <h4>{{$academic_course['0']['name']}}</h4>
                                                        <span class="price yellow">{{$academic_course['0']['fee']}} MMK</span>
                                                    </a>

                                                    <div class="overlay-footer">
                                                        <div>
                                                            {{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($academic_course['0']['description'])),150)}}
                                                        </div>
                                                    </div>
                                                </div>                                
                                            </div> 
                                        </div><!-- /event-overlay -->
                                    </div>
                                </div>
                            </div>

                            @foreach($other_course as $data)
                            <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <a href="#">
                                                <img src="{{$data->photo_url}}" alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->
                                        
                                        <div class="date-block">
                                            <div class="month">
                                                @php
                                                    $date = $data->start_date;
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
                                            <div class="day">{{substr($data->start_date,8)}}</div>
                                        </div><!-- /date-block -->

                                        <div class="event-overlay">
                                            <div class="cs-post-header">
                                                <div class="cs-category-links">
                                                    <a class="overlay-top" href="#">
                                                        <h4>{{$data->name}}</h4>
                                                        <span class="price yellow">{{$data->fee}} MMK</span>
                                                    </a>

                                                    <div class="overlay-footer">
                                                        <div>
                                                            {{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($data->description)),70)}}
                                                        </div>
                                                    </div>
                                                </div>                                
                                            </div> 
                                        </div><!-- /event-overlay -->
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="flat-row full-color">
            <div class="container">                
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-reviews">
                            <div class="flat-causes">
                                <div class="featured-causes" data-item="3" data-nav="false" 
                                    data-dots="false" data-auto="false">
                                    <div class="item">
                                        <div class="text">
                                            <p>GHI is a great place to develop your skills. Great teachers and excellent modules supported</p>
                                        </div>

                                        <div class="title-testimonial">
                                            <div class="thumb-title">
                                                <img src="{{asset('images/testi/testi_3.png')}}" alt="image">
                                            </div>
                                            <div class="post-title">
                                                <h6 class="title-post">Ye Myint Soe</h6>
                                        
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="text">
                                            <p>It is one of the best institute in Myanmar.</p>
                                        </div>
                                        <div class="title-testimonial">
                                            <div class="thumb-title">
                                                <img src="{{asset('images/testi/testi_4.png')}}" alt="image">
                                            </div>
                                            <div class="post-title">
                                                <h6 class="title-post">Nyan Hlwanhtet</h6>
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="text">
                                            <p>I got so many programming knowledge and experience. Thanks and love Green Hackers Institute.</p>
                                        </div>
                                        <div class="title-testimonial">
                                            <div class="thumb-title">
                                                <img src="{{asset('images/testi/testti_2.png')}}" alt="image">
                                            </div>
                                            <div class="post-title">
                                                <h6 class="title-post">Ko Zin Hein</h6>
        
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item">
                                        <div class="text">
                                            <p>I gained a lot of experiences during the internship period. I got too many friends and I think that I have improved in social and technology. Thank for your kindness and patience. More and more success in future. Love you , my second family, Green Hackers Institute ❤️🖤</p>
                                        </div>
                                        <div class="title-testimonial">
                                            <div class="thumb-title">
                                                <img src="{{asset('images/testi/testti_1.png')}}" alt="image">
                                            </div>
                                            <div class="post-title">
                                                <h6 class="title-post">Kyi Sin Thant</h6>
        
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>     
                    </div>
                </div>  
            </div>
        </section><!-- /flat-row -->


        <section class="flat-row flat-ev-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="h3 text-center text-success">
                            in cooperation with
                        </h3>
                        <br>
                    </div>
                    <div class="col-md-12 margin-small">
                        <div class="flat-carousel v1 style-margin">
                            <div class="post-wrap">                    
                                <div class="posts-carousel v1 v2">
                                    <div class="flat-event">
                                        <div class="flat-blog-carousel client_carousel" data-item="2" data-nav="true" data-dots="false" data-auto="true">
                                            <div class="grid-item">
                                                <div class="grid-item-inner">
                                                    <div class="event-item">
                                                        <div class="event-thumbnail">
                                                            <img src="{{asset('images/client_logo/MESI_MYEIK.png')}}" alt="image">
                                                            </a>
                                                        </div><!-- /event-thumbnail -->

                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid-item">
                                                <div class="grid-item-inner">
                                                    <div class="event-item">
                                                        <div class="event-thumbnail">
                                                            <a href="#">
                                                                <img src="{{asset('images/client_logo/MTI.png')}}" alt="image">
                                                            </a>
                                                        </div><!-- /event-thumbnail -->
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid-item">
                                                <div class="grid-item-inner">
                                                    <div class="event-item">
                                                        <div class="event-thumbnail">
                                                            <a href="#">
                                                                <img src="{{asset('images/client_logo/trust.png')}}" alt="image">
                                                            </a>
                                                        </div><!-- /event-thumbnail -->
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid-item">
                                                <div class="grid-item-inner">
                                                    <div class="event-item">
                                                        <div class="event-thumbnail">
                                                            <a href="#">
                                                                <img src="{{asset('images/client_logo/Untitled-2.png')}}" alt="image">
                                                            </a>
                                                        </div><!-- /event-thumbnail -->
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid-item">
                                                <div class="grid-item-inner">
                                                    <div class="event-item">
                                                        <div class="event-thumbnail">
                                                            <a href="#">
                                                                <img src="{{asset('images/client_logo/Untitled-3.png')}}" alt="image">
                                                            </a>
                                                        </div><!-- /event-thumbnail -->
                                                        
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid-item">
                                                <div class="grid-item-inner">
                                                    <div class="event-item">
                                                        <div class="event-thumbnail">
                                                            <a href="#">
                                                                <img src="{{asset('images/client_logo/WCC.png')}}" alt="image">
                                                            </a>
                                                        </div><!-- /event-thumbnail -->
                                                        
                                                       
                                                    </div>
                                                </div>
                                            </div>



                                        </div><!-- /flat-blog-carousel -->
                                    </div><!-- /flat-event -->
                                </div><!-- /posts-carousel -->
                            </div><!-- /post-wrap -->
                        </div><!-- /flat-carousel -->

                    </div><!-- /col-md-9 -->
                </div>
            </div>
        </section>
@endsection