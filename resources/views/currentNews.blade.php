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
                <li><a class="page-scroll" href="news">Новини</a></li>   
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

<body>

    <section id="blog" class="container">
        <div class="center">
            <h2><a href="news">Новини</a></h2>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                      @foreach($currentNews as $new)
                        <img class="img-responsive img-blog" src="uploads/images/news/{{$new -> img_url}}" width="100%" alt="" />
                            <div class="row">  
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date">day | mounts</span>
                                        <span id="year">year</span>
                                        <span><i class="fa fa-comment"></i> <a href="{{'news/' . $new -> title_en .'#comments'}}">count of Comments</a></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2>{{ $new -> title }}</h2>
                                    <p>{{ $new -> segment }}</p>
                                    <p>{!! $new -> content !!}</p>
                                </div>
                            </div>
                      @endforeach
                    </div><!--/.blog-item-->
                        
                        
                        <h1 id="comments_title">Count of Comments</h1>
                        <div class="media comment_section">
                        @foreach($comments as $comment)
                            <div class="media-body post_reply_comments">
                                <h3>{{$comment -> name}}</h3>
                                <h4>Date creating</h4>
                                <p>Comment</p>
                            </div>
                        @endforeach
                        </div> 

                        <div id="contact-page clearfix">
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="message_heading">
                                <h4>Залишити коментар</h4>
                                <p>Пам’ятайте що поля із (*) обов’язкові для заповнення.</p>
                            </div> 
      
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                                <div class="row">
                                    <div class="col-sm-5">
                                    {!! Form::open() !!}
                                        <div class="form-group">
                                            {!! Form::label('Ім’я*') !!}
                                            {!! Form::text('name', null, array('class' => 'form-control', 'required' => 'required')) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Email*') !!}
                                            {!! Form::text('email', null, array('class' => 'form-control', 'required' => 'required')) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Посилання') !!}
                                            {!! Form::text('url', null, array('class' => 'form-control')) !!}
                                        </div>                    
                                    </div>
                                    <div class="col-sm-7">                        
                                        <div class="form-group">
                                            {!! Form::label('Повідомлення*') !!}
                                            {!! Form::textarea('comment', null, array('class' => 'form-control', 'required' => 'required', 'id' => 'message', 'rows' => '8')) !!}
                                        </div>                        
                                        <div class="form-group">
                                          {!! Form::submit('Залишити коментар', array('class' => 'btn btn-primary btn-lg', 'required' => 'required')) !!}
                                        </div>
                                    {!!Form::token()!!}
                                    {!!Form::close()!!}
                                    </div>
                                </div>
                            </form>     
                        </div><!--/#contact-page-->
                    </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                                <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
            
                    <div class="widget archieve">
                        <h3>Archieve</h3>
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

         </div><!--/.blog-->

    </section><!--/#blog-->

</body>