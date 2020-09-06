@extends('layouts.master')

@section('content')
<!--side line +content-->

<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">
                      @include('partial/products-sidebar')

    </div>
    <div class="col-md-8">
      <div class="widget">
        <h1>Featured Products</h1>
        <div class="row">
          <div class="col-md-4">
                            <div class="card">
            <img class="card-img-top feature-img" src="{{ asset('images/products/'.'2.png')}}" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Mi Note 10</h4>
              <p class="card-text">6gb 128 gb  </br> price 40000</p>
              <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                    </div>
                </div>
              </div>
          <div class="col-md-4">
                                <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'.'3.png')}}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Mi Note 10</h4>
                  <p class="card-text">6gb 128 gb  </br> price 40000</p>
                  <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                                    <div class="card" >
                    <img class="card-img-top feature-img" src="{{ asset('images/products/'.'1.png')}}" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Mi Note 10</h4>
                      <p class="card-text">6gb 128 gb  </br> price 40000</p>
                      <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                            </div>
                        </div>
            </div>
            <div class="col-md-4">
                                        <div class="card">
                        <img class="card-img-top feature-img" src="{{ asset('images/products/'.'1.png')}}" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">Mi Note 10</h4>
                          <p class="card-text">6gb 128 gb  </br> price 40000</p>
                          <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                                </div>
                            </div>
              </div>
            </div>
          </div>


      </div>

    </div>

  </div>
  <!--end side+content-->


@endsection
