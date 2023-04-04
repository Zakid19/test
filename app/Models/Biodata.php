<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jenis_kelamin', 'tgl_lahir', 'tmpt_lahir', 'alamat', 'foto'];
}
