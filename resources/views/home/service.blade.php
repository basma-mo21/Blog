  <!-- services section start -->
  <div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Blog Posts </h1>
       <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
       <div class="services_section_2">
          <div class="row">
            @if ($data->count() >0 )

            @foreach ($data as $post)
               
          
            <div class="col-md-4" style="margin-bottom: 20px">
               <div><img src="/postfiles/{{$post->image}}" style="margin-bottom: 30px; height: 200px;"  width="350px"></div>
               <h3 style="text-align: center; margin-top: 15px; font-size: 25px"> {{$post->title}}</h3>
               <p>Post by : <b>{{$post->name}}</b></p>
               <div class="btn_main"><a href="{{url('post-details',$post->id)}}">Read More</a></div>
            </div>

            @endforeach
               
            @else

            <div class="col-md-4" style="margin-bottom: 20px">
               <div><img src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&w=600" style="margin-bottom: 30px; height: 200px;"  width="350px"></div>
               <h3 style="text-align: center; margin-top: 15px; font-size: 25px"> Travel easier </h3>
               <p>Post by : <b>Admin</b></p>
               <div class="btn_main"><a href="#">Read More</a></div>
            </div>


            <div class="col-md-4" style="margin-bottom: 20px">
               <div><img src="https://images.pexels.com/photos/413960/pexels-photo-413960.jpeg?auto=compress&cs=tinysrgb&w=600" style="margin-bottom: 30px; height: 200px;"  width="350px"></div>
               <h3 style="text-align: center; margin-top: 15px; font-size: 25px"> How to take best photographs </h3>
               <p>Post by : <b>Admin</b></p>
               <div class="btn_main"><a href="#">Read More</a></div>
            </div>


               
            @endif
           
             
             
          </div>
       </div>
    </div>
 </div>
 <!-- services section end -->
 