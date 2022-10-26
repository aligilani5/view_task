@extends('welcome')

@section('content')
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
            {{$response}}
            <!-- @foreach($response as $data)
                <tr>
                    <td>{{$data['category_name']}}</td>
                    <td>{{$data['product_name']}}</td>
                    <td>{{$data['price']}}</td>
                </tr>
            @endforeach -->
        </tbody>
    </table>
</div>
@endsection