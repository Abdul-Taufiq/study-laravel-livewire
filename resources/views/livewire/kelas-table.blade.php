<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mb-3">
        <input type="search" name="search" id="search" class="form-control" wire:model.live='search'
            placeholder="Cari ...">
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tingkat</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $items)
                {{-- @foreach ($kelas as $index => $items) --}} {{-- alternatif --}}
                <tr>
                    <td>{{ $loop->index + $kelas->firstItem() }}</td>
                    {{-- <td>{{ $kelas->firstItem() + $index }}</td> --}} {{-- alternatif --}}
                    <td>{{ $items->tingkat }}</td>
                    <td>{{ $items->kelas }}</td>
                    <td>
                        <a href="{{ route('kelas.show', $items->id) }}" class="badge bg-primary">Detail</a>
                        <a href="{{ route('kelas.edit', $items->id) }}" class="badge bg-warning">Edit</a>
                        <button wire:click='delete({{ $items->id }})' class="btn badge btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    Menampilkan {{ $kelas->firstItem() }} sampai {{ $kelas->lastItem() }} total dari {{ $kelas->total() }}
    {{ $kelas->links() }}

</div>
