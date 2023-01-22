<?php
use App\Http\Controllers\HomeController;
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


Route::middleware(["web"])->group(function (){
    Route::get("/", [HomeController::class, "home"]);


    //    Route::get('/', function () {
//        return view('home', [
//            "title" => "My Blog",
//            "page_length" => 10,
//            "total_blogs" => 11,
//            "page_number" => 1,
//            "blogs" => [
//                [
//                    "url" => "/",
//                    "is_trending" => true,
//                    "author" => "Jermain Jungerman",
//                    "author_image_url" => "https://picsum.photos/20/20",
//                    "image_url_portrait" => "https://picsum.photos/300/350",
//                    "image_url_landscape" => "https://picsum.photos/360/160",
//                    "title" => "Laravel Websockets | Chat Application Example",
//                    "date" => "June 8, 2022",
//                    "description" => "random description 394o32",
//                    "tags" => "tag1,tag2,tag3"
//                ],
//                [
//                    "url" => "/",
//                    "is_trending" => true,
//                    "author" => "Jermain Jungerman",
//                    "author_image_url" => "https://picsum.photos/20/20",
//                    "image_url_portrait" => "https://picsum.photos/300/350",
//                    "image_url_landscape" => "https://picsum.photos/360/160",
//                    "title" => "Laravel Websockets | Chat Application Example",
//                    "date" => "June 8, 2022",
//                    "description" => "random description 394o32",
//                    "tags" => "tag1,tag2,tag3"
//                ],
//                [
//                    "url" => "/",
//                    "is_trending" => true,
//                    "author" => "Jermain Jungerman",
//                    "author_image_url" => "https://picsum.photos/20/20",
//                    "image_url_portrait" => "https://picsum.photos/300/350",
//                    "image_url_landscape" => "https://picsum.photos/360/160",
//                    "title" => "Laravel Websockets | Chat Application Example",
//                    "date" => "June 8, 2022",
//                    "description" => "random description 394o32",
//                    "tags" => "tag1,tag2,tag3"
//                ]
//
//            ],
//            "trending" => [
//            [
//                "url" => "/",
//                "is_trending" => true,
//                "author" => "Jermain Jungerman",
//                "author_image_url" => "https://picsum.photos/20/20",
//                "image_url_portrait" => "https://picsum.photos/300/350",
//                "image_url_landscape" => "https://picsum.photos/360/160",
//                "title" => "Laravel Websockets | Chat Application Example",
//                "date" => "June 8, 2022",
//                "description" => "random description 394o32",
//                "tags" => "tag1,tag2,tag3"
//            ],
//            [
//                "url" => "/",
//                "is_trending" => true,
//                "author" => "Jermain Jungerman",
//                "author_image_url" => "https://picsum.photos/20/20",
//                "image_url_portrait" => "https://picsum.photos/300/350",
//                "image_url_landscape" => "https://picsum.photos/360/160",
//                "title" => "Laravel Websockets | Chat Application Example",
//                "date" => "June 8, 2022",
//                "description" => "random description 394o32",
//                "tags" => "tag1,tag2,tag3"
//            ],
//            [
//                "url" => "/",
//                "is_trending" => true,
//                "author" => "Jermain Jungerman",
//                "author_image_url" => "https://picsum.photos/20/20",
//                "image_url_portrait" => "https://picsum.photos/300/350",
//                "image_url_landscape" => "https://picsum.photos/360/160",
//                "title" => "Laravel Websockets | Chat Application Example",
//                "date" => "June 8, 2022",
//                "description" => "random description 394o32",
//                "tags" => "tag1,tag2,tag3"
//            ]
//
//
//            ],
//            "recentlyWritten" => [
//                [
//                    "url" => "/",
//                    "is_trending" => true,
//                    "author" => "Jermain Jungerman",
//                    "author_image_url" => "https://picsum.photos/20/20",
//                    "image_url_portrait" => "https://picsum.photos/300/350",
//                    "image_url_landscape" => "https://picsum.photos/360/160",
//                    "title" => "Laravel Websockets | Chat Application Example",
//                    "date" => "June 8, 2022",
//                    "description" => "random description 394o32",
//                    "tags" => "tag1,tag2,tag3"
//                ],
//                [
//                    "url" => "/",
//                    "is_trending" => true,
//                    "author" => "Jermain Jungerman",
//                    "author_image_url" => "https://picsum.photos/20/20",
//                    "image_url_portrait" => "https://picsum.photos/300/350",
//                    "image_url_landscape" => "https://picsum.photos/360/160",
//                    "title" => "Laravel Websockets | Chat Application Example",
//                    "date" => "June 8, 2022",
//                    "description" => "random description 394o32",
//                    "tags" => "tag1,tag2,tag3"
//                ],
//                [
//                    "url" => "/",
//                    "is_trending" => true,
//                    "author" => "Jermain Jungerman",
//                    "author_image_url" => "https://picsum.photos/20/20",
//                    "image_url_portrait" => "https://picsum.photos/300/350",
//                    "image_url_landscape" => "https://picsum.photos/360/160",
//                    "title" => "Laravel Websockets | Chat Application Example",
//                    "date" => "June 8, 2022",
//                    "description" => "random description 394o32",
//                    "tags" => "tag1,tag2,tag3"
//                ]
//
//            ],
//            "tags" => [
//                [
//                    "url" => "/",
//                    "name" => "Laravel"
//                ],
//                [
//                    "url" => "/",
//                    "name" => "Amazon"
//                ],
//                [
//                    "url" => "/",
//                    "name" => "Course"
//                ]
//            ]
//        ]);
//    });
});
