<?php

namespace App\Livewire;

use Livewire\Component;

class BelajarAction extends Component
{
    public $search;
    public $counter = 0;


    public function render()
    {
        return view('livewire.livewire-belajar-action');
    }

    public function searchFunction()
    {
        // Logika untuk pencarian atau proses lainnya dapat ditambahkan di sini 
        // Misalnya, memproses atau menyimpan nilai $nama 
        // Contoh: melakukan sesuatu dengan $nama // 
        $this->search = strtoupper($this->search); // Mengubah nilai nama menjadi huruf besar semua }
    }

    public function ActionPlus()
    {
        $this->counter++;
    }

    public function ActionMinus()
    {
        $this->counter--;
    }
}
