@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')
    <div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Professors</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="#">Home </a></li>
                                <li>\ Member</li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->

        <section class="flat-row padding-small-v1">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="project-listing">
                            

                            <div class="project-portfolio v1">
                            @foreach($member as $data)
                                <div class="item d">
                                    <div class="thumb-item">
                                        <div class="item-thumbnail">
                                            <a href="{{url('memberSingle/'.$data->id)}}"><img src="{{$data->photo_url}}" alt="image" style="width: 100%; height: 275px;"></a>
                                        </div><!-- /item-thumbnail -->

                                        <div class="item-content">
                                            <h3 class="item-title">
                                                <a href="{{url('memberSingle/'.$data->id)}}">{{$data->name}}</a>
                                            </h3>
                                            <h4 class="small-text">{{$data->position}}</h4>
                                            <!-- <p>
                                                {{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($data->description)),100)}}
                                            </p> -->
                                            <ul class="list-inline social-light">
                                                <li><a class="btn btn-default social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="btn btn-default social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a class="btn btn-default social-icon" href="{{$data->fb_link}}"><i class="fa fa-facebook"></i></a></li>
                                            </ul>
                                        </div><!-- /item-content -->
                                    </div><!-- /thumb-item -->
                                </div><!-- /item -->
                            @endforeach
                            </div>
                        </div>
                    </div><!-- /col-md-9 -->

                    <div class="col-md-3">
                        <!-- sidebar -->
                        @include('user.site_user.user_sidebar')
                        <!-- /sidebar -->
                    </div><!-- /col-md-3 -->
                </div>
            </div>
        </section>
@endsection