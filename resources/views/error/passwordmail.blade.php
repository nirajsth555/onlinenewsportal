<h1>Hello</h1>
<p>
Please click the following link to change your password,
<a href="{{env('APP_URL')}}/reset/{{$user->email}}/{{$code}}">CHANGE PASSWORD</a>
</p>