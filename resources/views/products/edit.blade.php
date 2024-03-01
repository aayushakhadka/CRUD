@extends ('layouts.app')
@section('content')
<form action="/products/update/{{$products->id}}" method="POST">
    @csrf
    @method('PATCH')
    <input type='text' name="name" placeholder='name' value="{{products->name}}" />
    <button>edit</button>

</form>
@endsection