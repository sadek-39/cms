@extends('layouts/adminmaster')
@section('content')
<form id="addslide" action="{{route('createslide')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="sdid">Slide ID</label>
      <input type="text" name="sdid" class="form-control" id="sdid" placeholder="sdid">
    </div>
    <div class="form-group">
      <label for="sid">Slider ID</label>
      <input type="text" name="sid" class="form-control" id="sid" placeholder="sid">
    </div>
      <div class="form-group">
        <label for="Title">Slide Title</label>
        <input type="text" name="slide_title" class="form-control" id="slidertitle" placeholder="Title">
      </div>
      <div class="form-group">
          <label for="slide_pageurl">Slide Page Url</label>
          <input type="text" name="slide_pageurl" class="form-control" id="slide_pageurl" placeholder="Slider Page Url">
      </div>
      <div class="form-group">
          <div class="form-group">
              <label for="exampleFormControlFile1">Image file</label>
              <input type="file" name="slide_image"class="form-control-file" id="exampleFormControlFile1">
            </div>
      </div>
      <div class="form-group">
          <label for="Header Section">Slide Target Url</label>
          <input type="text" name="slide_target_url" class="form-control" id="headerSection" placeholder="Slider Target Url">
      </div>
      <div class="form-group">
          <label for="Footer Section">Slide Text</label>
          <textarea type="text" name="slide_text" class="form-control" id="footerSection" placeholder="slider text"></textarea>
      </div>
      
      <button  class="btn btn-primary">Submit</button>
    </form>
    
@endsection