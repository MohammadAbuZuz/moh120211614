@extends("dashboard_layout")
@section("PageContent")

@if (Session("insertion_true"))
    <b>{{ Session("insertion_true") }}</b>
@endif

<table width="100%" border="1px">
    <tr>
        <td>ID</td>
        <td>USER ID</td>
        <td>Name</td>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->user_id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <form action="{{ route('deleteCategory', $item->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="حذف">
                </form>
                <a href="{{ route('editPageUi', $item->id) }}">Edit</a>
            </td>
        </tr>
    @endforeach
</table>

@endsection
