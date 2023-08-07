@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Table Additional Note
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <a href="{{ route('admin.packages-additional-note.index') }}" class="btn btn-sm btn-danger mb-3">Back</a>
            <a href="{{ route('admin.packages-additional-note.create', ['packages' => $packages->packages_id]) }}" class="btn btn-sm btn-success mb-3 mx-2">Create Additional Note</a>
      
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session('success') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <thead>
                <tr>
                  <th scope="col">Additional Note</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($additionalNote as $item)
                <tr>
                    <td>{{ $item->additional_note_name }}</td>
                    <td>
                        <a href="{{ route('admin.packages-additional-note.edit', ['additional_note' => $item->additional_note_id]) }}" class="btn btn-sm btn-primary">Update</a>
                        <form method="POST" action="{{ route('admin.packages-additional-note.destroy', ['additional_note' => $item->additional_note_id]) }}" class="d-inline">
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