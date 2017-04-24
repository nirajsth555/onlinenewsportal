@include('admin.header')
@include('admin.sidebar')

<div id="content">
<form action="{{url('category/edit')}}/{{$result->id}}" method="POST">
     <input type="hidden" name="_token" value="{{csrf_token()}}" >
    <p>Category name </p>
    <input type="text" name="category" value="{{$result->category}}"><br><br>
    
     </select>    <p><input type="submit" value="Update" name="add"></p>
</form>
</div>