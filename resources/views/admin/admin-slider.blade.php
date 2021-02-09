@extends('layouts/adminmaster')
<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
      {{-- @include('layouts/_head') --}}
     
        <style>
            form{
                display: none;
            }
            table{
                display: none;
                border:10px solid;
            }
            #addslider{
                display: none;
            }
            #addsliderfrommanageslidestable
            {
                display: none;
            }
            #editfrommanageslider
            {
              display: none;
            }
            
        </style>
  
             
              <script src="https://cdn.tiny.cloud/1/t7gxa6tlj8e9v083sadclg8e2dgy98c3spcloodv15ppvjvi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
             <script>
            $(document).ready(function(){
            $("#show").click(function(){
                $("#addslide").show();
                $("#table").hide();
            });
            $("#manage").click(function(){
                $("#table,#addslider,#hide").show();
                $("#addslide,#addsliderfrommanageslidestable,#editslider,#editfrommanageslider,#sliderinsertform").hide();
                
            });
            $("#addslider,#hide").click(function(){
                $('#sliderinsertform').show();
                $('#table,#addslider').hide();
            });
            $("#manageslidespage").click(function(){
                $("#manageslidestable,#addsliderfrommanageslidestable").show();
                $('#table,#addslider,#addslider').hide();
            });
            $("#editfrommanageslidestable").click(function(){
                $("#addslide").show();
                $('#table,#addslider,#manageslidestable,#addsliderfrommanageslidestable').hide();
            });
            $("#addsliderfrommanageslidestable").click(function(){
                $("#addslide").show();
                $('#table,#addslider,#manageslidestable,#addsliderfrommanageslidestable').hide();
            });
            $(".edit").click(function(){
              $("#editslider").show();
              $("#table").hide();
            }); 


            });
            </script>

    </head>
    @section('content')
    <body class="layout-default layout-login-centered-boxed">

        <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">


        <div class="layout-default">
            <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
                {{-- <a href="index.html"
                   class="navbar-brand flex-column mb-2 align-items-center mr-0"
                   style="min-width: 0">

                     <span class="avatar avatar-sm navbar-brand-icon mr-0">

                        <span class="avatar-title rounded bg-primary"><img src="images/logo/api-logo.png"
                                 alt="logo"
                                 class="img-fluid" /></span>

                    </span> 

                    API
                </a> --}}
                
            </div>

            <a href="{{route('slidercreateform')}}"  class="btn btn-primary" id ="hide">Add Slider</a>
            {{-- <button type="button" class="btn btn-primary" id="show">Add Slide</button> --}}
            <button type="button" class="btn btn-secondary" id="manage">Manage Slider</button>

            
            {{--            --}}
              
              {{-- <form id="sliderinsertform" action="{{route('createslider')}}" method="POST" enctype="multipart/form-data">
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
                </form> --}}
                {{-- editform --}}            
        </div>

        {{-- managerslidertable --}}
        
        <table id="table" class="table table-striped">
            <thead>
              <tr>
                <th scope="col">SL No</th>
                <th scope="col">Slider Title</th>
                <th scope="col">Page</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>              
              @foreach ($data as $value)
              <tr>
                <th scope="row">{{$value->sid}}</th>
                <td>{{$value->slider_title}} </td>
                <td>{{$value->slider_page}}</td>
                <td>
                    <a href="{{route('beforeupdateslider',$value->sid)}}" class="btn btn-secondary">Edit</a>
                    <a href="{{route('manageslide',$value->sid)}}" class="btn btn-primary">Manageslides</a>
                </td>
              </tr>
              @endforeach
    
              
              </tbody>
          </table>
         

          {{-- manageslidestable --}}
          {{-- <table id="manageslidestable" class="table table-striped">
            <thead>
                <tr colspan="4">
                    <a href="{{route('addslide')}}" class="btn btn-primary" id="addsliderfrommanageslidestable">Add Slide</a>
                </tr>
              <tr>
                <th scope="col">SL No</th>
                <th scope="col">Slider Title</th>
                <th scope="col">Slide Title</th>
                <th scope="col">Thumb</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Homepage January </td>
                <td>New Arrival</td>
                <td>picture</td>
                <td>
                    <button type="button" class="btn btn-primary" id="editfrommanageslidestable">Edit</button>
                </td>
              </tr>
            </tbody>
          </table> --}}

            </div>
        </div>

        
    @endsection

        <script>
            tinymce.init({
                selector: 'textarea',
                height: 500,
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount',
                    'code'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help'+
                'code',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
           });
          </script>

    </body>

</html>