@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Form Itinerary
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('admin.pickup-terms-conditions.update', ['terms_conditions' => $terms_conditions->terms_conditions_id ]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                
                <div class="mb-3">
                    <label class="form-label">Terms and Conditions</label>
                    <input type="hidden" class="form-control @error('pickup_id') is-invalid @enderror" name="pickup_id" value="{{ old('pickup_id', $terms_conditions->pickup?->pickup_id) }}">
                    <input type="text" class="form-control @error('terms_conditions_name') is-invalid @enderror" name="terms_conditions_name" value="{{ old('terms_conditions_name', $terms_conditions->terms_conditions_name) }}">
                    @error('terms_conditions_name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Syarat dan Ketentuan</label>
                    <input type="text" class="form-control @error('terms_conditions_name_in') is-invalid @enderror" name="terms_conditions_name_in" value="{{ old('terms_conditions_name_in', $terms_conditions->terms_conditions_name_in) }}">
                    @error('terms_conditions_name_in')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            
            <a href="{{ route('admin.pickup-terms-conditions.list', ['pickup' => $terms_conditions->pickup?->pickup_id]) }}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
</div>
@endsection