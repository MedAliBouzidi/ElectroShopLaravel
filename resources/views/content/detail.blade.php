@extends('base')

@section('content')
    <div class="row mb-5">
        <div class="col-lg-6">
            <!-- PRODUCT SLIDER-->
            <div class="row m-sm-0">
                <div class="col-sm-10 order-1 order-sm-2">
                    <div class="owl-carousel owl-theme product-slider" data-slider-id="1">
                        @for($i=0; $i<3; $i++)
                            <img class="img-fluid item" src="{{ asset($product->image) }}" alt="{{$product->name}}">
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT DETAILS-->
        <div class="col-lg-6">
            <ul class="list-inline mb-2">
                @for($i=0; $i<5; $i++)
                    <li class="list-inline-item m-0">
                        <i class="{{($i<=$product->rate) ? 'fas' : 'far'}} fa-star small text-warning"></i>
                    </li>
                @endfor
            </ul>
            <h1>{{$product->name}}</h1>
            <p class="text-muted lead">{{$product->price}}</p>
            <p class="text-small mb-4">{{Str::limit($product->desc, 200)}}</p>
            <form action="{{route('commands.store', $product->id)}}" method="post" class="row align-items-stretch mb-4">
                @csrf
                <div class="col-sm-5 pr-sm-0">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white">
                        <span class="small text-uppercase text-gray mr-4 no-select">
                            <label for="quantity">Quantity</label>
                        </span>
                        <div class="quantity">
                            <span class="dec-btn p-0"><i class="fas fa-caret-left"></i></span>
                            <input id="quantity" name="qte" class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <span class="inc-btn p-0"><i class="fas fa-caret-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 pl-sm-0">
                    <div class="btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0">
                        <button type="submit">
                            {{ __('Add to cart') }}
                        </button>
                    </div>
                </div>
            </form>
            <ul class="list-unstyled small d-inline-block">
                <li class="px-3 py-2 mb-1 bg-white text-muted">
                    <div class="m-2">
                        <strong class="text-uppercase text-dark">Color:</strong>
                        <span>{{$product->color}}</span>
                    </div>
                    <div class="m-2">
                        <strong class="text-uppercase text-dark">Category:</strong>
                        <span>{{$product->category}}</span>
                    </div>
                    <div class="m-2">
                        <strong class="text-uppercase text-dark">Marque:</strong>
                        <span>{{$product->marque}}</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- DETAILS TABS-->
    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
               role="tab" aria-controls="description" aria-selected="true">Description</a>
        </li>
    </ul>
    <div class="tab-content mb-5" id="myTabContent">
        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            <div class="p-4 p-lg-5 bg-white">
                <h6 class="text-uppercase mb-2">Product description </h6>
                <p class="text-muted text-small mb-0">{{$product->desc}}</p>
            </div>
        </div>
    </div>
@endsection