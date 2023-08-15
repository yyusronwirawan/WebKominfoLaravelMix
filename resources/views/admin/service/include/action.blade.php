<div class="flex">
    <a class="btn btn-warning btn-sm me-2" href="{{ route('admin.services.edit', $service->id) }}"><i
            class="bx bx-edit-alt me-1"></i>
        Edit</a>

    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" role="alert"
        alert-title="Hapus {{ $service->name }}" alert-text="Yakin ingin menghapusnya?">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm me-2 mt-2"><i class="bx bx-trash me-1"></i>
            Hapus</button>
    </form>
</div>
