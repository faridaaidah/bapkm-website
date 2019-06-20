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
use App\Article;
use App\Quicklinks;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    //$article = Article::all();
    $article = Article::orderBy('postDate', 'desc')->take(2)->get(); //sort by desc
    $articleBeasiswa = Article::orderBy('postDate', 'desc')->where('type','=',1)->take(2)->get();
    $articleUKM = Article::orderBy('postDate', 'desc')->where('type','=',2)->get();
    return view('welcome',compact('article','articleBeasiswa'));
});

//DIPAKE KO! JGN DIHAPUSS

Route::any ( '/search-result', function () {

    $q = Input::get ( 'q' );
    $data = Article::where ( 'title', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'description', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'datePost', 'LIKE', '%' . $q . '%' )->
                orWhere ( 'url', 'LIKE', '%' . $q . '%' )->get ();
    //$link = Links::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $data ) > 0)
        return view ( 'search' )->withDetails ( $data )->withQuery ( $q );
    else
        return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::prefix('aboutus')
    ->name('aboutus.')
    ->group(function () {
        Route::get('/history', function () {
           return view('aboutus.history');
        })->name('history');
        Route::get('/organigram', function () {
           return view('aboutus.organigram');
        })->name('organigram');
        Route::get('/services', function () {
           return view('aboutus.services');
        })->name('services');

    });

Route::get('/help', function () {
   return view('help');
});

Route::get('/regdat', function () {
   return view('regdat');
});

Route::get('/lsm', function () {
   return view('lsm');
});

Route::get('/articles', function () {
	$article = Article::all();
    return view('article-single',compact('article'));
});
Route::get('/article-page/{id}', 'HomeController@articlepage')->name('article-single-page');


//admin authorities
Auth::routes();

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
    	Route::get('/','AdminController@index');

        Route::get('/article','AdminController@index');
        Route::resource('article','ArticleController');
        Route::get('/calendar','CalendarController@index');
        Route::resource('calendar','CalendarController');
        Route::get('/event','EventController@index');
        Route::resource('event','EventController');
        Route::get('/quicklink','QuicklinkController@index');
        Route::resource('link','QuicklinkController');

        Route::prefix('product')->name('product.')->group(function () {
            Route::get('/help','Help_SOPController@index');
            Route::resource('help','Help_SOPController');
            Route::get('/service','AdminController@index');
            Route::resource('service','ServiceController');
        });
        
        Route::prefix('home')->name('home.')->group(function () {
            Route::get('/carousel','HomeAdminController@index')->name('carousel');
            Route::resource('carousel','HomeAdminController');
            
        });
        
        Route::resource('gallery','GalleryController');
        Route::resource('user','UserController');
    });

Auth::routes();
