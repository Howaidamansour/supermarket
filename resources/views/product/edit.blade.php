@extends('product.layout')

@section('content')

<div class="container" style="padding-top: 2%">

    <div class="card container">
        <div class="card-body">
        <p class="card-text">Product name: {{$product->name}} <span><a href="{{route('products.index')}}">back</a></span></p>
        </div>
    </div>
</div>

<div class="container" style="padding-top: 2%">


        <form action="{{route('products.update', $product->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
            <label for="exampleFormControlInput1"></label>
            <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleFormControlInput1" placeholder="product name">
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input type="text" name="price" value="{{$product->price}}" class="form-control" id="exampleFormControlInput1" placeholder="product price">
                </div>
           
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Details</label>
            <textarea class="form-control" name="info" rows="3">{{$product->info}}"</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>


</div>
@endsection