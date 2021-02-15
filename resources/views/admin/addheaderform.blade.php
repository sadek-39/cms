@extends('layouts/adminmaster')
@section('content')
<h2>New Header</h2>
<form id="sliderinsertform" action="{{route('createheader')}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label for="Menu">Menu Name</label>
        <input type="text" name="menu_name" class="form-control" id="menuname" placeholder="Menu Name">
      </div>
      <div class="form-group">
        <label for="url">url</label>
        <input type="text" name="header_url" class="form-control" id="headerurl" placeholder="URL">
      </div>
      
      <button  class="btn btn-primary">Submit</button>
    </form>
  
@endsection