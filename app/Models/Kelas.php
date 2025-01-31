<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    //
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_kelas';
    protected $fillable = ['tingkat', 'kelas'];
    protected $dates = ['created_at', 'updated_at'];
    protected $primaryKey = 'id';


    public function datadiri(): HasMany
    {
        // karena id foreign key nya beda jadi harus di definisikan di sini jika tidak beda bisa di hilangkan 
        return $this->hasMany(DataDiri::class, 'kelas_id', 'id');

        // alternatif
        // return $this->hasMany(DataDiri::class, 'kelas_id');
    }
}
