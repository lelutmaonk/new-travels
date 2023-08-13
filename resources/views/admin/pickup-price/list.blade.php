@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Table Pickup Price
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <a href="{{ route('admin.pickup-price.index') }}" class="btn btn-sm btn-danger mb-3">Back</a>
            <a href="{{ route('admin.pickup-price.create', ['pickup' => $pickup->pickup_id]) }}" class="btn btn-sm btn-success mb-3 mx-2">Create Pickup Price</a>
      
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session('success') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <thead>
                <tr>
                  <th scope="col">Pickup Price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pickupPrice as $item)
                <tr>
                    <td>{{ $item->pickup_price_name }}</td>
                    <td>
                        <a href="{{ route('admin.pickup-price.edit', ['pickup_price' => $item->pickup_price_id]) }}" class="btn btn-sm btn-primary">Update</a>
                        <form method="POST" action="{{ route('admin.pickup-price.destroy', ['pickup_price' => $item->pickup_price_id]) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
</div>
@endsection