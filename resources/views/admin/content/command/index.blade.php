@extends('admin.app')

@section('content')
    <!-- PAGINATION-->
    <nav aria-label="Page navigation">
        {{ $commands->onEachSide(1)->links() }}
    </nav>
    <table class="table table-striped mt-3 mb-3">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commands as $command)
                <tr>
                    <th scope="row">{{$command->id}}</th>
                    <td>{{$command->qte}}</td>
                    <td>{{$command->total_price}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.commands.show', $command->id)}}" role="button">Consult</a>
                        <a class="btn btn-danger" href="{{route('admin.commands.destroy', $command->id)}}" role="button">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- PAGINATION-->
    <nav aria-label="Page navigation">
        {{ $commands->onEachSide(1)->links() }}
    </nav>
@endsection