<?php

namespace App\Livewire;

use App\Models\Kelas;
use Livewire\Component;
use Livewire\WithPagination;

class KelasTable extends Component
{
    use WithPagination;
    //cara import
    // php artisan vendor:publish
    // pilih livewire:pagination
    // lalu ke Vendor/livewire/livewire/config/livewire.php 
    // ganti jadi 'pagination_theme' => 'bootstrap',


    // alternatif jika ga mau import
    // protected $paginationTheme = 'bootstrap';
    public $search = '';

    // listener auto update ketika ada data baru dari Kelas Create
    protected $listeners = ['kelasStore' => 'render'];


    public function render()
    {
        return view('livewire.kelas-table', [
            'kelas' => Kelas::where('kelas', 'like', '%' . $this->search . '%')
                ->orderBy('tingkat', 'asc')->paginate(5)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        session()->flash('success', 'Kelas berhasil dihapus!');
    }
}
