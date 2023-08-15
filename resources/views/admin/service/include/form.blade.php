<div class="row">
    <div class="mb-3 col-md-6">
        <label for="name" class="form-label">Nama <span class="text-danger"> &#42;</span></label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
            value="{{ isset($service) ? $service->name : old('name') }}" />
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 col-md-6">
        <label for="url" class="form-label">URL <span class="text-danger"> &#42;</span></label>
        <input class="form-control @error('url') is-invalid @enderror" type="text" name="url"
            value="{{ isset($service) ? $service->url : old('url') }}" />
        @error('url')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 col-md-12">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" cols="20"
            rows="7">{{ isset($service) ? $service->description : old('description') }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    @isset($service)
        <div class="mb-3 col-md-12">
            <div class="row">
                <div class="col-md-3">
                    @if ($service->thumbnail == null)
                        <label for="thumbnail" class="form-label">Gambar Lama</label>
                        <img src="https://via.placeholder.com/350?text=No+Image+Avaiable" alt="Thumbnail"
                            class="rounded mb-2 mt-2" alt="Thumbnail" width="200" height="150"
                            style="object-fit: cover">
                    @else
                        <label for="thumbnail" class="form-label">Gambar Lama</label>
                        <img src="{{ asset('storage/upload/layanan/' . $service->thumbnail) }}" alt="Thumbnail"
                            class="rounded mb-2 mt-2" width="200" height="150" style="object-fit: cover">
                    @endif
                </div>
                <div class="col-md-9">
                    <div class="form-group ms-3">
                        <label for="thumbnail" class="form-label">Thumbnail</label>
                        <input class="form-control  @error('thumbnail') is-invalid @enderror" type="file"
                            name="thumbnail" />
                        @error('thumbnail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="mb-3 col-md-12">
            <label for="thumbnail" class="form-label">Thumbnail <span class="text-danger"> &#42;</span></label>
            <input class="form-control  @error('thumbnail') is-invalid @enderror" type="file" name="thumbnail" />
            @error('thumbnail')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    @endisset
</div>
