@extends('layouts.adminmaster')

@section('content')

<form id="sliderinsertform" action="{{route('createslider')}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label for="Title">Slider ID</label>
        <input type="text" name="sid" class="form-control" id="slidertitle" placeholder="SID">
      </div>
      <div class="form-group">
        <label for="Title">Slider Title</label>
        <input type="text" name="slider_title" class="form-control" id="slidertitle" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="Slider Page">Slider Page</label>
        <input type="text" name="slider_page" class="form-control" id="slidertitle" placeholder="Slider Page">
      </div> 
      <button  class="btn btn-primary">Submit</button>
    </form>
  
    
@endsection


