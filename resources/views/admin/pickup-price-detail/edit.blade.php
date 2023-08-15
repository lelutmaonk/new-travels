@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Form Pickup Price Detail
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('admin.pickup-price-detail.update', ['pickup_price_detail' => $pickup_price_detail]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">From</label>
                        <input type="hidden" class="form-control @error('pickup_price_id') is-invalid @enderror" name="pickup_price_id" value="{{ old('pickup_price_id', $pickup_price_detail->pickup_price?->pickup_price_id) }}">
                        <input type="text" class="form-control @error('from') is-invalid @enderror" name="from" value="{{ old('from', $pickup_price_detail->from) }}">
                        @error('from')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Destination</label>
                        <input type="text" class="form-control @error('destination') is-invalid @enderror" name="destination" value="{{ old('destination', $pickup_price_detail->destination) }}">
                        @error('destination')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $pickup_price_detail->price) }}">
                        @error('price')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Notes</label>
                        <input type="text" class="form-control @error('notes') is-invalid @enderror" name="notes" value="{{ old('notes', $pickup_price_detail->notes) }}">
                        @error('notes')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Dari</label>
                        <input type="text" class="form-control @error('from_in') is-invalid @enderror" name="from_in" value="{{ old('from_in', $pickup_price_detail->from_in) }}">
                        @error('from_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tujuan</label>
                        <input type="text" class="form-control @error('destination_in') is-invalid @enderror" name="destination_in" value="{{ old('destination_in', $pickup_price_detail->destination_in) }}">
                        @error('destination_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control @error('price_in') is-invalid @enderror" name="price_in" value="{{ old('price_in', $pickup_price_detail->price_in) }}">
                        @error('price_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Catatan</label>
                        <input type="text" class="form-control @error('notes_in') is-invalid @enderror" name="notes_in" value="{{ old('notes_in', $pickup_price_detail->notes_in) }}">
                        @error('notes_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>
            
            <a href="{{ route('admin.pickup-price-detail.list', ['pickup_price' => $pickup_price_detail->pickup_price?->pickup_price_id]) }}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
</div>
@endsection