<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books;

use Validator;

use File;

use Session;

use GuzzleHttp\Client;

use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{

    public function create()
    {

        return view('books.create');



    }

    public function store(Request $request)
    {

        $client = new Client();
        $token = "$2y$10$8TmJk0FL31QZWSCJ93DeBeN3hEYYRfjgzzcpQJ10ZDZLClAhW8qvK";

        $file_img = $request->file('img');
        $image_path =$file_img->getpathname();
        $image_mime =$file_img->getmimetype();
        $image_org  =$file_img->getClientOriginalName();

        $response = $client->request('POST', 'https://publicapi.hidtzz.my.id/api/books/store', [
            'multipart' => [
                [
                    'name'     => 'img',
                    'filename' => $image_org,
                    'Mime-Type'=> $image_mime,
                    'contents' => fopen( $image_path, 'r' ),
                ],
                [
                    'name' => 'code',
                    'contents' => $request->code
                ],
                [
                    'name' => 'title',
                    'contents' => $request->title
                ],
                [
                    'name' => 'description',
                    'contents' => $request->description
                ],
                [
                    'name' => 'author',
                    'contents' => $request->author
                ],
                [
                    'name' => 'publisher',
                    'contents' => $request->publisher
                ]
                ],
                'http_errors'=>false,
                'headers' => [
                    'Authorization' => $token
                ]
        ]);

        $responseBody = json_decode($response->getBody());

        return $responseBody;

    }


}
