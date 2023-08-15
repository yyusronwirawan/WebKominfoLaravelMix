<div class="row">
    <div class="mb-3 col-md-12">
        <label for="title" class="form-label">Judul</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
            value="{{ old('title', $profile->title) }}" />
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 col-md-12">
        <label for="body" class="form-label">Isi</label>
        <textarea id="body" name="body" class="form-control @error('body') is-invalid @enderror">{{ old('body', $profile->body) }}</textarea>
        @error('body')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
