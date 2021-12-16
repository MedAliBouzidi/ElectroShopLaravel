@extends('admin.app')

@section('content')
    <!-- PAGINATION-->
    <nav aria-label="Page navigation">
        {{ $users->onEachSide(1)->links() }}
    </nav>
    <table class="table table-striped mt-3 mb-3">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.users.show', $user->id)}}" role="button">Consult</a>
                        <a class="btn btn-danger" href="{{route('admin.users.destroy', $user->id)}}" role="button">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- PAGINATION-->
    <nav aria-label="Page navigation">
        {{ $users->onEachSide(1)->links() }}
    </nav>
@endsection