<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
     @include('home.homecss')


     <style type="text/css">

.dev_center{
        text-align: center;
        padding: 20px;
        

    }
       
        label{
            display: inline-block;
            width: 200px;
          color: rgb(151, 30, 30);
        }
    
        </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
     
      <!-- header section end -->

      </div>

      

      <div style="text-align: center">
        <h3 style="color: rgb(161, 19, 19);margin: 10px; font-size: 30px">Update Post</h3>

        @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ Session::get('message') }}</p>
    
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif



        <form action="{{url('update-post',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div  class="dev_center">
                <label >post title</label>
                <input type="text" value="{{$data->title}}" name="title">

            </div>


            <div class="dev_center">
                <label >post content</label>
                <textarea name="content" >{{$data->content}}</textarea>

            </div>


            <div class="dev_center">
                <label >old image</label>
             <img src="/postfiles/{{$data->image}}" width="20%" style="height: 100px ; margin: auto"  alt="">

            </div>

            <div class="dev_center">
                <label >new image</label>
               <input type="file" name="image" >

            </div>

            <div class="dev_center">
                <input type="submit" style="background-color: green" value="update post" class="btn btn-success">
            </div>

       
        </form>
    </div>
  @include('home.footer')   

   </body>
</html>