<?php

namespace App\GraphQL\Queries;

use App\Models\Book;

class SearchByAuthor
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     */
    public function __invoke($_, array $args)
    {
        // searchByAuthor
        return Book::where('author', 'like', '%' . $args['search'] . '%')->get();
    }
}
