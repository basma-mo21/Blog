<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){

            $usertype=Auth()->user()->user_type;

            if($usertype == 'user'){
                $data=Post::where('post_status','active')->get();
                return view('home.homepage',compact('data'));

            }elseif($usertype == 'admin'){

                return view('admin.admin');

            }
        }
    }



  public function homepage(){

    $data=Post::where('post_status','active')->get();
    return view('home.homepage',compact('data'));
  }


  public function postDetails($id){
    $post=Post::find($id);
    return view('home.postdetails',compact('post'));

  }


  public function createPost(){


    return view('home.createpost');
  }
  public function userPost( Request $request){
    $user=Auth::user();
    $post = new Post;
    $name=$user->name;
    $id=$user->id;
    $type=$user->user_type;
    $post->title=$request->title;
    $post->content=$request->content;
    $post->post_status='pending';
    $post->name=$name;
    $post->user_id=$id;
    $post->usertype=$type;
    $image=$request->image;

    if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postfiles',$imagename);
        $post->image=$imagename;

    }
    $post->save();
    return redirect()->back()->with('message','post added successfully');

  }



  public function MyPost(){
    $user=  Auth::user();
    $userid=$user->id;
    $data=Post::where('user_id','=',$userid)->get();
    return view('home.mypost',compact('data'));
  }


  public function editPost($id){
    $data=Post::find($id);
    return view('home.editpost',compact('data'));
  }

  public function updatePost(Request $request,$id){
    $data=Post::find($id);
    $data->title=$request->title;
    $data->content=$request->content;
    $image=$request->image;
    if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postfiles',$imagename);
        $data->image=$imagename;
    }

  
    $data->save();
    return redirect()->back()->with('message','post updated successfully');

  }

  public function deletePost($id){
    $data=Post::find($id);
    $data->delete();
    return redirect()->back()->with('message','post deleted successfully');
  }
}
