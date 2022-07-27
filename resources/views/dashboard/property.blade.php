@extends('layout.dashboard')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Property</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('property.create') }}" class="btn btn-success btn-sm" title="Add New property">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Types</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($property as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->image }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <a href="{{ route('property.view', ['id' => $item->id]) }}" title="View property"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('property.edit', ['id' => $item->id]) }}" title="Edit property"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ route('property.delete', ['id' => $item->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete property" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection