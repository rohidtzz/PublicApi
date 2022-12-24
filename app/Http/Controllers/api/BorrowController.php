<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Books;
use App\Models\Borrow;

use Validator;

use Carbon\Carbon;


class BorrowController extends Controller
{
    //

    public function store(Request $request)
    {

        $Validator = Validator::make($request->all(),[
            // 'date_borrow' => 'required | Date',
            'due_date' => 'required | Date | after:today',
            'date_return' => 'required | Date | after:today',
            'book_id' => 'required | string',
        ]);

        if($Validator->fails()){

            return response()->json([
                'status' => "error",
                'message' => $Validator->errors()
            ],402);
        }

        $id = User::where('token',$request->header('Authorization'))->first()->id;

        $bookId = Books::find($request->book_id);


        if(!$bookId){
            return response()->json([
                'status' => "error",
                'message' => 'book_id no found'
            ],402);
        }

        $borrow = Borrow::create([
            'date_borrow' => Carbon::now(),
            'due_date' => $request->due_date,
            'date_return' => $request->date_return,
            'book_id' => $request->book_id,
            'user_id' => $id,
        ]);

        if(!$borrow){
            return response()->json([
                'status' => "error",
                'message' => 'invalid'
            ],402);
        }

        return response()->json([
            'status' => "success",
            'message' => 'sucees borrow book'
        ],200);





    }
}
