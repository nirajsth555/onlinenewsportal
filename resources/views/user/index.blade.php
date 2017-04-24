@extends('user.layout')


@section('slider')
 <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
        @foreach($sliders as $slider)
          <div class="single_iteam"> <a href="{{url('onlinenews')}}/{{$slider->id}}"> <img src="{{url($slider->image)}}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="{{url('onlinenews')}}/{{$slider->id}}">{{$slider->title}}</a></h2>
              <p>{{$slider->highlight_sentence}}</p>
            </div>
          </div>
          @endforeach
         
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span><a href="">Latest post</a></span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
            @foreach($latestnews as $latest)
              <li>
                <div class="media"> <a href="{{url('onlinenews')}}/{{$latest->id}}" class="media-left"> <img alt="" src="{{url($latest->image)}}"> </a>
                  <div class="media-body"> <a href="{{url('onlinenews')}}/{{$latest->id}}" class="catg_title">{{$latest->title}}</a> </div>
                </div>
              </li>
              @endforeach
             
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>

@stop

@section('national')
  <div class="single_post_content">
            <h2>@foreach($onemenu as $menu)<span><a href="{{url('category-archive')}}/{{$menu->id}}">{{$menu->category}}</a></span> @endforeach </h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
              @foreach($thulo as $cover)
                <li>
                  <figure class="bsbig_fig"> <a href="{{url('onlinenews')}}/{{$cover->id}}" class="featured_img"> <img alt="" src="{{url($cover->image)}}"> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{url('onlinenews')}}/{{$cover->id}}">{{$cover->title}}</a> </figcaption>
                    <p>{{$cover->highlight_sentence}}</p>
                  </figure>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="single_post_content_right">
          
              <ul class="spost_nav">
              @foreach($national as $news)
                <li>
                  <div class="media wow fadeInDown"> <a href="{{url('onlinenews')}}/{{$news->id}}" class="media-left"> <img alt="" src="{{url($news->image)}}"> </a>
                    <div class="media-body"> <a href="{{url('onlinenews')}}/{{$news->id}}" class="catg_title"></a>{{$news->title}} </div>
                  </div>
                </li>
                
                @endforeach
                
              </ul>
              
            </div>
          </div>
@stop

@section('world')
 <div class="fashion">
              <div class="single_post_content">
                <h2><span><a href="{{url('category-archive')}}/{{$twomenu->id}}">{{$twomenu->category}}</a></span></h2>
                <ul class="business_catgnav wow fadeInDown">
                @foreach($world2 as $worldpreview)
                  <li>
                    <figure class="bsbig_fig"> <a href="{{url('onlinenews')}}/{{$worldpreview->id}}" class="featured_img"> <img alt="" src="{{url($worldpreview->image)}}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="{{url('onlinenews')}}/{{$worldpreview->id}}">{{$worldpreview->title}}</a> </figcaption>
                      <p>{{$worldpreview->highlight_sentence}}</p>
                    </figure>
                  </li>
                  @endforeach
                </ul>
                <ul class="spost_nav">
                @foreach($world as $worlds)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{url('onlinenews')}}/{{$worlds->id}}" class="media-left"> <img alt="" src="{{url($worlds->image)}}"> </a>
                      <div class="media-body"> <a href="{{url('onlinenews')}}/{{$worlds->id}}" class="catg_title">{{$worlds->title}}</a> </div>
                    </div>
                  </li>
                  @endforeach
                  
                </ul>
              </div>
            </div>
@stop

