<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books;

use Validator;

class BooksController extends Controller
{
    public function free(){

        $books = Books::all()->take(10);

        $data = [];

        foreach($books as $book)
        {
            $data[] = [
                'code' => $book->code,
                'title' => $book->title,
                'description' => $book->description,
                'author' => $book->author,
                'publisher' => $book->publisher,
                'img' => $book->img
            ];
        }

        return response()->json([
            'status' => "success",
            'data' => $data
        ],200);


    }

    public function index(Request $request)
    {

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
                    'publisher' => $book->publisher,
                    'img' => $book->img
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
                    'publisher' => $book->publisher,
                    'img' => $book->img
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
            'publisher' => $books->publisher,
            'img' => $books->img
        ];

        return response()->json([
            'status' => "success",
            'data' => $data
        ],200);



    }


    public function store(Request $request){


        $Validator = Validator::make($request->all(),[
            'code' => 'required | integer | unique:books',
            'title' => 'required | String',
            'description' => 'required | String',
            'author' => 'required | String',
            'publisher' => 'required | String',
            'img' => 'required'
        ]);

        if($Validator->fails()){

            return response()->json([
                'status' => "error",
                'message' => $Validator->errors()
            ],402);
        }


        $books = Books::create([
            'code' => $request->code,
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'img' => $request->img
        ]);


        if(!$books){
            return response()->json([
                'status' => "error",
                'message' => "invalid"
            ],402);
        }

        return response()->json([
            'status' => "success",
            'message' => "data stored"
        ],200);





    }

    public function update(Request $request){


        $Validator = Validator::make($request->all(),[
            'code' => 'required | integer',
            'title' => 'required | String',
            'description' => 'required | String',
            'author' => 'required | String',
            'publisher' => 'required | String',
            'img' => 'required'
        ]);

        if($Validator->fails()){

            return response()->json([
                'status' => "error",
                'message' => $Validator->errors()
            ],402);
        }

        $books = Books::where('code',$request->code)->first();

        if(!$books){
            return response()->json([
                'status' => "error",
                'message' => "code invalid"
            ],402);
        }

        $books = Books::where('code',$request-> code)->update([
            'code' => $request->code,
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'img' => $request->img
        ]);

        if(!$books){
            return response()->json([
                'status' => "error",
                'message' => "invalid"
            ],402);
        }

        return response()->json([
            'status' => "success",
            'message' => "data updated"
        ],200);

    }

    public function destroy(Request $request)
    {

        $Validator = Validator::make($request->all(),[
            'code' => 'required | integer',
        ]);

        if($Validator->fails()){
            return response()->json([
                'status' => "error",
                'message' => $Validator->errors()
            ],402);
        }

        $books = Books::where('code',$request->code)->first();

        if(!$books){
            return response()->json([
                'status' => "error",
                'message' => "code invalid"
            ],402);
        }

        $books = Books::where('code',$request->code)->delete();

        if(!$books){
            return response()->json([
                'status' => "error",
                'message' => "invalid delete"
            ],402);
        }

        return response()->json([
            'status' => "success",
            'message' => "data deleted"
        ],200);

    }
}
