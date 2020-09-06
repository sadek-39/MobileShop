@extends('layouts.master')

@section('content')
<!--side line +content-->

<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">
                      <!-- @include('partial/products-sidebar') -->

    </div>
    <div class="col-md-8">
      <div class="widget">
        <h1>Featured Products</h1>
        <div class="row">
          @foreach ($products as $product)
                  <div class="col-md-4">
                        <div class="card">


                          @php  $i=1;@endphp
                    @foreach ($product->images as $image)
                       @if ($i>0)
                      <img class="card-img-top feature-img" src="{{ asset('images/products/'.$image->image)}}" alt="Card image">
                      @endif

                      @php $i--;@endphp
                    @endforeach
                    <div class="card-body">
                      <h4 class="card-title">{{$product->title}}</h4>
                      <p class="card-text"> price :{{$product->price}}</p>
                      <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                      <a href="#" class="btn btn-outline-warning">Buy</a>
                            </div>
                        </div>
                  </div>
           @endforeach
            </div>
          </div>


      </div>

    </div>

  </div>
  <!--end side+content-->


@endsection
