
<!DOCTYPE html>
<html>
  <head> 

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

        <h1 style="text-align: center; color: white;font-size: 40px;margin-top: 15px"> ADD POST</h1>

        @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ Session::get('message') }}</p>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

        <div>
            <form action="{{url('store-post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div  class="dev_center">
                    <label >post title</label>
                    <input type="text" name="title">

                </div>


                <div class="dev_center">
                    <label >post content</label>
                    <textarea name="content" cols="10" rows="2"></textarea>

                </div>


                

                <div class="dev_center">
                    <label >post image</label>
                   <input type="file" name="image" >

                </div>

                <div class="dev_center">
                    <input type="submit" value="add" class="btn btn-primary">
                </div>

           
            </form>
        </div>
      </div>
 
     @include('admin.footer')
  </body>
</html>

