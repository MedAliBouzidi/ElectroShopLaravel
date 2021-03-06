@extends('base')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Cart</h1>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <h2 class="h5 text-uppercase mb-4">Shopping cart</h2>
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <!-- CART TABLE-->
                <div class="table-responsive mb-4">
                    <table class="table">
                        <thead class="bg-light">
                        <tr>
                            <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Product</strong></th>
                            <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Price</strong></th>
                            <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Quantity</strong></th>
                            <th class="border-0" scope="col"> </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($commands as $command)
                                <tr>
                                    <th class="pl-0 border-0" scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body ml-3">
                                                <strong class="h6"><a class="reset-anchor animsition-link" href="{{route('shop.show', $command->product_id)}}">Red digital smartwatch</a>
                                                </strong>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="align-middle border-0">
                                        <p class="mb-0 small">{{$command->total_price}} DT</p>
                                    </td>
                                    <td class="align-middle border-0">
                                        <p class="mb-0 small">{{$command->qte}} Unity</p>
                                    </td>
                                    <td class="align-middle border-0">
                                        <a class="reset-anchor" href="{{route('commands.destroy', $command->id)}}">
                                            <i class="fas fa-trash-alt small text-muted"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- CART NAV-->
                <div class="bg-light px-4 py-3">
                    <div class="row align-items-center text-center">
                        <div class="col-md-6 mb-3 mb-md-0 text-md-left">
                            <a class="btn btn-link p-0 text-dark btn-sm" href="{{route('shop.index')}}">
                                <i class="fas fa-long-arrow-alt-left mr-2"></i>
                                Continue shopping
                            </a>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <a class="btn btn-outline-dark btn-sm" href="{{route('checkout')}}">
                                Procceed to checkout
                                <i class="fas fa-long-arrow-alt-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ORDER TOTAL-->
            <div class="col-lg-4">
                <div class="card border-0 rounded-0 p-lg-4 bg-light">
                    <div class="card-body">
                        <h5 class="text-uppercase mb-4">Cart total</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center justify-content-between mb-4">
                                <strong class="text-uppercase small font-weight-bold">Total</strong>
                                <span>{{$commands->sum('total_price')}} DT</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection