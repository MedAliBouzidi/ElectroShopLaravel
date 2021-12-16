@extends('admin.app')

@section('content')
    <table class="table table-striped">
        <tbody>
            <tr>
                <th scope="row">Id</th>
                <td>{{$command->id}}</td>
            </tr>
            <tr>
                <th scope="row">Product</th>
                <td>{{$product->name}}</td>
            </tr>
            <tr>
                <th scope="row">User</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th scope="row">Quantity</th>
                <td>{{$command->qte}}</td>
            </tr>
            <tr>
                <th scope="row">Price Total</th>
                <td>{{$command->total_price}}</td>
            </tr>
            <tr>
                <th scope="row">Address</th>
                <td>{{$user->address}}</td>
            </tr>
            <tr>
                <th scope="row">Added At</th>
                <td>{{$command->created_at}}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <a class="btn btn-danger float-end" href="{{route('admin.commands.destroy', $command->id)}}" role="button">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection