<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Balita extends Model
{
    use HasFactory;
    public $primaryKey = 'id_anak';
    protected $fillable = [
        'nama_anak', 'id_ibu', 'tempat_lahir_anak','tgl_lahir','alamat','foto','status'
    ];
    static function getBalita(){
        $return=DB::table('balitas')
        ->join('ibus','balitas.id_ibu','=','ibus.id_ibu');
        return $return;
    }
    
}
