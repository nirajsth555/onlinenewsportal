@include('admin.header')
@include('admin.sidebar')
<div id="content">
<form action="{{url('category/addcategory')}}" method="POST">
     <input type="hidden" name="_token" value="{{csrf_token()}}" >
    <p>Category name </p>
    <input type="text" name="category">
    <p><input type="submit" value="Add" name="add"></p>
</form>
</div>  
</body>
</html>