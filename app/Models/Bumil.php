<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bumil extends Model
{
    use HasFactory;
    public $primaryKey = 'id_bumil';
    protected $fillable = [
        'id_ibu', 'hamil_ke', 'tgl_bersalin','alamat', 'no_tlp_bumil'
    ];
}
