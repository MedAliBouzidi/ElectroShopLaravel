@extends('admin.app')

@section('content')
    <table class="table table-striped">
        <tbody>
            <tr>
                <th scope="row">Id</th>
                <td>{{$user->id}}</td>
            </tr>
            <tr>
                <th scope="row">Name</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th scope="row">E-mail</th>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <th scope="row">Phone</th>
                <td>{{$user->phone}}</td>
            </tr>
            <tr>
                <th scope="row">Address</th>
                <td>{{$user->address}}</td>
            </tr>
            <tr>
                <th scope="row">Verified At</th>
                <td>{{$user->email_verified_at}}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <a class="btn btn-danger float-end" href="{{route('admin.users.destroy', $user->id)}}" role="button">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection