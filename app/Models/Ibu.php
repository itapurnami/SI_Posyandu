<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    use HasFactory;
    public $primaryKey = 'id_ibu';
    protected $fillable = [
        'nama_ibu','tempat_lahir_ibu','tgl_lahir_ibu','alamat','no_tlp'
    ];
}
