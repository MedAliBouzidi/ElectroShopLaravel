@extends('admin.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('New Product') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="price"
                               class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                        <div class="col-md-6">
                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
                                   name="price" value="{{ old('price') }}" required autocomplete="price">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>

                        <div class="col-md-6">
                            <input id="color" type="text"
                                   class="form-control @error('color') is-invalid @enderror" name="color" required
                                   autocomplete="color">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="category"
                               class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                        <div class="col-md-6">
                            <select id="category" class="form-control @error('category') is-invalid @enderror"
                                    name="category" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach($categories as $category)
                                    <option value="{{$category}}">{{$category}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="marque"
                               class="col-md-4 col-form-label text-md-right">{{ __('Marque') }}</label>

                        <div class="col-md-6">
                            <select id="marque" class="form-control @error('marque') is-invalid @enderror"
                                    name="marque" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach($marques as $marque)
                                    <option value="{{$marque}}">{{$marque}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                                   name="desc" required autocomplete="description">

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                        <div class="col-md-6">
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
                                   name="image" required autocomplete="image">

                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary bg-primary">
                                {{ __('Store') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection