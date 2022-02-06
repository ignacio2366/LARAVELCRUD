<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table List</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css?v=<?php echo time(); ?>" type="text/css">
</head>

<body>

    <div class="container">
        @extends('page.master')
        @section('content')

            <table class="table table-zebra">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($posts as $post)

                    <tr>
                        <td>{{ $post->Id }}</td>
                        <td>{{ $post->Email }}</td>
                        <td>{{ $post->Password }}</td>
                        <td><a href="/edit/{{$post->Id}}">Edit</a> <a href="Delete/{{$post->Id}}">Delete</a></td>
                @endforeach
                </tr>

            </table>
        </div>

    @endsection
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
