@extends('app')


@section('content')

<!--Nav pannel-->
<header id="nav_bar" class="navbar-fixed-top">
    <nav class="top-bar navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-8">
                    <div class="navbar-nav">
                        <ul class="nav navbar-nav">
                            <li><a class="page-scroll" href="#main-slider">Головна</a></li>
                            <li><a class="page-scroll" href="#news">Новини</a></li>
                            <li><a class="page-scroll" href="#students">Студентам</a></li> 
                            <li><a class="page-scroll" href="#abiturient">Абітурієнтам</a></li>
                            <li><a class="page-scroll" href="#bottom">Контакти</a></li>    
                        </ul>
                    </div>       
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                            <li><a href="#">UA</a></li>
                            <li><a href="#">EN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!--Gallery-->
    @if ($slider)
        <section id="main-slider" class="no-margin">
            <div class="carousel slide">

                <ol class="carousel-indicators">
                    @foreach($slider as $key => $slide)
                        <li class="@if($key == 0) active @endif" data-target="#main-slider" data-slide-to="{{ $key + 1 }}"></li>
                    @endforeach
                </ol>
                
                <div class="carousel-inner">

                    @foreach($slider as $key => $slide)
                        <div class="item @if($key == 0) active @endif" style="background-image: url(uploads/images/slider/{{ $slide->img_url }})"></div>
                    @endforeach

                </div>
            </div>

            <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
            </a>
            <a class="next hidden-xs" href="#main-slider" data-slide="next">
                <i class="fa fa-chevron-right"></i>
            </a>

        </section>
    @endif

	<!--News-->
    <section id="news">
    
        <div class="container">

            <div class="center wow fadeInDown">
                <h2><a href="news">Новини</a></h2>
                <p class="lead">Найсвіжіші новини із життя факультету</p>
            </div>
                <div class="row">

                @foreach($newsForHome as $key => $news)
                    @if($news -> active)
    
                        <div class="col-xs-12 col-sm-4 col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="{{300*$key}}ms">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="uploads/images/news/{{$news -> img_url}}" alt="">    
                            </div>
    
                            <div class="overlay wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="{{300*$key}}ms">
                                <div class="recent-work-inner">
                                    <table>
                                        <tr>
                                            <td>
                                                <h3><a href="{{'news/' . $news -> title_en }}">{{$news -> title}}</a></h3> 
                                            </td>
                                        </tr>
                                    </table>
                                </div> 
                            </div>
                        </div>  

                    @endif
                @endforeach
                
                </div>     
        </div>
    </section>

<!--Students-->
<section id="students">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Студентам</h2>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="asset/images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="asset/images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="asset/images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="asset/images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="asset/images/partners/partner5.png"></a></li>
                </ul>
            </div>  

        </div>
    </section>

    <!--Abiturient-->
<section id="abiturient">
        <div class="container">
            <div class="row">
                <div class="center wow fadeInDown">
                    <h2>Абітурієнтам</h2>
                </div>
                <div class="col-xs-12 col-sm-12 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="chair">Прикладної математики</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="chair">Математичного аналізу та геометрії</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="chair">Диференціальних рівнянь</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="chair">Молекулярної фізики</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="chair">І ще якась кафедра</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1">
                                        <div class="media">
                                            <div class="media-body">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade" id="tab2">
                                        <div class="media">
                                            <div class="media-body">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade" id="tab3">
                                        <div class="media">
                                            <div class="media-body">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>
                                     
                                     <div class="tab-pane fade" id="tab4">
                                        <div class="media">
                                            <div class="media-body">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade" id="tab5">
                                        <div class="media">
                                            <div class="media-body">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>              
                </div>


            </div>
        </div>
    </section>

    <!--Bottom-->
<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Кафедри</h3>
                        <ul>
                            <li><a href="#">Прикладної математики та інформатики</a></li>
                            <li><a href="#">Математичного аналізу та алгебри</a></li>
                            <li><a href="#">Диференціальних рівнянь</a></li>
                            <li><a href="#">Молекулярної фізики</a></li>
                        </ul>
                    </div>    
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                        </ul>
                    </div>    
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                        </ul>
                    </div>    
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                        </ul>
                    </div>    
                </div>
            </div>
        </div>
    </section>

    <div id="toTop"></div>
    <div id="toNext"></div>


@stop