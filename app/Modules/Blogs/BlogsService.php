<?php

declare(strict_types=1);

namespace App\Models\Blogs;

class BlogsService
{
    public function __construct(
        private readonly BlogsRepository $repository
    )
    {

    }

    public function getTotalCount(): int
    {
        return $this->repository->getTotalCount();
    }
}
