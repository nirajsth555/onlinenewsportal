@extends('user.contact')


@section('contactform')
 <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <form action="{{url('message_us')}}" class="contact_form">
              <input class="form-control" type="text" placeholder="Name*" name="name" value="{{Request::old('name')}}">{{$errors->first('name')}}<br>
              <input class="form-control" type="email" placeholder="Email*" name="email">{{$errors->first('email')}}<br>
              <textarea class="form-control" cols="30" rows="10" placeholder="Message*" name="message"></textarea>{{$errors->first('message')}}<br>
              <input type="submit" value="Send Message">
            </form>
          </div>
        </div>
      </div>
@stop

@section('popularpost')
 <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
            @foreach($popular as $popularnews)
              <li>
                <div class="media wow fadeInDown"> <a href="{{url('onlinenews')}}/{{$popularnews->id}}" class="media-left"> <img alt="" src="{{url($popularnews->image)}}"> </a>
                  <div class="media-body"> <a href="{{url('onlinenews')}}/{{$popularnews->id}}" class="catg_title">{{$popularnews->title}}</a> </div>
                </div>
              </li>
              @endforeach
             
            </ul>
          </div>
        </aside>
      </div>

 @stop



   