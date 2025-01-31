<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="card">
        <div class="card-header"><b>Edit</b></div>
        <div class="card-body">

            <form wire:submit.prevent='update'>
                <div class="mb-2">
                    <div class="form-floating">
                        <select class="form-select @error('tingkat') is-invalid @enderror" id="tingkat" aria-label="x"
                            wire:model="tingkat">
                            <option disabled selected value="">Open this select menu</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                            <option value="IX">IX</option>
                        </select>
                        <label for="tingkat">Tingkat</label>

                        @error('tingkat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas"
                            placeholder="" wire:model='kelas'>
                        <label for="kelas">Kelas</label>

                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
