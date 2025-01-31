<?php

namespace App\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class KelasCreate extends Component
{
    public $kelas;
    public $tingkat = "";


    // alternatif
    protected $rules = [
        'tingkat' => ['required', 'in:VII,VIII,IX'],
        'kelas' => ['required', 'in:A,B,C'],
    ];
    protected $messages = [
        'tingkat.required' => 'Tingkat kelas wajib diisi.',
        'tingkat.in' => 'Tingkat kelas harus salah satu dari: VII, VIII, IX.',
        'kelas.required' => 'Nama kelas kelas wajib diisi.',
        'kelas.in' => 'Nama kelas harus salah satu dari: A, B, C.',
    ];


    public function updated($propertyName)
    {
        $this->kelas = strtoupper($this->kelas);
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        // alternatif validation
        // $this->validate([
        //     'tingkat' => ['required', 'in:VII,VIII,IX'],
        //     'kelas' => ['required', 'string', 'max:100'],
        // ], [
        //     'tingkat.required' => 'Tingkat kelas wajib diisi.',
        //     'tingkat.in' => 'Tingkat kelas harus salah satu dari: VII, VIII, IX.',
        //     'kelas.required' => 'Nama kelas wajib diisi.',
        // ]);

        $this->validate();

        Kelas::create([
            'kelas' => $this->kelas,
            'tingkat' => $this->tingkat,
        ]);
        $this->reset(['kelas', 'tingkat']);

        session()->flash('success', 'Kelas berhasil ditambahkan!');
        // redirect()->route('belajar-crud');

        $this->dispatch('kelasStore');
    }


    public function render()
    {
        return view('livewire.kelas-create');
    }
}
