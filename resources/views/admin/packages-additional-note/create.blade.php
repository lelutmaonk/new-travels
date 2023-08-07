@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Form Activities
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('admin.packages-additional-note.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                
                <div class="mb-3">
                    <label class="form-label">Additional Note Name</label>
                     <input type="hidden" class="form-control @error('packages_id') is-invalid @enderror" name="packages_id" value="{{ old('packages_id', $packages->packages_id) }}">
                    <input type="text" class="form-control @error('additional_note_name') is-invalid @enderror" name="additional_note_name" value="{{ old('additional_note_name') }}">
                    @error('additional_note_name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Catatan Tambahan</label>
                    <input type="text" class="form-control @error('additional_note_name_in') is-invalid @enderror" name="additional_note_name_in" value="{{ old('additional_note_name_in') }}">
                    @error('additional_note_name_in')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            
            <a href="{{ route('admin.packages-additional-note.list', ['packages' => $packages->packages_id]) }}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
</div>
@endsection