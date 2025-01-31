<?php

namespace App\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class KelasEdit extends Component
{
    public $id;
    public $kelas;
    public $tingkat;


    public function mount($kelases)
    {
        $this->id = $kelases->id;
        $this->kelas = $kelases->kelas;
        $this->tingkat = $kelases->tingkat;
    }

    public function render()
    {
        return view('livewire.kelas-edit');
    }

    public function update()
    {
        // alternatif validation
        $this->validate([
            'tingkat' => ['required', 'in:VII,VIII,IX'],
            'kelas' => ['required', 'in:A,B,C'],
        ], [
            'tingkat.required' => 'Tingkat kelas wajib diisi.',
            'tingkat.in' => 'Tingkat kelas harus salah satu dari: VII, VIII, IX.',
            'kelas.required' => 'Nama kelas wajib diisi.',
            'kelas.in' => 'Tingkat kelas harus salah satu dari: A, B, C.',
        ]);

        Kelas::where('id', $this->id)->update([
            'kelas' => $this->kelas,
            'tingkat' => $this->tingkat,
        ]);
        $this->reset(['kelas', 'tingkat']); //opsional

        session()->flash('success', 'Kelas berhasil diupdate!');
        redirect()->route('belajar-crud');
    }
}
