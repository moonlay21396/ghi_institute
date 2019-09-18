@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')
    <div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Contact Us</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="#">Home </a></li>
                                <li>\ Contact</li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->

        <!-- contact posts -->
        <section class="main-content contact-posts">
            <div class="container">
                <div class="row">
                    <div class="post-contact">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-form">
                                        <div class="line-box"></div>
                                        <form action="{{url('send_email')}}" method="post" id="contactform" class="comment-form" novalidate="">
                                            {{ csrf_field() }}
                                            <fieldset class="style-1 full-name">
                                                <input type="text" id="name" placeholder="Your name" class="tb-my-input" name="name" tabindex="1" value="" size="32" aria-required="true">
                                            </fieldset>

                                            <fieldset class="style-1 email-address">
                                                <input type="email" id="email" placeholder="Your email" class="tb-my-input" name="email" tabindex="2" value="" size="32" aria-required="true">
                                            </fieldset> 

                                            <fieldset class="style-1 subject">
                                                <input type="text" id="subject" placeholder="Subject" class="tb-my-input" name="subject" tabindex="2" value="" size="32" aria-required="true">
                                            </fieldset> 

                                            <fieldset class="message-form">
                                                <textarea id="comment-message" placeholder="Your Message" name="comment" rows="8" tabindex="4"></textarea>
                                            </fieldset>

                                            <div class="submit-wrap">
                                                <button class="flat-button button-style style-v1">Send <i class="fa fa-angle-right"></i></button>
                                            </div>             
                                        </form>
                                    </div><!-- contact-form -->
                                </div><!-- col-md-6 -->

                                <div class="col-md-12">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div id="map" style="width: 100%; height: 500px; "><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11749.146565839581!2d96.21044653812916!3d16.84339412180221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19373aae8dda7%3A0x66b1fddc29486ea!2sGreen%20Hackers%20Institute%20(GHI%20MYANMAR)!5e0!3m2!1sen!2smm!4v1568185513071!5m2!1sen!2smm" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
                                        </div>
                                    </div><!-- /container-fluid -->
                                </div>
                            </div><!-- /row-->
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
@section('js')
        @if(Session::has('success'))
            <script>
                toastr.success('{{Session("success")}}');
            </script>
        @endif
    @endsection