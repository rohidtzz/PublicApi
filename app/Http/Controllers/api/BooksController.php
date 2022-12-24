<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Books;

use Validator;

use File;

use GuzzleHttp\Client;

use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function free(){


        // $client = new Client();
        // $url = "https://publicapi.hidtzz.my.id/api/books";

        // $params = [
        //     'token'=> '$2y$10$DyaVVpsMLDe.9XLsj9V8hOekv72K0hHtncVygQSMEcpT2OpQwldVy'
        // ];

        // $headers = [
        //     'token'=> '$2y$10$8TmJk0FL31QZWSCJ93DeBeN3hEYYRfjgzzcpQJ10ZDZLClAhW8qvK'
        // ];

        // $response = $client->request('GET', $url, [
        //     'json' => $params,
        // ]);

        // $responseBody = json_decode($response->getBody());
        // dd($responseBody);



        // $apiKey= '$2y$10$8TmJk0FL31QZWSCJ93DeBeN3hEYYRfjgzzcpQJ10ZDZLClAhW8qvK';

        // $curl = curl_init();

        // curl_setopt_array($curl, [
        //     CURLOPT_FRESH_CONNECT  => true,
        //     CURLOPT_URL            => 'https://publicapi.hidtzz.my.id/api/books?token='.$apiKey,
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        // ]);

        // $response = curl_exec($curl);
        // $error = curl_error($curl);

        // curl_close($curl);

        // echo empty($error) ? $response : $error;



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
            'img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
            // 'img' => 'required'
        ]);

        if($Validator->fails()){
            return response()->json([
                'status' => "error",
                'message' => $Validator->errors()
            ],402);
        }

        $file = $request->file('img');
        $nama_file = 'https://publicapi.hidtzz.my.id/img/'.round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
		// $nama_file = $file->getClientOriginalName();
		$tujuan_upload = 'img/';
		$file->move($tujuan_upload,$nama_file);


        $books = Books::create([
            'code' => $request->code,
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'img' => $nama_file
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
        ]);

        if($Validator->fails()){

            return response()->json([
                'status' => "error",
                'message' => $Validator->errors()
            ],402);
        }

        $code = Books::where('code',$request->code)->first();

        if(!$code){
            return response()->json([
                'status' => "error",
                'message' => "code invalid"
            ],402);
        }

        if($request->hasFile('img')){

            $Validator = Validator::make($request->all(),[
                'img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $file = $request->file('img');
            $nama_file = 'https://publicapi.hidtzz.my.id/img/'.round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
            $tujuan_upload = 'img/';
            $file->move($tujuan_upload,$nama_file);

            $img = Books::where('code',$request->code)->first()->img;


            if(File::exists(public_path('img/'.$img))){
                File::delete(public_path('img/'.$img));
            }

            $books = Books::where('code',$request->code)->update([
                'code' => $request->code,
                'title' => $request->title,
                'description' => $request->description,
                'author' => $request->author,
                'publisher' => $request->publisher,
                'img' => $nama_file
            ]);

        } else {

            $books = Books::where('code',$request->code)->update([
                'code' => $request->code,
                'title' => $request->title,
                'description' => $request->description,
                'author' => $request->author,
                'publisher' => $request->publisher,
            ]);

        }

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

        $img = Books::where('code',$request->code)->first()->img;

        if(File::exists(public_path('img/'.$img))){
            File::delete(public_path('img/'.$img));
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
