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
    return view('welcome');
});

Route::get('home',function(){
    echo "Home Page";
    echo $_GET['name'];
});

// Route::get('type/{name}',function($ten){
//     echo $ten;
// });

// Route::get('type/{name}/{page?}',function($ten,$page=1){
//     echo $ten;
//     echo "<br>";
//     echo $page;
// })->where('page','[0-9]+');

// Route::get('type/{name}/{page?}',function($ten,$page=1){
//     echo $ten;
//     echo "<br>";
//     echo $page;
// })->where([
//     'name'=>'[a-zA-Z0-9-]+',
//     'page'=>'[0-9]+'
// ]);


Route::get('type/{name}/{page?}',function($ten,$page=1){
    echo $ten;
    echo "<br>";
    echo $page;
})->name('typepage');


Route::get('trang-chu',function(){
    echo "trang chu";
})->name('homepage');



Route::get('login',function(){
    $isLogin = true;
    if($isLogin){
        // return redirect()->route('homepage');
        // return redirect('trang-chu');
        // $name = 'huong';
        // return redirect('type/'.$name.'/121');

        return redirect()->route('typepage',['name'=>'Khoa','page'=>5]);
    }
    else{
        echo "vui long login";
    }
});
