



<form action="{{url('login/signup')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}">
NAME *:<input type="text" name="name" value="{{Request::old('name')}}">
{{$errors->first('name')}} <br>
USERNAME *:<input type="text" name="username" value="{{Request::old('username')}}">
{{$errors->first('username')}} <br>

PASSWORD *:<input type="password" name="password" value="{{Request::old('password')}}">
{{$errors->first('password')}} <br>

CONFIRM PASSWORD *:<input type="password" name="confirmpassword" value="{{Request::old('confirmpassword')}}">
{{$errors->first('confirmpassword')}} <br>

PHOTO *:<input type="file" name="image"  multiple="" value="{{Request::old('image')}}">
{{$errors->first('image')}} <br>

EMAIL *:<input type="text" name="email" value="{{Request::old('email')}}">
{{$errors->first('email')}} <br>

PHONE NO. *:<input type="bignt" name="phone" value="{{Request::old('phone')}}">
{{$errors->first('phone')}}<br>
<input type="submit" name="post" value="signup">
<h3>Fields denoted with '*' are mandatory</h3>
</form>