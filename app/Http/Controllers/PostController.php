<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $posts = Category::all();
                return view('admin.posts.create', compact('posts', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $requestData = $request->all();
    if (!empty($requestData['title_uz'])) {
    $requestData['slug'] = Str::slug($requestData['title_uz']);
} else {
    $requestData['slug'] = Str::slug('yaratilmadi');
}

if($request->hasFile('image')){
    try{
        $file =  $request->file('image');
        $imageName = time(). '-'. $file->getClientOriginalName();
        $file->move(public_path('img'), $imageName);
        $requestData['image'] = $imageName;
    } catch (\Exception $e){
        return back()->withErrors(['image' => 'Rasmni yuklashda xato bor']);
    }
   }
       $post = Post::create(Arr::except($requestData, ['tag_id']));

       if($request->has('tag_id')){
        $post->tags()->attach($request->tag_id);
       }

        return redirect()->route('dashboard.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
