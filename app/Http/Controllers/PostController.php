<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Response;
use App\Post;

use View;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(!Gate::allows('isAdmin')){
        //     abort(404,"Sorry, You can do this actions");
        // }
        
    //     $posts  = DB::table('posts') ->orderBy('id','desc')->get();
    //    return view('Post.index', ['posts' => $posts]);


         $posts = DB::select("select *,content/(is_published+is_published2+is_published3+is_published4+is_published5+is_published6+is_published7+is_published8+is_published9+is_published10) as item from posts ORDER BY posts.id DESC");
        $count=DB::select('select  sum(content) as sum from posts where is_published=1 or is_published2=1 or is_published3=1 or is_published4=1 or is_published5=1 or is_published6=1 or is_published7=1 or is_published8=1 or is_published9=1 or is_published10=1');
        $is_published=DB::select(' select  sum(content/(is_published+is_published2+is_published3+is_published4+is_published5+is_published6+is_published7+is_published8+is_published9+is_published10)) as is_published_sum from posts where is_published=1');
        $is_published2=DB::select(' select  sum(content/(is_published+is_published2+is_published3+is_published4+is_published5+is_published6+is_published7+is_published8+is_published9+is_published10)) as is_published_sum from posts where is_published2=1');
        $is_published3=DB::select(' select  sum(content/(is_published+is_published2+is_published3+is_published4+is_published5+is_published6+is_published7+is_published8+is_published9+is_published10)) as is_published_sum from posts where is_published3=1');
        $is_published4=DB::select('select  sum(content/(is_published+is_published2+is_published3+is_published4+is_published5+is_published6+is_published7+is_published8+is_published9+is_published10)) as is_published_sum from posts where is_published4=1');
        $is_published5=DB::select('select  sum(content/(is_published+is_published2+is_published3+is_published4+is_published5+is_published6+is_published7+is_published8+is_published9+is_published10)) as is_published_sum from posts where is_published5=1');
        $is_published6=DB::select('select  sum(content/(is_published+is_published2+is_published3+is_published4+is_published5+is_published6+is_published7+is_published8+is_published9+is_published10)) as is_published_sum from posts where is_published6=1');
        $is_published7=DB::select('select  sum(content/(is_published+is_published2+is_published3+is_published4+is_published5+is_published6+is_published7+is_published8+is_published9+is_published10)) as is_published_sum from posts where is_published7=1');
        $is_published8=DB::select('select  sum(content/(is_published+is_published2+is_published3+is_published4+is_published5+is_published6+is_published7+is_published8+is_published9+is_published10)) as is_published_sum from posts where is_published8=1');
        $is_published9=DB::select('select  sum(content/(is_published+is_published2+is_published3+is_published4+is_published5+is_published6+is_published7+is_published8+is_published9+is_published10)) as is_published_sum from posts where is_published9=1');
        $is_published10=DB::select('select  sum(content/(is_published+is_published2+is_published3+is_published4+is_published5+is_published6+is_published7+is_published8+is_published9+is_published10)) as is_published_sum from posts where is_published10=1');
       
        return view('post.index', ['posts' => $posts,'counts' =>  $count,'is_publisheds' =>  $is_published,'is_published2s' =>  $is_published2,'is_published3s' =>  $is_published3,'is_published4s' =>  $is_published4,'is_published5s' =>  $is_published5,'is_published6s' =>  $is_published6,'is_published7s' =>  $is_published7,'is_published8s' =>  $is_published8,'is_published9s' =>  $is_published9,'is_published10s' =>  $is_published10]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Post::create($request->all());

        return back();  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $Post = Post::findOrFail($request->Post_id);

        $Post->update($request->all());
       
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        $Post = Post::findOrFail($request->Post_id);
        $Post->delete();

        return back();

    }
    public function changeStatus() 
    {
        $id = Input::get('id');

        $Post = Post::findOrFail($id);
        $Post->is_published = !$Post->is_published;
        $Post->save();

        return response()->json($Post);
    }
    public function changeStatus2() 
    {
        $id = Input::get('id');

        $post = Post::findOrFail($id);
        $post->is_published2 = !$post->is_published2;
        $post->save();

        return response()->json($post);
    }
    public function changeStatus3() 
    {
        $id = Input::get('id');

        $post = Post::findOrFail($id);
        $post->is_published3 = !$post->is_published3;
        $post->save();

        return response()->json($post);
    }
    public function changeStatus4() 
    {
        $id = Input::get('id');

        $post = Post::findOrFail($id);
        $post->is_published4 = !$post->is_published4;
        $post->save();

        return response()->json($post);
    }
    public function changeStatus5() 
    {
        $id = Input::get('id');

        $post = Post::findOrFail($id);
        $post->is_published5 = !$post->is_published5;
        $post->save();

        return response()->json($post);
    }
    public function changeStatus6() 
    {
        $id = Input::get('id');

        $post = Post::findOrFail($id);
        $post->is_published6 = !$post->is_published6;
        $post->save();

        return response()->json($post);
    }
    public function changeStatus7() 
    {
        $id = Input::get('id');

        $post = Post::findOrFail($id);
        $post->is_published7 = !$post->is_published7;
        $post->save();

        return response()->json($post);
    }
    public function changeStatus8() 
    {
        $id = Input::get('id');

        $post = Post::findOrFail($id);
        $post->is_published8 = !$post->is_published8;
        $post->save();

        return response()->json($post);
    }
    public function changeStatus9() 
    {
        $id = Input::get('id');

        $post = Post::findOrFail($id);
        $post->is_published9 = !$post->is_published9;
        $post->save();

        return response()->json($post);
    }
    public function changeStatus10() 
    {
        $id = Input::get('id');

        $post = Post::findOrFail($id);
        $post->is_published10 = !$post->is_published10;
        $post->save();

        return response()->json($post);
    }
}