@extends('layouts/adminmaster')
@section('content')
<form action="{{route('settingscreate')}}" method="POST">
    @csrf
      <div class="form-group">
        <label for="Title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Title">
      </div>
      <div class="form-group">
          <label for="Meta Keyword">Meta Keyword</label>
          <input type="text" name="meta_keyword" class="form-control" id="metakeyword" placeholder="Meta Keyword">
      </div>
      <div class="form-group">
          <label for="Meta Description">Meta Description</label>
          <textarea type="text" name="meta_description" class="form-control" id="metadescription" placeholder="Meta Description"></textarea>
      </div>
      <div class="form-group">
          <label for="Header Section">Header Section</label>
          <input type="text" name="header_section" class="form-control" id="headerSection" placeholder="Meta Keyword">
      </div>
      <div class="form-group">
          <label for="Footer Section">Footer Section</label>
          <input type="text" name="footer_section" class="form-control" id="footerSection" placeholder="Meta Keyword">
      </div>
      <div class="form-group">
          <label for="copyright">Copyright</label>
          <textarea type="text" name="copyright" class="form-control" id="copyright" placeholder="Copyright"></textarea>
      </div>
      <div class=" form-group">
          <label for="inlineFormInputGroup">Social Links</label>
          <div class="input-group mb-2">
              <input type="text" name="social_links" class="form-control" id="htop"/>
              
          </div>
        </div>
        <div class="form-group">
          <label for="Address">Address</label>
          <input type="text" name="address" class="form-control" id="Address" placeholder="Adress">
      </div>
      <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" class="form-control" id="phone" placeholder="phone">
      </div>
      <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="phone" placeholder="Email">
      </div>
      <div class="form-group">
          <label for="Feedbackmail">Feedback Receiver email</label>
          <input type="email" name="fremail" class="form-control" id="phone" placeholder="Feedback Receiver Email">
      </div>  
      <button  class="btn btn-primary">Submit</button>
    </form>      
@endsection