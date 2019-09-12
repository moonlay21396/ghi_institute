@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')
    <div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Project Listing</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="#">Home </a></li>
                                <li>\ Project</li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->

        <section class="flat-row padding-small-v1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="project-listing">
                            <ul class="filter-cat v1">
                                <li class="active"><a data-filter="*" href="#"  class="flat-button">All</a></li>
                                <li><a data-filter=".information" href="#" class="flat-button">Information Tech</a></li>
                                <li><a data-filter=".photography" href="#" class="flat-button">Photography</a></li>
                                <li><a data-filter=".research" href="#" class="flat-button">Research</a></li>
                                <li><a data-filter=".economics" href="#" class="flat-button">Economics</a></li>
                            </ul>

                            <div class="project-portfolio">
                                <div class="item research economics">
                                    <div class="project-item">
                                        <div class="item-thumbnail">
                                        <a href="{{url('/portfolioSingle')}}"><img src="images/portfolio/1.jpg" alt="image"></a>
                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                            <div class="thumbnail-hoverlay-icon">
                                                <a href="{{url('/portfolioSingle')}}" class="colorbox-grid cboxElement"><i class="fa fa-search"></i></a>
                                                <a href="{{url('/portfolioSingle')}}" title="University College"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div><!-- /item-thumbnail -->

                                        <div class="project-item-content">
                                            <div class="project-item-title">
                                                <div class="project-item-title-inner">
                                                    <h4 class="item-title"><a href="{{url('/portfolioSingle')}}">University College</a></h4>
                                                    <div class="project-item-tax small-text">
                                                        <a href="{{url('/portfolioSingle')}}" class="cat-link">Economics</a> , <a href="{{url('/portfolioSingle')}}" class="cat-link">Research</a> 
                                                    </div>
                                                </div><!-- /project-item-title-inner -->
                                            </div><!-- /project-item-title -->

                                            <div class="project-item-excerpt">
                                                <div class="exerpt-text">Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium</div>
                                            </div><!-- /project-item-excerpt -->
                                        </div><!-- /project-item -->
                                    </div><!-- /project-item -->
                                </div><!-- /item -->

                                <div class="item economics photography">
                                    <div class="project-item">
                                        <div class="item-thumbnail">
                                            <a href="#"><img src="images/portfolio/2.jpg" alt="image"></a>
                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                            <div class="thumbnail-hoverlay-icon">
                                                <a href="#" class="colorbox-grid cboxElement"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" title="University College"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div><!-- /item-thumbnail -->

                                        <div class="project-item-content">
                                            <div class="project-item-title">
                                                <div class="project-item-title-inner">
                                                    <h4 class="item-title"><a href="portfolio-single.html">Corporate Identity</a></h4>
                                                    <div class="project-item-tax small-text">
                                                        <a href="#" class="cat-link">Economics</a> , <a href="#" class="cat-link">Photography</a> 
                                                    </div>
                                                </div><!-- /project-item-title-inner -->
                                            </div><!-- /project-item-title -->

                                            <div class="project-item-excerpt">
                                                <div class="exerpt-text">Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium</div>
                                            </div><!-- /project-item-excerpt -->
                                        </div><!-- /project-item -->
                                    </div><!-- /project-item -->
                                </div><!-- /item -->

                                <div class="item research economics">
                                    <div class="project-item">
                                        <div class="item-thumbnail">
                                            <a href="#"><img src="images/portfolio/3.jpg" alt="image"></a>
                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                            <div class="thumbnail-hoverlay-icon">
                                                <a href="#" class="colorbox-grid cboxElement"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" title="University College"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div><!-- /item-thumbnail -->

                                        <div class="project-item-content">
                                            <div class="project-item-title">
                                                <div class="project-item-title-inner">
                                                    <h4 class="item-title"><a href="portfolio-single.html">Nam Libero Tempore</a></h4>
                                                    <div class="project-item-tax small-text">
                                                        <a href="#" class="cat-link">Economics</a> , <a href="#" class="cat-link">Research</a> 
                                                    </div>
                                                </div><!-- /project-item-title-inner -->
                                            </div><!-- /project-item-title -->

                                            <div class="project-item-excerpt">
                                                <div class="exerpt-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id...</div>
                                            </div><!-- /project-item-excerpt -->
                                        </div><!-- /project-item -->
                                    </div><!-- /project-item -->
                                </div><!-- /item -->

                                <div class="item information research">
                                    <div class="project-item">
                                        <div class="item-thumbnail">
                                            <a href="#"><img src="images/portfolio/4.jpg" alt="image"></a>
                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                            <div class="thumbnail-hoverlay-icon">
                                                <a href="#" class="colorbox-grid cboxElement"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" title="University College"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div><!-- /item-thumbnail -->

                                        <div class="project-item-content">
                                            <div class="project-item-title">
                                                <div class="project-item-title-inner">
                                                    <h4 class="item-title"><a href="portfolio-single.html">Greater Pleasures</a></h4>
                                                    <div class="project-item-tax small-text">
                                                        <a href="#" class="cat-link">Information Tech</a> , <a href="#" class="cat-link">Research</a> 
                                                    </div>
                                                </div><!-- /project-item-title-inner -->
                                            </div><!-- /project-item-title -->

                                            <div class="project-item-excerpt">
                                                <div class="exerpt-text">But in certain circumstances and owing to the claims of duty or the obligations of...</div>
                                            </div><!-- /project-item-excerpt -->
                                        </div><!-- /project-item -->
                                    </div><!-- /project-item -->
                                </div><!-- /item -->

                                <div class="item information photography">
                                    <div class="project-item">
                                        <div class="item-thumbnail">
                                            <a href="#"><img src="images/portfolio/5.jpg" alt="image"></a>
                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                            <div class="thumbnail-hoverlay-icon">
                                                <a href="#" class="colorbox-grid cboxElement"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" title="University College"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div><!-- /item-thumbnail -->

                                        <div class="project-item-content">
                                            <div class="project-item-title">
                                                <div class="project-item-title-inner">
                                                    <h4 class="item-title"><a href="portfolio-single.html">Power Of Choice</a></h4>
                                                    <div class="project-item-tax small-text">
                                                        <a href="#" class="cat-link">Information Tech</a> , <a href="#" class="cat-link">Photography</a> 
                                                    </div>
                                                </div><!-- /project-item-title-inner -->
                                            </div><!-- /project-item-title -->

                                            <div class="project-item-excerpt">
                                                <div class="exerpt-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates...</div>
                                            </div><!-- /project-item-excerpt -->
                                        </div><!-- /project-item -->
                                    </div><!-- /project-item -->
                                </div><!-- /item -->

                                <div class="item research economics">
                                    <div class="project-item">
                                        <div class="item-thumbnail">
                                            <a href="#"><img src="images/portfolio/6.jpg" alt="image"></a>
                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                            <div class="thumbnail-hoverlay-icon">
                                                <a href="#" class="colorbox-grid cboxElement"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" title="University College"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div><!-- /item-thumbnail -->

                                        <div class="project-item-content">
                                            <div class="project-item-title">
                                                <div class="project-item-title-inner">
                                                    <h4 class="item-title"><a href="portfolio-single.html">Occaecati Cupiditate</a></h4>
                                                    <div class="project-item-tax small-text">
                                                        <a href="#" class="cat-link">Economics</a> , <a href="#" class="cat-link">Research</a> 
                                                    </div>
                                                </div><!-- /project-item-title-inner -->
                                            </div><!-- /project-item-title -->

                                            <div class="project-item-excerpt">
                                                <div class="exerpt-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates...</div>
                                            </div><!-- /project-item-excerpt -->
                                        </div><!-- /project-item -->
                                    </div><!-- /project-item -->
                                </div><!-- /item -->

                                <div class="item information photography">
                                    <div class="project-item">
                                        <div class="item-thumbnail">
                                            <a href="#"><img src="images/portfolio/7.jpg" alt="image"></a>
                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                            <div class="thumbnail-hoverlay-icon">
                                                <a href="#" class="colorbox-grid cboxElement"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" title="University College"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div><!-- /item-thumbnail -->

                                        <div class="project-item-content">
                                            <div class="project-item-title">
                                                <div class="project-item-title-inner">
                                                    <h4 class="item-title"><a href="portfolio-single.html">An Idea</a></h4>
                                                    <div class="project-item-tax small-text">
                                                        <a href="#" class="cat-link">Information Tech</a> , <a href="#" class="cat-link">Photography</a> 
                                                    </div>
                                                </div><!-- /project-item-title-inner -->
                                            </div><!-- /project-item-title -->

                                            <div class="project-item-excerpt">
                                                <div class="exerpt-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur...</div>
                                            </div><!-- /project-item-excerpt -->
                                        </div><!-- /project-item -->
                                    </div><!-- /project-item -->
                                </div><!-- /item -->

                                <div class="item economics">
                                    <div class="project-item">
                                        <div class="item-thumbnail">
                                            <a href="#"><img src="images/portfolio/8.jpg" alt="image"></a>
                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                            <div class="thumbnail-hoverlay-icon">
                                                <a href="#" class="colorbox-grid cboxElement"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" title="University College"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div><!-- /item-thumbnail -->

                                        <div class="project-item-content">
                                            <div class="project-item-title">
                                                <div class="project-item-title-inner">
                                                    <h4 class="item-title"><a href="portfolio-single.html">Home Design</a></h4>
                                                    <div class="project-item-tax small-text">
                                                        <a href="#" class="cat-link">Economics</a>
                                                    </div>
                                                </div><!-- /project-item-title-inner -->
                                            </div><!-- /project-item-title -->

                                            <div class="project-item-excerpt">
                                                <div class="exerpt-text">Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium</div>
                                            </div><!-- /project-item-excerpt -->
                                        </div><!-- /project-item -->
                                    </div><!-- /project-item -->
                                </div><!-- /item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection