 <style type="text/css">
    .products{
        border:2px solid black;
    }
    tr{
        cell-spacing:50px;
    }
    td{
        font-size: 40px;
    }
    input[type=text]{
        width:400px;
        height:50px;
    }
    input[type=password]{
        width:400px;
        height:50px;
    }
    input[type=submit]{
        width:200px;
        height:40px;
       
    }
    input[type=reset]{
        width:200px;
        height:40px;
    }
    .option{
        width:400px;
         height:50px;
    }
       </style>

       <form action="{{url('login/login')}}" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
Email:<input type="text" name="email" ><br>
PASSWORD:<input type="password" name="password"><br>
<input type="submit" value="login"><br>
<a href="{{url('forgotpassword/forgotpassword')}}">FORGOT PASSWORD</a><br>
<a href="{{url('login/signup')}}">SIGNUP</a> 

