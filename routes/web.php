<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DownloadFileController;
 

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

Auth::routes();
Route::resource('/buku','BukuController');
Route::resource('/tabel','TabelController');
Route::resource('/cari','CariController');
Route::get('/home', 'HomeController@index')->name('home');

//  Route::get('/cari', function () {
//      return view('cari.index')->with(['cari' => \App\Buku::all()]);
// });
//Route search
Route::get('/search', 'TabelController@search');
// Route::get('download_public','TabelController@download_public');
Route::get('/','TabelController@downfunc');
// Route::get('viewtabelindex', 'TabelController@downfunc');
// Route::get('download', 'TabelController@download');
// Route::get('get/{filename}', 'TabelController@getFile')->name('getfile');
// Route::get('/download/{path}/', 'TabelController@get_file');