@extends('base')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Shop</h1>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container p-0">
            <div class="row justify-content-center">

                <div class="col-lg-10 order-1 order-lg-2 mb-5 mb-lg-0">
                    <!-- PAGINATION-->
                    <nav aria-label="Page navigation example">
                        {{ $products->onEachSide(1)->links() }}
                    </nav>
                    <div class="row mt-3 mb-3">
                    @foreach($products as $product)
                        <!-- PRODUCT-->
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="mb-3 position-relative">
                                        <div class="badge text-white badge-"></div>
                                        <a class="d-block" href="{{route('shop.show', $product->id)}}">
                                            <img class="img-fluid w-100"
                                                 src="{{ asset($product->image) }}"
                                                 alt="{{$product->name}}">
                                        </a>
                                    </div>
                                    <h6><a class="reset-anchor" href="{{route('shop.show', $product->id)}}">{{$product->name}}</a></h6>
                                    <p class="small text-muted">{{$product->price}} DT</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- PAGINATION-->
                    <nav aria-label="Page navigation example">
                        {{ $products->onEachSide(1)->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection