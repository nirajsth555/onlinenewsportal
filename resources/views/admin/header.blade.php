<html>
    <head>
        <title> master page </title>  
        <link href="{{url('public/lib/css/style1.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <div class="left">
                <a id="admin" href="#">Admin panel</a>
            </div>
            <div class="center">
            
                Welcome {{Auth::user()->username}} 
                </div> 
                
            <div class="right">
                <a id = "logout" href="{{url('login/logout')}}">LogOut</a>
            </div>
            
        </div>