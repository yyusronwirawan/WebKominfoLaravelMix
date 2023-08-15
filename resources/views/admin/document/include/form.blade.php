<div class="row">
    <div class="mb-3 col-md-12">
        <label for="name" class="form-label">Nama Dokumen <span class="text-danger"> &#42;</span></label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
            value="{{ isset($document) ? $document->name : old('name') }}" />
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="row">
        @isset($document)
            <div class="mb-3 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        @if ($document->file == null)
                            <label for="e-magazine" class="form-label">Dokumen Lama : </label>
                            <img src="https://via.placeholder.com/350?text=No+Image+Avaiable" alt="e-magazine"
                                class="rounded mb-2 mt-2" alt="cover" width="200" height="150"
                                style="object-fit: cover">
                        @else
                            <label for="e-magazine" class="form-label">Dokumen Lama :</label> <a
                                href="{{ url('storage/upload/document/' . $document->file) }}">{{ $document->name }}</a>
                        @endif
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="e-magazine" class="form-label">Dokumen Baru<span class="text-danger">
                                    &#42;</span> :</label>
                            <input class="form-control  @error('file') is-invalid @enderror" type="file"
                                name="file" />
                            @error('file')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="mb-3 col-md-12">
                <label for="file dokument" class="form-label">Dokumen Baru<span class="text-danger"> &#42;</span>
                    :</label>
                <input class="form-control  @error('file') is-invalid @enderror" type="file" name="file" />
                @error('file')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        @endisset

    </div>
