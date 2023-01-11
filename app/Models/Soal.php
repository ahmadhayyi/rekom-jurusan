<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
