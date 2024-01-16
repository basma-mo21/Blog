<!DOCTYPE html>
<html lang="en">
   <head>
     @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
         <!-- banner section start -->
       @include('home.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
    @include('home.service')
    @include('home.about')
  @include('home.footer')   
   </body>
</html>