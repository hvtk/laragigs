<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/hello', function () {
    return response('<h1>Hello World</h1>', 200)
    ->header('Content-type', 'text/plain')
    ->header('foo', 'bar');
});

Route::get('/posts/{id}', function ($id) {
    ddd($id); /* helper methods for debugging and see what things are */
    dd($id); 
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
   /* dd($request->name . ' ' . $request->city); */
    /* another option */
    return $request->name . ' ' . $request->city;
});

/*Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings Test',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'this is a test product'
            ],

            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'this is a test product'
            ]
        ]
    ]);
});*/

// All Listings without controller
//Route::get('/', function () {
//    return view('listings', [
//       'heading' => 'Latest Listings Test from Model',
//        'listings' => Listing::all()
//    ]);
//});

//Single Listing first way without controller
//Route::get('/listings/{id}', function($id) {
//    $listing = Listing::find($id);
//
//    if($listing) {
//        return view('listing', [
//            'listing' => $listing
//        ]);
//    } else {
//        abort('404');
//    }    
//});

//Single Listing cleaner way without controller
//Route::get('/listings/{listing}', function(Listing $listing) {
//    return view('listing', [
//        'listing' => $listing
//    ]);   
//});

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

