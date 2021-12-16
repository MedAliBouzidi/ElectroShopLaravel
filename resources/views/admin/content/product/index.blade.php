@extends('admin.app')

@section('content')
    <!-- PAGINATION-->
    <nav aria-label="Page navigation">
        {{ $products->onEachSide(1)->links() }}
    </nav>
    <table class="table table-striped mt-3 mb-3">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Marque</th>
            <th scope="col">Rate</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->marque}}</td>
                <td>
                    @for($i=0; $i<5; $i++)
                        <li class="list-inline-item m-0">
                            <i class="{{($i<=$product->rate) ? 'fas' : 'far'}} fa-star small text-warning"></i>
                        </li>
                    @endfor
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.products.show', $product->id)}}" role="button">Consult</a>
                    <a class="btn btn-danger" href="{{route('admin.products.destroy', $product->id)}}" role="button">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- PAGINATION-->
    <nav aria-label="Page navigation">
        {{ $products->onEachSide(1)->links() }}
    </nav>
@endsection