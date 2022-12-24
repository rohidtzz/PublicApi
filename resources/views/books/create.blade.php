<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(session()->get('msg'))
    {{session()->get('msg')}}
    @endif

    <form action="{{ url('books/store') }}"  enctype="multipart/form-data" method="post">
        @csrf
        <input type="text" name="code" placeholder="code">
        <input type="text" name="title" placeholder="title">
        <input type="text" name="description" placeholder="desc">
        <input type="text" name="author" placeholder="author">
        <input type="text" name="publisher" placeholder="publisher">
        <input type="file" name="img">

        <button type="submit">submit</button>



    </form>

</body>
</html>
