<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('Listings',
    [
            'headings' =>'Latest Listings',
            'Listings' => [
                [
                    'id' => 1,
                    'title' => 'Listings One',
                    'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                         Tenetur dolore distinctio esse veniam iste aliquid animi enim tempora laborum maxime! 
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ea iure modi consequatur
                       reiciendis saepe itaque optio pariatur alias molestiae accusamus nihil, natus, enim est
                      iusto assumenda aspernatur dicta omnis!
                    '
                ],
                [
                    'id' => 2,
                    'title' => 'Listings Two',
                    'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                     Tenetur dolore distinctio esse veniam iste aliquid animi enim tempora laborum maxime!
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ea iure modi consequatur
                     reiciendis saepe itaque optio pariatur alias molestiae accusamus nihil, natus, enim est 
                     iusto assumenda aspernatur dicta omnis!'
                     ]
            ]
    ]


);
});
