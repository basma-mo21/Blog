<!DOCTYPE html>
<html lang="en">
   <head>
     @include('home.homecss')


   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
     
      <!-- header section end -->
       
            
       
      
      
      </div>

      <div style="text-align: center; padding: 20px">
        <h3 style="color:rgb(73, 124, 117);margin: 10px; font-size: 30px">My Posts</h3>

        @if (Session::has('message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p>{{ Session::get('message') }}</p>
    
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
        @foreach ($data as $data )

        <img src="/postfiles/{{$data->image}}" width="40%"   style="padding: 20px;height: 300px; margin: auto" alt="">
        <h4  style="color:rgb(73, 124, 117);margin: 10px; font-size: 25px">{{$data->title}}</h4>
        <p style="color:rgb(73, 124, 117);margin: 10px; font-size: 20px">{{$data->content}}</p>

        <a href="{{route('deleteposts',$data->id)}}"  onclick=" return confirm('are you sure?')" class="btn btn-danger">delete</a>

        <a href="{{route('updateposts',$data->id)}}"  class="btn btn-info">edit</a>
        @endforeach


      
    </div>

     
  @include('home.footer')   

  

   </body>
</html>