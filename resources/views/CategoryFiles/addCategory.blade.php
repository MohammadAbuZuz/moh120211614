@extends("dashboard_layout")
@section("PageContent")

<form action="{{ route('addCategoryOnTabel')}}" method="post">
    @csrf
    <input type="text" name="categoryName" placeholder="اسم الفئة">
    
    @error("categoryName")
        <b>{{ $message }}</b>
    @enderror

    <input type="submit" name="addCategory" value="إضافة الفئة">
</form>

@endsection
