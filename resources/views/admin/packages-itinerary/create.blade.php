@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Form Itinerary
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('admin.packages-itinerary.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Start Time</label>
                         <input type="hidden" class="form-control @error('packages_id') is-invalid @enderror" name="packages_id" value="{{ old('packages_id', $packages->packages_id) }}">
                        <input type="time" class="form-control @error('start_time') is-invalid @enderror" name="start_time" value="{{ old('start_time') }}">
                        @error('start_time')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">End Time</label>
                        <input type="time" class="form-control @error('end_time') is-invalid @enderror" name="end_time" value="{{ old('end_time') }}">
                        @error('end_time')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Itinerary Name</label>
                    <input type="text" class="form-control @error('itinerary_name') is-invalid @enderror" name="itinerary_name" value="{{ old('itinerary_name') }}">
                    @error('itinerary_name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Rencana Perjalanan</label>
                    <input type="text" class="form-control @error('itinerary_name_in') is-invalid @enderror" name="itinerary_name_in" value="{{ old('itinerary_name_in') }}">
                    @error('itinerary_name_in')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            
            <a href="{{ route('admin.packages-itinerary.list', ['packages' => $packages->packages_id]) }}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
</div>
@endsection