@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card uper">
                <div class="card-header">
                    Add Products
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form method="post" action="{{ route('products.update', $product->id ) }}">
                        <div class="form-group">
                        @csrf
                        @method('PATCH')
                            <label for="country_name">Name :</label>
                            <input type="text" class="form-control" name="name" value="{{ $product->name }}"/>
                        </div>
                        <div class="form-group">
                            <label for="cases">Price :</label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection