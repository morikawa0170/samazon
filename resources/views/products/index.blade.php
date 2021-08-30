@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-9">
        <div class="container mt-4">
            <div class="row w-100">
                @foreach($products as $product)
                <div class="col-3">
                    <a href="{{route('products.show', $product)}}">
                        <img src="{{ asset('img/dummy.png')}}" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="samazon-product-label mt-2">
                                {{$product->name}}<br>
                                <label>￥{{$product->price}}</label>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@foreach($products as $product)
    {{$product->name}}
    {{$product->description}}
    {{$product->price}}
    <a href="{{route('products.show', $product)}}">Show</a>
    <a href="{{route('products.edit', $product)}}">edit</a> 
@endforeach

<a href="{{route('products.create')}}">New</a> 