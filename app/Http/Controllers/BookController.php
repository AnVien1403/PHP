<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {

        $books = DB::table('LM')->get();
        return view('books.index', compact('books'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $results = Book::where('title', 'LIKE', "%$search%")
            ->orWhere('author', 'LIKE', "%$search%")
            ->get();

        return view('books.search', compact('results'));
    }//
}
