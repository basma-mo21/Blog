
<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">

    @include('admin.css')


    <style type="text/css">
    .dev_center{
        text-align: center;
        padding: 30px;

    }
    label{
        display: inline-block;
        width: 200px;
    }

    </style>
  </head>
  <body>
  @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">

        <h1 style="text-align: center; color: white;font-size: 40px;margin-top: 15px"> Update POST</h1>

        @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ Session::get('message') }}</p>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

        <div>
            <form action="{{url('update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div  class="dev_center">
                    <label >post title</label>
                    <input type="text" name="title" value="{{$data->title}}">

                </div>


                <div class="dev_center">
                    <label >post content</label>
                    <textarea name="content" cols="19" rows="3">
                        {{$data->content}}
                    </textarea>

                </div>


                <div class="dev_center">
                    <label >old image</label>
                    <img width="150px" style="margin: auto" src="postfiles/{{$data->image}}" alt="">
                </div>

                <div class="dev_center">
                    <label >post image</label>
                   <input type="file" name="image" >

                </div>

                <div class="dev_center">
                    <input type="submit" value="update" class="btn btn-primary">
                </div>

           
            </form>
        </div>
      </div>
 
     @include('admin.footer')
  </body>
</html>

