<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PremierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/layout', function () {
    return view('layouts.app');
});
// ici je fais appel a une méthode de ma classe PremierController qui est "second"
Route::get('/second', [PremierController::class, 'second']);


Route::get('/new', [ArticleController::class, 'create']);
Route::post('/store', [ArticleController::class, 'store'])
->name('article.store');


// Route::get('/test', function () {
//     return view('test');
// });


// Route::get('/hello-world', function () {

//     $name = 'patrick';
//     return view('hello-world', [
//         'name' => $name
//     ]);
//     // j'ai nommé un nom de route personnalisé avec la methode name
// })->name('my_route');


// // on fait appel a un nom de route et non pas a une url
// Route::get('/redirection', function () {
//     return redirect()->route('my_route');
// });

// // si on veut passer un parametre dans l'url    
// // Route::get('/user/{name}', function ($name) {
// //     return 'Bienvenue ' . $name;
   
// // });

// // ici je fais appel a une méthode de ma classe PremierController qui est "home"
// Route::get('/home/{name}', [PremierController::class, 'home']);

// // si on veut rediriger une url vers une autre url
// Route::redirect('/test', '/hello-world');
