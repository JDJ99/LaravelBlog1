<?php

declare(strict_types=1);

namespace App\Modules\Home;

use App\Models\Blogs\BlogsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class HomeService
{
    const PAGE_LENGTH = 10;

    public function __construct(
        private readonly BlogsService $service
    )
    {

    }

    public function home(Request $request) : array
    {
        $totalCount = $this->service->getTotalCount();
        $page = $this->getPageNumber($request);

        return [
            "title" => "My Blog",
            "page_length" => self::PAGE_LENGTH,
            "total_blogs" => $totalCount,
            "page_number" => $page,
            "blogs" => [
                [
                    "url" => "/",
                    "is_trending" => true,
                    "author" => "Jermain Jungerman",
                    "author_image_url" => "https://picsum.photos/20/20",
                    "image_url_portrait" => "https://picsum.photos/300/350",
                    "image_url_landscape" => "https://picsum.photos/360/160",
                    "title" => "Laravel Websockets | Chat Application Example",
                    "date" => "June 8, 2022",
                    "description" => "random description 394o32",
                    "tags" => "tag1,tag2,tag3"
                ],
                [
                    "url" => "/",
                    "is_trending" => true,
                    "author" => "Jermain Jungerman",
                    "author_image_url" => "https://picsum.photos/20/20",
                    "image_url_portrait" => "https://picsum.photos/300/350",
                    "image_url_landscape" => "https://picsum.photos/360/160",
                    "title" => "Laravel Websockets | Chat Application Example",
                    "date" => "June 8, 2022",
                    "description" => "random description 394o32",
                    "tags" => "tag1,tag2,tag3"
                ],
                [
                    "url" => "/",
                    "is_trending" => true,
                    "author" => "Jermain Jungerman",
                    "author_image_url" => "https://picsum.photos/20/20",
                    "image_url_portrait" => "https://picsum.photos/300/350",
                    "image_url_landscape" => "https://picsum.photos/360/160",
                    "title" => "Laravel Websockets | Chat Application Example",
                    "date" => "June 8, 2022",
                    "description" => "random dsscription 394o32",
                    "tags" => "tag1,tag2,tag3"
                ]

            ],
            "trending" => [
                [
                    "url" => "/",
                    "is_trending" => true,
                    "author" => "Jermain Jungerman",
                    "author_image_url" => "https://picsum.photos/20/20",
                    "image_url_portrait" => "https://picsum.photos/300/350",
                    "image_url_landscape" => "https://picsum.photos/360/160",
                    "title" => "Laravel Websockets | Chat Application Example",
                    "date" => "June 8, 2022",
                    "description" => "random description 394o32",
                    "tags" => "tag1,tag2,tag3"
                ],
                [
                    "url" => "/",
                    "is_trending" => true,
                    "author" => "Jermain Jungerman",
                    "author_image_url" => "https://picsum.photos/20/20",
                    "image_url_portrait" => "https://picsum.photos/300/350",
                    "image_url_landscape" => "https://picsum.photos/360/160",
                    "title" => "Laravel Websockets | Chat Application Example",
                    "date" => "June 8, 2022",
                    "description" => "random description 394o32",
                    "tags" => "tag1,tag2,tag3"
                ],
                [
                    "url" => "/",
                    "is_trending" => true,
                    "author" => "Jermain Jungerman",
                    "author_image_url" => "https://picsum.photos/20/20",
                    "image_url_portrait" => "https://picsum.photos/300/350",
                    "image_url_landscape" => "https://picsum.photos/360/160",
                    "title" => "Laravel Websockets | Chat Application Example",
                    "date" => "June 8, 2022",
                    "description" => "random description 394o32",
                    "tags" => "tag1,tag2,tag3"
                ]


            ],
            "recentlyWritten" => [
                [
                    "url" => "/",
                    "is_trending" => true,
                    "author" => "Jermain Jungerman",
                    "author_image_url" => "https://picsum.photos/20/20",
                    "image_url_portrait" => "https://picsum.photos/300/350",
                    "image_url_landscape" => "https://picsum.photos/360/160",
                    "title" => "Laravel Websockets | Chat Application Example",
                    "date" => "June 8, 2022",
                    "description" => "random description 394o32",
                    "tags" => "tag1,tag2,tag3"
                ],
                [
                    "url" => "/",
                    "is_trending" => true,
                    "author" => "Jermain Jungerman",
                    "author_image_url" => "https://picsum.photos/20/20",
                    "image_url_portrait" => "https://picsum.photos/300/350",
                    "image_url_landscape" => "https://picsum.photos/360/160",
                    "title" => "Laravel Websockets | Chat Application Example",
                    "date" => "June 8, 2022",
                    "description" => "random description 394o32",
                    "tags" => "tag1,tag2,tag3"
                ],
                [
                    "url" => "/",
                    "is_trending" => true,
                    "author" => "Jermain Jungerman",
                    "author_image_url" => "https://picsum.photos/20/20",
                    "image_url_portrait" => "https://picsum.photos/300/350",
                    "image_url_landscape" => "https://picsum.photos/360/160",
                    "title" => "Laravel Websockets | Chat Application Example",
                    "date" => "June 8, 2022",
                    "description" => "random description 394o32",
                    "tags" => "tag1,tag2,tag3"
                ]

            ],
            "tags" => [
                [
                    "url" => "/",
                    "name" => "Laravel"
                ],
                [
                    "url" => "/",
                    "name" => "Amazon"
                ],
                [
                    "url" => "/",
                    "name" => "Course"
                ]
            ]
        ];
    }

    private function getPageNumber(Request $request): int
    {
        $page = $request->query("page", 1);

        try{
            $request->validate(
                [ "page" => "numeric|min:1" ],
                [ "page" => $page ]
            );
        } catch (ValidationException $error) {
            Log::error($error->getMessage());
            abort(404);
        }


        return (int)$page;
    }
}
