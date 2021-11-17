<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Article;

use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Faker\Generator as Faker;


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
    return view('welcome', [
        'posts' => Post::latest()->get(),
        'categories' => Category::all()
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'categories' => Category::all()
    ]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::post('/dashboard', function (Faker $faker) {
    Post::create([
        'user_id' => Auth::id(),
        'category_id' => request('category_id'),
        'title' => request('title'),
        'excerpt' => request('excerpt'),
        'slug' => $faker->slug(),
        'body' => request('body'),
    ]);
    return redirect('/');
});

// Route::get('/feed', function () {

//     return view('posts', [
//         'posts' => Post::latest()->get()
//     ]);
// });

Route::get('posts/{post}', function (Post $post) {

    // Find a post by its slug and pass it to a view called "post"

    return view('post', [
        'post' => $post,
        'categories' => Category::all()
    ]);


});


Route::get('categories/{category:slug}', function (Category $category) {

    // Find a post by its slug and pass it to a view called "post"

    return view('welcome', [
        'posts' => $category->posts,
        'categories' => Category::all()
    ]);


});

Route::get('authors/{author:username}', function (User $author) {

    // Find a post by its slug and pass it to a view called "post"

    return view('welcome', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);


});

Route::get('/create', function () {
    return view('create');
});

Route::post('/create',function(){
    Article::create([
        'user_id' => request('user_id'),
        'body' => request('body')
    ]);
    return redirect('/create');
});



Route::post('/', function () {
    Form::create([
        'name' => request('email'),
        'email' => request('email'),
        'question' => request('question')
    ]);
    return redirect('/');
});