@extends('template')
<link rel="stylesheet" href="{{ url('css/merch.css') }}">
@section('css')
@endsection
@section('js')
@endsection

@section('main')
<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kaos Putih</h5>
              <p class="card-text">blablabla blablabl blabla</p>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kaos Hitam</h5>
              <p class="card-text">blablabla blablabl blabla</p>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
          </div>
    </div>
    
  </div>
@endsection
