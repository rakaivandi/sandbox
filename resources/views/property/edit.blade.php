@extends('layout.dashboard')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
    <form action="{{ route('property.update') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" value="{{ $property->id }}">
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{ $property->name }}"></br>
        <label>Address</label></br>
        <input type="text" name="location" id="location" class="form-control" value="{{ $property->location }}"></br>
        <label>Type</label></br>
        <select name="type" id="type">
          <option value="house">Select Type</option>
          <option value="homestay">Homestay</option>
          <option value="apartment">Apartment</option>
          <option value="house">House</option>
        </select></br>
        <label>Description</label></br>
        <textarea name="description" id="description" cols="100" rows="10">{{ $property->description }}</textarea></br>
        <label>Category</label></br>
        <select name="category" id="category">
          <option value="rent">Select Category</option>
          <option value="sell">Sell</option>
          <option value="rent">Rent</option>
        </select><br>
        <label>Image</label></br>
        <input type="file" name="image" id="image" class="form-control" value="{{ $property->image }}"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control" value="{{ $property->price }}"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop