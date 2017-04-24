


<form action="{{url('forgotpassword/code')}}" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
ENTER CODE:<input type="text" name="reset_code" placeholder="Please enter the provided code">
<input type="submit" name="submit" value="submit">