<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listings;
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
    return view('listings',
    [
            'headings' =>'Latest Listings',
            'listings' => Listings::all()
    ]
);
});

Route::get('/listings/{id}',function($id)
{
    $listing = Listings::find($id);

        
        if($listing)
        {
            return view('listing' ,[
                'listing' => $listing
            ]);


        }
        else {
            abort(404);
        }
});