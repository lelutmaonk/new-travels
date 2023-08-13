@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Table Terms Conditions
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <a href="{{ route('admin.pickup-terms-conditions.index') }}" class="btn btn-sm btn-danger mb-3">Back</a>
            <a href="{{ route('admin.pickup-terms-conditions.create', ['pickup' => $pickup->pickup_id]) }}" class="btn btn-sm btn-success mb-3 mx-2">Create Terms and Conditions</a>
      
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session('success') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <thead>
                <tr>
                  <th scope="col">Terms Conditions</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pickupTermsConditions as $item)
                <tr>
                    <td>{{ $item->terms_conditions_name }}</td>
                    <td>
                        <a href="{{ route('admin.pickup-terms-conditions.edit', ['terms_conditions' => $item->terms_conditions_id]) }}" class="btn btn-sm btn-primary">Update</a>
                        <form method="POST" action="{{ route('admin.pickup-terms-conditions.destroy', ['terms_conditions' => $item->terms_conditions_id]) }}" class="d-inline">
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