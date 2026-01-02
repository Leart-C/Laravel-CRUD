<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    protected $fillable = ['name', 'location', 'description'];
    /** @use HasFactory<\Database\Factories\DojoFactory> */
    use HasFactory;

    // Define relationship to LaravelM 1:Dojo has many LaravelM
    public function laravelM()
    {
        return $this->hasMany(LaravelM::class);
    }
}
