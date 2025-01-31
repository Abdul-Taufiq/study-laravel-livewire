<?php

use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/livewire-awal', function () {
    return view('livewire-awal');
})->name('awal');

Route::get('/belajar-property', function () {
    return view('belajar-property');
})->name('property');

Route::get('/belajar-action', function () {
    return view('belajar-action');
})->name('action');


Route::get('/belajar-crud', function () {
    return view('page.index');
})->name('belajar-crud');

Route::get('belajar-crud-show/{id}', [KelasController::class, 'showKelas'])->name('kelas.show');
Route::get('belajar-crud-show/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');


Route::get('send-wa', function () {
    $response = Http::withHeaders([
        'Authorization' => 'KfhqxfXHmDEcKPKsbeTq',

    ])->post('https://api.fonnte.com/send', [
        'target' => 'nomor WA',
        'message' => 'Hallo'
    ]);

    dd(json_decode($response, true));
});


Route::get('send-wa-wablas', function () {
    $response = Http::withHeaders([
        'Authorization' => 'xxx', // Token API
    ])->post('https://wablas.com/api/send-message', [
        'phone' => 'nomor WA', // Nomor tujuan
        'message' => 'Hallo', // Pesan yang akan dikirim
    ]);

    // Cetak response untuk debugging
    dd(json_decode($response, true));
});


// untuk akses gambar yang foldernya diluar public
Route::get('/resource-gambar/{filename}', [KelasController::class, 'resourceImage']);
