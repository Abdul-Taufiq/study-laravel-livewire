<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataDiri extends Model
{
    //
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_data_diri';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['nama', 'jns_kelamin', 'goldar', 'alamat'];
    protected $primaryKey = 'id';

    // Eager loading
    protected $with = ['kelas'];

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
