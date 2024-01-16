<!DOCTYPE html>
<html lang="en">
   <head>
     @include('home.homecss')


     <style type="text/css">

.dev_center{
        text-align: center;
        padding: 20px;
        

    }
       
        label{
            display: inline-block;
            width: 200px;
          color: white;
        }
    
        </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
     
      <!-- header section end -->


      <div style="text-align: center">
        <h3 style="color: white;margin: 10px; font-size: 30px">Add Post</h3>

        @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ Session::get('message') }}</p>
    
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif



        <form action="{{url('user-post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div  class="dev_center">
                <label >post title</label>
                <input type="text" name="title">

            </div>


            <div class="dev_center">
                <label >post content</label>
                <textarea name="content" ></textarea>

            </div>


            

            <div class="dev_center">
                <label >post image</label>
               <input type="file" name="image" >

            </div>

            <div class="dev_center">
                <input type="submit" value="add post" class="btn btn-success">
            </div>

       
        </form>
    </div>
      </div>
  @include('home.footer')   

   </body>
</html>