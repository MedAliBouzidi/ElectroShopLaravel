@extends('admin.app')

@section('content')
    <div class="d-flex flex-row justify-content-around">
        <div class="card col-lg-4 text-center m-1">
            <div class="card-header">
                {{ __('Users') }}
            </div>
            <div class="card-body row">
                <i class="fas fa-users fs-1 col"></i>
                <span class="col fs-3">{{$users_count}}</span>
            </div>
        </div>
        <div class="card col-lg-4 text-center m-1">
            <div class="card-header">
                {{ __('Products') }}
            </div>
            <div class="card-body row">
                <i class="fas fa-boxes fs-1 col"></i>
                <span class="col fs-3">{{$products_count}}</span>
            </div>
        </div>
        <div class="card col-lg-4 text-center m-1">
            <div class="card-header">
                {{ __('Commands') }}
            </div>
            <div class="card-body row">
                <i class="fab fa-creative-commons-remix fs-1 col"></i>
                <span class="col fs-3">{{$commands_count}}</span>
            </div>
        </div>
    </div>
@endsection