@extends('layouts/master')
@section('content')
<!-- Page Content -->

<div class="page-section container page__container">
    <div class="page-separator">
        <div class="page-separator__text">Profile &amp; Privacy</div>
    </div>
    <div class="col-md-7 p-0">
        <div class="form-group">
            <label class="form-label">Your photo</label>
            <div class="media align-items-center">
                <a href=""
                   class="media-left mr-16pt">
                    <img src="images/people/110/guy-3.jpg"
                         alt="people"
                         width="56"
                         class="rounded-circle" />
                </a>
                <div class="media-body">
                    <div class="custom-file">
                        <input type="file"
                               class="custom-file-input"
                               id="inputGroupFile01">
                        <label class="custom-file-label"
                               for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">API profile name</label>
            <input type="text"
                   class="form-control"
                   value="Luma.com/alexander"
                   placeholder="Your profile name ...">
            <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
        </div>

        <div class="form-group">
            <label class="form-label">About you</label>
            <textarea rows="3"
                      class="form-control"
                      placeholder="About you ..."></textarea>
        </div>

        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox"
                       class="custom-control-input"
                       checked
                       id="customCheck1">
                <label class="custom-control-label"
                       for="customCheck1">Display your real name on your profile</label>
                <small class="form-text text-muted">If unchecked, your profile name will be displayed instead of your full name.</small>
            </div>
        </div>

        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox"
                       class="custom-control-input"
                       checked
                       id="customCheck2">
                <label class="custom-control-label"
                       for="customCheck2">Allow everyone to see your profile</label>
                <small class="form-text text-muted">If unchecked, your profile will be private and no one except you will be able to view it.</small>
            </div>
        </div>
        
                
    </div>
    <div class="form-group">
    <div class="page-separator mb-24pt mb-sm-0 mr-sm-24pt pt-32pt ">
        <div class="page-separator__text">Company Details</div>
    </div>
    
    <div class="form-group pt-32pt">
        <label class="form-label">API profile name</label>
        <input type="text"
               class="form-control"
               value="Luma.com/alexander"
               placeholder="Your profile name ...">
        <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
    </div>

    <div class="form-group">
        <label class="form-label">About you</label>
        <textarea rows="3"
                  class="form-control"
                  placeholder="About you ..."></textarea>
    </div>

    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input type="checkbox"
                   class="custom-control-input"
                   checked
                   id="customCheck1">
            <label class="custom-control-label"
                   for="customCheck1">Display your real name on your profile</label>
            <small class="form-text text-muted">If unchecked, your profile name will be displayed instead of your full name.</small>
        </div>
    </div>

    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input type="checkbox"
                   class="custom-control-input"
                   checked
                   id="customCheck2">
            <label class="custom-control-label"
                   for="customCheck2">Allow everyone to see your profile</label>
            <small class="form-text text-muted">If unchecked, your profile will be private and no one except you will be able to view it.</small>
        </div>
    </div>
</div>
</div>

<!-- // END Page Content -->

    
@endsection