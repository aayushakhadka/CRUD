<div>
    <table>
        <a href="/products">All</a>
        <a href="/products?category=electronics">Electronics</a>
        <a href="/products?category=fashion">Fashion</a>
        @foreach ($products as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td><a href="/products/edit/{{$item->id}}">Edit</a></td>
            <td>
                <img src="{{$item->photo}}" alt="">
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/products/create">Add New Product</a>

</div>