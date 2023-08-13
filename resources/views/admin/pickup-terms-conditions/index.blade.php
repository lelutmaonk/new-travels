@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Table Pickup's
    </div>
    <div class="card-body">
        <table class="table table-bordered">
        
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session('success') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <thead>
                <tr>
                  <th scope="col">Pickup Name</th>
                  <th scope="col">Terms Conditions Pickup</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pickup as $item)
                <tr>
                    <td>{{ $item->pickup_name }}</td>
                    <td>
                        <a href="{{ route('admin.pickup-terms-conditions.list', ['pickup' => $item->pickup_id]) }}" class="btn btn-sm btn-warning">Terms Conditions Pickup</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
</div>
@endsection