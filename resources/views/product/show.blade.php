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


            <div class="form-group">
            <label for="exampleFormControlInput1">Name: {{$product->name}}</label>
           
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlInput1">Price: {{$product->price}} </label>
                
                </div>
           
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Details: {{$product->info}}</label>
            
            </div>

            
     


</div>
@endsection