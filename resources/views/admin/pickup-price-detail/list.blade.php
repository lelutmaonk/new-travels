@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Table Pickup Price
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <a href="{{ route('admin.pickup-price.list', ['pickup' => $pickup_price->pickup?->pickup_id]) }}" class="btn btn-sm btn-danger mb-3">Back</a>
            <a href="{{ route('admin.pickup-price-detail.create', ['pickup_price' => $pickup_price->pickup_price_id]) }}" class="btn btn-sm btn-success mb-3 mx-2">Create Pickup Price</a>
      
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session('success') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <thead>
                <tr>
                  <th scope="col">From</th>
                  <th scope="col">Destination</th>
                  <th scope="col">Price</th>
                  <th scope="col">Notes</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($PickupPriceDetail as $item)
                <tr>
                    <td>{{ $item->from }}</td>
                    <td>{{ $item->destination }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->notes }}</td>
                    <td>
                        <a href="{{ route('admin.pickup-price-detail.edit', ['pickup_price_detail' => $item->pickup_price_detail_id]) }}" class="btn btn-sm btn-primary">Update</a>
                        <form method="POST" action="{{ route('admin.pickup-price-detail.destroy', ['pickup_price_detail' => $item->pickup_price_detail_id]) }}" class="d-inline">
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