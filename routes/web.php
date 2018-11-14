<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
//    \App\Post::create([
//        'title'=>'test title',
//       'content'=>'test content',
//      ]);

//    $post = \App\Post::find(1);
//    $post->update([
//        'title' => 'updated title',
//        'content' => 'updated content',
//    ]);
//
//    $posts = \App\Post::all();
 //   dd($posts);
//    \App\Post::destroy(2);
//      \App\Post::destroy(3, 5, 7);
//    $post->title = 'saved title';
//    $post->content = 'saved content';

//    dd($post);
  //  foreach($post->comments as $comment) {
  //      echo $comment->title.'<br>';
   // }
//    return view('welcome');
//    $posts = \App\Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();
//    dd($posts);

//    $allPosts = \App\Post::all();
//    dd($allPosts);

//    $featuredPosts = \App\Post::where('is_feature', 1)->get();
//    dd($featuredPosts);

    $fourthPost = \App\Post::find(4);
    dd($fourthPost);

    $lastPost = \App\Post::orderBy('id', 'DESC')->first();
    dd($lastPost);
});
Route::get('/home', 'HomeController@index');
Route::get('/hello/{name?}', ['as'=>'hello.index', 'uses'=>'HelloController@index']);
Route::get('/posts', function (){
    return view('posts.index');
});
Route::get('/posts/about', function (){
    return view('posts.about');
});
Route::get('/posts/post', function (){
    return view('posts.post');
});