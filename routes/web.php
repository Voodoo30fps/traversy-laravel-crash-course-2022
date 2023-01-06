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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non velit et nulla volutpat vestibulum. Suspendisse vel placerat ipsum, in congue elit. Aenean sem nunc, suscipit sed elementum a, vulputate eu justo. Duis hendrerit sagittis lorem eu tincidunt. Nunc ac suscipit ante. Suspendisse et mauris sit amet leo porta pulvinar nec id mauris. Nam vestibulum sollicitudin arcu, posuere dignissim odio faucibus vitae. Phasellus blandit est at risus varius commodo. In hac habitasse platea dictumst. Curabitur augue orci, laoreet eu cursus ac, sodales ultricies ipsum. Donec sit amet consectetur risus. In volutpat enim ut neque tempor, sed blandit mi suscipit. Duis et ante mattis urna imperdiet tristique.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non velit et nulla volutpat vestibulum. Suspendisse vel placerat ipsum, in congue elit. Aenean sem nunc, suscipit sed elementum a, vulputate eu justo. Duis hendrerit sagittis lorem eu tincidunt. Nunc ac suscipit ante. Suspendisse et mauris sit amet leo porta pulvinar nec id mauris. Nam vestibulum sollicitudin arcu, posuere dignissim odio faucibus vitae. Phasellus blandit est at risus varius commodo. In hac habitasse platea dictumst. Curabitur augue orci, laoreet eu cursus ac, sodales ultricies ipsum. Donec sit amet consectetur risus. In volutpat enim ut neque tempor, sed blandit mi suscipit. Duis et ante mattis urna imperdiet tristique.'
            ]
        ]
    ]);
});

// Route::get('/hello', function () {
//     return response('<h1>Hello world!</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function ($id) {
//     // ddd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');
// // ^ where = constraint with reg expression / helper function

// Route::get('/search', function (Request $request) {
//     return $request->name . ' ' . $request->city;
// });
