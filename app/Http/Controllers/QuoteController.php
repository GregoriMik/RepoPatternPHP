<?php

namespace App\Http\Controllers;
use App\Models\Quote;
use App\Repository\iQuoteRepo;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    private iQuoteRepo $quoteRepo;

    public function __construct(iQuoteRepo $quoteRepo)
    {
        $this->quoteRepo = $quoteRepo;
    }
    public function index(){
       // $quotes = Quote::all();
        $quotes = $this->quoteRepo->all();

        return response()->json([
            'status'=> true,
            'data'=>$quotes,
            'message'=>'Query Ok',

        ]);
    }
}
