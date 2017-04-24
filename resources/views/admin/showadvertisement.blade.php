@include('admin.header')
@include('admin.sidebar')
<div id="content">
<a href="{{url('advertisement/addadvertisement')}}" style="margin-right: 1000px;text-decoration: none;font-size: 40px; hover:'color:green'" > Add Ad</a>
<table border="1">

    <tr>
        <th style="color:#ff99cc;width:40px;font-size: 40px;">Id</th>
        <th style="color:#ff99cc;width:300px;font-size: 40px;">Advertisement</th>
        <th style="color:#ff99cc;width:100px;font-size: 40px;">Status</th>
        <th style="color:#ff99cc;width:300px;font-size: 40px;">Action</th>
    </tr>

     
      
    @foreach($advert as $adverts)
    <tr>
        <td>{{$adverts->id}}</td>
         <td><img src="{{url($adverts->giffile)}}"></td>
          <td>{{$adverts->adsite}}</td>
           <td style="width:200px"><a href="" style="text-decoration: none;">Edit</a>
           |
           <a href="{{" style="text-decoration: none;">Delete</a>
           |
             
            <a href="">DISABLE</a>
          
            <a href="">ENABLE</a>
            
           
           
          
           </td></tr>
           @endforeach
           
   
</table>
 </div>  
</body>
</html>



