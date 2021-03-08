<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasiswa extends Model
{
    protected $table = "datasiswa";
    protected $primarykey = "id";
    protected $fillable = [
        'id' , 'pelapor' , 'nis' , 'nama', 'rombel', 'rayon', 'masalah'];
}