@section('politics')
 <div class="single_post_content">
                <h2><span><a href="{{url('category-archive')}}/{{$threemenu->id}}">{{$threemenu->category}}</a></span></h2>
                <ul class="business_catgnav">
                @foreach($politics2 as $politicpreview)
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="{{url('onlinenews')}}/{{$politicpreview->id}}" class="featured_img"> <img alt="" src="{{url($politicpreview->image)}}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="{{url('onlinenews')}}/{{$politicpreview->id}}">{{$politicpreview->title}}</a> </figcaption>
                      <p>{{$politicpreview->highlight_sentence}}</p>
                    </figure>
                  </li>
                  @endforeach
                </ul>
                <ul class="spost_nav">
                @foreach($politics as $politic)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{url('onlinenews')}}/{{$politic->id}}" class="media-left"> <img alt="" src="{{url($politic->image)}}"> </a>
                      <div class="media-body"> <a href="{{url('onlinenews')}}/{{$politic->id}}" class="catg_title">{{$politic->title}}</a> </div>
                    </div>
                  </li>
                  @endforeach
                 
                </ul>
              </div>
@stop

@section('economy')
 <div class="single_post_content">
            <h2><span><a href="{{url('category-archive')}}/{{$fourmenu->id}}">{{$fourmenu->category}}</a></span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
              @foreach($economy2 as $economypreview)
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="{{url('onlinenews')}}/{{$economypreview->id}}"> <img src="{{url($economypreview->image)}}" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{url('onlinenews')}}/{{$economypreview->id}}">{{$economypreview->title}}</a> </figcaption>
                    <p>{{$economypreview->highlight_sentence}} </p>
                  </figure>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
              @foreach($economy as $economynews)
                <li>
                  <div class="media wow fadeInDown"> <a href="{{url('onlinenews')}}/{{$economynews->id}}" class="media-left"> <img alt="" src="{{url($economynews->image)}}"> </a>
                    <div class="media-body"> <a href="{{url('onlinenews')}}/{{$economynews->id}}" class="catg_title">{{$economynews->title}}</a> </div>
                  </div>
                </li>
                @endforeach
                
              </ul>
            </div>

@stop

@section('sports')
  <div class="single_post_content">
            <h2><span><a href="{{url('category-archive')}}/{{$fivemenu->id}}">{{$fivemenu->category}}</a></span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
              @foreach($sports2 as $sportpreview)
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="{{url('onlinenews')}}/{{$sportpreview->id}}"> <img src="{{url($sportpreview->image)}}" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{url('onlinenews')}}/{{$sportpreview->id}}">{{$sportpreview->title}}</a> </figcaption>
                    <p>{{$sportpreview->highlight_sentence}}</p>
                  </figure>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
              @foreach($sports as $sport)
                <li>
                  <div class="media wow fadeInDown"> <a href="{{url('onlinenews')}}/{{$sport->id}}" class="media-left"> <img alt="" src="{{url($sport->image)}}"> </a>
                    <div class="media-body"> <a href="{{url('onlinenews')}}/{{$sport->id}}" class="catg_title">{{$sport->title}}</a> </div>
                  </div>
                </li>
                @endforeach
                
              </ul>
            </div>
          </div>
@stop


@section('popularpost')


 <div class="single_sidebar">
            <h2><span><a href="">Popular Post</a></span></h2>
            <ul class="spost_nav">
            @foreach($popular as $populars )
              <li>
                <div class="media wow fadeInDown"> <a href="{{url('onlinenews')}}/{{$populars->id}}" class="media-left"> <img alt="" src="{{url($populars->image)}}"> </a>
                  <div class="media-body"> <a href="{{url('onlinenews')}}/{{$populars->id}}" class="catg_title">{{$populars->title}}</a> </div>
                </div>
              </li>
              @endforeach
             
            </ul>
          </div>
@stop

@section('categorylinks')
 <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                @foreach($catlinks as $categorylinks)
                  <li class="cat-item"><a href="{{url('category-archive')}}/{{$categorylinks->id}}">{{$categorylinks->category}}</a></li>
                  @endforeach
                 
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
             
            </div>
          </div>
@stop

@section('sponsor')
<div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>
@stop

@section('categorymenu')
<div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Life styles</option>
              <option>Sports</option>
              <option>Technology</option>
              <option>Treads</option>
            </select>
          </div>

@stop


@section('links')
  <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
@stop

