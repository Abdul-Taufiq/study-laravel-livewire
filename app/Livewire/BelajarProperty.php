<?php

namespace App\Livewire;

use Livewire\Component;

class BelajarProperty extends Component
{
    public $nama = "Taufiq";
    public $alamat = "isi";
    public $jns_kelamin = "Belum ditentukan";
    public $goldar = "pilih";
    public $hobi = [];
    public $password;
    public $show_password = "false";


    public function render()
    {
        return view('livewire.livewire-belajar-property');
    }
}
