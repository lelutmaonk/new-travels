@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Form Activities
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('admin.activities.update', ['activities' => $activities->activities_id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Activities Name</label>
                        <input type="text" class="form-control @error('activities_name') is-invalid @enderror" name="activities_name" value="{{ old('activities_name', $activities->activities_name) }}">
                        @error('activities_name')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        @error('description')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                        <input id="description" type="hidden" name="description" value="{{ old('description' , $activities->description) }}">
                        <trix-editor input="description"></trix-editor>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Aktivitas</label>
                        <input type="text" class="form-control @error('activities_name_in') is-invalid @enderror" name="activities_name_in" value="{{ old('activities_name_in', $activities->activities_name_in) }}">
                        @error('activities_name_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        @error('description_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                        <input id="description_in" type="hidden" name="description_in" value="{{ old('description_in', $activities->description_in) }}">
                        <trix-editor input="description_in"></trix-editor>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug', $activities->slug) }}" readonly>
                    @error('slug')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image', $activities->image) }}">
                    @error('image')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            
            <a href="{{ route('admin.activities.index') }}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
</div>

<!-- Your other meta tags, CSS, and scripts -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const packagesNameInput = document.querySelector('input[name="activities_name"]');
        const slugInput = document.querySelector('input[name="slug"]');

        packagesNameInput.addEventListener('input', function() {
            const slugValue = slugify(packagesNameInput.value);
            slugInput.value = slugValue;
        });

        function slugify(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim leading/trailing spaces
            str = str.toLowerCase();

            // Remove accents, swap ñ for n, etc.
            const from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
            const to = "aaaaeeeeiiiioooouuuunc------";
            for (let i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str
                .replace(/[^a-z0-9 -]/g, '') // Remove invalid characters
                .replace(/\s+/g, '-') // Collapse whitespace and replace by -
                .replace(/-+/g, '-'); // Collapse dashes

            return str;
        }
    });
</script>


@endsection