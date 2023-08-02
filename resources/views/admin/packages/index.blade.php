@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Table Package's
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <a href="{{ route('admin.packages.create') }}" class="btn btn-sm btn-success mb-3">Create Packages</a>
      
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session('success') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <thead>
                <tr>
                  <th scope="col">Packages Name</th>
                  <th scope="col">Packages Duration</th>
                  <th scope="col">Minimun Order</th>
                  <th scope="col">Price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($packages as $item)
                <tr>
                    <td>{{ $item->packages_name }}</td>
                    <td>{{ $item->packages_duration }}</td>
                    <td>{{ $item->minimun_order }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">Detail</a>
                        <a href="{{ route('admin.packages.edit', ['packages' => $item->packages_id]) }}" class="btn btn-sm btn-primary">Update</a>
                        <form method="POST" action="{{ route('admin.packages.destroy', ['packages' => $item->packages_id]) }}" class="d-inline">
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