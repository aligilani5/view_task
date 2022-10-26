@extends('welcome')

@section('content')
<div class="container mt-5">
    <div class = "table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <td>Category Name</td>
                    <td>Product Name</td>
                    <td>Price</td>
                </tr>
            </thead>
            <tbody>
                @foreach($response as $data)
                    @foreach($data['products'] as $prod)
                        <tr>
                            <td>{{$data['category_name']}}</td>
                            <td>{{$prod['product_name']}}</td>
                            <td>{{$prod['price']}}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection