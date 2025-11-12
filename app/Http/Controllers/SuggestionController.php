<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Модель продукта
use Illuminate\Support\Facades\Log;

class SuggestionController extends Controller
{
public function getSuggestions(string $query)
{
    Log::info("Запрос на предложения:", ['query' => $query]);

    // $products = Article::where('title', 'LIKE', '%' . $query . '%')
    //                   ->limit(10)
    //                   ->pluck('title')
    //                   ->toArray();

    // return response()->json($query);
}

}
