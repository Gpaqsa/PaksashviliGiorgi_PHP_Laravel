<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/Name', function () {
//     $data = 'Giorgi paksashvili ';
//     return $data;
// });

// Route::get('/years', function () {
//     $data = ' 22 years old';
//     return $data;
// });
// Route::get('/Hob', function () {
//     $data = 'HOb is Basketball';
//     return $data;
// });

// Route::get('/result', function () {
//     $data = 'Result is nothing';
//     return $data;
// });

// Route::get('/', function () {
//     $data = 'Giorgi paksashvili 22 years old, HOb is Basketball';
//     return $data;
// });
// Route::put("/update", function(){
//     return  response()->json(['message'=>"წარმატებით განახლდა"]);
// });

// Route::post("/add", function(){
//     return  response()->json(['message' => 'წარმატებით დაემატა']);
// });



// Route::delete("/delete", function(){
//     return  response()->json(['message' => 'წარმატებით დაემატა']);;
// });


Route::get('/', function () {
    $quizzes = [
        ['name' => 'What does FIFA stand for in English?', 'image' => 'https://static.independent.co.uk/s3fs-public/thumbnails/image/2015/05/28/12/fifa.jpg?quality=75&width=1200&auto=webp', 'status' => "active"],
        ['name' => 'Who is the world’s highest-paid athlete in 2021?', 'image' => 'https://www.gyuanyule.com/png/13170509-forbes-highest-paid-athletes-in-the-world-2021_cover_1500x1000.png',  'status' => "active"],
        ['name' => 'What was the first name of Argentinian soccer star Maradona?', 'image' => 'https://cdn.britannica.com/76/124976-050-E03E50CE/Diego-Maradona-1986.jpg', 'status' => "inactive"],
    ];
    return view('main', ['quizzes' => $quizzes]);
})->name('main');

Route::post('/subscribe', function () {
    return redirect()->route('main')->with('message', "Success");
})->name('subscribe');
