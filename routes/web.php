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
    $posts = Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();
    dd($posts);

    return 'Saved, OK!';

});

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('post', [PostController::class, 'show'])->name('posts.show');
Route::get('contact', [PostController::class, 'contact'])->name('posts.contact');
Route::get('about', [PostController::class, 'about'])->name('posts.about');