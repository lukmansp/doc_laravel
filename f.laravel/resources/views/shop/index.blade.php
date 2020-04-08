@extends('layouts.master')
@section('title', 'Laravel shoping chart')
@section('content')
@foreach ($products->chunk(3) as $productChunk)

<div class="row my-3">
    @foreach ($productChunk as $product)

    <div class="col-sm-6 col-md-4 my-2">

        <div class="card" style="width: 18rem;">
            <img src="{{$product->imagePath}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <p class="card-text">{{$product->description}}</p>
            </div>
            <div class="card-body">
                <p class="float-left price">${{$product->price}}</p>
                <a href="{{route('product.addToCart', ['id' =>$product->id])}}" class="btn btn-success float-right"
                    role="button">Add cart</a>
            </div>
        </div>

    </div>
    @endforeach
</div>
@endforeach


@endsection
