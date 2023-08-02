@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Form Package's
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('admin.packages.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Packages Name</label>
                        <input type="text" class="form-control @error('packages_name') is-invalid @enderror" name="packages_name" value="{{ old('packages_name') }}">
                        @error('packages_name')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Packages Duration</label>
                        <input type="text" class="form-control @error('packages_duration') is-invalid @enderror" name="packages_duration" value="{{ old('packages_duration') }}">
                        @error('packages_duration')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Minimun Order</label>
                        <input type="text" class="form-control @error('minimun_order') is-invalid @enderror" name="minimun_order" value="{{ old('minimun_order') }}">
                        @error('minimun_order')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">
                        @error('price')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}">
                        @error('description')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Paket</label>
                        <input type="text" class="form-control @error('packages_name_in') is-invalid @enderror" name="packages_name_in" value="{{ old('packages_name_in') }}">
                        @error('packages_name_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Durasi Paket</label>
                        <input type="text" class="form-control @error('packages_duration_in') is-invalid @enderror" name="packages_duration_in" value="{{ old('packages_duration_in') }}">
                        @error('packages_duration_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Minimal Order</label>
                        <input type="text" class="form-control @error('minimun_order_in') is-invalid @enderror" name="minimun_order_in" value="{{ old('minimun_order_in') }}">
                        @error('minimun_order_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control @error('price_in') is-invalid @enderror" name="price_in" value="{{ old('price_in') }}">
                        @error('price_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" class="form-control @error('description_in') is-invalid @enderror" name="description_in" value="{{ old('description_in') }}">
                        @error('description_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" readonly>
                    @error('slug')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">
                    @error('image')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            
            <a href="{{ route('admin.packages.index') }}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
</div>

 <!-- Your other meta tags, CSS, and scripts -->
 <script>
    document.addEventListener('DOMContentLoaded', function() {
        const packagesNameInput = document.querySelector('input[name="packages_name"]');
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