@include('admin.header')
@include('admin.sidebar')
<div id="content">
<a href="" style="margin-right: 1000px;text-decoration: none;font-size: 40px; hover:'color:green'" > Add Category </a>
<table border="1">
    <tr>
        <th style="color:#ff99cc;width:40px;font-size: 40px;">Id</th>
        <th style="color:#ff99cc;width:300px;font-size: 40px;">Admin Name</th>
        <th style="color:#ff99cc;width:100px;font-size: 40px;">Username</th>
        <th style="color:#ff99cc;width:300px;font-size: 40px;">Email</th>
        <th style="color:#ff99cc;width:300px;font-size: 40px;">Contact</th>
        <th style="color:#ff99cc;width:300px;font-size: 40px;">Last Active</th>
    </tr>

     
      @foreach($result as $niraj)
    
    <tr>
        <td>{{$niraj->id}}</td>
         <td>{{$niraj->name}}</td>
          <td>{{$niraj->username}}</td>
          <td>{{$niraj->email}}</td>
          <td>{{$niraj->phone}}</td>

          <td>{{$niraj->last_login}}</td>
           
           @endforeach
      
   
</table>
 </div>  
</body>
</html>