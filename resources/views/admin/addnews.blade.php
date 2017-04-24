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
    input[type=file]{
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
       @include('admin.header')
        @include('admin.sidebar')
<div id="content">
<form action="{{url('news/addnews')}}" method="POST" enctype="multipart/form-data">

     <input type="hidden" name="_token" value="{{csrf_token()}}" >
     <table class="products">
    <tr><td>Title </td>
    <td><input type="text" name="title"></td>
    <td></td></tr>
    <tr><td>Category </td>
    <td><select name="category" class="option">
@foreach($result as $category)
        <option value="{{$category->id}}">{{$category->category}}</option>
       @endforeach

    

        
    
    </select></td>
    </tr>
    <tr><td>Image </td>
        <td><input type="file" name="image" multiple="" ></td>
         <td></td></tr>
    
    <tr><td>Full news</td>
    <td><input type="text" name="fullnews"> </td> 
    <td></td></tr>
    <tr><td>To Be Highlighted Sentence</td>
    <td><input type="text" name="highlight"> </td> 
    <td></td></tr>
      <tr><td>Repoter Name</td>
    <td><input type="text" name="reporter"> </td> 
    <td></td></tr>
   <tr><td style="margin-left: 50px"> <input type="submit" value="Add" name="add"></td>
   <td> <input type="reset" value="Reset" ></td></tr>
   </table>
</form>
</div>  
</body>
</html>