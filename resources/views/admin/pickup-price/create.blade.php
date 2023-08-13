@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Form Pickup Price
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('admin.pickup-price.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                
                <div class="mb-3">
                    <label class="form-label">Pickup Price Name</label>
                    <input type="hidden" class="form-control @error('pickup_id') is-invalid @enderror" name="pickup_id" value="{{ old('pickup_id', $pickup->pickup_id) }}">
                    <input type="text" class="form-control @error('pickup_price_name') is-invalid @enderror" name="pickup_price_name" value="{{ old('pickup_price_name') }}">
                    @error('pickup_price_name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Harga Penjemputan</label>
                    <input type="text" class="form-control @error('pickup_price_name_in') is-invalid @enderror" name="pickup_price_name_in" value="{{ old('pickup_price_name_in') }}">
                    @error('pickup_price_name_in')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            
            <a href="{{ route('admin.pickup-price.list', ['pickup' => $pickup->pickup_id]) }}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
</div>
@endsection