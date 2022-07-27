@extends('layout.dashboard')
@section('content')
<div class="card mt-5">
  <div class="card-header">Detail {{ $property->name }}</div>
  <div class="card-body">
        <div class="card-body">
          <h5 class="card-title">Name : {{ $property->name }}</h5>
          <p class="card-text">Address : {{ $property->location }}</p>
          <p class="card-text">Type : {{ $property->type }}</p>
          <p class="card-text">Description : {{ $property->description }}</p>
          <p class="card-text">Category : {{ $property->category }}</p>
          <p class="card-text">Image : <img src="/images/{{ $property->image }}" width="100px"></p>
          <p class="card-text">Price : {{ $property->price }}</p>
        </div>
      
    </hr>
  
  </div>
</div>
@endsection