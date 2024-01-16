
<!DOCTYPE html>
<html>
  <head> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @include('admin.css')
  </head>
  <body>
  @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">


        <div class="container-fluid">
            <h2  style="text-align: center; color: white;font-size: 40px;margin-top: 15px" >Show posts</h2>

            @if (Session::has('message'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p>{{ Session::get('message') }}</p>
        
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


            
            <table class="table  table-secondary">
                <thead>
                  <tr align="center">
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">status</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Post By</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                    <th scope="col">Update</th>
                    <th scope="col">Accept</th>
                    <th scope="col">Reject</th>
                  </tr>
                </thead>
                <tbody>
                   
                       
                            
                   
               
              @foreach ($data as $data )
                
             
                  <tr align="center">
                    <th scope="row">{{$data->title}}</th>
                    <td>{{$data->content}}</td>
                    <td>{{$data->post_status}}</td>
                    <td>{{$data->usertype}}</td>
                    <td>{{$data->name}}</td>
                    <td><img width="150px"src="postfiles/{{$data->image}}" alt=""></td>
                    <td><a href="{{route('deletepost',$data->id)}}" onclick="confirmation(event)" class="btn btn-danger">Delete</a></td>


                    <td><a href="{{url('update-post',$data->id)}}"class="btn btn-success">Update</a></td>

                    <td><a href="{{url('accept-post',$data->id)}}"class="btn btn-info">Accept</a></td>
                    <td><a href="{{url('reject-post',$data->id)}}"  onclick=" return confirm('are you sure?')"  class="btn btn-dark">Reject</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>



                </div>
            </div>

        </div>


      
 
     @include('admin.footer')




     <script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to Delete this post",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>
  </body>
</html>

