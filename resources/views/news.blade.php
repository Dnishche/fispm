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
                <li><a class="page-scroll" href="home">Головна</a></li>
                  <li><a class="page-scroll" href="home_news">Новини</a></li>
                  <li><a class="page-scroll" href="home#chair">Кафедри</a></li>
                  <li><a class="page-scroll" href="home#students">Студентам</a></li> 
                  <li><a class="page-scroll" href="home#bottom">Контакти</a></li>    
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

<section id="blog" class="container">
        <div class="center">
            <h2>Новини</h2>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                          
                          @foreach($allNews as $news)
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date">{{ date('F d', strtotime($news->published_at)) }}</span>
                                    <span id="year">{{ date('Y', strtotime($news->published_at)) }}</span>
                                    <span><i class="fa fa-comment"></i><a href="{{'news/' . $news -> title_en}}">{{ $countOfComments }} Комента</a></span>
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="uploads/images/news/{{$news -> img_url}}" width="100%" alt="" /></a>
                                <h2><a href="{{'news/' . $news -> title_en}}">{{ $news -> title }}</a></h2>
                                <h3>{{ $news -> segment }}</h3>
                                <a class="btn btn-primary readmore" href="{{'news/' . $news -> title_en}}">Більше <i class="fa fa-angle-right"></i></a>
                            </div>
                          @endforeach

                        </div>    
                    </div><!--/.blog-item-->

                    {!! $allNews->setPath('')->render() !!}
                        
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                      {!!Form::open()!!}

                      {!!Form::text('search', null, array('class' => 'form-control search_box', 'autocomplete' => "off", 'placeholder' => 'Search'))!!}

                      {!!Form::token()!!}
                      {!!Form::close()!!}

                    </div><!--/.search-->
            
                    <div class="widget archieve">
                        <h3>Архів</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span class="pull-right">(97)</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span class="pull-right">(32)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2013 <span class="pull-right">(19)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2013 <span class="pull-right">(08)</a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->
                </aside>  

            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

@stop