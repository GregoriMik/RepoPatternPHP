<?php 

namespace App\Repository;

use App\Models\Quote;

class QuoteRepo implements iQuoteRepo {
    function all(): array{

        $quotes = [
            new Quote([
                'quote'=>'If it were easy, everyone would do it.',
                'author'=> 'Tom Hanks',
            ]),
            ];

            return $quotes;

    }
}
