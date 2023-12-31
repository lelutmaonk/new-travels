@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Table Included Package's
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <a href="{{ route('admin.packages-included.index') }}" class="btn btn-sm btn-danger mb-3">Back</a>
            <a href="{{ route('admin.packages-included.create', ['packages' => $packages->packages_id]) }}" class="btn btn-sm btn-success mb-3 mx-2">Create Additional Note</a>
      
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session('success') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <thead>
                <tr>
                  <th scope="col">Included Name</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($packagesIncluded as $item)
                <tr>
                    <td>{{ $item->included_name }}</td>
                    <td>
                        <a href="{{ route('admin.packages-included.edit', ['included' => $item->included_id]) }}" class="btn btn-sm btn-primary">Update</a>
                        <form method="POST" action="{{ route('admin.packages-included.destroy', ['included' => $item->included_id]) }}" class="d-inline">
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