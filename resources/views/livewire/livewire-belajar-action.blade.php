<div>
    {{-- In work, do what you enjoy. --}}

    {{-- menjalan live saat menggunakan tombol. tidak memerlukan pembaruan data secara langsung.  
        pengubah yang mengelompokkan pembaruan data dengan permintaan jaringan berikutnya --}}
    <div class="mb-3 mt-3">
        <div class="form-group">
            <label for="" class="question">Yang Kucari :</label> <br>
            <input type="text" wire:model.defer="search">
            <button wire:click="searchFunction">Search</button>
        </div>
    </div>

    Yang Kucari adalah <b>{{ $search }}</b>

    <br>
    <hr>

    {{-- counter --}}
    <div class="mb-3 mt-3">
        <label style="font-weight: bold;">Jumlah</label> <br>
        <input type="number" class="form-control" wire:model.live='counter'> <br>
        <button class="btn btn-primary" wire:click='ActionPlus'>+ tambah</button>
        @if ($counter < 1)
            <button class="btn btn-danger disabled" wire:click='ActionMinus'>- kurangi</button>
        @else
            <button class="btn btn-danger" wire:click='ActionMinus'>- kurangi</button>
        @endif
    </div>
</div>
