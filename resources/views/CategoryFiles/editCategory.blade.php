@extends("dashboard_layout")
@section("PageContent")

<form action="{{route("updateCategory",$category->$id)}}" method="post">
    @csrf
    @method("put")
    <input type="text" name="categoryName" placeholder="اسم الفئة" value="{{$category->name}}">
    @error("categoryName")
    <b>{{$message}}</b>
    <input type="submit" name="addCategory">
</form>

@endsection