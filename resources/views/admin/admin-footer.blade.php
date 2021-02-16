@extends('layouts/adminmaster')

@section('content')
<h1>Footer List</h1>

<table class="table">
    <tr>
        <th>Id no</th>
        <th>Menu Name </th>
        <th>Url</th>
        <th>action</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>
            {{$item->id}}
        </td>
        <td>
            {{$item->menu_name}}
        </td>
        <td>
            {{$item->url}}
        </td>
        <td>
            <a href="{{route('singlefooterinfo',$item->id)}}" class="btn btn-primary">edit</a>
        </td>
    </tr>
    @endforeach
</table>
    
@endsection