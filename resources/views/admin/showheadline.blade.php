@include('admin.header')
@include('admin.sidebar')
<div id="content">
<a style="margin-right: 1000px;font-size: 40px;width:30%; text-decoration: none;background-color: #6699ff;">Headline News </a>
<table border="1">
<tr>
<th style="color:#ff99cc;width:60px;font-size: 35px;">Id</th>
<th style="color:#ff99cc;width:110px;font-size: 35px;">Title</th>
<th style="color:#ff99cc;width:150px;font-size: 35px;">Category</th>
<th style="color:#ff99cc;width:160px;font-size: 35px;">Image</th>

<th style="color:#ff99cc;width:130px;font-size: 35px;">fullnews</th>
<th style="color:#ff99cc;width:130px;font-size: 35px;">Status</th>
<th style="color:#ff99cc;width:160px;font-size: 35px;">Date/Time</th>
<th style="color:#ff99cc;width:90px;font-size: 35px;">Action</th>
</tr>
 


@foreach($result as $niraj)

<tr>
<td>{{$niraj->id}}</td>
<td>{{$niraj->title}}</td>
<td>{{$niraj->category}}</td>
<td><img src="{{url($niraj->image)}}" width="80px" height="80px"></td>

<td>{{$niraj->fullnews}}</td>
<td>{{$niraj->Status}}</td>
<td>{{$niraj->created_at}}</td>

<td style="width:200px"><a href="" style="text-decoration: none;">Edit</a>
    |
    <a href="" style="text-decoration: none;">Delete</a>
    |

    </td>
    </tr>
    @endforeach
    
   
    
</table>
</div>  
</body>
</html>




