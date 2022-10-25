<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
        <div class = "table-resonsive">
            <table class="table table-striped align-middle">
               <thead>
                    <tr>
                        <td>Category Name</td>
                        <td>Product Name</td>
                        <td>Price</td>
                    </tr>
               </thead>
               <tbody>
                {{$response}}
                @foreach ($response as $items=>$data )
                    <tr>
                        <td>{{$items['category_name']}}</td>
                        <td>{{$items['product_name']}}</td>
                        <td>{{$items['price']}}</td>
                    </tr>
                @endforeach
               </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>