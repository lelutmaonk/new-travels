@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Table Package's Itinerary
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
                  <th scope="col">Packages Name</th>
                  <th scope="col">Packages Itinerary</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($packages as $item)
                <tr>
                    <td>{{ $item->packages_name }}</td>
                    <td>
                        <a href="{{ route('admin.packages-itinerary.list', ['packages' => $item->packages_id]) }}" class="btn btn-sm btn-warning">Packages Itinerary</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
</div>
@endsection