<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JualSampah extends Model
{
    use HasFactory;
    use softDeletes;

    protected $primaryKey = 'id';
    public $table = "jenis_sampah";

    protected $fillable = [
        'jenis_sampah','deskripsi_sampah','foto_sampah', 'harga_sampah'
    ];

    protected $hidden = [

    ];
}
