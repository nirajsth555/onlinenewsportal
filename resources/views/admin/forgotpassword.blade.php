

<form action="{{url('forgotpassword/forgotpassword')}}" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
Email:<input type="text" name="email"><br>
<input type="submit" name="sendcode" value="sendcode">