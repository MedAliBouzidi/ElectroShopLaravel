@extends('admin.app')

@section('content')
    <table class="table table-striped">
        <tbody>
        <tr>
            <th scope="row">Id</th>
            <td>{{auth()->user()->id}}</td>
        </tr>
        <tr>
            <th scope="row">Name</th>
            <td>{{auth()->user()->name}}</td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{{auth()->user()->email}}</td>
        </tr>
        <tr>
            <th scope="row">Phone</th>
            <td>{{auth()->user()->phone}}</td>
        </tr>
        <tr>
            <th scope="row">Address</th>
            <td>{{auth()->user()->address}}</td>
        </tr>
        <tr>
            <th scope="row">Admin</th>
            <td>{{auth()->user()->isAdmin ? 'YES' : 'NO'}}</td>
        </tr>
        <tr>
            <th scope="row">Verified At</th>
            <td>{{auth()->user()->email_verified_at ? auth()->user()->email_verified_at : 'Still not verified'}}</td>
        </tr>
        <tr>
            <th scope="row">Created At</th>
            <td>{{auth()->user()->created_at}}</td>
        </tr>
        </tbody>
    </table>
@endsection