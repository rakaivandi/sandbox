@extends('layout.dashboard')
@section('content')
<div class="dashboard__create">
  <div class="card-header">Create Page</div>
  <div class="card-body">
      
      <form action="{{ route('property.store') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="location" id="location" class="form-control"></br>
        <label>Type</label></br>
        <select name="type" id="type">
          <option value="house">Select Type</option>
          <option value="homestay">Homestay</option>
          <option value="apartment">Apartment</option>
          <option value="house">House</option>
        </select></br>
        <label>Description</label></br>
        <textarea name="description" id="description" cols="100" rows="10"></textarea><br>
        <label>Category</label></br>
        <select name="category" id="category">
          <option value="rent">Select Category</option>
          <option value="sell">Sell</option>
          <option value="rent">Rent</option>
        </select><br>
        <label>Image</label></br>
        <input type="file" name="image" id="image" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop