<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books;

class BooksController extends Controller
{
    //

    public function index(Request $request)
    {

        // dd($request->page);

        if($request->q == null){

            $books = Books::all();

            $data = [];

            foreach($books as $book)
            {
                $data[] = [
                    'code' => $book->code,
                    'title' => $book->title,
                    'description' => $book->description,
                    'author' => $book->author,
                    'publisher' => $book->publisher
                ];
            }

        } else {

            $books = Books::all()->take($request->q);

            $data = [];

            foreach($books as $book)
            {
                $data[] = [
                    'code' => $book->code,
                    'title' => $book->title,
                    'description' => $book->description,
                    'author' => $book->author,
                    'publisher' => $book->publisher
                ];
            }


        }

        return response()->json([
            'status' => "success",
            'data' => $data
        ],200);
    }


    public function show($code)
    {
        $books = Books::where('code',$code)->first();

        if(!$books){
            return response()->json([
                'status' => "error",
                'message' => "code invalid"
            ],402);
        }

        $data = [
            'code' => $books->code,
            'title' => $books->title,
            'description' => $books->description,
            'author' => $books->author,
            'publisher' => $books->publisher
        ];

        return response()->json([
            'status' => "success",
            'data' => $data
        ],200);



    }
}
