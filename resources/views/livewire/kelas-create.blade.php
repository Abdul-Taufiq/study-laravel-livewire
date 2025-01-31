<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div class="card">
        <div class="card-header"><b>Form</b></div>
        <div class="card-body">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Alert!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form wire:submit.prevent='store'>
                <div class="mb-2">
                    <div class="form-floating">
                        <select
                            class="form-select {{ empty($tingkat) ? 'is-invalid' : ($errors->has('tingkat') ? 'is-invalid' : 'is-valid') }} ""
                            id="tingkat" aria-label="x" wire:model.live="tingkat">
                            <option disabled selected value="">Open this select menu</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                            <option value="IX">IX</option>
                            <option value="111">111</option>
                        </select>
                        <label for="tingkat">Tingkat</label>

                        @error('tingkat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <div class="form-floating mb-3">
                        <input type="text"
                            class="form-control {{ empty($kelas) ? 'is-invalid' : ($errors->has('kelas') ? 'is-invalid' : 'is-valid') }}"
                            id="kelas" placeholder="" wire:model.live="kelas" autocomplete="off">
                        <label for="kelas">Kelas</label>

                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>

            Tingkat adalah <b>{{ $tingkat }}</b> <br>
            Kelas adalah <b>{{ $kelas }}</b>
        </div>
    </div>
</div>
