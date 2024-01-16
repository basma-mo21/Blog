<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function addPost(){
        return view('admin.addpost');
    }


    public function storePost( Request $request){
        $user=Auth::user();
        $post=new Post;
        $name=$user->name;
        $id=$user->id;
        $type=$user->user_type;
        $post->title=$request->title;
        $post->content=$request->content;
        $post->post_status='active';
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


    public function showPosts(){
        $data=Post::all();

        return view('admin.showpost',compact('data'));

    }


    public function updatePost($id){
        $data=Post::find($id);
        return view('admin.updatepost',compact('data'));
    }

    public function deletePost($id){
        $data=Post::find($id);
        $data->delete();
        return redirect()->back()->with('message','post deleted successfully');

    }


    public function update($id,Request $request){

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



    public function acceptPost($id){
        $data=Post::find($id);
        $data->post_status='active';
        $data->save();
        return redirect()->back()->with('message','post accepted successfully');

    }


    
    public function rejectPost($id){
        $data=Post::find($id);
        $data->post_status='reject';
        $data->save();
        return redirect()->back()->with('message','post rejected');

    }

}
