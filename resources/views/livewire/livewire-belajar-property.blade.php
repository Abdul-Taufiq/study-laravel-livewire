<div>
    {{-- The Master doesn't talk, he acts. --}}

    {{-- input basic --}}
    <div class="mb-3">
        <div class="mb-3">
            <div class="form-group">
                <label for="" class="question">Namaku :</label>
                <input class="form-control" type="text" wire:model.live="nama"> {{-- live ketik --}}
                <input class="form-control" type="text" wire:model.lazy="nama"> {{-- live akan dijalankan ketika out of focus --}}
                <input class="form-control" type="text" wire:model.live.debounce.1000ms="nama"> {{-- Delay live yang ditentukan --}}
            </div>
        </div>

        {{-- input Radio Button --}}
        <div class="mb-3 mt-3">
            <div class="form-group">
                <label for="" class="question">Jenis Kelaminku :</label>
                <input type="radio" name="jns_kelamin" value="Laki-laki" wire:model.live="jns_kelamin">Laki-laki
                <input type="radio" name="jns_kelamin" value="Perempuan" wire:model.live="jns_kelamin">Perempuan
            </div>
        </div>

        {{-- Text Area --}}
        <div class="mb-3 mt-3">
            <div class="form-group">
                <label for="" class="question">Alamatku :</label>
                <textarea class="form-control" name="" id="" cols="30" rows="2" wire:model.live="alamat"></textarea>
            </div>
        </div>

        {{-- Select Option --}}
        <div class="mb-3 mt-3">
            <div class="form-group">
                <label for="" class="question">Goldarku :</label>
                <select class="form-control" wire:model.live="goldar">
                    <option disabled value="pilih">Pilih Goldar</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>
        </div>

        {{-- Checkbox multi select --}}
        <div class="mb-3 mt-3">
            <div class="form-group">
                <label for="" class="question">Hobiku :</label> <br>
                <input type="checkbox" id="hobi1" name="hobi[]" value="Membaca" wire:model.live="hobi">
                <label for="hobi1"> Membaca</label><br>
                <input type="checkbox" id="hobi2" name="hobi[]" value="Main Game" wire:model.live="hobi">
                <label for="hobi2"> Main Game</label><br>
                <input type="checkbox" id="hobi3" name="hobi[]" value="Tidur" wire:model.live="hobi">
                <label for="hobi3"> Tidur</label>
            </div>
        </div>

        {{-- Checkbox Single - show password --}}
        <div class="mb-3 mt-3">
            <div class="form-group">
                <label for="" class="question">Password :</label>
                <input class="form-control" @if ($show_password == 'true') type="text" @else type="password" @endif
                    wire:model.live="password">
                <label for="show_password">Show Password</label>
                <input type="checkbox" name="show_password" id="show_password" value="true"
                    wire:model.live="show_password">
            </div>
        </div>

    </div>


    namaku adalah <b>{{ $nama }}</b>
    <br>
    Jenis Kelaminku adalah <b>{{ $jns_kelamin }}</b>
    <br>
    Goldar Aku adalah <b>{{ $goldar }}</b>
    <br>
    Hobiku adalah <b>{{ implode(', ', $hobi) }}</b>
    <br>
    Alamatku adalah <b>{{ $alamat }}</b>

</div>
