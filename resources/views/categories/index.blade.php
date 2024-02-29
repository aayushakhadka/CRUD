@extends('layouts.app')
@section('content')
<div>
    <table>
        @foreach($categories as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td><a href="/categories/edit/{{$item->id}}">Edit</a></td>
            <td>
                <img src="{{$item->photo}}" alt="">
            </td>
            <td>
                <form action="/categories/{{$item->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/categories/create">Add Categories</a>

</div>