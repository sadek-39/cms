

@extends('layouts/adminmaster')
@section('content')

<h1>Header List</h1>
<a href="{{route('addheaderform')}}" class="btn btn-primary">add new</a>
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
            <a href="{{route('singleheaderinfo',$item->id)}}" class="btn btn-primary">edit</a>
        </td>
    </tr>
    @endforeach
</table>
    
@endsection