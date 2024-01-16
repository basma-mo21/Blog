<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
     @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
         <!-- banner section start -->
        
         <!-- banner section end -->
      </div>

      <div class="col-sm-12" style="text-align: center">
        <div><img src="/postfiles/{{$post->image}}" width="50%"   style="padding: 20px;height: 300px; margin: auto"></div>
        <h3 style="text-align: center; margin-top: 15px; font-size: 25px"> {{$post->title}}</h3>
        <h4 style="text-align: center; margin-top: 15px; font-size: 25px"> {{$post->content}}</h4>
        <p>Post by : <b>{{$post->name}}</b></p>
        
     </div>

      
      <!-- header section end -->
    
  @include('home.footer')   
   </body>
</html>