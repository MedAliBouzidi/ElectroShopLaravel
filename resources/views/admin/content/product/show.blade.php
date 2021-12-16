@extends('admin.app')

@section('content')
    <table class="table table-striped">
        <tbody>
            <tr>
                <th scope="row">Id</th>
                <td>{{$product->id}}</td>
            </tr>
            <tr>
                <th scope="row">Name</th>
                <td>{{$product->name}}</td>
            </tr>
            <tr>
                <th scope="row">Color</th>
                <td>{{$product->color}}</td>
            </tr>
            <tr>
                <th scope="row">Category</th>
                <td>{{$product->category}}</td>
            </tr>
            <tr>
                <th scope="row">Marque</th>
                <td>{{$product->marque}}</td>
            </tr>
            <tr>
                <th scope="row">Price</th>
                <td>{{$product->price}} DT</td>
            </tr>
            <tr>
                <th scope="row">Rate</th>
                <td>
                    @for($i=0; $i<5; $i++)
                        <li class="list-inline-item m-0">
                            <i class="{{($i<=$product->rate) ? 'fas' : 'far'}} fa-star small text-warning"></i>
                        </li>
                    @endfor
                </td>
            </tr>
            <tr>
                <th scope="row">Description</th>
                <td>{{$product->desc}}</td>
            </tr>
            <tr>
                <th scope="row">Image</th>
                <td><img src="{{asset($product->image)}}" alt="{{$product->name}}"
                    class="w-50 h-50"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <a class="btn btn-danger float-end" href="{{route('admin.products.destroy', $product->id)}}" role="button">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection