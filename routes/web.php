<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

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
    //return view('welcome');
    //return view('index');
    //return view('post');
    //return view('contact');
    //return view('about');
    // return redirect(route('posts.index'));
    // $post = new Post();
    // $post->title = 'test title';
    // $post->content = 'test content';
    // $post->save();

    // Post::create([
    //     'title' => 'created title',
    //     'content' => 'created content',
    // ]);

    // $posts = Post::all();
    // dd($posts);

    // $post = Post::find(1);
    // dd($post);

    // $posts = Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();
    // dd($posts);

    // return 'Saved, OK!';

    // $post = Post::find(1);
    // $post->update([
    //     'title' => 'updated title',
    //     'content' => 'updated content',
    // ]);
    // return 'Updated, OK!';

    // $post = Post::find(1);
    // $post->title = 'saved title';
    // $post->content = 'saved content';
    // $post->save();
    // return 'Saved, OK!';

    // $post = Post::find(1);
    // $post->delete();

    // Post::destroy(2);

    // Post::destroy(3, 5, 7);
    // return 'Deleted!';

    // $allPosts = Post::all();
    // dd($allPosts);

    // $featuredPosts = Post::where('is_feature', 1)->get(); //多筆貼文的集合
    // dd($featuredPosts);

    //單一筆
    // $fourthPost = Post::find(4);
    // dd($fourthPost);

    // $lastPost = Post::orderBy('id', 'DESC')->first();
    // dd($lastPost);

    $post = Post::find(4);
    echo '標題: '.$post->title.'<br>';
    echo '內容: '.$post->content.'<br>';
    echo '--------------------------'.'<br>';
    // $comments = $post->comments()->get(); //$post->comments()->get()可簡寫$post->comments
    $comments = $post->comments;
    foreach ($comments as $comment){
    echo '留言: '.$comment->content."<br>";
    echo '-----------------------------'.'<br>';
    }

});

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('post', [PostController::class, 'show'])->name('posts.show');
Route::get('contact', [PostController::class, 'contact'])->name('posts.contact');
Route::get('about', [PostController::class, 'about'])->name('posts.about');