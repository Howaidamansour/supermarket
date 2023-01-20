@extends('product.layout')

@section('content')
    

<div class="jumbotron container">
   
    <p>Trashed products</p>
    <a class="btn btn-primary btn-lg" href="{{route('products.index')}}" role="button">Home</a>
  </div>


  <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col" style="width: 430px">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
              $i = 0;  
            @endphp
            @foreach ($products as $item)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->price}} </td>
                <td>
                    <div class="row">
                        
                        <div class="col-sm">
                            <a  class="btn btn-primary" href="{{route('product.back.from.trash',$item->id)}}">Back</a>                        </div>
                        
                         
                      </div>
                 
                  
                  

                </td>
              </tr>
            @endforeach
          
          
        </tbody>

        

  </div>

  @endsection